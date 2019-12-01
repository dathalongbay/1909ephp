<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <style type="text/css">

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .clearfix::after {
            content: '';
            display: table;
            clear: both;
        }
    </style>
</head>
<body>

    <div class="page-wrap" style="width: 800px; margin: 0 auto">
        <?php include_once "header.php" ?>

        <main class="clearfix">
            <?php include_once "sidebar.php" ?>
            <section style="background: #cae8ca; width: 70%; float: left; height: 500px;">
                <?php include_once "maincontent.php" ?>
            </section>
        </main>


        <?php include_once "footer.php" ?>
    </div>

</body>
</html>