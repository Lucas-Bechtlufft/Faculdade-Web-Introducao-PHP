<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php  echo "Olá Mundo!";?></title>
</head>
<body>

    <h1>Variaveis em PHP</h1>
    <div>
        <p>
            <?php
            $valor_a =1;
            $valor_b =2;
            $soma= $valor_a+$valor_b+0.0;
            var_dump($soma);
           // echo '$valor_a $valor_b $soma. <br>';
            echo "$valor_a $valor_b $soma". "<br>" ;
            $valor_a="A";
            var_dump($valor_a);
            ?>
        </p>
    </div>

    <h1>Operadores</h1>
    
    <div>
    <h2>Lógicas de Programação em PHP</h2>
    <p>
        <?php
        $a = 1;
        $b = "1";
    //Operador == realiza conversões
        if ($a==$b){
            echo "A é igual a B <br>";
        }else{
            echo "A é diferente B <br>";
        }
    //Operador === não realiza conversões
            if ($a===$b){
                echo "A é igual a B <br>";
            }else{
                echo "A é diferente B <br>";
            }

            if($a!=$b){
                echo "A é diferente de B <br>";
            }else{
                echo "A é igual de B <br>";
            }
    //Função
            function soma($a, $b){
                return $a+$b;
            }

            echo soma(3,4);

            for($i=0; $i<10; $i++){
                echo "$i <span> Olá Mundo </span><br>";
            }


            function Fat($num){

                if($num >=0){
                    $fat = 1;
                    while($num>0){
                        $fat = $fat * $num;
                        $num--;
                    }
                    return $fat;
                } else{
                    return -1;
                }
            }
            echo Fat(3);

        ?>
        </p>
    </div>


</body>
</html>