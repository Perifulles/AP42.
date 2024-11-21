<!DOCTYPE html>
<html>
<head>
    <title>EJEMPLOS SENCILLOS ARRAYS</title>
</head>
<body>
    <h1>EJEMPLOS SENCILLOS ARRAYS</h1>


    <?php
    $arry=[1,2,3,4,5,6,7,8,9,7,2,1,4,5];
    $separados=['pares' => [], 'impares' => []];
    var_dump($arry);
    $count=count($arry);
    
    for($i=0;$i<$count;$i++){
        if($arry[$i]%2==0){
            $separados['pares'][]=$arry[$i];
        }else{$separados['impares'][]=$arry[$i];}
    }
    var_dump($separados);

    ?>
</body>
</html>