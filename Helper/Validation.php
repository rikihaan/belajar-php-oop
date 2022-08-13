<?php
function validationLoginRequest(LoginRequest $request){
    // cek jika username belum di set
    if (!isset($request->username)){
        // lakukan Exception
        throw new ValidationException("Userneme is null");
    }else if (!isset($request->password)){
        // lakukan Exception
        throw new ValidationException("Password is null");
    }else if (trim($request->username)==""){
        // lakukan Exception
        throw new Exception("Userneme is empty");
    }else if (trim($request->password)==""){
        // lakukan Exception
        throw new Exception("Password is empty");
    }
}