<?php
$newfile=$_POST['file_name'];
$myfile = fopen('files/'.date("h-i-s").$newfile.'.srt', "w") or die("Unable to open file!");
$txt = $_POST['shower'];
fwrite($myfile, $txt);
fclose($myfile);	

echo "<a href='files/".date("h-i-s");
echo $newfile;
echo ".srt' download>Click here to download Subs</a>";
?>