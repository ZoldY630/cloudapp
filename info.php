<?php
header("Content-type: text/html; Charset=UTF-8;");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Состав бригады</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        table { border-collapse: collapse; width: 60%; }
        th, td { border: 1px solid #333; padding: 8px 16px; }
        th { background-color: #4472C4; color: white; }
    </style>
</head>
<body>
<h1>Лабораторная работа №5–6</h1>
<h2>Состав бригады</h2>
<table>
  <tr><th>№</th><th>ФИО</th><th>Роль</th></tr>
  <tr><td>1</td><td>Логунов Никита Фёдорович</td><td>Разработчик</td></tr>
</table>
<h2>Вариант задания</h2>
<p><strong>ОС:</strong> openSUSE Leap 15.5, веб-сервер — Nginx, PHP 8.2</p>
<p>Дата обращения: <?php echo date('d.m.Y'); ?></p>
</body>
</html>
