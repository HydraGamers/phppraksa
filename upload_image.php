<?php
include_once './session.php';
include_once './database.php';
$target_dir = "images/users/";
$time = microtime(true);

$datetime = new DateTime();
$datetime->setTimestamp($time);
$format = $datetime->format('YmdHis').rand(1000,9999);

$target_file = $target_dir . $format . basename($_FILES["fileupload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submitfile"])) {
    $check = getimagesize($_FILES["fileupload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileupload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo '<script language="javascript">';
	echo 'alert("Only jpg, png, jpeg or gif files allowed!")';
	echo '</script>';
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileupload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileupload"]["name"]). " has been uploaded.";
		$query = "UPDATE users SET avatar='$target_file' WHERE id=$_SESSION[user_id]";
		mysqli_query($link, $query);
		$_SESSION['avatar'] = $target_file;
		header("Location: editprofile.php");
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
header("Location: editprofile.php");
sleep(1);
