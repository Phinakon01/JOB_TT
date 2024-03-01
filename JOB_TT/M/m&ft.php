<?php
    $ft = '';
    if(isset($_POST['btn1'])){
        $m = $_POST["m"];
        $ft = '<div class="alert alert-danger">'.$m.' (m) เป็น '.($m * 3.2808399).' (ft)</div>';
    }
    if(isset($_POST['btn2'])){
        header('Location:ft&m.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เมตร เป็น ฟุต</title>
</head>
<body>
    <?php require('./nav.php') ?>
    <div class="container text-center">
            <div class="row">
                <div class="col"></div>
                <div class="col-6 border rounded mt-2 p-2 ">
                    <form method="post">
                    <h3>เมตร(m) เป็น ฟุต(ft)</h3>
                    <input name="m" type="number" step="any" class="form-control w-100 my-2" placeholder="เมตร(m)">
                    <button name="btn2" class="btn btn-success p-3 w-25 mt-3" type="submit">สลับ</button>
                    <button name="btn1" class="btn btn-info p-3 w-100 mt-3" type="submit">แปลงค่า</button>
                    
                    <?php echo $ft;  ?>
                    </form>
                </div>
                <div class="col"></div>
            </div>
        </div>
</body>
</html>