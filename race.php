<?php
require("randlib.php");
$pist = $_GET["pist"];
$len = $_GET["len"];
echo "Votre Resultat De La Course A Ete Generer ::::::<br/>";
for($i = 0;$i<$pist;$i++)
{
$e = $i + 1;
echo "piste ".$e." :::: ";
for($l = 0;$l<$len;$l++)
{
$g[$i] = $g[$i] + srcrand(5,15);
echo $g[$i];echo ", ";
}echo "<br/>";}
echo "Le Gagnant A Ete A :::: ".max($g);
echo "<br/><a href=''>Relancer</a>";