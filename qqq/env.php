<?php
//điều chỉnh kết nối db ở đây
const DBNAME = "duan1";
const DBUSER = "root";
const DBPASS = "";
const DBCHARSET = "utf8";
const DBHOST = "127.0.0.1";

const BASE_URL = "http://localhost/DUAN/qqq/";
function route($name){
    return BASE_URL.$name;
}
function redirect($key,$msg,$route){
    $_SESSION[$key] = $msg;
    switch ($key) {
        case 'success':
            unset($_SESSION['errors']);
        break;
        case 'errors':
            unset($_SESSION['success']);
            break;
    }
    header('location:'.BASE_URL.$route."?msg=".$key);
}