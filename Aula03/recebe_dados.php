<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebe Dados</title>
</head>
<body>
    <?php
        $nome = htmlspecialchars($_POST['nome']);
        $email = $_POST['email'];
        $idade = $_POST['idade'];

    
        $ano = date('Y');

        $idadeano = $ano - $idade ;
    ?>
    <p>O nome é: <?php echo $nome; ?></p>
    <p>O email é: <?php echo $email; ?></p>
    <p>O idade é: <?php echo $idade; ?></p>
    <p>O Ano em que vc nasceu é: <?php echo $idadeano; ?></p>

    <?php
    if ($idade > 18){
            echo "<p style='color:green;'> Paraben vc é maior de idade</p>";
        }else{
            echo "<p style='color:red;'> Você é menor de idade</p>";
        }
    ?>
    
    
</body>
</html>