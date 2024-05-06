

<?php

session_start();
include('inc/connection.php');

if(isset($_SESSION['id']) && isset($_SESSION['username']))
{
    $id= $_SESSION['id'];
    $username= $_SESSION['username'];


$info= mysqli_query($conn,"SELECT * FROM users WHERE username='$username'");    
while($data= mysqli_fetch_array($info))
{





?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="" />
    <title>Test</title>
    <link rel="stylesheet" href="homstyle.css">

</head>
<body>

    <h3 class="hi"> أهلا بك  <?php echo $data['first_name']; ?></h3>
    <button type="button" class="logout" onclick="location.href= 'logout.php ' ">تسجيل خروج </button>

    <div class="hero">
        <div class="container">
            <div class="clock">
                <span id='span'></span>
            </div>
        </div>

<div class="position1">
    <div class="bismillah">بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيمِ</div>
    <button  type="button" class="btn1" onclick="location.href= '  ' ">أذكار الصباح </button>
    <button type="button" class="btn2" onclick="location.href= '  ' ">أذكار المساء</button>
</div>
<div class="position2">
    <button type="button" class="btn3" onclick="location.href= 'salah.php  ' ">مواقيت الصلاة</button>
    <button  type="button" class="btn4" onclick="location.href= '  ' ">ادعيه</button> 
</div>
    <script src="js/clock.js"></script>
</body>

</html>  

<?php


}
}
else{
    header('location:index.php');
}

?>