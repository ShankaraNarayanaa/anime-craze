<?php
	$email = $_POST['email'];
	$comment = $_POST['text'];
	$rating = $_POST['rating'];
	$filename="feedbacks.txt";
        $feedback=fopen($filename,"a+");
	$data=fread($feedback,filesize($filename));
	if(strpos($data,$email))
	{
	echo "<h1><center>Feedback already submitted</center></h1>";
	}
	else
	{
	fwrite($feedback,"Email   : $email \n");
	fwrite($feedback,"Rating  : $rating \n");
	fwrite($feedback,"Comments: $comment \n");
	echo "<h1><center>Thanks for your feedback</center></h1>\n";
	}
	fclose($feedback);	
?>