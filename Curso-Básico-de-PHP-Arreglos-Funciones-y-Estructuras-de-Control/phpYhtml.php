<?php

$zorritos = ["https://d7lju56vlbdri.cloudfront.net/var/ezwebin_site/storage/images/_aliases/img_1col/noticias/el-zorro-rojo-actual-deriva-de-una-unica-especie-extinta/8242423-1-esl-MX/El-zorro-rojo-actual-deriva-de-una-unica-especie-extinta.jpg","https://t2.ea.ltmcdn.com/es/posts/4/0/0/curiosidades_de_los_zorros_26004_orig.jpg","https://misanimales.com/wp-content/uploads/2017/11/razas-de-zorros.jpg"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-html</title>
</head>
<body>
    <h1>Hola mundo esto es HTML desde php</h1>

    <?php foreach($zorritos as $zorrito){ ?>
        <img src="<?php echo $zorrito ?>">
    <?php } ?>
</body>
</html>