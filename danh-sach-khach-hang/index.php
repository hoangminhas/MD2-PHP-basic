<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sach khach hang</title>
    <style>
        table{
            width: 100%;
            border-collapse: collapse;
        }

        th, td{
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
<?php
$customerList = [
    "1" => [
        "ten" => "Nguyen Hoang Minh",
        "ngaysinh" => "1999-01-27",
        "diachi" => "Hanoi, Vietnam",
        "anh" => "images/maya.jpg"
    ],
    "2" => [
        "ten" => "John Lennon",
        "ngaysinh" => "1940-10-09",
        "diachi" => "Liverpool, England",
        "anh" => "images/john-lennon.jpg"
    ],
    "3" => [
        "ten" => "Steve Jobs",
        "ngaysinh" => "1955-02-24",
        "diachi" => "California, USA",
        "anh" => "images/steve-jobs.jpg"
    ],
    "4" => [
        "ten" => "Oguri Shun",
        "ngaysinh" => "1982-12-26",
        "diachi" => "Tokyo, Japan",
        "anh" => "images/oguri-shun.jpg"
    ],
    "5" => [
        "ten" => "Keanu Reeves",
        "ngaysinh" => "1964-09-02",
        "diachi" => "Beriut, Lebanon",
        "anh" => "images/Keanu-Reeves.jpg"
    ],
];
?>
<table>
    <caption><h1>Danh sach khach hang</h1></caption>
    <thead>
    <tr>
        <th>STT</th>
        <th>Ten</th>
        <th>Ngay sinh</th>
        <th>Dia chi</th>
        <th>Anh</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($customerList as $key => $value): ?>
    <tr>
        <td><?php echo $key ?></td>
        <td><?php echo $value['ten'] ?></td>
        <td><?php echo $value['ngaysinh'] ?></td>
        <td><?php echo $value['diachi'] ?></td>
        <td><img src="<?php echo $value['anh'] ?>" alt="" width="200""></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>

