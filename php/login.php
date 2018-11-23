<?php
	$error = false;
	if(isset($_POST["login"])){
		$email = $_POST["email"];
		$password = $_POST["password"];
		$sucesso = FALSE;
		$xml = simplexml_load_file("../xml/usersfolder/usersfile.xml");

		foreach ($xml->user as $user) {
			if ($password == $user->password && $email == $user->email){
				$sucesso == TRUE;
				session_start();
				$_SESSION["email"] = $email;
				header("Location: ../pag/initialpag.html");
			}
		}
	}
print "<script> alert('Login ou senha incorretos.'); window.history.go(-1); </SCRIPT>\n";


		
?>
