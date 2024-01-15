<?php
    namespace App\Controller;
    use App\Vue\Template;

    class TableauController{
        public function getTableau(){
            $error = '';
            Template::render('navbar.php', 'Accueil', 'vueTableau.php', 'footer.php', 
            $error, ['script.js', 'main.js'], ['style.css', 'main.css']);
        
    }
    
    }


?>