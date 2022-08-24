
<?php

$sessionId=$_POST["sessionId"];
$serviceCode=$_POST["serviceCode"];
$phoneNumber=$_POST["phoneNumber"];
$text=$_POST["text"];
if($text==""){

$response= "CON what would you want to check \n";
    echo "<br>";
$response.= "1. My Account NO \n";
    echo "<br>";
$response.= "2. My Account balance";
}
else if($text=="1"){
    
    $response= "CON choose account information you want to view \n";
$response.= "1. My Account NO \n";
$response.= "2. My Account balance";
}
else if($text=="2"){
    
    $response="END your fone number is".$phoneNumber;
}
else if($text=="1*1"){
    
    $accountNumber="acc000111";
    
    $response="END your account number is".$accountNumber; 
}
else if($text=="1*2"){

$balance="rwf 50000";


$response="END your balance is".$balance;
    
}
 echo $response;
echo "<br>";
?>
