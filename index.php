<?php

require __DIR__ ."/libs_ext/autoload.php";


use notification\email;




$novoemail =  new email;

$pre = "<pre>";
$pre1 = "</pre>";

//var_dump($pre, $email, $pre1);

//var_dump($novoemail);

$novoemail->sendEmail("assunto de teste", "<p>ola mundo</p>", "renato-mantova@outlook.com","renato","renato-mantova@outlook.com", "renato");
var_dump($pre,$novoemail,$pre1);