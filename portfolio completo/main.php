<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $seunome = $_POST["seu nome"];
    $seumail = $_POST["seu mail"];
    $seunúmero = $_POST["seu número"];
    $Deixeumamensagem = $_POST["Deixe uma mensagem"];

    // Configurar informações do servidor SMTP e enviar o email
    $para = "jpximenesdq@gmail.com"; 
    $corpo_mensagem = "seu nome: $seunome\n";
    $corpo_mensagem .= "seu mail: $seumail\n";
    $corpo_mensagem .= "seu número: $seunúmero\n";
    $corpo_mensagem .= "Deixe uma mensagem:\n$Deixeumamensagem\n";

    // Enviar o email
    mail($para, $assunto, $corpo_mensagem);

    // Redirecionar de volta para a página do formulário com uma mensagem de sucesso
    header("Location: index.html?envio=success");
} else {
    // Redirecionar de volta para a página do formulário com uma mensagem de erro
    header("Location: index.html?envio=error");
}
?>
