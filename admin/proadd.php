  <?php include "inc/header.php"; ?>
<?php 

//post values
$pr_title = @$_POST['pr_title'];
$pr_cat = @$_POST['pr_cat'];
$pr_img = @$_FILES['pr_img']['name'];
$pr_img_tmp = @$_FILES['pr_img']['tmp_name'];
$pr_price = @$_POST['pr_price'];
$pr_desc = @$_POST['pr_desc'];
$pr_keyword = @$_POST['pr_keyword'];

//move upload img
move_uploaded_file($pr_img_tmp,"../primg/$pr_img");

//insert product
if(isset($_POST['proadd'])){
	
	if(empty($pr_title) ||empty ($pr_cat) ||empty ($pr_img) ||empty ($pr_price) ||empty ($pr_desc) ||empty ($pr_keyword)){
		echo '<script>alert("الرجاء ملىء جميع الحقول لنتمكن من اضافة المنتج!");</script>';
	}
	else
	{
		$insert_pro = "insert into products(pr_title,pr_cat,pr_img,pr_price,pr_desc,pr_keyword) values('$pr_title','$pr_cat','$pr_img','$pr_price','$pr_desc','$pr_keyword') ";
	    $run_pro = mysqli_query($db,$insert_pro);
		if(isset($run_pro)){
			echo'<script>alert("تم اضافة المنتج بنجاح ...");</script>';
		$url = 'proadd.php';
        $time = 0.25;
        header("refresh: $time; url=$url");
        exit();	
		}
	}
}

?>
<div class='mypage'>
<?php include "inc/menu.php"; ?>
<div class='adminBody'>
<form class='formy' action='proadd.php' method='post' enctype='multipart/form-data'>
<label>عنوان المنتج</label>
<input type='text' name='pr_title' />
<div class='cat'>
<label>تصنيف المنتج</label>
<select name='pr_cat'>
<?php
	
	$get_c = "SELECT * FROM `category`";
	$run_c = mysqli_query($db, $get_c); 
	
	while($row_c = mysqli_fetch_array($run_c)){
		echo'<option value="'.$row_c['c_id'].'">'.$row_c['c_name'].'</option>';
	}
	
?>
</select>
</div>
<label>صورة المنتج</label>
<input type='file' name='pr_img'/>
<label>سعر المنتج</label>
<input type='text' name='pr_price'/>
<label>وصف المنتج</label>
<textarea  name='pr_desc' ></textarea>
<script>CKEDITOR.replace( 'pr_desc' );</script>
<label>كلمات مفتاحية</label>
<input type='text' name='pr_keyword'/>
<input type='submit' name='proadd' value='اضافة المنتج'/>
<form>
</form>
<?php include "inc/footer.php"; ?>