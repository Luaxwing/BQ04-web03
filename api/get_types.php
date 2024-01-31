

<?php
// init
include_once "db.php";

$_GET['big_id'];

// $types=$Type->all(['big_id'=>$_GET['big_id']]);
// 簡化(只有big_id)
$types=$Type->all($_GET);
foreach($types as $type){
    echo "<option value='{$type['id']}'> {$type['name']} </option>";
}
