<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Post</title>
</head>
<body>
    <form action="<?php echo "http://localhost/crud/posts/new_post/0" ?>" method="POST">
        <label for="">title</label>
        <input type="text" id="" name="title">
        <label for="">author</label>
        <input type="text" id="" name="author">
        <label for="">date</label>
        <input type="date" id="" name="submission_date">
        <input type="submit" value="enviar">
    </form>
</body>
</html>