<?php


function sendMessage(string $reciever, string $message){
    return "sent a message to:".$reciever;

}

function recieveMessage($sender, string $message ){
    return "recieved a Message from: ".$sender;
}