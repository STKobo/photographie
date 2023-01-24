<header>
            <h1>Mon book</h1>
        </header>
        <section>
            <nav>
                <ul>
                    <li><a href="/">Accueil</a></li>
                </ul>
            </nav>
            <article>
                <?php foreach ($photos as $photo): ?>
                    <img src="photos/<?= $photo->fichier ?>" width="250" />
                    <h2><?= $photo->titre ?></h2>
                <?php endforeach; ?>
            </article>
        </section>
        <footer>
            <p>Mon book - Tous droits réservés</p>
        </footer>
    </body>
</html>