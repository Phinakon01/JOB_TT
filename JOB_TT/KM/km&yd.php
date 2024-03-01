<?php
    $yd = '';
    if(isset($_POST['btn1'])){
        $km = $_POST["km"];
        $yd = '<div class="alert alert-danger">'.$km.' (km) เป็น '.($km * 1093.613298).' (yd)</div>';
    }
    if(isset($_POST['btn2'])){
        header('Location:yd&km.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>กิโลเมตร เป็น หลา</title>
</head>
<body>
    <?php require('./nav.php') ?>
    <div class="container text-center">
            <div class="row">
                <div class="col"></div>
                <div class="col-6 border rounded mt-2 p-2 ">
                    <form method="post">
                    <h3>กิโลเมตร(km) เป็น หลา(yd)</h3>
                    <input name="km" type="number" step="any" class="form-control w-100 my-2" placeholder="กิโลเมตร(km)">
                    <button name="btn2" class="btn btn-success p-3 w-25 mt-3" type="submit">สลับ</button>
                    <button name="btn1" class="btn btn-info p-3 w-100 mt-3" type="submit">แปลงค่า</button>
                    
                    <?php echo $yd;  ?>
                    </form>
                </div>
                <div class="col"></div>
            </div>
        </div>
</body>
</html>