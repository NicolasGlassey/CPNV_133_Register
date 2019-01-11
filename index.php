<?php
/**
 * Author   : cours 151 - pascal.benzonana@cpnv.ch
 * Project  : Register
 * Created  : 31.12.2018 - 22:14
 *
 * Last update :    11.01.2018 nicolas.glassey@cpnv.ch
 *                  updated for 133
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