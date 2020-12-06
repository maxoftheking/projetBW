<?php

require "phpmailer/PHPMailerAutoload.php";
session_start();
include_once("functionPanier.php");


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

            $nom = $prenom = $mail = $tel =  $adr = $compAdr = $lieuLivr = $sex= $commande = "";
            function securisation($donnees){
                $donnees = trim($donnees);
                $donnees = stripslashes($donnees);
                $donnees = strip_tags($donnees);
                return $donnees;
            }
            //ou extract($_POST)
            $nom = securisation($_POST["nom"]);
            $prenom = securisation($_POST["prenom"]);
            $mail = securisation($_POST["email"]);
            $tel = securisation($_POST["tel"]);
            $lieuLivr = securisation($_POST["lieuLivr"]);
            $nbArticles=count($_SESSION['panier']['libelleProduit']);
            for ($i=0 ;$i < $nbArticles ; $i++)
                            {
                                $commande = $commande."<tr><td>".htmlspecialchars($_SESSION['panier']['libelleProduit'][$i])."</ td>
                                <td>".htmlspecialchars($_SESSION['panier']['qteProduit'][$i])."</td></tr>";
                            }
            
            $sujet ="Commande sur le site aux 4 elements";
            $date = date(DATE_RFC2822);
            $messFin = "Nom : ".$nom."  Prenom: ".$prenom."<br>
            Mail: ".$mail."<br>
            Telephone: ".$tel."<br>
            Lieux de livraison: ".$lieuLivr."<br>
            Commande: <br>".$commande."<br>
            Date: ".$date;

            sendmail($sujet, $messFin);

            if($emailSend){
                $emailSendMess = '<section class="repMess">
                                        <h2>Votre Commande a bien était envoyer, <br> Bonne journée</h2>
                                </section>';
            }else{
                $emailSendMess = '<section class="repMess">
                                        <h2>Votre message a pas etait envoyer</h2>
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