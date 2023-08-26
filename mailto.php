<?php
 

$name = $_POST['name'];
$email= $_POST['email'];
$number= $_POST['number'];

$selected_checkbox = $_POST['days'];

if(empty($selected_checkbox)) {
    echo("kérlek, válassz legalább egy napot!");
  } else {
    $preferences = '';
  
    foreach($selected_checkbox as $value){
      $preferences .= $value . PHP_EOL;
    }
  }

$to = "info@crossfitmiskolc.com";
$subject = "Próbalecke jelentkezés";
$txt ="Név = ". $name . "\r\n  Email = " . $email . "\r\n Telefonszám =" . $number . 
"\r\n Alkalmas napok =" . $preferences; 
$headers = "From: noreply@crossfitmiskolc.hu";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>