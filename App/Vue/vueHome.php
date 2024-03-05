<?php ob_start()?>
    <?php if(isset($_SESSION['connected'])):?>
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
        <h4 id="titre-main">Bienvenue sur HippoCheer !</h4>
        </div>
        <p class="main-txt">Le but d'HippoCheer est de créer un lien et un suivi entre les bonnes actions et les bons comportement de votre enfant, ainsi que les recompenses et les remerciements que vous lui accorder.</p>
        

        <p>Encourager, valoriser et récompenser, sont les maître mots d'HippoCheer.</p>
        
            
        <p>Pour une approche réussis de la méthode, n'oublie pas, “Un point après l'autre”.</p>
            
    </main>
    <?php else: ?>
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
        <h4 id="titre-main">Bienvenue sur HippoCheer !</h4>
        </div>
        <p class="main-txt">Le but d'HippoCheer est de créer un lien et un suivi entre les bonnes actions et les bons comportement de votre enfant, ainsi que les recompenses et les remerciements que vous lui accorder.</p>
        

        <p>Encourager, valoriser et récompenser, sont les maître mots d'HippoCheer.</p>
        
            
        <p>Pour une approche réussis de la méthode, n'oublie pas, “Un point après l'autre”.</p>
            
    </main>
    <?php endif ?>
    

<?php $content = ob_get_clean()?>
