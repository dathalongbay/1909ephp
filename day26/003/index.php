<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<?php
include_once "connect.php";
// SELECT * FROM table LIMIT start,limit
$sqlSelect = "SELECT * FROM posts ORDER BY id ASC LIMIT 0,20";

$stmt = $conn->prepare($sqlSelect);
$stmt->execute();

// set the resulting array to associative
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$data = $stmt->fetchAll();

echo "<pre>";
print_r($data);
echo "</pre>";
?>
<div class="container">
    <h2>Basic AJAX</h2>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Intro</th>
        </tr>
        </thead>
        <tbody>

            <?php foreach($data as $item) { ?>
            <tr>
                <td><?php echo $item["id"] ?></td>
                <td><?php echo $item["title"] ?></td>
                <td><?php echo $item["intro"] ?></td>
            </tr>
            <?php } ?>


        </tbody>
    </table>

    <button id="loadmore" class="btn btn-success">Xem thêm</button>
</div>




</body>
</html>