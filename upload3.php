<?php
if((($_FILE["file"]["type"]=="image/gif")
||($_FILE["file"]["type"]=="image/jpeg")
||($_FILE["file"]["type"]=="image/pjpeg"))
&&($_FILE["file"]["size"]<200000))
{
	if($_FILE["file"]["error"]>0)
	{
		echo "Return COde:".$_FILE["file"]["error"]."<br/>";
	}
	else {
		echo"Upload:".$_FILE["file"]["name"]."<br/>";
		echo"TYPE:".$_FILE["file"]["type"]."<br/>";
		echo"Size:".($_FILE["file"]["size"]/1024)."Kb<br/>";
		echo"Temp file:".$_FILE["file"]["tmp_name"]."<br/>";
		if(file_exists("Upload/".$_FILE["file"]["name"]))
		{
			echo $_FILE["file"]["name"]."already exists";
		}
		else {
			move_uploaded_file($_FILE["file"]["tmp_name"],"Upload/". $_FILE["file"]["name"]);
			echo "Stored in:"."Upload/".$_FILE["file"]["name"];
				
			
		}
	}
	
}
else {
	echo "invali File";
}

?>