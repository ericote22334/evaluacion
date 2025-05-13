<?php
$a1;
$a2;
$a3;
$b1;
$b2;
$b3;
$c1;
$c2;
$c3;
$d1;
$d2;
$d3;
$e1;
$e2;
$e3;
$p1;
$p2;
$p3;
$p4;      
$p5;
$aprobados=0;
$desaprobados=0;
$promocionados=0;
if(isset($_GET["a1"])&& ($_GET["a2"])&&($_GET["a3"])&&($_GET["b1"])&& ($_GET["b2"])&&($_GET["b3"])&&($_GET["c1"])&& ($_GET["c2"])&&($_GET["c3"])&&($_GET["d1"])&& ($_GET["d2"])&&($_GET["d3"])&&($_GET["e1"])&& ($_GET["e2"])&&($_GET["e3"])){  
    $a1=$_GET["a1"];
    $a2=$_GET["a2"];
    $a3=$_GET["a3"];
    $b1=$_GET["b1"];
    $b2=$_GET["b2"];
    $b3=$_GET["b3"];
    $c1=$_GET["c1"];
    $c2=$_GET["c2"];
    $c3=$_GET["c3"];
    $d1=$_GET["d1"];
    $d2=$_GET["d2"];
    $d3=$_GET["d3"];
    $e1=$_GET["e1"];
    $e2=$_GET["e2"];
    $e3=$_GET["e3"];
    echo "<h2>Notas alumnos:</h2>";
    echo"alumno 1: n1= ".$a1." n2= ".$a2." n3=".$a3."<br>";
    echo"alumno 2: n1= ".$b1." n2= ".$b2." n3=".$b3."<br>";
    echo"alumno 3: n1= ".$c1." n2= ".$c2." n3=".$c3."<br>";
    echo"alumno 4: n1= ".$d1." n2= ".$d2." n3=".$d3."<br>";
    echo"alumno 5: n1= ".$e1." n2= ".$e2." n3=".$e3."<br>";

    $p1 = ($a1+$a2+$a2)/3;
    $p2 = ($b1+$b2+$b3)/3;
    $p3 = ($c1+$c2+$c3)/3;
    $p4 = ($d1+$d2+$d3)/3;
    $p5 = ($e1+$e2+$e3)/3;

    echo "<h2>Promedio alumnos:</h2>";
    echo"alumno 1: ". $p1."<br>";
    echo"alumno 2: ". $p2."<br>";
    echo"alumno 3: ". $p3."<br>";
    echo"alumno 4: ". $p4."<br>";
    echo"alumno 5: ". $p5."<br>";

    echo "<h2>Resultados:</h2>";
    if($p1>=7){
        echo "alumno 1: promociona"."<br>";
        $promocionados++;
    }else if($p1>=4){
        echo "alumno 1: aprueba"."<br>";
        $aprobados++;
    }else if($p1<4){
        echo "alumno 1: desaprobado"."<br>";
        $desaprobados++;
    }else{
        echo "es invalida"."<br>";
    }
    if($p2>=7){
        echo "alumno 2: promociona"."<br>";
         $promocionados++;
    }else if($p2>=4){
        echo "alumno 2: aprueba"."<br>";
         $aprobados++;
    }else if($p2<4){
        echo "alumno 2: desaprobado"."<br>";
         $desaprobados++;
    }else{
        echo "es invalida"."<br>";
    }
    if($p3>=7){
        echo "alumno 3: promociona"."<br>";
          $promocionados++;
    }else if($p3>=4){
        echo "alumno 3: aprueba"."<br>";
        $aprobados++;
    }else if($p3<4){
        echo "alumno 3: desaprobado"."<br>";
         $desaprobados++;
    }else{
        echo "es invalida"."<br>";
    }
    if($p4>=7){
        echo "alumno 4: promociona"."<br>";
          $promocionados++;
    }else if($p4>=4){
        echo "alumno 4: aprueba"."<br>";
         $aprobados++;
    }else if($p4<4){
        echo "alumno 4: desaprobado"."<br>";
          $desaprobados++;
    }else{
        echo "es invalida"."<br>";
    }
    if($p5>=7){
        echo "alumno 5: promociona"."<br>";
        $promocionados++;
    }else if($p5>=4){
        echo "alumno 5: aprueba"."<br>";
        $aprobados++;
    }else if($p5<4){
        echo "alumno 5: desaprobado"."<br>";
          $desaprobados++;
    }else{
        echo "es invalida"."<br>";
    }

    echo "<h2>Cantidades:</h2>";
    echo"alumnos promocionados: ".$promocionados."<br>";
    echo"alumnos aprobados: ".$aprobados."<br>";
    echo"alumnos desaprobados: ".$desaprobados."<br>";
}else{
    echo "<h2>copiar y pegar en la url lo siguiente</h2>"."<br>";
    echo "notas.php?a1=ingrese&a2=ingrese&a3=ingrese&b1=ingrese&b2=ingrese&b3=ingrese&c1=ingrese&c2=ingrese&c3=ingrese&d1=ingrese&d2=ingrese&d3=ingrese&e1=ingrese&e2=ingrese&e3=ingrese";
}
?>