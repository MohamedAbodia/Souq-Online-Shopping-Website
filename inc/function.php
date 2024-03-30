<?php
include "db.php";
//Get ip
function getIp(){
	$ip = $_SERVER['REMOTE_ADDR'];
	
	if(!empty($_SERVER['HTTP_CLIENT_IP']))
	{
	$ip = $_SERVER['HTTP_CLIENT_IP'];	
	}
	elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
	{
		$ip = $SERVER['HTTP_X_FORWARDED_FOR'];	
	}
	return $ip;
}
//Cart function
function cart(){
	global $connect;
	if(isset($_GET['add_cart'])){
		$ip = getIp();
		$pr_id = (int)$_GET['add_cart'];
		$get_cart = "select * from cart where ip_add = '$ip' and pr_id='$pr_id' ";
		$run_cart = mysqli_query($connect, $get_cart); 
		if(mysqli_num_rows($run_cart)>0)
	{
	echo'';
	}
else
{
	$insert_cart = "insert into cart(pr_id,ip_add) values ('$pr_id','$ip')";
    $run_i_cart =	mysqli_query($connect, $insert_cart); 
	    $url = 'index.php';
        $time = 0.2;
        header("refresh: $time; url=$url");
        exit();	
}	
	}
	
	
	
}
//Get Category
function get_cat(){
	
	global $connect;
	
	$get_cat = "SELECT * FROM `category`";
	$run_cat = mysqli_query($connect, $get_cat); 
	
	while($row_cat = mysqli_fetch_array($run_cat)){
		echo'<li><a href="index.php?cat='.$row_cat['c_id'].'">'.$row_cat['c_name'].'</a></li>';
	}
}

//Get Product
function get_pro(){
	
	global $connect;
	if(!isset($_GET['cat']))
	{
	$get_pro = "SELECT * FROM `products` ";
	$run_pro = mysqli_query($connect, $get_pro); 
	while($row_pro = mysqli_fetch_array($run_pro))
	{
		echo'<div class="product">
<div class="product-content">
<div class="pro_img">
<a href="details.php?id='.$row_pro['pr_id'].'"><img  src="primg/'.$row_pro['pr_img'].'"></a>
</div>
<h2 class="pro_title">
<a href="details.php?id='.$row_pro['pr_id'].'">'.$row_pro['pr_title'].'</a>
</h2>
<div class="item_price"><span class="price">'.$row_pro['pr_price'].'$</span></div>
</div>

<a class="item_add" href="index.php?add_cart='.$row_pro['pr_id'].'"><i class="fa fa-shopping-cart"></i> اضف للعربة</a>
</div>';
	}
	}//end if
} 

//Get Product By Category
function get_pro_cat(){
	
	global $connect;
	if(isset($_GET['cat'])){
		
	$cat = (int)$_GET['cat'];
		
	$get_pro_cat = "SELECT * FROM `products` where pr_cat = '$cat'";
    $run_pro_cat = mysqli_query($connect, $get_pro_cat); 
	
	if(mysqli_num_rows($run_pro_cat)>0)
	{
		while($row_pro_cat = mysqli_fetch_array($run_pro_cat))
	{
		echo'<div class="product">
<div class="product-content">
<div class="pro_img">
<a href="details.php?id='.$row_pro_cat['pr_id'].'"><img  src="primg/'.$row_pro_cat['pr_img'].'"></a>
</div>
<h2 class="pro_title">
<a href="details.php?id='.$row_pro_cat['pr_id'].'">'.$row_pro_cat['pr_title'].'</a>
</h2>
<div class="item_price"><span class="price">'.$row_pro_cat['pr_price'].'$</span></div>
</div>

<a class="item_add" href="index.php?add_cart='.$row_pro_cat['pr_id'].'"><i class="fa fa-shopping-cart"></i> اضف للعربة</a>
</div>';
	}	
	}
	else
	{
		echo'<div class="error">عذراَ لا توجد منتجات لعرضها....</div>';
	}
		
	}
}

//Product Search Engine
function get_search_pro()
{
	global $connect;
	if(isset($_GET['dosearch'])){
		$searchtxt = $_GET['searchtxt'];
		$get_search_pro = "SELECT * FROM `products` where pr_keyword like '%$searchtxt%'";
		$run_search_pro = mysqli_query($connect, $get_search_pro);
		if(mysqli_num_rows($run_search_pro)>0)
		{
			while($row_search_pro = mysqli_fetch_array($run_search_pro))
	{
		echo'<div class="product">
<div class="product-content">
<div class="pro_img">
<a href="details.php?id='.$row_search_pro['pr_id'].'"><img  src="primg/'.$row_search_pro['pr_img'].'"></a>
</div>
<h2 class="pro_title">
<a href="details.php?id='.$row_search_pro['pr_id'].'">'.$row_search_pro['pr_title'].'</a>
</h2>
<div class="item_price"><span class="price">'.$row_search_pro['pr_price'].'$</span></div>
</div>

<a class="item_add" href="javascript:;"><i class="fa fa-shopping-cart"></i> اضف للعربة</a>
</div>';
	}
		}
		else
		{
			echo'<div class="error">عذراَ لا توجد منتجات لعرضها....</div>';	
		}
			
	}
		
}
?>


