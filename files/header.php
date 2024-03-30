<?php

include "inc/function.php";

?>
<!DOCTYPE html>
<html dir='rtl'>
<head>
<title>موقع سوق.كوم</title>
<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link href='//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'/>


<script src='js/myscript.js' type='text/javascript'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js' type='text/javascript'></script>

</head>
<body>
<!-- HEADER START / BY MOHAMED IBRAHIM -->
<!--START Main Menu / BY MOHAMED IBRAHIM -->
<div id='top-wrapper'>
<div class='row'>
<div id='menu-tob'>
<ul id='nav'>
<li><a href='#'>تسجيل الدخول</a></li>
<li><a href='#'>مستخدم جديد</a></li>
<li><a href='./admin'>لوحة التحكم</a></li>
</ul>
</div>
</div>
</div>
<!-- END Main Menu / BY MOHAMED IBRAHIM -->
<div id='header-wrapper'>
<div class='row'>
<div id='header'>
<h1><a href='index.php'>سوق.كوم</a></h1>
</div>
<div id='menu'>
<ul id='nav1'>
<?php get_cat(); ?>
</ul>
</div>
<div class='menu-cart home'>
<p class='mycart'><i class='fa fa-shopping-cart'></i>
<span class='simpleCart_quantity'></span> عربة التسوق - <span class='simpleCart_total'><?PHP cart();?></span></p>
<div class='bag'>
<div class='simpleCart_items'></div>
<div class='clear'></div>
<a class='simpleCart_empty' href='javascript:;'>تفريغ العربة</a><a class='simpleCart_checkout' href='/checkout/'>عرض العربة</a>
</div>
</div>
<!-- SearcH Area Start / BY MOHAMED IBRAHIM -->
<div id="form-search">
<form action="search.php" method="get" id="ajax-search-form">
<input name="searchtxt" type="text" placeholder="ابحث هنا عن منتج...">
<input type="submit" name='dosearch' value="بحث">
</form>
</div>
<!-- SearcH Area END / BY MOHAMED IBRAHIM -->
</div>
</div>
<!-- HEADER END / BY MOHAMED IBRAHIM -->
<!-- PRE HEADER START / BY MOHAMED IBRAHIM -->
<div class='center' id='header-intro'>
<div id='back_div4'>
<h1>سوق.كوم هو موقع الإكترونى لكل العرب للخدمات والأعمال</h1>
<h2>أفضل المنتجات بأسعار تناسب الجميع</h2>
</div>
</div>
<!-- PRE HEADER END / BY MOHAMED IBRAHIM -->