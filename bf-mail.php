<?php
$post = (!empty($_POST)) ? true : false;
if($post) {
    $name = htmlspecialchars(trim($_POST['bf_name']));
	$tel = htmlspecialchars(trim($_POST["bf_tel"]));
	//$email = htmlspecialchars(trim($_POST['bf_email']));
	$message = htmlspecialchars(trim($_POST['bf_message']));
	$subject = "Новая заявка клиента";
	$sender = "no-reply@vidzhio.palladiumlab.site";
	$error = '';
	if(!$name) {$error .= 'Укажите свое имя. ';}
	if(!$tel) {$error .= 'Укажите телефон. ';}
	//if(!$email) {$error .= 'Укажите корректный email. ';}
	if(!$message) {$error .= 'Введите сообщение. ';}
	if(!$error) {
		$address = "dusmatov9999@gmail.com";
		//$address = get_option('admin_email');
		$mes = "Имя: ".$name."\n\nТелефон: " .$tel."\n\nСообщение: ".$message."\n\n";
		$send = mail ($address,$subject,$mes,"Content-type:text/plain; charset = UTF-8\r\nReply-To:$email\r\nFrom:$sender <contact>");
		if($send) {echo 'OK';}
	}
	else {echo '<div class="err alert alert-danger">'.$error.'</div>';}
}
?>