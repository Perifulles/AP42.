<!DOCTYPE html>
<html>
<head>
    <title>EJEMPLOS SENCILLOS ARRAYS</title>
</head>
<body>
    <h1>EJEMPLOS SENCILLOS ARRAYS</h1>


    <?php
    $arry=[1,2,3,4,5,6,7,8,9];
    $arry2=[];
    var_dump($arry);
    $count=count($arry);
    
    for($i=0;$i<$count;$i++){
    $arry2[]=$arry[$count-$i-1];
    }
    var_dump($arry2);
    ?>
</body>
</html>