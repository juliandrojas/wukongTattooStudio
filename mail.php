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
        //Usamos PHPMAILER
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;
        //Añadimos los archivos de PHPMailer
        require 'PHPMailer-master/PHPMailer-master/src/Exception.php';
        require 'PHPMailer-master/PHPMailer-master/src/OAuth.php';
        require 'PHPMailer-master/PHPMailer-master/src/OAuthTokenProvider.php';
        require 'PHPMailer-master/PHPMailer-master/src/PHPMailer.php';
        require 'PHPMailer-master/PHPMailer-master/src/POP3.php';
        require 'PHPMailer-master/PHPMailer-master/src/SMTP.php';
        //Creamos una instancia de la clase PHPMailer
        //Entre paréntesis escribimos "true" para trabajar excepciones
        $mailer = new PHPMailer(true);


    }
?>