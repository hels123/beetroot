<?php
$url = parse_url($_REQUEST['url']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="#" method="get">
    <div class="url">
        <lable>Parsing URL:</lable>
        <input type="text" name="url" autofocus>
    </div>
    <div class="url">
        <textarea name="text" cols="30" rows="10"><?php var_dump($url);?></textarea>
    </div>
    <button type="submit">GO</button>
</form>
</body>
</html>