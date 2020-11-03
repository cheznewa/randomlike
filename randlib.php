<?php
require("config.php");
if (!file_exists($randomsourcecount))
{
file_put_contents($randomsourcecount,0);
}
$raw = file_get_contents($randomsource);
function srcrand($min,$max)
{
global $raw,$randomsourcecount;
$out = 0;
$pos = intval(file_get_contents($randomsourcecount));
$out = (pow(256,3)*ord($raw[$pos+3]))+(pow(256,2)*ord($raw[$pos+2]))+(pow(256,1)*ord($raw[$pos+1]))+(pow(256,0)*ord($raw[$pos]));
file_put_contents($randomsourcecount,$pos + 4);
return intval((($out/pow(256,4))*($max-$min))+$min);
}
function srcrand8bit()
{
global $raw,$randomsourcecount;
$pos = intval(file_get_contents($randomsourcecount));
$out = ord($raw[$pos]);
file_put_contents($randomsourcecount,$pos + 1);
return $out;
}
function srcranduniform($min,$max)
{
global $raw,$randomsourcecount;
$out = 0;
$pos = intval(file_get_contents($randomsourcecount));
$out = (pow(256,3)*ord($raw[$pos+3]))+(pow(256,2)*ord($raw[$pos+2]))+(pow(256,1)*ord($raw[$pos+1]))+(pow(256,0)*ord($raw[$pos]));
file_put_contents($randomsourcecount,$pos + 4);
return (($out/pow(256,4))*($max-$min))+$min;
}
