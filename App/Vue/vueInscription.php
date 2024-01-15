<?php ob_start()?>

    <main id="main-content">
    <nav>
            <svg id="croix" xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
                <line x1="31.0607" y1="1.06066" x2="2.06066" y2="30.0607" stroke="black" stroke-width="3"/>
                <line y1="-1.5" x2="41.0122" y2="-1.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 3 0)" stroke="black" stroke-width="3"/>
              </svg>
            <ul>
                <li id="tableau"><a href="./utilisateur/tableau">Mon tableau</a></li>
                <li id="rewards">Récompenses</li>
                <li id="pratiques">Bonnes pratiques</li>
                <li id="history">Historique</li>
            </ul>
        </nav>
        <div id="en-tete-main"><img id="menu" src="/hippocheer/Public/asset/images/🦆 icon _burger menu left_.svg">
        <h4 id="titre-inscription">Inscription </h4>
        </div>
        <form action="" method="post" id="formulaire_inscription">
            <label for="nom_utilisateur">Nom:</label>
                <input type="text" name="nom_utilisateur" id="">
            <label for="prenom_utilisateur">Prénom:</label>
                <input type="text" name="prenom_utilisateur" id="">     
            <label for="mail_utilisateur">E-mail:</label>
                <input type="mail" name="mail_utilisateur" id="">     
            <label for="pseudo_utilisateur">Pseudo:</label>
                <input type="text" name="pseudo_utilisateur" id="">     
            <label for="password_utilisateur">Mot de passe:</label>
                <input type="password" name="password_utilisateur" id="">     
            <label for="confirm_password">Confirmer mot de passe:</label>
                <input type="password" name="confirm_password" id="">     
        
        <input type="submit" value="S'inscrire" name="submit" id="sub">
        </form>
        <?=$error?>
    </main>

<?php $content = ob_get_clean()?>