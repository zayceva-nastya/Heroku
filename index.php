<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: yellowgreen;
        }

        h1 {
            text-align: center;
            color: pink;
        }
        table tr td{
            padding: 10px;
            color: red;
            background-color: orange;
        }
        table{
            border: 3px solid green;
        }
    </style>
</head>

<body>
    <h1>Don't worry, be happy!</h1>
  
    <?php

    // Username: byXdqX8acm
    // Database name: byXdqX8acm
    // Password: g6R6prOJNQ
    // Server: remotemysql.com
    // Port: 3306

    $link = mysqli_connect(
        "remotemysql.com",
        "byXdqX8acm",
        "g6R6prOJNQ"
    )
        or die("не удалось подключиться");

    mysqli_select_db(
        $link,
        "byXdqX8acm"
    )
        or die("Не удалось выбрать БД");

    $result = mysqli_query(
        $link,
        "Select * From test"
    ) or die("Не удалось выполнить запрос");

    echo "<center><table border='2'>\n";

    while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
        echo "<tr>";
        echo "<td>" . $row[0] . "</td>";
        echo "<td>" . $row[1] . "</td>";
        echo "<td>" . $row[2] . "</td>";
        echo "</tr>";
    }
    echo "</table></center>\n";

    mysqli_free_result($result);

    mysqli_close($link);

    ?>
</body>

</html>