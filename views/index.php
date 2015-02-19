<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>News page</title>
</head>
<body>
<table>
    <tr>
       <th>Новостная лента</th>
    </tr>
    <?php foreach ($items as $item): ?>
    <tr>
        <td><?php echo $item['title']; ?></td>
    </tr>
    <tr>
        <td><?php echo $item['newscontent']; ?></td>
    </tr>
    <tr>
        <td><?php echo $item['datenews']; ?></td>
    </tr>
</table>
<a href="./views/AddNewsForm.html">Добавить новость</a>
</body>
</html>
?>