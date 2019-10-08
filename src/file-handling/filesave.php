<?php
if ($_FILES["file"]["type"] == "application/pdf" and $_FILES["file"]["size"] > 1000) {
    if ($_FILES['file']["error"] > 0) {
        echo $_FILES["file"]["error"];
    } else {
        if (file_exists("./uploads/" . $_FILES["file"]["name"])) {
            echo $_FILES["file"]["name"] . "already exists";
        } else {
            move_uploaded_file($_FILES["file"]["tmp-name"], "./uploads/" . $_FILES["file"]["name"]);
            echo "File Saved";
        }
    }
} else {
    echo "Invalid File";
}
?>

<!-- types -->
<!-- 'image/gif', 'image/jpeg', 'image/png',text/plain 
  'application/pdf',
  'audio/mpeg', 'audio/mpeg3', 'audio/x-mpeg', 'audio/x-mpeg-3' -->