<?php
require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


 function clean_input($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);

    return $input;

}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    $nome = clean_input($nome);
    $email = clean_input($email);
    $assunto = clean_input($assunto);
    $mensagem = clean_input($mensagem);

    $texto_msg = '<h3>E-mail <strong>Barbearia W.Tom</strong>' . '<br</h3>' .
    '<h4><strong>Nome:</strong> ' . $nome . '<br></h4>' .
    '<h4><strong>E-mail:</strong> ' . $email . '<br></h4>' .
    '<h4><strong>assunto:</strong> ' . $assunto . '<br></h4>' .
    '<h4><strong>Mensagem:</strong> ' . $mensagem . '<br></h4>';

	$mail = new PHPMailer(true); 
	$mail->CharSet = "UTF-8";



/* try { */
	
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'washington.wtom@gmail.com';
	$mail->Password = 'w.tom86938094';
	$mail->Port = 587;

	$mail->setFrom($email, $nome);
	$mail->addAddress('washington.wtom@gmail.com');


	$mail->isHTML(true);
	$mail->Subject = 'Dúvida';
    $mail->Body = $texto_msg;
    
    
    


	if($mail->send()) {
		echo '<script>
        $(document).ready(function() {
            swal("Sucesso", "Sua mensagem foi enviada", "success");
        });
    </script>';
	}
/* } */ /* catch (Exception $e) {
	echo "A mensagem não pôde ser enviada";
} */
 }
?>