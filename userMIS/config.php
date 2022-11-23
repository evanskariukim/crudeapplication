<?php
$conn= new mysqli('localhost','root','','userdatabase');
if($conn){
	//echo 'connected';
}
else
{
	echo 'not connected';
}


?>