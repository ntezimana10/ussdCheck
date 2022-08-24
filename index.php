<?php
//reads the variables sent via POST from Afrcicas Talking
$sessionId=$_POST["sessionId"];
$serviceCode=$_POST["serviceCode"];
$phoneNumber=$_POST["phoneNumber"];
$text=$_POST["text"];
if($text==""){
//this is the first request> note how we start the response with CONN
$response= "CON what would you want to check \n";
$response.= "1. My Account NO \n";
$response.= "2. My Account balance";
}
else if($text=="1"){
    //business logic for the first level response
    $response= "CON choose account information you want to view \n";
$response.= "1. My Account NO \n";
$response.= "2. My Account balance";
}
else if($text=="2"){
    //business logic for the first level response
    //this is a terminal request. note how to start with END
    $response="END your fone number is".$phoneNumber;
}
else if($text=="1*1"){
    //this is a second level response where the user selected 1 in the first instance
    $accountNumber="acc000111";
    //this is the terminal request. note how we start with END
    $response="END your account number is".$accountNumber; 
}
else if($text=="1*2"){
// this is the second level response where the user selected 1 in the first instance
$balance="rwf 50000";

//this is the terminal request. note how we start with END
$response="END your balance is".$balance;
}
//echo the response to API. the response depends on the statment that is fulfilled in each instance
header('Content-type; text/plain');
echo $response;
?>