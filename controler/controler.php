<?php
/**
 * Author   : nicolas.glassey@cpnv.ch
 * Project  : Register
 * Created  : 31.12.2018 - 22:15
 *
 * Last update :    [01.12.2018 author]
 *                  [add $logName in function setFullPath]
 * Git source  :    [link]
 */

function displayRegisterForm()
{
    require "view/formRegister.php";
}

function registerProcess($arrayOfUsersInput)
{
    foreach ($arrayOfUsersInput as $userInput)
    {
        echo $userInput . '<br>';
    }
}