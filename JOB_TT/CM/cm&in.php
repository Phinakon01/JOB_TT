<?php
    $in = '';
    if(isset($_POST['btn1'])){
        $cm = $_POST["cm"];
        if($cm>0){
            $in = '<div class="alert alert-danger">'.$cm.' (cm) เป็น '.($cm * 0.393700787).' (in)</div>';
        }else{
            $in = '<div class="alert alert-danger">กรุณาป้อนข้อมูล</div>';
        }
    }
    if(isset($_POST['btn2'])){
        header('Location:in&cm.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เซนติเมตร เป็น นิ้ว</title>
</head>
<body>
    <?php require('./nav.php') ?>
    <div class="container text-center">
            <div class="row">
                <div class="col"></div>
                <div class="col-6 border rounded mt-2 p-2 ">
                    <form method="post">
                    <h3>เซนติเมตร(cm) เป็น นิ้ว(in)</h3>
                    <input name="cm" type="number" step="any" class="form-control w-100 my-2" placeholder="เซนติเมตร(cm)">
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