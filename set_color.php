<?php
$color="blue";
setcookie("favorite_color",$color,time()+(86400*30));
echo "Favourite color cookie set";
?>