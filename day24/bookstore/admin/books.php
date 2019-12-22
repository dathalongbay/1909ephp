<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>

<div class="container">
    <h1>Quản lý khách hàng</h1>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Email</th>
                    <th scope="col">Thời gian</th>
                    <th scope="col">Hành động</th>
                </tr>
                </thead>
                <tbody>

                <?php
                foreach($all as $k=>$v) { ?>

                    <tr>
                        <th scope="row"><?php echo $v["id"] ?></th>
                        <td><?php echo $v["firstname"] ?></td>
                        <td><?php echo $v["lastname"] ?></td>
                        <td><?php echo $v["email"] ?></td>
                        <td><?php echo $v["reg_date"] ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $v["id"] ?>" class="btn btn-warning">Sửa</a>
                            <a href="delete.php?id=<?php echo $v["id"] ?>" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                <?php } ?>




                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>