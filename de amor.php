
<?php
session_start();
$_SESSION['user'] = "João";
echo "Bem-vindo, " . $_SESSION['user'] . " <a href='logout.php'>Sair</a>";

// logout.php
session_start();
session_destroy();
echo "Sessão encerrada.";
?>



<form method="post">
  Nome: <input type="text" name="nome">
  Email: <input type="text" name="email">
  <input type="submit">
</form>
<?php
if ($_POST) {
  echo $_POST['nome'] . " - " . $_POST['email'];
}

?>

<form method="get">
  <input type="text" name="texto">
  <input type="submit">
</form>
<?php if (isset($_GET['texto'])) echo $_GET['texto']; ?>



<form method="get">
  <select name="opcao">
    <option value="A">A</option>
    <option value="B">B</option>
  </select>
  <input type="submit">
</form>
<?php if (isset($_GET['opcao'])) echo $_GET['opcao']; ?>



<form method="post">
  <input type="password" name="senha">
  <input type="submit">
</form>
<?php
if ($_POST) {
  echo strlen($_POST['senha']) > 8 ? "Senha válida" : "Senha curta";
}
?>


<?php
echo "Método usado: " . $_SERVER['REQUEST_METHOD'];

?>
<?php
$pessoa = ["nome" => "Ana", "idade" => 20, "cidade" => "SP"];
echo $pessoa["nome"] . ", " . $pessoa["idade"] . ", " . $pessoa["cidade"];
?>

<?php
$nums = [1,2,3,4,5,6,7,8,9,10];
echo array_sum($nums);
?>

<?php
$nomes = ["Ana", "Bia", "Carlos", "João", "Luiza"];
foreach ($nomes as $nome) echo $nome . "<br>";
?>

<?php
$arr = [1,2,3,4,5];
array_push($arr, 6);
print_r($arr);
?>

<?php
echo date("d/m/Y H:i:s");
?>

<?php
setlocale(LC_TIME, 'pt_BR.UTF-8');
echo strftime("%A");
?>


<form method="get">
  <input type="text" name="nome">
  <input type="submit">
</form>
<?php if (isset($_GET['nome'])) echo $_GET['nome']; ?>

<?php
$arr = [1,2,3,4,5];
echo $arr[2]; // valor 3
?>



<form method="post">
  <input type="text" name="idade">
  <input type="submit">
</form>
<?php if ($_POST) echo $_POST['idade']; ?>

<?php
$frutas = ["banana", "maçã", "uva"];
print_r($frutas);
?>

<?php
echo date("Y");
?>

<?php
echo date("m");

?>

<?php
$nomes = ["Ana", "Bia", "Carlos", "João", "Luiza"];
foreach ($nomes as $n) echo "Olá, $n!<br>";
?>

<?php
$nums = [1,2,3,4,5];
$soma = 0;
foreach ($nums as $n) $soma += $n;
echo $soma;

?>






