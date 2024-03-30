<?php
    //connect db
    $con = mysqli_connect("localhost","root","M@dos24g.","ecommerce");
    if(mysqli_connect_error()){
        die("database connection faild" . mysqli_connect_erro() . "(".mysqli_connect_error().")");
    }

    $message ="";
    $a_name="";
    $a_pass="";
  

    // post value
    $a_name = @$_POST['a_name'];
    $a_pass = @$_POST['a_pass'];
		 
    if(isset($_POST['login'])){
        $a_name = trim($_POST['a_name']);
        $a_pass = trim($_POST['a_pass']);
        // لازم تعمل لهم validation 
        if(empty($a_name) || empty($a_pass)){
            echo'<script>alert("الرجاء وضع كافة البيانات..");</script>';
        }else{
            // get name and pass of admin
            $get_admin = "select * from admin where BINARY a_name ='$a_name' and BINARY a_pass ='$a_pass'";
            $result = mysqli_query($con,$get_admin);
            if(!$result){
                 echo'<script>alert("معذرة لم نتمكن من تنفيذ طلبك....");</script>';
            }
			else{
                //يجب معرفة عدد المدراء في القاعدة 
                $admins = mysqli_num_rows($result);
                //يجب ان يكون كل مدير مختلف عن الاخر 
                if($admins === 1)
				{
                    if($row = mysqli_fetch_assoc($result)){
                    //set cookie for username
                        setcookie("admin",$row["a_name"],time()+60*60*24);
                    //set cookie for login
                        setcookie("adminlogin",1,time()+60*60*24);
						echo'<script>alert("مرحباً بك يا مدير مرة اخرى...");</script>';
                        header("Location: done.php");
                    }
                 
                }else{
                    echo'<script>alert("البيانات المدخلة غير صحيحة");</script>';
                }
                // step 4 clear the result 
                mysqli_free_result($result);
                // step 5 closed the connection
                mysqli_close($con);   
            }
     
        }
      
         
     }
   

?>
<!DOCTYPE html>
<html>
<head>
<title>تسجيل الدخول الى لوحة التحكم</title>
<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<!-- ADMIN LOGIN / BY MOHAMED IBRAHIM -->
<div class='login'>
<form class='login-container' action="login.php" method="post">
<input type='text' name="a_name" placeholder='اسم المستخدم'/>
<input type='password' name="a_pass" placeholder='كلمة المرور'/>
<input type='submit' name="login" value='تسجيل الدخول'/>
</form>
</div>
</body>
</html>