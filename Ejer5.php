<!DOCTYPE html>
<html>
<head>
    <title>EJEMPLOS SENCILLOS ARRAYS</title>
</head>
<body>
    <h1>EJEMPLOS SENCILLOS ARRAYS</h1>


    <?php
    $arry=[1,1,1,1,3,4,5,6,7,8,9,7,2,1,4,5,3,3,3,3,3,2,2,5,4,5,6,7,8,9,3,4,6,4,3,2,2,4,6,8,9,9,9,4,3,9,8,7,6,5,4,3,2,1,9,9,9,9,9,9];
    $repes=[];
    var_dump($arry);
    $count=count($arry);
    
    for($i=0;$i<$count;$i++){
        if(!isset(${"contador$arry[$i]"})){
            ${"contador$arry[$i]"}=0;
            for($o=$i + 1;$o<$count;$o++){
                if($arry[$i]==$arry[$o]){
                    ${"contador$arry[$i]"}++;
                }
            }
            $repes[$i + 1]=${"contador$arry[$i]"};
        }

    }
    var_dump($repes);

    ?>
</body>
</html>