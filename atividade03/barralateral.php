<div class="telaprincipal">
    <div class="sidebar">
        <ul>
            <div class="sidebar sidebar-title">
                <li>
                    <p>Olá, <?= $_SESSION['usuario']['nome'] ?></p>
                </li>
            </div>
            <?php include("listarmodulos.php"); ?>
            <li>
                <a href="deslogar.php">
                    <img src="img/logout.png">
                    Sair
                </a>
            </li>
        </ul>
    </div>
    <div class="telaprincipal-direita">