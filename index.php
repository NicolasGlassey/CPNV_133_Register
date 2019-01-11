<?php
/**
 * Sources  : cours 151 - pascal.benzonana@cpnv.ch
 * Author   : nicolas.glassey@cpnv.ch
 * Project  : Register
 * Created  : 31.12.2018 - 22:14
 *
 * Last update :    [01.12.2018 author]
 *                  [add $logName in function setFullPath]
 * Git source  :    [link]
 */

require 'controler/controler.php';

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'register' :
            registerProcess($_POST);
            break;
        default :
            displayRegisterForm();
    }
} else {
    displayRegisterForm();
}