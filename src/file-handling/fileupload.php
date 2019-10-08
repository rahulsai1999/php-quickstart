<?php
if($_FILES["file"]["error"]>0)
{
    echo "Error: " . $_FILES["file"]["error"] . "<br/>";  
}
else if(($_FILES["file"]["size"]/(1024))>5)
{
    echo "Error: File cannot be greater than 5MB";
}
else if($_FILES["file"]["type"]!="text/plain")
{
    //validating the type of file
    echo "Error: File not valid";
}
else
{
    echo "Uploaded file name: " . $_FILES["file"]["name"] . "<br/>";
    echo "Uploaded file type: " . $_FILES["file"]["type"] . "<br/>";
    echo "Uploaded file size: " . ($_FILES["file"]["size"]/1024) . "<br/>";
    echo "Uploaded file location: " . $_FILES["file"]["tmp_name"] . "<br/>";
}
?>