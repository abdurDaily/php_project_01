
<?php
$name = $_REQUEST['name'];
$title = $_REQUEST['title'];
$profileImage = $_FILES['profile'];


if ($profileImage['name']) {
    $location = '../storage/';
    move_uploaded_file($profileImage['tmp_name'], $location . uniqid() . $profileImage['name']);
}


?>