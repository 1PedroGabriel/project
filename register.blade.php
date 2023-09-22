<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
</head>


<style>
    body {
        background-color: rgb(0, 0, 0);
    }

    .formulario {

        background-color: rgb(234, 234, 234);
        box-shadow: 2px 2px 2px gray ;
        padding: 20px;
        margin: 50px auto;

        text-align: center;
        height: 600px;
        width: 200px;
        border-radius: 20px;

    }
    
    .input-logs {

        display: table-column;
    }
</style>

<body>

<div >
    
    
        <div class="formulario">
            <h2>Cadastrar</h2>
            <form action="/cadastro" method="POST" class="inputlogs">
    
                @csrf
                <input name="name" type="text" placeholder="Nome" >
                <input name="email" type="text" placeholder="Email" >
                <input name="password" type="text" placeholder="Senha">
                <button>Cadastro</button>
            </form>
        </div>
</div>


</body>
</html>