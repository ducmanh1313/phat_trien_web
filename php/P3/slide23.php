<?php
function display_img_list($imageList)
{
    echo "VŨ Đức Mạnh <br>";
    foreach ($imageList as $item) {
        echo "<img src = 'images/$item' width =150px height=150px alt='$item'>";
    }
}
