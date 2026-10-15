<?php ob_start();?>

<h1>index page</h1>


<?php 
    $content = ob_get_clean();
    include __DIR__ . '/frontend/layout.php'; 
?>