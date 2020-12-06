<?php

require "phpmailer/PHPMailerAutoload.php";

?>
<!DOCTYPE html>
<html>
    <head>
        <title>La Boulange - Contact</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Site de la boulangerie">
        <link rel="stylesheet" href="css/traitement.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@500&display=swap" rel="stylesheet">
    </head>
    <body>
        <?php
            $emailSend = true;
            $emailSendMess = "";
            function sendmail($objet, $contenu) {  
                $mail = new PHPMailer(true);
                  try {
                    $mail->setLanguage('fr', '../PHPMailer/language/'); 
                    $mail->SMTPDebug = 0;            
                    $mail->isSMTP();                                                   
                    $mail->Host       = 'smtp.gmail.com';                       
                    $mail->SMTPAuth   = true;                                   
                    $mail->Username   = 'contact.aux4elements@gmail.com';   
                    $mail->Password   = 'Cenacena48';            
                    $mail->Port       = 587;        
                    $mail->setFrom('contact.aux4elements@gmail.com', 'Aux 4 éléments'); 
                    $mail->addAddress("max.rouch34@gmail.com", 'Clients de Mon_Domaine');
                    $mail->isHTML(true);                                 
                    $mail->Subject = utf8_decode($objet);      
                    $mail->Body    = $contenu;         
                    $mail->AltBody = 'Contenu au format texte pour les clients e-mails qiui ne le supportent pas'; 
                
                    $mail->send();
                  
                  }
                  catch (Exception $e) {
                    $emailsend = false; 
                  }  
                } 

            $nom = $prenom = $mail = $tel =  $obj = $mess = "";
            function securisation($donnees){
                $donnees = trim($donnees);
                $donnees = stripslashes($donnees);
                $donnees = strip_tags($donnees);
                return $donnees;
            }
            //ou extract($_POST)
            $nom = securisation($_POST["Nom"]);
            $prenom = securisation($_POST["Prenom"]);
            $mail = securisation($_POST["Email"]);
            $obj = securisation($_POST["Objet_de_la_demande"]);
            $mess = securisation($_POST["presentation"]);
            $tel = securisation($_POST["Telephone"]);
            
            $sujet = $obj." sur le site aux 4 elements";
            $date = date(DATE_RFC2822);
            $messFin = "Nom : ".$nom."  Prenom: ".$prenom."<br>
            Mail: ".$mail."<br>
            Telephone: ".$tel."<br>
            Message: <br>".$mess."<br>
            Date: ".$date;

            sendmail($sujet, $messFin);

            if($emailSend){
                $emailSendMess = '<section class="repMess">
                                        <h2>Votre message a bien était envoyer, <br> Bonne journée</h2>
                                </section>';
            }else{
                $emailSendMess = '<section class="repMess">
                                        <h2>Votre message n a pas etait envoyer</h2>
                                  </section>';
            }

        ?>
        <?php
            include("header.php");
            include("menu.php");
        ?>
        <article class="articleContact">
            
            <?php
                echo $emailSendMess;
            ?>
            
        </article>
        <?php
            include("footer.php");
        ?>

    </body>
</html>