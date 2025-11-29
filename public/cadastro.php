<?php
// cadastro.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Aqui você processaria o cadastro no banco de dados
    echo "<script>alert('Dados enviados para cadastro!');</script>";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar - UniFio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div style="background-color: #F09D2D; height: 150px; width: 100%;"></div>

    <div class="register-wrapper">
        
        <div class="profile-section">
            <div class="profile-pic-container">
                <img src="https://img.freepik.com/vetores-premium/icone-de-perfil-de-avatar-padrao-imagem-de-usuario-de-midia-social-icone-de-avatar-cinza-silhueta-de-perfil-em-branco-ilustracao-vetorial_561158-3383.jpg?semt=ais_hybrid&w=740&q=80" alt="Foto de Perfil">
            </div>
            
            <button class="btn-upload" type="button" onclick="document.getElementById('fileInput').click()">
                Selecionar foto de perfil
            </button>
            <input type="file" id="fileInput" style="display: none;">

            <p class="helper-text">
                A foto precisa ser em um local iluminado e o rosto bem visível. 
                A foto precisa ser em um local iluminado e o rosto bem visível.
                (Texto de ajuda sobre a qualidade da foto).
            </p>
        </div>

        <div class="form-section">
            <form method="POST" action="cadastro.php">
                <input type="text" name="nome" class="form-input" placeholder="NOME COMPLETO" required>
                
                <input type="email" name="email" class="form-input" placeholder="E-MAIL INSTITUCIONAL" required>
                
                <div style="display: flex; gap: 20px;">
                    <input type="password" name="senha" class="form-input" placeholder="SENHA" required>
                    <input type="password" name="confirma_senha" class="form-input" placeholder="CONFIRMAR SENHA" required>
                </div>

                <input type="text" name="matricula" class="form-input" placeholder="ID DE MATRÍCULA" required>

                <div class="form-actions">
                    <button type="submit" class="btn-orange" style="font-size: 1.2rem; text-transform: uppercase;">REGISTRAR</button>
                    
                    <div style="text-align: center; font-weight: bold; margin: 10px 0;">OU</div>
                    
                    <a href="login.php" class="btn-blue">JÁ POSSUI UMA CONTA?</a>
                </div>
            </form>
        </div>

    </div>

    <footer>
       
    </footer>

</body>
</html>