<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="ISO-8859-1">
        <title></title>
    </head>
    <body>
        <?php
        if (!isset($_REQUEST['action']))
            $action = 'accueil';
        else
            $action = $_REQUEST['action'];

// vue qui cr�e l?en-t�te de la page
        include("vues/v_entete.php");

        switch ($action) {
            case 'accueil':
                // vue qui cr�e le contenu de la page d?accueil
                include("vues/v_accueil.php");
                break;
           
                
        }

// vue qui cr�e le pied de page
        include("vues/v_pied.php");
        ?>
    </body>
</html>
