<?php
    error_reporting(0);
    include("loginChecking.php");

    //session_start();
	
    putenv("PATH=C:\Program Files (x86)\CodeBlocks\MinGW\bin");
	$CC="gcc";
	$out="a.exe";
	$code=$_POST["code"];
	$input= $_SESSION['test_case'];
	$test_case_output= $_SESSION['test_case_output'];
	$filename_code="main.c";
	$filename_in="input.txt";
	$filename_error="error.txt";
	$executable="a.exe";
	$command=$CC." -lm ".$filename_code;	
	$command_error=$command." 2>".$filename_error;


//$test_case_output = trim(preg_replace('/\s+/', ' ', $test_case_output));
	//if(trim($code)=="")
	//die("The code area is empty");
	
	$file_code=fopen($filename_code,"w+");
	fwrite($file_code,$code);
	fclose($file_code);
	$file_in=fopen($filename_in,"w+");
	fwrite($file_in,$input);
	fclose($file_in);
	exec("cacls  $executable /g everyone:f"); 
	exec("cacls  $filename_error /g everyone:f");	

	shell_exec($command_error);
	$error=file_get_contents($filename_error);

	if(trim($error)=="")
	{
		if(trim($input)=="")
		{
			$output=shell_exec($out);
		}
		else
		{
			$out=$out." < ".$filename_in;
			$output=shell_exec($out);
		}
		
		//echo preg_replace("/\r\n|\r|\n/", ' ', $output);
		//echo $output;
		//echo $test_case_output;
		//echo trim(preg_replace('/\s+/', ' ', trim($output)));
		
		//if(trim(preg_replace('/\s+/', ' ', trim($output))) == $test_case_output){
		if($output == $test_case_output)
		echo "Accepted"; 
		else{
			echo "Wrong Answer";}
	}
    else
        echo "Wrong Answer";

	exec("del $filename_code");
	exec("del *.o");
	exec("del *.txt");
	exec("del $executable");
?>
