<?php
require_once "Exception/ValidationException.php";
require_once "data/loginReques.php";
require_once "Helper/Validation.php";

$loginRequet = new LoginRequest();
// $loginRequet->password="aSEP";
// $loginRequet->username="DADANG";

// akses helper panggin function validation login request
try{

    validationLoginRequest($loginRequet);
    echo "Valid".PHP_EOL;
}catch(ValidationException $validation){
    echo "Error ValidatinException : {$validation->getMessage()}".PHP_EOL;
    // Menambahkan debug Exception
        // array
        var_dump( $validation->getTrace());
        // string 
        echo $validation->getTraceAsString;
}
catch(Exception $validation){
    echo "Error Exception PHP : {$validation->getMessage()}".PHP_EOL;
}finally{
    echo "Error gak error ini akn di eksekusi".PHP_EOL;
}

