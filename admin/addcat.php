<?php include "inc/header.php"; ?>
<?php 

//post values

$c_name = @$_POST['c_name'];

//insert category
if(isset($_POST['addcat'])){
    if(empty($c_name)){
		echo '<script>alert("الرجاء كتابة اسم القسم!");</script>';
	}
	else
	{
	$insert_cat = "insert into category(c_name) values('$c_name')";
	$run_cat = mysqli_query($db,$insert_cat);
	
	if(isset($run_cat)){
		echo'<script>alert("تم اضافة القسم  الى الاقسام بنجاح");</script>';
		$url = 'addcat.php';
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
<form class='formy' action='addcat.php' method='post'>
<label>اسم القسم</label>
<input type='text' name='c_name' />
<input type='submit' name='addcat' value='اضافة القسم'/>
<form>
</form>
<?php include "inc/footer.php"; ?>
