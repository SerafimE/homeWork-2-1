<?php
$file = file_get_contents("base.json");
$decode = json_decode($file, true);
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <title>Домашнее задание к лекции 2.1</title>
    <meta charset="UTF-8">
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
                <th>Адрес</th>
                <th>Телефон</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($decode as $phonebook):?>
                <tr>
                    <td><?=$phonebook['firstName']; ?></td>
                    <td><?=$phonebook['lastName']; ?></td>
                    <td><?=$phonebook['address']; ?></td>
                    <td><?=$phonebook['phoneNumber']; ?></td>
                </tr>
            <?php endforeach;?>

            </tbody>
        </table>
    </div>
</div>

</body>

</html>