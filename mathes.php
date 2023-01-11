<?php


$str = "Ливерпуль
Челси
Тоттенхэм Хотспур
Арсенал
Манчестер Юнайтед
Эвертон
Лестер Сити
Вест Хэм Юнайтед
Уотфорд
Борнмут
Бернли
Саутгемптон
Брайтон энд Хоув Альбион
Норвич Сити
Шеффилд Юнайтед
Фулхэм
Сток Сити
Мидлсбро
Суонси Сити
Дерби Каунти";

$arr = explode("\n", $str);

foreach ($arr as $value) {
    $teams[] = trim($value);
}

$randTeams = $teams;

shuffle($randTeams);
shuffle($teams);

$i = 1;
$arr = [];
foreach ($randTeams as $team) {
    foreach ($teams as $t) {
        if ($team != $t) {
            $i++;
            $arr[] = "<tr>
            <td>$team</td>
            <td>- : -</td>
            <td>$t</td>
        </tr>";
        }
    }
}

shuffle($arr);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div style="text-align: center;">
        <?php
        $i = 1;
        $tour = 1;
        $count = count($arr);
        for ($i = 0; $i < $count; $i++) {
            if ($i % 10 == 0) {
        ?>

                <table class='table' border="1" width="500" style="border-collapse:collapse;">
                    <caption><?php echo "<h1>Тур $tour</h1><br>"; ?></caption>

                    <tr>
                        <th>Хозяева</th>
                        <th>Счет</th>
                        <th>Гости</th>
                    </tr>
                    <tbody>
                <?php
                echo $arr[$i];
                $tour++;
            } else {
                echo $arr[$i];
            }
        }
                ?>
                    </tbody>
                </table>
    </div>
</body>

</html>