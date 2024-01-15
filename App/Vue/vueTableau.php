<?php ob_start()?>

    
        <main id="main-content">
            <nav>
                <svg id="croix" xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
                    <line x1="31.0607" y1="1.06066" x2="2.06066" y2="30.0607" stroke="black" stroke-width="3"/>
                    <line y1="-1.5" x2="41.0122" y2="-1.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 3 0)" stroke="black" stroke-width="3"/>
                </svg>
                <ul>
                    <li id="tableau"><a href="/hippocheer/utilisateur/tableau">Mon tableau</a></li>
                    <li id="rewards">Récompenses</li>
                    <li id="pratiques">Bonnes pratiques</li>
                    <li id="history">Historique</li>
                </ul>
            </nav>
            <div id="en-tete-main"><img id="menu" src="http://localhost/HippoCheer/Public/asset/images/🦆 icon _burger menu left_.svg">
                
            </div>
                <table>
                    <tr><td>Lundi</td> <td>Mardi</td> <td>Mercredi</td> <td>Jeudi</td> <td>Vendredi</td></tr>
                    <tr></tr>
                
                </table>
                
        </main>
    

<?php $content = ob_get_clean()?>
