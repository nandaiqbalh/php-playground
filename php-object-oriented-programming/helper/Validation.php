<?php

function validationLoginRequest(LoginRequest $loginRequest)
{
    if (!isset($loginRequest->username)) {
        throw new ValidationException("Username is null!");
    } elseif (!isset($loginRequest->password)) {
        throw new ValidationException("Password is null!");
    } elseif ($loginRequest->username == "") {
        throw new Exception("Username is blank!");
    } elseif ($loginRequest->password) {
        throw new Exception("Password is blank");
    }
}
