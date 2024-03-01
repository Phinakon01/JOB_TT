<?php
    $mm = '';
    if(isset($_POST['btn1'])){
        $in = $_POST["in"];
        $mm = '<div class="alert alert-danger">'.$in.' (in) เป็น '.($in / 0.0393700787).' (mm)</div>';
    }
    if(isset($_POST['btn2'])){
        header('Location:mm&in.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>นิ้ว เป็น มิลลิเมตร</title>
</head>
<body>
    <?php require('./nav.php') ?>
    <div class="container text-center">
            <div class="row">
                <div class="col"></div>
                <div class="col-6 border rounded mt-2 p-2 ">
                    <form method="post">
                    <h3>นิ้ว(in) เป็น มิลลิเมตร(mm)</h3>
                    <input name="in" type="number" step="any" class="form-control w-100 my-2" placeholder="นิ้ว(in)">
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