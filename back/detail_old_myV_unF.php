
<?php
//練習，用陣列去提取訂單，再透過陣列中的訂單為ID去查找商品


$order=$Orders->find($_GET['id']);
$rows=unserialize($order['cart']);

$tmpL=[];
$tmpNum=[];

foreach($rows as $good=>$num){
$tmpL[]=$good;
$tmpNum[]=$num;
}




?>
<style>
.item{
    width:80%;
    background-color: #f4c591;
    margin:5px auto;
    display:flex;

}
.item .img{
    width:60%;
    display:flex;
    justify-content: center;
    align-items: center;
    border:1px solid #FFF;
    padding:5px;
    text-align: center;
}
.item .info{
    width:40%;
    display:flex;
    flex-direction: column;
}
.info div{
    border:1px solid #FFF;
    border-left:0px;
    border-top:0px;
    flex-grow:1;
}
.info div:nth-child(1){
    border-top:1px solid #FFF;
}
</style>

<h2 class="ct">購買內容</h2>


<?php
foreach($tmpL as $idx=>$type){
 $goods=$Goods->find($type);
?>
<div class='item'>
 <div class="img">
    <a href="?id=<?=$goods['id'];?>">
        <img src="./img/<?=$goods['img'];?>" style="width:90%;height:200px">
    </a>
 </div>
 <div class="info">
    <div>分類：<?=$Type->find($goods['big'])['name'];?> > <?=$Type->find($goods['mid'])['name'];?></div>
    <div>編號：<?=$goods['no'];?></div>
    <div>價錢：<?=$goods['price'];?></div>
    <div>詳細說明：<?=$goods['intro'];?>...</div>
    <div>庫存量：<?=$goods['stock'];?></div>
 </div>   
</div>

<?php
}
?>

<script>

</script>