<?php
header("Content-type: text/html; Charset=UTF-8;");
$sxml = simplexml_load_file("cloud.xml");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Услуги облачного сервиса Cloud.ru</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 30px; background: #f9f9f9; }
    h1 { color: #2c3e50; }
    table { border-collapse: collapse; width: 100%; background: white; }
    th { background: #2c3e50; color: white; padding: 10px; text-align: left; }
    td { border: 1px solid #ddd; padding: 8px 12px; }
    tr:nth-child(even) { background: #ecf0f1; }
    .price { font-weight: bold; color: #27ae60; }
  </style>
</head>
<body>
<h1>Перечень услуг облачного сервиса Cloud.ru</h1>
<table>
  <tr>
    <th>Услуга</th>
    <th>Категория</th>
    <th>Цена (руб./мес.)</th>
    <th>Описание</th>
  </tr>
<?php foreach ($sxml->service as $service): ?>
  <tr>
    <td><?= htmlspecialchars($service->name) ?></td>
    <td><?= htmlspecialchars($service->category) ?></td>
    <td class="price"><?= htmlspecialchars($service->price_month) ?></td>
    <td><?= htmlspecialchars($service->description) ?></td>
  </tr>
<?php endforeach; ?>
</table>
<p><em>Источник: Cloud.ru — официальный сайт, 2024</em></p>
</body>
</html>
