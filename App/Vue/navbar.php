<?php ob_start()?>
<?php if(isset($_SESSION['connected'])): ?>
<header>
        <h1>HippoCheer</h1>
            <a href="/hippocheer"><div id="Logo"><img src="/hippocheer/Public/asset/images/hippos5-removebg-preview.png"></div></a>
                <a href="/hippocheer/utilisateur/profil"><div id="connected">
                    
                    <i class="fa-solid fa-user fa-xl" style="color: #696969;"></i>
                    <p><?=$_SESSION["pseudo"]?></p>
                    
                </div></a>
                <div id="fonction_theme">
                    <div id="titre_choix"><h6>Choisis ton thème !</h6></div>
                    
                    
                    <div id="theme">
                        <div id="theme1" class="btn-theme"></div>
                        <div id="theme2" class="btn-theme"></div>
                        <div id="theme3" class="btn-theme"></div>
                        <div id="theme4" class="btn-theme"></div>
                    </div>
                </div>
    </header>

    <?php else:?>

<header>
        <h1>HippoCheer</h1>
            <div id="Logo"><img src="/hippocheer/Public/asset/images/hippos5-removebg-preview.png"></div>
                <div id="fonction_theme">
                    <div id="titre_choix"><h6>Choisis ton thème !</h6></div>
                    <div id="theme">
                        <div id="theme1" class="btn-theme"></div>
                        <div id="theme2" class="btn-theme"></div>
                        <div id="theme3" class="btn-theme"></div>
                        <div id="theme4" class="btn-theme"></div>
                    </div>
                </div>
    </header>
<?php endif;?>
<?php $navbar = ob_get_clean()?>
