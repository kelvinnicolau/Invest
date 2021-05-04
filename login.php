<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>INVEST</title>
        
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        
        <!-- CSS -->
        <link rel="stylesheet" href="assets/css/login.css">

    </head>
    <body>
        <section>
            <div class="container">
                <div class="row">
                    <div class="content">
                        <div id="login" class="text-center">
                            <form method="post" action=""> 
                                <h1>Seja Bem-Vindo!</h1> 
                                <p> 
                                    <input id="nome_login" name="nome_login" required="required" type="text" placeholder="E-mail"/>
                                </p>
                                
                                <p>
                                    <input id="email_login" name="email_login" required="required" type="password" placeholder="Senha" /> 
                                </p>
                                
                                <p> 
                                    <input type="submit" value="Entrar" /> 
                                </p>
                                
                                <p class="link">
                                    Não é cadastrado?
                                    <a href="./cadastro.php">Cadastre-se</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>

</html>