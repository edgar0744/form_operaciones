<?php
if (isset($_POST['num1'], $_POST['num2'], $_POST['opcion'])) {

    $val1 = $_POST['num1'];
    $val2 = $_POST['num2'];
    $opcion = $_POST['opcion'];
    $resultado= 0.5;

    function sumar($val1,$val2){
        return $val1 + $val2;
    }
    function restar($val1,$val2){
        return $val1 - $val2;
    }
    function multiplicar($val1,$val2){
        return $val1 * $val2;
    }
    function dividir($val1,$val2){
        return $val1 / $val2;
    }
    
    echo "<br><br><center>";
    
    switch($opcion){
        case 1:
            $resultado=sumar($val1,$val2);
            echo "el Resultado es: $resultado";
            break;
        case 2:
            $resultado=restar($val1,$val2);
            echo "el Resultado es: $resultado";
            break;
        case 3:
            $resultado=multiplicar($val1,$val2);
            echo "el Resultado es: $resultado";
            break;
        case 4:
            if($val1==0 || $val2==0){
                echo "error: No es posible dividir entre 0.";
            }
            else{
                $resultado=dividir($val1,$val2);
                echo "el Resultado es: $resultado";
            }
            break;
        default:
            echo "Revisa que hayas elegido la operacion correcta :(";
            break;
    }
    echo "<br><br><form action='index.html'>";
    echo "<button type=submit>Volver</button>";
    echo "</form>";
} else {
    echo "Faltan datos en el formulario.";
}
?>