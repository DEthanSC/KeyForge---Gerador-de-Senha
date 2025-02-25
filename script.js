function geradorSenha() {
    
    const comprimento = document.getElementById('comprimento').value;
    const incluirNumeros = document.getElementById('numeros').checked;
    const incluirLetras = document.getElementById('letras').checked;
    const incluirMaiusculas = document.getElementById('maiuscula').checked;
    const incluirEspecial = document.getElementById('especial').checked;

    let senha = "";
    let letras = "abcdefghijklmnopqrstuvwxyz";
    let numeros = "0123456789";
    let maiusculas = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    let especiais = "!@#$%^&*()_+-=";

    if (incluirLetras) {
        senha += letras; // adiciona letras minusculas
    }
    if (incluirMaiusculas) {
        senha += maiusculas; // adiciona letras maiusculas
    }
    if (incluirNumeros) {
        senha += numeros; // adiciona numeros
    }
    if (incluirEspecial) {
        senha += especiais; // adiciona caracteres especiais
    }

    if (senha.length === 0) {
        alert("Selecione ao menos uma opção para gerar a senha");
        return; // Não gerar senha se nenhuma opção for selecionada
    }

    let senhaGerada = '';
    // cria senha colocando caracteres aleatórios, de acordo com o comprimento informado pelo usuário
    for (let i = 0; i < comprimento; i++) {
        const aleatorio = Math.floor(Math.random() * senha.length);
        senhaGerada += senha[aleatorio];
    }

    document.getElementById("senhaGerada").innerText = senhaGerada;
}