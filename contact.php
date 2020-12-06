<!DOCTYPE html>
<html>
    <head>
        <title>La Boulange - Contact</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Site de la boulangerie">
        <link rel="stylesheet" href="css/contact.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@500&display=swap" rel="stylesheet">
    </head>
    <body>
        <?php
            include("header.php");
            include("menu.php");
            include("fixed.php");
        ?>
        <article class="articleContact">
            <section class="info">
                <h2>Informations de contact</h2>
                <br><br>
                <p id="paragraphe">Vous souhaitez nous posez une question ou passer <br> une commande? N’hésitez pas à remplir ce formulaire<br> de contact pour que nous puissions vous apporter une <br> réponse rapidement.</p>
                <br><br>
                <p><span class="Gras">Adresse: </span> 9 rue du Barry, 34700 Pégairolles-de-l'Escalette</p>
                <p><span class="Gras">Téléphone: </span> 06.52.24.67.28</p>
                <p><span class="Gras">Email: </span> aux4elements.escalette@gmail.com</p>
            </section>
            <section class="form">
                <h2>Formulaire de contact</h2>
                <br>
                <form method="POST" action="traitements.php">
                    <input type="text" id="nom" name="Nom" autocomplete="on" autofocus placeholder=" Nom*" required>
                    <input type="text" id="prenom" name="Prenom" autocomplete="on" autofocus placeholder=" Prenom*" required> <br>
                    <input type="email" id="email" name="Email" autocomplete="on" autofocus placeholder=" Email*" required>
                    <input type="number" id="tel" name="Telephone" autocomplete="on" autofocus placeholder=" Telephone*" required> <br>
                    <select name="Objet_de_la_demande">
                            <option value="Objet">Objet de la demande</option>
                            <option value="Renseignement">Renseignement</option>
                            <option value="Reclamations">Reclamations</option>
                            <option value="Autre">Autre</option>
                    </select>
                    <br>
                    <textarea id="message" name="presentation" autocomplete="on" placeholder=" Message" required></textarea>
                    <br>
                    <input type="submit" value=" Envoyer" id="envoyer">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                </form>
            </section>
            
        </article>
        <?php
            include("footer.php");
        ?>
</body>
</html>