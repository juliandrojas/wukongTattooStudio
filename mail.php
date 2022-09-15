<?php 
    //Verificamos si se ha pulsado el botón de cotizar
    if(isset($_POST['cotizar'])){
        //Rescatamos los datos del formulario
        $nombreCliente = $_POST['nombreCliente'];
        $correoCliente = $_POST['correoCliente'];
        $numeroCelular = $_POST['numeroCelular'];
        $procedimiento = $_POST['procedimiento'];
        //Imprimimos los datos del formulario
        echo $nombreCliente;
        echo $correoCliente;
        echo $numeroCelular;
        echo $procedimiento;
        
    }
?>