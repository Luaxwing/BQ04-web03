<?php include_once 'db.php';

// $_POST['regdate']=date("Y-m-d");
// $Mem->save($_POST);
// 原code-(見save_mem.php)




if(!isset($_POST['id'])){
    // 註冊日期++(reg.php)
    $_POST['regdate']=date("Y-m-d");
}

// 新增or編輯(兩者該行皆相同，因此合併)
$Mem->save($_POST);

if(isset($_POST['id'])){
    to("../back.php?do=mem");
}