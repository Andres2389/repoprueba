<?php
if(isset($_POST["calcular"])){
    $nota1 = $_POST['n1'];
    $nota2 = $_POST['n2'];
    $nota3= $_POST['n3'];

    if($nota1<0 && $nota1>50){
        echo"el valor de nota1 es incorreto";
    }else if ($nota2<0 ||$nota2>50){
        echo "el valor de nota es incorrecto no aceptam notas mayores a 50";
    }else if ($nota3< 0|| $nota3> 50){
        echo "el valor de la nota 3 es incorrecto por  que el valor maximo es 50";
}else {
    $promedio=($nota1+$nota2+$nota3)/3;
    echo" su promedio es :".$promedio."<br>";
    if($promedio>30){
        echo"¡¡felicitaciones!! ganastes";
    }else{
        echo "puedes seguir mejorando .... perdio";
    }

}
}
?>