<?php
include('config.php');
$ID=$_GET['id'];
$up =mysqli_query($con, "select * from prod where id=$ID");
$data =mysqli_fetch_array($up);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تأكيد شراء المنتج</title>
    <style>
        input{
            display: none;
        }
        .main{
            width: 30%;
            padding:20px;
            box-shadow: 1px 1px 10px silver;
            margin-top:50px;
        }



    </style>
</head>
<body>
<center>
<div class="main">
        <form action="card.php" method="post"> 
            <h2>هل تريد فعلا شراء المنتج</h2>
            <input type="text" name="id" value='<?php echo $data['id'] ?>'>
            <input type="text" name="name" value='<?php echo $data['name'] ?>'>
            <input type="text" name="price" value='<?php echo $data['price'] ?>'>
            <button name="add" type="submit" class="btn btn-warning">تاكيد اضافه المنتج للعربه</button>
             <br>
             <a href="shop.php">الرجوع لصفحه المنتجات</a>
         </form>
    </div>
    
</center>
</body>
</html>