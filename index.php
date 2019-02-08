<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Login</title>
    <meta http-equiv="Content-Type" content="text/html; charset=uft-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    
</head>
<body>
 <div class="body">
    <div class="header">
        <!-- <a href="index.php"> -->
            <img src="assets/logo.png" class="logo" />
        </a>
    </div>
    <div class="form">
        <form action="login.php" method="post">
        
            <div class="box">
                <div class="content">
                    
                    <input name="login" id="login" class="form-control" type="text" placeholder="Login" required onfocus>
                    <input name="senha" id="senha" class="form-control" type="password" placeholder="Senha" required>                
                    <div class="action">
                        <button class="btn-flat" id="submit">Login</button>
                        <button >Cadastre-se</button>
                    </div>                
                </div>
         
            </div>

        </form>
    </div>
</div>
</body>
</html>