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
        //Variable de donde se va a enviar el correo electrónico
        $correoPersonal = "juliandra140201@gmail.com";
        //Variable header
        $header = "DE: " . $correoPersonal " \r\n";
        $header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
        $header .= "Mime-Version: 1.0 \r\n";
        $header .= "Content-Type: text/plain";
        
        $mensaje = "Este mensaje fue enviado por: ". $correoPersonal . "\r\n";
        $mensaje .= "Detalles de la cotización:  \r\n";
        $mensaje .= "Nombre del cliente: ". $nombreCliente . "\r\n";
        $mensaje .= "Correo del cliente: ". $correoCliente . "\r\n";
        $mensaje .= "Número de celular: ". $numeroCelular . "\r\n";
        $mensaje .= "Procedimiento a realizar: ". $procedimiento . "\r\n";

        $para = $correoCliente;
        $asunto = "Detalles cotización";
        mail($para, $asunto, utf8_decode($mensaje), $header);
        header("Location: index.php");
        
    }
?>