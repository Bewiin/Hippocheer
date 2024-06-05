<!DOCTYPE html>
<html lang=en>
<head>
    <meta charset=UTF-8>
    <meta name=viewport content="width=device-width, initial-scale=1.0">
    <?php foreach ($css as $value):?>
    <link rel=stylesheet href="/HippoCheer/Public/asset/style/<?=$value?>">
    <?php endforeach ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php foreach ($js as $value):?>
    <script src="/HippoCheer/Public/asset/script/<?=$value?>" defer></script>
    <?php endforeach ?>
    
    <title><?=$title?></title>
</head>
<body>
    <?=$navbar?>
    <?=$content?>
    <?=$footer?>
</body>
</html>
