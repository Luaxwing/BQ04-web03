<?php
$type = $_GET['type'] ?? 0;
$nav = '';

if ($type == 0) {
    $nav = '全部商品';
    $goods = $Goods->all(['sh' => 1]);
} else {
    $t = $Type->find($type);
    if ($t['big_id'] == 0) {
        $nav = $t['name'];
        $goods = $Goods->all(['sh' => 1, 'big' => $t['id']]);
    } else {
        $b = $Type->find($t['big_id']);
        $nav = $b['name'] . ">" . $t['name'];
        $goods = $Goods->all(['sh' => 1, 'mid' => $t['id']]);
    }
}


?>

<h2>
    <?= $nav; ?>
</h2>

<?php
foreach ($goods as $good) {
    // echo $good['name']."<br>";
    ?>


    <div class="item">
        <div class="img ct">
            <a href="?do=detail&id=<?= $good['id']; ?>">
                <img src="./img/<?= $good['img'] ?>" style="width:80%;height:120px">
            </a>
        </div>
        <div class="info">
            <div class="ct tt pname">
                <?= $good['name'] ?>
            </div>
            <div>價錢:
                <?= $good['price'] ?>
            </div>
            <div>規格:
                <?= $good['spec'] ?>
            </div>
            <div>簡介:
                <?= mb_substr($good['intro'], 0, 25) ?>...
            </div>
        </div>
    </div>



    <?php
}
?>
<!-- <button onclick="location.href='?do=buycart'">我要購買</button> -->