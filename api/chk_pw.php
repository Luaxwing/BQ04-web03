<?php
include_once 'db.php';

$db=new DB($_POST['table']);
$table=$_POST['table'];
unset($_POST['table']);
$chk=$db->count($_POST);


if($chk){
    echo $chk;
    $_SESSION[$table]=$_POST['acc'];
}else{
    echo $chk;
}