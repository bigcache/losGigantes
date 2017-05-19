<?php
    define("TITLE", "Contacto | Los Gigantes de la Pizza");
    include('includes/header.php');
?>
<div id="contact">
    <hr>
    <h1>Contactanos!</h1>

    <?php
    //check if has header injection
    function has_head_ink($str){
        return preg_match("/[\r\n]/", $str);
    }


    if (isset ($_POST['name'])){
        $name  = trim($_POST['name']);
        $email = trim($_POST['email']);
        $msg   = $_POST['message'];

        //check to see if name of email has header inj
        if (has_head_ink($name) || has_head_ink($email)) {
            die();// if true kill the script
        }
        if (!$name || !$email || !$msg) {
            echo '<h5 class="error">Error: Todos los campos son requeridos.</h5><a href="contact.php" class="button block">Volver a intentar</a>';
            exit();
        }

        //recipient
        $to="bigcache@hotmail.com";
        //subject
        $subject="$name te envio un mensaje via contactenos";
        //message
        $message  = "Nombre: $name \r\n";
        $message .= "Email: $email \r\n";
        $message .= "Mensaje: \r\n$msg" ;

        //subscribe or not
        if (isset($_POST['suscribe']) && $_POST['suscribe'] == 'Suscribe') {
            $message.= "\r\n\r\nAñadir $email a la lista de subscriptores.";
        }
        //make mail nice
        $message= wordwrap($message,72);
        //set mail headers
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
        $headers .= "From: $name <$email>\r\n";
        $headers .= "X-Priority: 1\r\n";
        $headers .= "X-MSmail-Priority: High\r\n\r\n";

        //send mail
        mail ($to, $subject, $message, $headers);

    ?>
     <h5>Gracias por contactarnos</h5>
     <p>te responderemos a la brevedad.</p>
     <a href="index.php" class="button block">&laquo;Volver a Inicio</a>

     <?php } else {
    ?>
    <hr>
    <form method = "post" action="" id="contact-form">

        <label for= "name">Tu Nombre</label>
        <input type="text" id="name" name="name">

        <label for= "email">Tu Email</label>
        <input type="email" id="email" name="email">

        <label for= "email">Tu Email</label>
        <textarea id="message" name="message"></textarea>

        <input type="checkbox" id="subscribe" name="subscribe" value="subscribe"></textarea>
        <label for= "subscribe">Recibir promociones</label>

        <input type="submit" class="button next" name="contact_submit" value="Enviar">

    </form>
   <?php }
    ?>
    <hr>

</div><!-- contact-->

<?php
    include('includes/footer.php');
?>
