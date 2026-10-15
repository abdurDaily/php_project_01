<?php ob_start(); ?>



<h1>about page</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, officia?</p>


<?php
$content  = ob_get_clean();
include __DIR__ . '/frontend/layout.php';
?>