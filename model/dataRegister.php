<?php
/**
 * Author   : nicolas.glassey@cpnv.ch
 * Project  : 133
 * Created  : 31.12.2018 - 10:35
 *
 * Last update :    [01.12.2018 author]
 *                  [add $logName in function setFullPath]
 * Git source  :    [link]
 */

require "fileConnector.php";

//region Global variables
$newRegister;
//endregion Global variables

function saveRegister($arrayInputUserForm)
{
    $newRegisterToWrite = extractRegister($arrayInputUserForm);
    writeRegisterInJSON($newRegisterToWrite);
}

function extractRegister($arrayInputUserForm)
{
    $pseudo = $arrayInputUserForm['inputPseudo'];
    $userName = $arrayInputUserForm['inputUserName'];
    $emailAddress = $arrayInputUserForm['inputEmailAddress'];
    $phoneNumber = $arrayInputUserForm['inputPhoneNumber'];
    $newsLetter = $arrayInputUserForm['inputNewsLetter'];

    $newRegisterTemp = array($pseudo, $userName, $emailAddress, $phoneNumber, $newsLetter);
    return $newRegisterTemp;
}





