<?php
    include_once __DIR__ . '/src/header.inc.php';
    include_once __DIR__ . '/src/connect_bdd.inc.php';
?>
<body>
    <header>
        <h1>PHP - articles and post</h1>
    </header>
    <main>
        <?php
            include_once __DIR__ . '/article.php';
        ?>
        <!-- partie dynamique: date et version -->
        <h2>Nous sommes le <?= date("d/m/Y - H:i:s")?></h2>
            <p>
           

                Mise à jour PHP <?= phpversion()?><br>
            </p>
        <!-- end -->
        <!-- structure d'affichage pour les articles -->
        
        <!--itération avec la bdd -->
        <?php
            include_once __DIR__ . '/src/connect.inc.php';
        ?>  
    <!--end -->
    <nav>
        <a class="button" href="#">Rechercher les articles</a>
    </nav>
    </main>
    <footer>
        <p>&copy; - MIT - 15/12/2022 - 10:17</p>
    </footer>
   
</body>
</html>