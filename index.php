<?php
require 'vendor/autoload.php';
use Intervention\Image\ImageManager;

$manager = new ImageManager(['driver' => 'imagick']);

$image = $manager->make(('C:/OSPanel/domains/lesson13/spu111.jpg'))->resize(300, 200)->save('C:/OSPanel/domains/lesson13/mini.jpg');


?>