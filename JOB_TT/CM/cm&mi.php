<?php
    $mi = '';
    if(isset($_POST['btn1'])){
        $cm = $_POST["cm"];
        if($cm>0){
            $mi = '<div class="alert alert-danger">'.$cm.' (cm) เป็น '.($cm / 160934.4).' (mi)</div>';
        }else{
            $mi = '<div class="alert alert-danger">กรุณาป้อนข้อมูล</div>';
        }
    }
    if(isset($_POST['btn2'])){
        header('Location:mi&cm.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เซนติเมตร เป็น ไมล์</title>
</head>
<body>
    <?php require('./nav.php') ?>
    <div class="container text-center">
            <div class="row">
                <div class="col"></div>
                <div class="col-6 border rounded mt-2 p-2 ">
                    <form method="post">
                    <h3>เซนติเมตร(cm) เป็น ไมล์(mi)</h3>
                    <input name="cm" type="number" step="any" class="form-control w-100 my-2" placeholder="เซนติเมตร(cm)">
                    <button name="btn2" class="btn btn-success p-3 w-25 mt-3" type="submit">สลับ</button>
                    <button name="btn1" class="btn btn-info p-3 w-100 mt-3" type="submit">แปลงค่า</button>
                    
                    <?php echo $mi;  ?>
                    </form>
                </div>
                <div class="col"></div>
            </div>
        </div>
</body>
</html>