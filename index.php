<?php
$jsonString = file_get_contents(__DIR__ . '/base.json');
$data = json_decode($jsonString, true);
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <title>Домашнее задание к лекции 2.1</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

<div>
    <h1>Телефонная книга</h1>
    <div>
        <table>
            <caption></caption>
            <thead>
            <tr>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>Индекс</th>
                <th>Город</th>
                <th>Улица</th>
                <th>Дом</th>
                <th>Квартира</th>
                <th>Телефон мобильный</th>
                <th>Телефон "другой"</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($data as $phone_book): ?>
                <tr>
                    <td><?php echo $phone_book['firstName']; ?></td>
                    <td><?php echo $phone_book['lastName']; ?></td>
                    <?php foreach ($phone_book['address'] as $address => $val) echo "<td>$val </td>" ?>
                    <?php foreach ($phone_book['phoneNumber'] as $phoneNumber => $val_num) echo "<td>$val_num </td>" ?>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

</body>

</html>
