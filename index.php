<?php
require_once 'table.php';
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our new site</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class="container" style="width: 1000px; margin-top: 30px;">
    <div class="row">
        <table class="table table-striper table-hover">
            <thead>
            <th>#</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Доп. функции</th>
            </thead>
            <?php
            foreach ($tableData as $key => $value) :
            ?>
                <tr>
                    <td><?= $value[0] ?></td>
                    <td><?= $value[1] ?></td>
                    <td><?= $value[2] ?></td>
                    <td><?= $value[3] ?></td>
                    <td><?= $value[4] ?></td>
                    <td><?= $value[5] ?></td>
                    <td><?= $value[6] ?></td>
                    <td><?= $value[7] ?></td>
                    <td><?= $value[8] ?></td>
                    <td><?= $value[9] ?></td>
                    <td><?= $value[10] ?></td>
                    <td><?= $value[11] ?></td>
                    <td><?= $value[12] ?></td>
                    <td><?= $value[13] ?></td>
                    <td>
                        <a href="#"><i class="glyphicon glyphicon-pencil"></i></a>
                        <a href="#"><i class="glyphicon glyphicon-remove"></i></a>
                    </td>
                </tr>
            <?php
            endforeach;
            ?>
        </table>
    </div>
</div>
</body>
</html>