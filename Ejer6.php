<!DOCTYPE html>
<html>
<head>
    <title>EJEMPLOS SENCILLOS ARRAYS</title>
</head>
<body>
    <h1>EJEMPLOS SENCILLOS ARRAYS</h1>


    <?php
    $notas=["dffs","a","ass",5.6,3.4,10,7,8.5,7,"f","B","dasss","a",8,5,6.5,8.9,9.9,4.3,0,1,7];
    $max=0;
    $min=10.1;
    var_dump($notas);
    $count=count($notas);
    
    for($i=0;$i<$count;$i++){
        if(!is_numeric($notas[$i])){
            array_splice($notas,$i,1);
            $count--;
        }elseif($notas[$i]>$max){
            $max=$i;
            if($notas[$i]<$min){
                $min=$i;
            }
        }elseif($notas[$i]<$min){
            $min=$i;
        }
    }

    array_splice($notas,$min,1);
    array_splice($notas,$max,1);

    var_dump($notas);

    ?>
</body>
</html>