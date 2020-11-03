<?php
require("randlib.php");
// Download At ::::::::: https://ia600706.us.archive.org/7/items/Youtube_Video_IDs_CF_2018-12-01/all_ids.txt
$list = file_get_contents("all_ids.txt");
$listarray = explode("\n",$list);
$t = srcrand(0,count($listarray));
$video = $listarray[$t];
echo "Votre Vidéo YouTube à Ete Générer :::::<br/>";
echo "<iframe width='640' height='480' src='https://www.youtube.com/embed/".$video."' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
echo "<br/><a href=''>Relancer</a>";
