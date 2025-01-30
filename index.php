<?php
    include_once __DIR__ . './src/header.inc.php';
    include_once __DIR__ . './src/connect_bdd.inc.php';
?>
<body>
    <header>
        <h1>PHP - articles and post</h1>
    </header>
    <main>
        <!-- partie dynamique: date et version -->
        <h2>Nous sommes le 15/12/2022 - 10:17</h2>
            <p>
           

                Mise à jour PHP 8.1.10<br>
            </p>
        <!-- end -->
        <!-- structure d'affichage pour les articles -->
        
        <!--itération avec la bdd -->
    <article>
        <h2>
            <a href="#">
            Javascript</a>
            <!--
            la méthode strip_tags() permet de filtrer les caractère 
            illégaux
            -->
        </h2>
        <p>
            JavaScript est un langage de programmation de scripts principalement employé dans les pages web interactives et à ce titre est une partie essentielle des applications web. Avec les langages HTML et CSS, JavaScript est au cœur des langages utilisés par les      

        </p>
        <time datetime="2022-10-14 12:27:26">
            Date de modification : 2022-10-14 12:27:26
        </time>

    </article>
    
    <!--
    itération avec la bdd 
    -->
    <article>
        <h2>
            <a href="#">
            Le PHP</a>
            <!-- 
                la méthode strip_tags() permet de filtrer les caractère 
            illégaux
        -->
        </h2>
        <p>
            PHP: Hypertext Preprocessor, plus connu sous son sigle PHP, est un langage de programmation libre, principalement utilisé pour produire des pages Web dynamiques via un serveur HTTP, mais pouvant également fonctionner comme n'importe quel langage interprété de façon locale. PHP est un langage       

        </p>
        <time datetime="2022-10-14 12:28:09">
            Date de modification : 2022-10-14 12:28:09
        </time>

    </article>
    
 
    
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