<?php
$a1=array();
$a2=array();
$a3=array();
$a4=array();
$a5=array();
$p1;
$p2;
$p3;
$p4;      
$p5;
if(isset($_GET["a1"])&& ($_GET["a2"])&&($_GET["a3"])&&($_GET["a4"])&&($_GET["a5"])){
    $a1=$_GET["a1"];
    $a2=$_GET["a2"];
    $a3=$_GET["a3"];
    $a4=$_GET["a4"];
    $a5=$_GET["a5"];

echo"notas alumno 1: ". $a1."<br>";
echo"notas alumno 2: ". $a2."<br>";
echo"notas alumno 3: ". $a3."<br>";
echo"notas alumno 4: ". $a4."<br>";
echo"notas alumno 5: ". $a5."<br>";

$p1 = ($a1[0]+$a1[1]+$a1[2])/3;
$p2 = ($a2[0]+$a2[1]+$a2[2])/3;
$p3 = ($a3[0]+$a3[1]+$a3[2])/3;
$p4 = ($a4[0]+$a4[1]+$a4[2])/3;
$p5 = ($a5[0]+$a5[1]+$a5[2])/3;

echo"promedio alumno 1: ". $p1."<br>";
echo"promedio alumno 2: ". $p2."<br>";
echo"promedio alumno 3: ". $p3."<br>";
echo"promedio alumno 4: ". $p4."<br>";
echo"promedio alumno 5: ". $p5."<br>";
}
?>