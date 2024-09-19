<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<h1>Contadores</h1>
<p>Este contador va del 1 al 100</p>
    <?php
        for ($i=1; $i <=100 ; $i++) { 
            if ($i==100) {
                echo $i;            
            }else{
                echo $i.', ';
            }
            
        }

        echo '<br>';
        echo '<p> Este otro va del 10 al 0:</p>';

        $cont=10;
        while ($cont >=1) {
            echo $cont--;
            if($cont>=1){
                echo '-';
            }
        }
    ?>
</body>

</html>