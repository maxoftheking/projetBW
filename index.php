<!DOCTYPE html>
<html>
    <head>
        <title>La Boulange</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Site de la boulangerie">
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@500&display=swap" rel="stylesheet">
    </head>
    <body>
        <script src="js/OnClickEvent.js"></script>
        <?php
            include("header.php");
            include("menu.php");
            include("fixed.php");
        ?>
        <div class="index">
            <img src="img/canelet.png" alt="canelet" id="canelet">
        </div>
        <article>
            <section id="art1"><div class="premDiapo"></div></section>
            <section id="info1">
                <h2>Pâtisseries à base de <br> produits locaux</h2> 
                <p>Confectionnées à Pégairolles de l’Escalette, France</p>
                <p>Nous suivre: <br>
                <a href="https://www.facebook.com/Aux-Quatre-%C3%89l%C3%A9ments-2189732881115807" target="_blank"><img src="img/facebook.png" alt="facebook" class="facebookImg"></a>
                <a href="https://www.instagram.com/aux4elements/?hl=fr" target="_blank"><img src="img/instagram.png" alt="instagram" class="instagramImg" target="_blank"> </a></p> 
            </section>
            <section class="lesQuatreBox">
                <div class="box">
                    <div onclick="show_hide0()" class="box-u" id="b0"><p class="nomProduits">Cake Pistache</p></div>
                    <div onclick="show_hide1()" class="box-u" id="b1"><p class="nomProduits">Muffin Chocolat</p></div> 
                </div>

                <div class="box-open">
                    <div class="box-i" id="box0">
                        <div class="photoBoxG" id="photoBox1"></div>
                        <div class="descriptionBoxG"> <p>Notre Cake pistache vous feras vivre une nouvelle vie pleine de passion</p></div>
                    </div>
                    <div class="box-i" id="box1">
                        <div class="photoBoxG" id="photoBox2"></div>
                        <div class="descriptionBoxG"> <p>Notre Muffin tout choco vous feras vivre une nouvelle vie pleine de passion</p></div>
                    </div>
                </div>
                <div class="box">
                    <div onclick="show_hide2()" class="box-u" id="b2"><p class="nomProduits">Pain d'épice</p></div>
                    <div onclick="show_hide3()" class="box-u" id="b3"><p class="nomProduits">Tarte au Pomme</p></div>
                </div>
                <div class="box-open">
                    <div class="box-i" id="box2">
                        <div class="photoBoxG" id="photoBox3"></div>
                        <div class="descriptionBoxG"> <p>Notre Pain d'epice vous feras vivre une nouvelle vie pleine de passion</p></div>
                    </div>
                    <div class="box-i" id="box3">
                        <div class="photoBoxG" id="photoBox4"></div>
                        <div class="descriptionBoxG"> <p>Notre tarte au Pomme vous feras vivre une nouvelle vie pleine de passion</p></div>
                    </div>
                </div>
            </section>
            <section id="info2">
                <!--<h2>Pâtisserie</h2>-->
                <p>Spécialiste des classiques français – entremets & pâte à choux –, chaque jour est un enchantement<br>  
                    grâce à la variété de nos produits, des recettes classiques françaises aux best-sellers <br> internationaux revisités, 
                    sans oublier les produits raffinés de notre gamme.</p>
            </section>
            <section id='trou'></section>
            <section id="info3">
                <div id="contact">
                    <h2>Nous Contacter</h2>
                    <h3>Ou bien, encore mieux, venez nous rendre visite!</h3>
                    <p>Nous adorons rencontrer nos clients, alors n’hésitez pas à venir <br> à notre rencontre au laboratoire durant nos heures d’ouverture</p>
                    <h3>Aux Quatre Éléments</h3>
                    <p>9 Rue du Barry, 34700. Pégairolles-De-L'Escalette, <br> Languedoc-Roussillon, France.</p>
                    <p>Tel : 06 52 24 67 28 <br>Mail: aux4elements.escalette@gmail.com</p>
                    <h3>Heures d’ouverture</h3>
                    <p>Ouvert du lundi au vendredi: <br> 09:00-17h00</p>
                </div>
                <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d856.1178638680094!2d3.3225548722663643!3d43.801369208037684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b3d940c8c138d9%3A0x1a492d1eba0a3e30!2s9%20Rue%20du%20Barry%2C%2034700%20P%C3%A9gairolles-de-l&#39;Escalette!5e0!3m2!1sfr!2sfr!4v1606343008059!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </section>
        </article>
        <?php
            include("footer.php");
        ?>

    </body>
    </html>