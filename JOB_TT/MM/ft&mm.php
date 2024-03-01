<?php
    $mm = '';
    if(isset($_POST['btn1'])){
        $ft = $_POST["ft"];
        $mm = '<div class="alert alert-danger">'.$ft.' (ft) เป็น '.($ft / 0.0032808).' (mm)</div>';
    }
    if(isset($_POST['btn2'])){
        header('Location:mm&ft.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ฟุต เป็น มิลลิเมตร</title>
</head>
<body>
    <?php require('./nav.php') ?>
    <div class="container text-center">
            <div class="row">
                <div class="col"></div>
                <div class="col-6 border rounded mt-2 p-2 ">
                    <form method="post">
                    <h3>ฟุต(ft) เป็น มิลลิเมตร(mm)</h3>
                    <input name="ft" type="number" step="any" class="form-control w-100 my-2" placeholder="ฟุต(ft)">
                    <button name="btn2" class="btn btn-success p-3 w-25 mt-3" type="submit">สลับ</button>
                    <button name="btn1" class="btn btn-info p-3 w-100 mt-3" type="submit">แปลงค่า</button>
                    
                    <?php echo $mm;  ?>
                    </form>
                </div>
                <div class="col"></div>
            </div>
        </div>
</body>
</html>