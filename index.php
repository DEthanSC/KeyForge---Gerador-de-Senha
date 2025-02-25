<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Senhas</title>
    <link rel="shortcut icon" href="SAFE PASS.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div class="container">
        <h1>Gerador de Senhas</h1>

        <div class="row">
            <!-- Formulário para gerar a senha -->
        <form id="passwordForm">
            <div class="col">
                <!-- Coluna para o comprimento da senha -->
            <label for="comprimento">Comprimento da Senha:</label>
            <input type="number" id="comprimento" name="comprimento" min="1" max="50" value="12" required>

            </div>
            
            <div class="col">
                <!-- Caixa de seleção para incluir letras minúsculas na senha -->      
            <input type="checkbox" id="letras" name="letras" checked>
            <label for="letras">Incluir Letras:</label>
            
            <br>
                <!-- Caixa de seleção para incluir letras maiúsculas na senha -->
            <input type="checkbox" id="maiuscula" name="maiuscula">
            <label for="maiuscula">Incluir Letras Maiúsculas:</label>
        
            <br>

            <!-- Caixa de seleção para incluir numeros na senha -->
            <input type="checkbox" id="numeros" name="numeros">
            <label for="numeros">Incluir Números:</label>

            <br>
             <!-- Caixa de seleção para incluir caracteres especiais na senha -->
            <input type="checkbox" id="especial" name="especial">
            <label for="especial">Incluir Caracteres Especiais:</label>
            
            <br>
            </div>
            <!-- Chama a função e gera a senha-->
            <button type="button" onclick="geradorSenha()">Gerar Senha</button>
        </form>

        </div>
       
        <div class="resultado">
            <h2>Senha Gerada:</h2>
            <p id="senhaGerada">
            <!-- Local onde aparece a senha gerada -->
            </p>
        </div>
    </div>

    <script src="script.js"></script>

</body>
</html>