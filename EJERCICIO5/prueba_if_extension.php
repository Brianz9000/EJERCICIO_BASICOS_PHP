<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        $nota1=45;
        $nota2 =20;
        $nota3 =9;

        if ($nota1>$nota2 && $nota1>$nota3) {
            echo 'La nota 1 ('.$nota1.') es mayor';
        }else if($nota2 >$nota1 && $nota2 >$nota3){
            echo 'La nota 2 ('.$nota2.') es mayor';

        }else{
            echo 'La nota 3 ('.$nota3.') es mayor';
        }
    ?>
</body>

</html>