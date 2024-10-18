<?php
$isIndex = $_SERVER['REQUEST_URI'] === '/index.php' || $_SERVER['REQUEST_URI'] === '/';
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="<?= $isIndex ? '/' : '../../'; ?>">
            <img src="../../assets/images/Xdebug_Logo.svg" alt="Xdebug" width="117" height="60">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <?php
                    if ($isIndex) {
                        echo '
                        <li class="nav-item">
                            <a class="nav-link" href="./templates/xdebug-info.php">Xdebug Info</a>
                        </li>';
                    } else {
                        echo '
                        <li class="nav-item">
                            <a class="nav-link" href="../../">Homepage</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="./xdebug-info.php">Xdebug Info</a>
                        </li>';
                    }
                ?>
                <!-- External links below -->
                <li class="nav-item">
                    <a class="nav-link" href="https://medium.com/@arthur.gorden_83247/xdebug-configuration-phpstorm-docker-desktop-817da3005556" target="_blank">Medium Article</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
