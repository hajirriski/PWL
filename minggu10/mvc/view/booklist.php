<html>
<head></head>
<body>
<table>
<tbody>
<tr><td>Title</td><td>Author</td><td>Description</td></tr>
<link rel="stylesheet" type="text/css" href="css/css.css">
</tbody>
<?php
foreach ($books as $book) {
echo '<tr><td><a href="index.php?book=' .$book->title . '">' . $book->title .'</a></td><td>' .$book->author . '</td><td>' . $book->description . '</td></tr>';
}
?>
</table>
</body>
</html>
