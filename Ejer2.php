<!DOCTYPE html>
<html>
<head>
    <title>EJEMPLOS SENCILLOS ARRAYS</title>
</head>
<body>
    <h1>EJEMPLOS SENCILLOS ARRAYS</h1>


    <?php
    $arry=[1,2,3,4,5,6,7,8,9,7,2,1,4,5];
    $duplicados=[];
    $count=count($arry);
    var_dump($arry);
    
    for($i=0;$i<$count;$i++){
        for($o=$i + 1;$o<$count;$o++){
        if($arry[$i]==$arry[$o]){
            $duplicados[]=$arry[$o];
        }}
    }
    var_dump($duplicados);
    ?>
</body>
</html>