<?php

include __DIR__ . '/../env.php';

$showUrl = "/backend/profile/show.php";

$name = $_REQUEST['name'];
$title = $_REQUEST['title'];
$profileImage = $_FILES['profile'];


if ($profileImage['name']) {

    $location = '../storage/';

    if(!is_dir($location)){
        mkdir($location);
    }

    $profileImgName = $location . uniqid() . $profileImage['name'];

    if(move_uploaded_file($profileImage['tmp_name'], $profileImgName)){
        
        $query = "INSERT INTO home(name, title, image) VALUES ('$name','$title','$profileImgName')";

        $result = mysqli_query($conn,  $query);

        if($result){
          header("location: $showUrl");   
          exit;
        }

    }
}


?>