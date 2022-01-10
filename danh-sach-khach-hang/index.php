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

function searchByDate($customers, $fromDate, $toDate){
    if (empty($fromDate) || empty($toDate)){
        return $customers;
    }
    $filteredCustomers = [];
    foreach ($customers as $customer){
        if (strtotime($customer['ngaysinh']) < strtotime($fromDate))
            continue;
        if (strtotime($customer["ngaysinh"]) > strtotime($toDate))
            continue;
        $filteredCustomers[] = $customer;
    }
    return $filteredCustomers;
}
?>

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
$fromDate = null;
$toDate = null;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fromDate = $_REQUEST['from'];
    $toDate = $_REQUEST['to'];
}
$filteredCustomers = searchByDate($customerList, $fromDate, $toDate);
?>
<form action="#" method="post">
    <p>Chon ngay sinh tu: <input name="from" type="date"> <span>den: </span> <input name="to" type="date"> <button type="submit" id="submit">Loc</button>
</form>
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
<!--    --><?php //foreach ($customerList as $key => $value): ?>
<!--    <tr>-->
<!--        <td>--><?php //echo $key ?><!--</td>-->
<!--        <td>--><?php //echo $value['ten'] ?><!--</td>-->
<!--        <td>--><?php //echo $value['ngaysinh'] ?><!--</td>-->
<!--        <td>--><?php //echo $value['diachi'] ?><!--</td>-->
<!--        <td><img src="--><?php //echo $value['anh'] ?><!--" alt="" width="150""></td>-->
<!--    </tr>-->
<!--    --><?php //endforeach; ?>

    <?php foreach ($filteredCustomers as $index => $customer): ?>
    <tr>
        <td><?php echo $index +1; ?></td>
        <td><?php echo $customer["ten"]; ?></td>
        <td><?php echo $customer['ngaysinh']; ?></td>
        <td><?php echo $customer['diachi'] ?></td>
        <td><img src="<?php echo $customer['anh']?>" alt="nice" width="150"></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>



