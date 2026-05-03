<?php
header("Content-type: text/html; Charset=UTF-8;");
$sxml = simplexml_load_file("books.xml");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Каталог книг</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 30px; }
    table { border-collapse: collapse; width: 100%; }
    th { background: #4472C4; color: #fff; padding: 8px; }
    td { border: 1px solid #ccc; padding: 8px; }
    tr:nth-child(even) { background: #f2f2f2; }
  </style>
</head>
<body>
<h1>Каталог книг</h1>
<table>
  <tr><th>Автор</th><th>Название</th>
      <th>Год издания</th><th>Цена, руб.</th></tr>
<?php foreach ($sxml->book as $book): ?>
  <tr>
    <td><?= $book->author ?></td>
    <td><?= $book->title ?></td>
    <td><?= $book->pubyear ?></td>
    <td><?= $book->price ?></td>
  </tr>
<?php endforeach; ?>
</table>
</body></html>
