<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>

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
</head>
<body>

    @auth
        <p>Parabens tu ta entrado.</p>
    
        <form action="/logout" method="POST">
            @csrf
            <button>Log out</button>
        </form>
   
    @else


     <div class="formulario">
         
            <div>
            <h2>Login</h2>
            <form action="/login" method="POST" class="inputlogs">
         
                @csrf
                <input name="loginemail" type="text" placeholder="Email" >
                <input name="loginpassword" type="text" placeholder="Senha">
                <button>Login</button>
            </form>

            <form action="/gotore" method="POST">
                @csrf
                <button>Ainda não me registrei</button>

            </form>
            </div>           
            
             
     </div>

    @endauth

 

</body>
</html>
