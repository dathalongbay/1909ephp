<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php
$height = $weight = "";
$bmi = "";
$phanloai = "";
$nguyco = "";

if (isset($_POST) && !empty($_POST)) {
    if (isset($_POST["weight"]) && isset($_POST["height"]) && ($_POST["weight"] > 0) && ($_POST["height"] > 0) ) {
        $height = $_POST["height"];
        $weight = $_POST["weight"];

        $bmi = $weight/($height*$height);


        if ($bmi < 18.5) {
            $phanloai = "gầy";
            $nguyco = "thấp";
        } else if ($bmi >= 18.5 && $bmi < 25) {
            $phanloai = "bình thường";
            $nguyco = "trung bình";
        } else if ($bmi >= 25 && $bmi < 30) {
            $phanloai = "hơi béo";
            $nguyco = "cao";
        } else if ($bmi >= 30 && $bmi < 35) {
            $phanloai = "béo phì độ 1";
            $nguyco = "cao";
        } else if ($bmi >= 35 && $bmi < 40) {
            $phanloai = "béo phì độ 2";
            $nguyco = "rất cao";
        } else {
            $phanloai = "béo phì độ 3";
            $nguyco = "nguy hiểm";
        }
    }
}
?>

<div class="container">
    <div class="row">

            <pre>
                Sử dụng công thức tại trang https://news.zing.vn/5-cong-thuc-don-gian-do-chi-so-bmi-post669580.html
                để tính toán ra chỉ số BMI khi nhập vào
                và in ra thông tin phân loại
                và nguy cơ bệnh tật
            </pre>
        <form name="bmi" action="" method="post">
            <div class="form-group">
                <label>Cân nặng ( Kg )</label>
                <input type="text" name="weight" value="<?php echo $weight ?>" class="form-control" placeholder="Cân nặng">

            </div>
            <div class="form-group">
                <label>Chiều cao ( đơn vị mét )</label>
                <input type="text" name="height" value="<?php echo $height ?>" class="form-control" placeholder="Chiều cao">
            </div>

            <button class="btn btn-primary">tính MBI</button>
        </form>
    </div>

    <div class="row">
        <h2>Kết quả sau tính toán</h2>


    </div>

    <div>
        <p>BMI : <?php echo $bmi ?></p>
        <p>Phân loại : <?php echo $phanloai ?></p>
        <p>Nguy cơ bênh tật : <?php echo $nguyco ?></p>
    </div>
</div>

</body>
</html>