<?php
//Aqui pego os valores inseridos no input e coloco na variavel nota1 e nota2.
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];
$nota4 = $_POST['nota4'];

//Aqui é feito o calculo da nota.
$soma = ($nota1 + $nota2 + $nota3 + $nota4);
$media = ($soma) / 4;
if ($media >= 6){
    echo "<script>alert('Aprovado com $media pontos');</script>";
} else { 
    echo "<script>alert('Reprovado com apenas $media pontos');</script>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css"> 
    <title>Calculo de notas</title>
</head>

<body>
    <form method="POST">
        <h1>Sistema de notas</h1>

        <label>
            Insira a primeira nota: <input type="text" name="nota1" required>
        </label>
        <br>
        <br>
        <label>
            Insira a segunda nota: <input type="text" name="nota2" required>
        </label>
        <br>
        <br>
        <label>
            Insira a terceira nota: <input type="text" name="nota3" required>
        </label>
        <br>
        <br>
        <label>
            Insira a quarta nota: <input type="text" name="nota4" required>
        </label>

        <button type="submit">CALCULAR</button>
    </form>
</body>

</html>