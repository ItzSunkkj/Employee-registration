<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="PréPhp.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <style>
* {
    margin: 0;
    padding: 0;
    font-family: consolas;
}



body {
    background: url('https://images4.alphacoders.com/592/592367.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;  
    background-size: cover;
    text-align: center;
    color: #000000;
    font-family: monospace;
    font-size: 30px;
    transition: 0.5s;
}

h1,h3 {
    background-color: rgba(255, 255, 255, 0.171);
    color: white;
    display: inline;
    border-radius: 20px;
    padding: 1,2em;
    text-transform: uppercase;
    letter-spacing: 10px;
    filter: blur(px);
    width: min-content;
}

Label {
    display: block;
    background-color: #000;
    color: white;
}

table,tr,th {
    Border: 1px solid;
     Color: White;
     Padding: 10px
}

table td {
    Border: 1px solid;
    Color: White;
    Padding: 10px"       
}


li,ol{
    display: inline-flex;
    margin-top: 2px;
    margin: 0;
}

::-webkit-scrollbar {
    width: 0;
}

.voltar {
    filter:invert(100%);
}





@keyframes rgb {
    0%,100% {
        filter: hue-rotate(0deg);
    }
    50%{
        filter: hue-rotate(360deg);
    }
    
}


/* ---------------------------------------------- */
/*              Versão para celular               */
/* ---------------------------------------------- */

@media (max-width: 600px) {

    body {
        font-size: unset;
    }

    h1 {
        background-color: rgba(255, 255, 255, 0.171);
        color: white;
        display: inline;
        border-radius: 20px;
        padding: 1,2em;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-size: 20px;
        width: min-content;
    }

    h2 {
        text-align: center;
        font-size: 2px;
    }

    label{
        color: rgb(255, 255, 255);
        font-size: 20px;
        user-select: none;
    }

}

    </style>

</head>
<body>

    <h3>

    <?php

    $host = "localhost";
    $base   = "funcionarios";
    $usuario = "root";
    $senha = "";
    $con = mysqli_connect($host, $usuario, $senha, $base) or die ("Erro de conexão");

    $Nome = $_POST['nome'];
    $Funcao = $_POST['Funcao'];
    $Sal = $_POST['Sal'];


    $sql = "INSERT INTO tb_funcionarios(NOME,FUNCAO,SALARIO) VALUES ('$Nome' , '$Funcao' , '$Sal')"; 

    if (mysqli_query($con, $sql)) {
        echo "Cadastrado com sucesso";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

    ?>

    
    </h3>

    <br>
    <br>

    <Label>O cadastro do(a) funcionario(a) <?php echo"".$Nome." foi feito com sucesso";?></Label>

    <br>
    <br>

    <h1 style="Color: Gray; Text-Transform: none;"><a href="Cadastro.html" class="voltar">Voltar</a></h1>

    </H1>

</body>
</html>

