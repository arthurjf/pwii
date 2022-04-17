<div class="navbar navbar-dark bg-primary">
    <div class="barrahorizontal">
        <div class="barrahorizontal-centro">
            <a>
                <img src="img/escola.png">
                SGTE
            </a>
        </div>
        <div class="barrahorizontal-deslogar">
            Olá, <?= $_SESSION['usuario']['nome'] ?>
            <a href="deslogar.php" class="menu-deslogar">
                <img src="img/logout.png">
                Sair da conta
            </a>
        </div>
    </div>
</div>