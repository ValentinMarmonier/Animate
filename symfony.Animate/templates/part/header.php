<?php

// JE RECUPERE LES URLS DES PAGES GRACE AU NOM DE LEUR ROUTE
$urlAccueil = $this->generateUrl("accueil");
$urlContact = $this->generateUrl("contact");

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>MON SITE SYMFONY</title>
        <link rel="stylesheet" href="<?php echo $urlAccueil ?>assets/css/style.css" type="text/css" />
        

    </head>
    <body>
        <header>
            <h1>Site Animate</h1>
            <nav>
                <ul>
                    <li><a href="<?php echo $urlAccueil ?>">Accueil</a></li>
                    <li><a href="<?php echo $urlContact ?>">Contact</a></li>
                </ul>
            </nav>
        </header>
        <main>
