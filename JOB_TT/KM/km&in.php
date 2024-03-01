<?php
    $in = '';
    if(isset($_POST['btn1'])){
        $km = $_POST["km"];
        $in = '<div class="alert alert-danger">'.$km.' (km) เป็น '.($km * 39370.07874).' (in)</div>';
    }
    if(isset($_POST['btn2'])){
        header('Location:in&km.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>กิโลเมตร เป็น นิ้ว</title>
</head>
<body>
    <?php require('./nav.php') ?>
    <div class="container text-center">
            <div class="row">
                <div class="col"></div>
                <div class="col-6 border rounded mt-2 p-2 ">
                    <form method="post">
                    <h3>กิโลเมตรเมตร(km) เป็น นิ้ว(in)</h3>
                    <input name="km" type="number" step="any" class="form-control w-100 my-2" placeholder="กิโลเมตร(km)">
                    <button name="btn2" class="btn btn-success p-3 w-25 mt-3" type="submit">สลับ</button>
                    <button name="btn1" class="btn btn-info p-3 w-100 mt-3" type="submit">แปลงค่า</button>
                    
                    <?php echo $in;  ?>
                    </form>
                </div>
                <div class="col"></div>
            </div>
        </div>
</body>
</html>