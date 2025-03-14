<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estiloop.css">
    <link rel="icon" type="image/png" href="img/folha.png" sizes="16x16">
    <title>NutriFácil</title>
</head>
<body>
    <header class="cabecalho">
        <div class="logo">
            <h1>NutriFácil</h1>
        </div>

        <nav class="menu">
            <a class="sair" href="../login/login.html">Sair</a>
        </nav>
    </header>

    <main>
        <div class="tt">
            <?php echo "<h1>Bem-vindo, " . htmlspecialchars($_SESSION['username']) . "!</h1>"; ?>
            <h1>QUAL A SUA META?</h1>
        </div>
        <div class="opcoes">
            <a class="opcao-link" href="../principal/perder.html">
                <section class="Perder">
                    <div class="div-img">
                        <img class="img-perder" src="../img/emagrecimento_emagrecereperderpeso-1024x576.webp">
                    </div>
                    <div class="textos">
                        <h3 class="tt-Perder">Perder Peso</h3>
                        <p>Reduza medidas de forma saudável e sustentável.</p>
                    </div>
                </section>
            </a>
            <a class="opcao-link" href="../principal/manter.html">
                <section class="manter">
                    <div class="div-manter">
                        <img class="img-manter" src="../img/images.jpeg">
                    </div>
                    <div class="textos">
                        <h3 class="tt-manter">Manter Peso</h3>
                        <p>Equilibre sua alimentação para manter o peso ideal.</p>
                    </div>
                </section>
            </a>
            <a class="opcao-link" href="../principal/ganhar.html">
                <section class="ganhar">
                    <div class="div-img">
                        <img class="img-ganhar" src="../img/musculo.webp">
                    </div>
                    <div class="textos">
                        <h3 class="tt-ganhar">Ganhar Peso</h3>
                        <p>Aumente sua massa de forma nutritiva e eficaz.</p>
                    </div>
                </section>
            </a>
        </div>
    </main>
</body>
</html>