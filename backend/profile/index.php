<?php ob_start();?>

<h1 class="mt-5"> Home page CRUD </h1>

<form class="card shadow p-5 " action="../controller/profilecontroller.php" method="POST" enctype="multipart/form-data">

    <input class="form-control mb-2 p-2" type="text" placeholder="name" name="name"> 
    <input class="form-control mb-2 p-2" type="text" placeholder="title" name="title"> 
    <input class="form-control mb-2 p-2" type="file"  name="profile"> 
    <button type="submit" class="btn btn-primary w-25 mt-2">submit</button>

</form>


<?php 
    $content = ob_get_clean();
    include __DIR__ . '/../../frontend/layout.php'; 
?>