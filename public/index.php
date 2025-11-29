<?php
// login.php
$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    // Simulação simples de validação
    if (!empty($email) && !empty($senha)) {
        $mensagem = "Tentativa de login recebida!";
    } else {
        $mensagem = "Por favor, preencha todos os campos.";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - UniFio Achados e Perdidos</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

    <header class="header-bar">
        <div class="logo-area">
            Uni<span style="color:#1A4BCB">Fio</span> <small style="font-size:0.5em; color:black">Achados e Perdidos</small>
        </div>
    </header>

    <div class="login-container">
        <div class="login-overlay"></div>
        
        <div class="login-card">
            <form method="POST" action="login.php">
                
                <div class="input-group">
                    <input type="email" name="email" placeholder="E-mail Institucional" required>
                    
                </div>

                <div class="input-group">
                    <input type="password" name="senha" placeholder="Senha" required>
                   
                </div>

                

                <button type="submit" class="btn-orange">ENTRAR</button>

                <?php if($mensagem): ?>
                    <p style="color: white; margin-top:10px; font-size:0.8rem;"><?php echo $mensagem; ?></p>
                <?php endif; ?>

                <div class="signup-link">
                    Ainda não tem uma conta? <a href="cadastro.php" style="color: #F09D2D; font-weight:bold;">Cadastre-se.</a>
                </div>
            </form>
        </div>
    </div>

    <footer>
      
    </footer>

</body>
</html>