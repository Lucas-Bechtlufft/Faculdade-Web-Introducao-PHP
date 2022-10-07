<!--FAZENDO UM FORMULÁRIO DE FATORIAL QUE RESULTA NO MESMO SITE-->

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <p> Digite um número para o programa fatorar:</p>
  <input type="number" name="numeroFatorial" id="">
  <input type="submit" value="Enviar Dados">
</form>

<?php

function Fat($num)
{
  if ($num >= 0) {
    $fat = 1;
    while ($num > 0) {
      $fat = $fat * $num;
      $num--;
    }
    return $fat;
  } else {
    return -1;
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $numero = $_POST["numeroFatorial"];
  echo Fat($numero);
}


?>