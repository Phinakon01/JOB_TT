<?php
    $m = '';
    if(isset($_POST['btn1'])){
        $mi = $_POST["mi"];
        $m = '<div class="alert alert-danger">'.$mi.' (mi) เป็น '.($mi / 0.000621371192).' (m)</div>';
    }
    if(isset($_POST['btn2'])){
        header('Location:m&mi.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ไมล์ เป็น เมตร</title>
</head>
<body>
    <?php require('./nav.php') ?>
    <div class="container text-center">
            <div class="row">
                <div class="col"></div>
                <div class="col-6 border rounded mt-2 p-2 ">
                    <form method="post">
                    <h3>ไมล์(mi) เป็น เมตร(m)</h3>
                    <input name="mi" type="number" step="any" class="form-control w-100 my-2" placeholder="ไมล์(mi)">
                    <button name="btn2" class="btn btn-success p-3 w-25 mt-3" type="submit">สลับ</button>
                    <button name="btn1" class="btn btn-info p-3 w-100 mt-3" type="submit">แปลงค่า</button>
                    
                    <?php echo $m;  ?>
                    </form>
                </div>
                <div class="col"></div>
            </div>
        </div>
</body>
</html>