<?php
    include 'functions.php';
    $imageDirectory = 'images/';
    $imageOrder = 'desc';
    $images = getImages($imageDirectory, $imageOrder); // 'asc' or 'desc'
    include 'gallery_content.php';

?>
