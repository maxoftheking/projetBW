<?php
session_start();
include_once("functionPanier.php");



$erreur = false;

$action = (isset($_POST['action'])? $_POST['action']:  (isset($_GET['action'])? $_GET['action']:null )) ;
if($action !== null)
{
   if(!in_array($action,array('ajout', 'suppression', 'refresh')))
   $erreur=true;

   //récupération des variables en POST ou GET
   $l = (isset($_POST['l'])? $_POST['l']:  (isset($_GET['l'])? $_GET['l']:null )) ;
   $p = (isset($_POST['p'])? $_POST['p']:  (isset($_GET['p'])? $_GET['p']:null )) ;
   $q = (isset($_POST['q'])? $_POST['q']:  (isset($_GET['q'])? $_GET['q']:null )) ;
   $im = (isset($_POST['im'])? $_POST['im']:  (isset($_GET['im'])? $_GET['im']:null )) ;

   //Suppression des espaces verticaux
   $l = preg_replace('#\v#', '',$l);
   //On vérifie que $p est un float
   $p = floatval($p);

   //On traite $q qui peut être un entier simple ou un tableau d'entiers
    
   if (is_array($q)){
      $QteArticle = array();
      $i=0;
      foreach ($q as $contenu){
         $QteArticle[$i++] = intval($contenu);
      }
   }
   else
   $q = intval($q);
    
}

if (!$erreur){
   switch($action){
      Case "ajout":
         ajouterArticle($l,$q,$p,$im);
         break;

      Case "suppression":
         supprimerArticle($l);
         break;

      Case "refresh" :
         for ($i = 0 ; $i < count($QteArticle) ; $i++)
         {
            modifierQTeArticle($_SESSION['panier']['libelleProduit'][$i],round($QteArticle[$i]));
         }
         break;

      Default:
         break;
   }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>La Boulange</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Site de la boulangerie">
        <link rel="stylesheet" href="css/panier.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style.css">
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
        <article>
        <br><br><br>
        <section class="infoPan">
            <form method="POST" action="paiement.php">
                <legend>Information personnelles:</legend>
                <br>
                    <input type="radio" id="homme" name="sexe" value="homme" checked>
                    <label for="homme">M</label>
                    <input type="radio" id="femme" name="sexe" value="femme">
                    <label for="femme">Mme</label><br>
                    <table>
                        <tr>
                            <td><label for="prenom">Prénom:</label></td>
                            <td><input type="text" id="prenoM" name="prenom" autocomplete="on" autofocus required></td>              
                        </tr>
                        <tr>
                            <td><label for="nom">Nom:</label></td>
                            <td><input type="text" id="nom" name="nom" required></td>
                        </tr>
                        <tr>
                            <td><label for="email">Email:</label></td>
                            <td><input type="email" id="email" name="email" autocomplete="on" required></td>
                        </tr>
                        <tr>
                            <td><label for="tel">Telephone:</label></td>
                            <td><input type="number" id="tel" name="tel" placeholder="Ex: 0769558830" required></td>
                        </tr>
                        <tr>
                            <td><label for="adresse">Adresse:</label></td>
                            <td><input type="text" id="adresse" name="adresse" required></td>
                        </tr>
                        <tr>
                            <td><label for="comAdresse">Complement d'adresse:</label></td>
                            <td><input type="text" id="comAdresse" name="comAdresse"></td>
                        </tr>
                        <tr>
                            <td><label for="lieuLivr">Lieux de livraison</label></td>
                            <td><select name="lieuLivr">
                                <option value="Pezenas">Boutique de Pezenas</option>
                                <option value="Lodeve">Boutique de Lodeve</option>
                            </select></td>
                        </tr>
                    </table>
                    <input type="submit" value="Payer" id="paiement">
                </form>
        </section>
        <section class="panier">
            <h1>Mon panier</h1>
            <div class="formPanier">
                <table>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Quantité</td>
                        <td>Prix Unitaire</td>
                    </tr>

                    <?php
                    if (creationPanier())
                    {
                        $nbArticles=count($_SESSION['panier']['libelleProduit']);
                        if ($nbArticles <= 0)
                        echo "<tr><td colspan=\"4\">Votre panier est vide </ td></tr>";
                        else
                        {
                            for ($i=0 ;$i < $nbArticles ; $i++)
                            {
                                echo "<tr>";
                                echo "<td><img src=".htmlspecialchars($_SESSION['panier']['img'][$i])." width='130' height='150'></ td>";
                                echo "<td>".htmlspecialchars($_SESSION['panier']['libelleProduit'][$i])."</ td>";
                                echo "<td><input type=\"number\" size=\"4\" name=\"q[]\" value=\"".htmlspecialchars($_SESSION['panier']['qteProduit'][$i])."\"/></td>";
                                echo "<td>".htmlspecialchars($_SESSION['panier']['prixProduit'][$i])." Euros</td>";
                                echo "<td><a href=\"".htmlspecialchars("panier.php?action=suppression&l=".rawurlencode($_SESSION['panier']['libelleProduit'][$i]))."\">X</a></td>";
                                echo "</tr>";
                            }

                            echo "<tr><td colspan=\"1\"> </td>";
                            echo "<td colspan=\"1\">";
                            echo "Total : ".MontantGlobal()." Euros";
                            echo "</td></tr>";

                            echo "<tr><td colspan=\"0\">";
                            //echo "<input type=\"submit\" value=\"Rafraichir\"/>";
                            echo "<input type=\"hidden\" name=\"action\" value=\"refresh\"/>";

                            echo "</td></tr>";
                        }
                    }
                    ?>
                </table>
            </div>
                
        </section>
            <a href="nosProduits.php" id="rtrBoutique">Retour à la Boutique</a>
        </article>
        <?php
            include("footer.php");
        ?>

    </body>
    </html>