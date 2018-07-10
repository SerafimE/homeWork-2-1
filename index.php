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

<table>
    <caption><h1>Телефонная книга</h1></caption>
    <thead>
    <tr>
        <th rowspan="2">Имя</th>
        <th rowspan="2">Фамилия</th>
        <th colspan="3">Адрес:</th>
        <th colspan="2">Телефоны:</th>
    </tr>
    <tr>
        <th>Индекс</th>
        <th>Город</th>
        <th>Улица</th>
        <th>Мобильный</th>
        <th>Другой</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($data as $phoneBook) { ?>
        <tr>
            <td><?php echo isset($phoneBook['firstName']) ? $phoneBook['firstName'] : 'нет' ?></td>
            <td><?php echo isset($phoneBook['lastName']) ? $phoneBook['lastName'] : 'нет' ?></td>
            <td><?php echo isset($phoneBook['address']['zip']) ? $phoneBook['address']['zip'] : 'нет' ?> </td>
            <td><?php echo isset($phoneBook['address']['city']) ? $phoneBook['address']['city'] : 'нет' ?> </td>
            <td><?php echo isset($phoneBook['address']['street']) ? $phoneBook['address']['street'] : 'нет' ?> </td>
            <td><?php echo isset($phoneBook['phoneNumber'][0]) ? $phoneBook['phoneNumber'][0] : 'нет' ?></td>
            <td><?php echo isset($phoneBook['phoneNumber'][1]) ? $phoneBook['phoneNumber'][1] : 'нет' ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>

</body>

</html>
