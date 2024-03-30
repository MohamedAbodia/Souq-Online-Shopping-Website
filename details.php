<?php  include"files/header.php"?>
<?php
$p_id = (int)$_GET['id'];
if(isset($_GET['id']))
{
	$get_pro_details = "select * from products where pr_id = '$p_id'";
	$run_pro_details = mysqli_query($connect, $get_pro_details);
	$row_pro_details = mysqli_fetch_array($run_pro_details);
}
?>
<style>
.product-body
{
	background-color: #fff;
    padding: 50px;
    border: 1px solid #ccc;
}
.pro_data {
    float: right;
    width: 100%;
    border-bottom: 1px solid #ddd;
    padding-bottom: 50px;
    margin-bottom: 20px;
}
.item_image img {
    width: 470px;
    height: 465px;
}

.product-info-primary {
    width: 500px;
    margin-right: 20px;
    float: left;
}
.product-title {
    font-size: 25px;
    font-weight: 600;
    text-transform: capitalize;
    margin-bottom: 20px;
    margin-top: 10px;
}
.item_image
{
  float: right;
    overflow: hidden;
    height: 465px;
    overflow: hidden;
    text-align: center;
    border: 0!important;	
}
.item_add.productad{background:#2386C8 !important;color:#fff}
a.checkc{background:#2386C8;padding:10px;float:right;color:#fff;width: 90px;}
a.continues{background:#2386C8;padding:10px;float:right;color:#fff;margin-left:10px}
a.continues:hover,a.checkc:hover{background:#111}
a.item_add.productad{background:#00ab6f !important;color:#fff}
.item_price_details{
	    float: right;
    padding: 10px;
    color: #fff;
    background-color: #111;
    text-align: center;
}
.item_add {
    line-height: 25px !important;
	    height: auto !important;
}
.Phead-right .item_name{float:right}
.Phead-right{overflow:hidden;float:right}
.Phead-left{float:right;font-family:neo;font-size;18px;border-top:1px solid #ddd;text-align:center;width:100%;padding-top:20px;padding-bottom:20px;margin-top:10px;border-bottom:1px solid #ddd}
.Phead-left{padding-bottom:15px;margin-bottom:15px;float:right;width:100%;border-bottom:1px solid #ddd}
.Phead-left .item_price{float:right;padding:10px;color:#fff;background-color:#111;text-align:center}
.Phead-left a{float:right;background-color:#FA411E;color:#fff;padding:10px;padding-right:20px;padding-left:20px;text-align:center}
.Phead-left .fa{margin-left:5px}
</style>
<div class='row'>
<div class="product-body">
<div class="pro_data">
<div class="item_image"><div class="item_img"><img src="<?php echo'./primg/'.$row_pro_details['pr_img'].''; ?>"></div></div>
<div class="product-info-primary">
<h1 class="product-title">
<?php echo$row_pro_details['pr_title']; ?>
</h1>
<div>تصنيف المنتج: <?php 
$cat = $row_pro_details['pr_cat'];
$get_cat = "select * from category where c_id = '$cat'";
$run_cat = mysqli_query($connect,$get_cat);
$row_cat = mysqli_fetch_array($run_cat);
echo $row_cat['c_name'];

?></div>
<div>كلمات مفتاحية: <?php echo$row_pro_details['pr_keyword']; ?></div>
<div class="Phead-left">

<div class="item_price_details"><span class="price"><?php echo$row_pro_details['pr_price']; ?>$</span></div>

<a class="item_add" href="javascript:;"><i class="fa fa-shopping-cart"></i> أضف للعربة</a>
</div>
<a class="continues" href="/cart/">عرض السلع الخاصة بك</a>
<a class="checkc" href="/checkout/">المحاسبة</a>
</div>
</div>
<div class="post-details">
<?php echo$row_pro_details['pr_desc']; ?>
</div>
<div class="ads-bott">
<img src="//1.bp.blogspot.com/-fMGed4tEAj0/V8TPrH_qWgI/AAAAAAAADFw/NPPfkk94zAUTtUdw4Vnba0F9J9bj9-N2wCK4B/s1600/428_60.png">
<img src="//1.bp.blogspot.com/-fMGed4tEAj0/V8TPrH_qWgI/AAAAAAAADFw/NPPfkk94zAUTtUdw4Vnba0F9J9bj9-N2wCK4B/s1600/428_60.png">
</div>
</div>
</div>
<?php  include"files/footer.php"?>