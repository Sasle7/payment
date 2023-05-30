<?php
if(!empty($_POST["sender_email"]) && !empty($_POST["reciver_email"]) && !empty($_POST["payment_code"]) && !empty($_POST["total_amount"]) && !empty($_POST["date"]) && isset($_POST["tax"]) && !empty($_POST["status"]) ){

$myarrayy = $_POST ;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"http://spaceremit.com/api/");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($myarrayy));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec($ch);
curl_close ($ch);

if ($server_output == "VALID_PAYMENT") {

//do some thing ,this is real payment
echo "OK ";


}else {
//payment invalid
}

} ?>