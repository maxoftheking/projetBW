<!DOCTYPE html>
<html>
    <head>
        <title>La Boulange</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Site de la boulangerie">
        <link rel="stylesheet" type="text/css" href="css/box.css">
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
            include("fixed.php")
        ?>
        <article>
            <br>
            <br>
            <br>
            <div class="container">
		
                <div class="left_box">
                    <div class="category-name"><h2 id="cateName">CATEGORIES</h1></div>
                        <div class="category">
                            <div class="category-item">
                                <a href="#nouveautes" class="tag-category">◈Nouveautés</a>
                            </div>
                            <div class="category-item">
                                <a href="#apero" class="tag-category">◈Apéritifs</a>
                            </div>
                            <div class="category-item">
                                <a href="#tartes" class="tag-category">◈Tartes</a>
                            </div>
                            <div class="category-item">
                                <a href="#cakes" class="tag-category">◈Cakes</a>
                            </div>
                            <div class="category-item">
                                <a href="#sales" class="tag-category">◈Salés</a>
                        </div>
                    </div>
                </div>

                <div class="right_box">
                    <div class="produit-content" id="nouveautes">
                            <h3 id="pcColor">&nbsp;Nouveautés</h3>
                    </div>

                    <div class="box">
                        <div onclick="show_hide0()" class="box-u" id="yePro">
                            <div class="content-img" id="bo0">
                                <img  id="blur" src="img/cicn.png" width="278" height="329">
                            </div>
                        </div>
                        <div onclick="show_hide1()" class="box-u" id="yePro">
                            <div class="content-img" id="bo1">
                                <img src="img/cicv.png" width="278" height="328">
                            </div>
                        </div>
                        <div onclick="show_hide2()" class="box-u" id="yePro">
                            <div class="content-img" id="bo2">
                                <img src="img/cio.png" width="278" height="328">
                            </div>
                        </div>
                        <div onclick="show_hide3()" class="box-u" id="yePro">
                            <div class="content-img" id="bo3">
                                <img src="img/c.png" width="280" height="328">
                            </div>
                        </div>
                    </div>

                    <div class="box-open">
                        <div class="box-i" id="box0">
                            <div class="box-i-left">
                                <div class="box-img">
                                    <img src="img/cicn.png" width="278" height="330">
                                </div>
                            </div>
                            <div class="box-i-center"></div>
                            <div class="box-i-right">
                                <div class="box-name">Crack Larzac - Cacao Noisette</div>
                                <br>
                                <div class="box-description">One advanced diverted domestic sex repeated bringing you old. Possible procured her trifling laughter thoughts property she met way. Companions shy had solicitude favourable own. Which could saw guest man now heard but. Lasted my coming uneasy marked so should. Gravity letters it amongst herself dearest an windows by. Wooded ladies she basket season age her uneasy saw. Discourse unwilling am no described dejection incommode no listening of. Before nature his parish boy. </div>
                                <div class="box-final">
                                    <div class="box-price">Prix : 5$</div>
                                    <div class="box-panier">
                                        <a href="panier.php?action=ajout&amp;l=Crack Larzac - Cacao Noisette&amp;q=1&amp;p=5&amp;im='img/cicn'" id="id_pan">Ajouter</a><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-i" id="box1">
                            <div class="box-i-left">
                                <div class="box-img">
                                    <img src="img/cicv.png" width="278" height="330">
                                </div>
                            </div>
                            <div class="box-i-center"></div>
                            <div class="box-i-right">
                                <div class="box-name">Crack Larzac - Citron Vert</div>
                                <br>
                                <div class="box-description">One advanced diverted domestic sex repeated bringing you old. Possible procured her trifling laughter thoughts property she met way. Companions shy had solicitude favourable own. Which could saw guest man now heard but. Lasted my coming uneasy marked so should. Gravity letters it amongst herself dearest an windows by. Wooded ladies she basket season age her uneasy saw. Discourse unwilling am no described dejection incommode no listening of. Before nature his parish boy. </div>
                                <div class="box-final">
                                    <div class="box-price">Prix : 5$</div>
                                    <div class="box-panier">
                                        <a href="panier.php?action=ajout&amp;l=Crack Larzac - Citron Vert&amp;q=1&amp;p=5&amp;im='img/cicv'" id="id_pan">Ajouter</a><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-i" id="box2">
                            <div class="box-i-left">
                                <div class="box-img">
                                    <img src="img/cio.png" width="278" height="330">
                                </div>
                            </div>
                            <div class="box-i-center"></div>
                            <div class="box-i-right">
                            <div class="box-name">Crack Larzac - Orange</div>
                                <br>
                                <div class="box-description">One advanced diverted domestic sex repeated bringing you old. Possible procured her trifling laughter thoughts property she met way. Companions shy had solicitude favourable own. Which could saw guest man now heard but. Lasted my coming uneasy marked so should. Gravity letters it amongst herself dearest an windows by. Wooded ladies she basket season age her uneasy saw. Discourse unwilling am no described dejection incommode no listening of. Before nature his parish boy. </div>
                                <div class="box-final">
                                    <div class="box-price">Prix : 5$</div>
                                    <div class="box-panier">
                                        <a href="panier.php?action=ajout&amp;l=Crack Larzac - Orange&amp;q=1&amp;p=5&amp;im='img/cio'" id="id_pan">Ajouter</a><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-i" id="box3">
                            <div class="box-i-left">
                                <div class="box-img">
                                    <img src="img/c.png" width="278" height="330">
                                </div>
                            </div>
                            <div class="box-i-center"></div>
                            <div class="box-i-right">
                                <div class="box-name">Croquant</div>
                                <br>
                                <div class="box-description">One advanced diverted domestic sex repeated bringing you old. Possible procured her trifling laughter thoughts property she met way. Companions shy had solicitude favourable own. Which could saw guest man now heard but. Lasted my coming uneasy marked so should. Gravity letters it amongst herself dearest an windows by. Wooded ladies she basket season age her uneasy saw. Discourse unwilling am no described dejection incommode no listening of. Before nature his parish boy. </div>
                                <div class="box-final">
                                    <div class="box-price">Prix : 5$</div>
                                    <div class="box-panier">
                                        <a href="panier.php?action=ajout&amp;l=Croquant&amp;q=1&amp;p=5&amp;im='img/c'" id="id_pan">Ajouter</a><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <br>
                    <div class="produit-content" id="apero"><h3 id="pcColor">&nbsp;Apéritifs</h3></div>

                    <div class="box">
                        <div onclick="show_hide4()" class="box-u" id="yePro">
                            <div class="content-img" id="bo4">
                                <img src="img/baaf.png" width="278" height="329">
                            </div>
                        </div>
                        <div onclick="show_hide5()" class="box-u" id="yePro">
                            <div class="content-img" id="bo5">
                                <img src="img/baam.png" width="278" height="328">
                            </div>
                        </div>
                        <div onclick="show_hide6()" class="box-u" id="yePro">
                            <div class="content-img" id="bo6">
                                <img src="img/baas.png" width="278" height="328">
                            </div>
                        </div>
                        <div onclick="show_hide7()" class="box-u" id="yePro">
                            <div class="content-img" id="bo7">
                                <img src="img/bao.png" width="280" height="328">
                            </div>
                        </div>
                    </div>

                    <div class="box-open">
                        <div class="box-i" id="box4">
                            <div class="box-i-left">
                                <div class="box-img">
                                    <img src="img/baaf.png" width="278" height="330">
                                </div>
                            </div>
                            <div class="box-i-center"></div>
                            <div class="box-i-right">
                                <div class="box-name">Biscuit Apéritif Afrique</div>
                                <br>
                                <div class="box-description">One advanced diverted domestic sex repeated bringing you old. Possible procured her trifling laughter thoughts property she met way. Companions shy had solicitude favourable own. Which could saw guest man now heard but. Lasted my coming uneasy marked so should. Gravity letters it amongst herself dearest an windows by. Wooded ladies she basket season age her uneasy saw. Discourse unwilling am no described dejection incommode no listening of. Before nature his parish boy. </div>
                                <div class="box-final">
                                    <div class="box-price">Prix : 5$</div>
                                    <div class="box-panier">
                                        <a href="panier.php?action=ajout&amp;l=Biscuit Apéritif Afrique&amp;q=1&amp;p=5&amp;im='img/baaf'" id="id_pan">Ajouter</a><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-i" id="box5">
                            <div class="box-i-left">
                                <div class="box-img">
                                    <img src="img/baam.png" width="278" height="330">
                                </div>
                            </div>
                            <div class="box-i-center"></div>
                            <div class="box-i-right">
                                <div class="box-name">Biscuit Apéritif Amérique</div>
                                <br>
                                <div class="box-description">One advanced diverted domestic sex repeated bringing you old. Possible procured her trifling laughter thoughts property she met way. Companions shy had solicitude favourable own. Which could saw guest man now heard but. Lasted my coming uneasy marked so should. Gravity letters it amongst herself dearest an windows by. Wooded ladies she basket season age her uneasy saw. Discourse unwilling am no described dejection incommode no listening of. Before nature his parish boy. </div>
                                <div class="box-final">
                                    <div class="box-price">Prix : 5$</div>
                                    <div class="box-panier">
                                        <a href="panier.php?action=ajout&amp;l=Biscuit Apéritif Amérique&amp;q=1&amp;p=5&amp;im='img/baam'" id="id_pan">Ajouter</a><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-i" id="box6">
                            <div class="box-i-left">
                                <div class="box-img">
                                    <img src="img/baas.png" width="278" height="330">
                                </div>
                            </div>
                            <div class="box-i-center"></div>
                            <div class="box-i-right">
                                <div class="box-name">Biscuit Apéritif Asie</div>
                                <br>
                                <div class="box-description">One advanced diverted domestic sex repeated bringing you old. Possible procured her trifling laughter thoughts property she met way. Companions shy had solicitude favourable own. Which could saw guest man now heard but. Lasted my coming uneasy marked so should. Gravity letters it amongst herself dearest an windows by. Wooded ladies she basket season age her uneasy saw. Discourse unwilling am no described dejection incommode no listening of. Before nature his parish boy. </div>
                                <div class="box-final">
                                    <div class="box-price">Prix : 5$</div>
                                    <div class="box-panier">
                                        <a href="panier.php?action=ajout&amp;l=Biscuit Apéritif Asie&amp;q=1&amp;p=5&amp;im='img/baas'" id="id_pan">Ajouter</a><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-i" id="box7">
                            <div class="box-i-left">
                                <div class="box-img">
                                    <img src="img/bao.png" width="278" height="330">
                                </div>
                            </div>
                            <div class="box-i-center"></div>
                            <div class="box-i-right">
                                <div class="box-name">Biscuit Apéritif Oceanie</div>
                                <br>
                                <div class="box-description">One advanced diverted domestic sex repeated bringing you old. Possible procured her trifling laughter thoughts property she met way. Companions shy had solicitude favourable own. Which could saw guest man now heard but. Lasted my coming uneasy marked so should. Gravity letters it amongst herself dearest an windows by. Wooded ladies she basket season age her uneasy saw. Discourse unwilling am no described dejection incommode no listening of. Before nature his parish boy. </div>
                                <div class="box-final">
                                    <div class="box-price">Prix : 5$</div>
                                    <div class="box-panier">
                                        <a href="panier.php?action=ajout&amp;l=Biscuit Apéritif Oceanie&amp;q=1&amp;p=5&amp;im='img/bao'" id="id_pan">Ajouter</a><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="produit-content" id="tartes"><h3 id="pcColor">&nbsp;Tartes</h3></div>

                    <div class="box">
                        <div onclick="show_hide8()" class="box-u" id="yePro">
                            <div class="content-img" id="bo8">
                                <img src="img/tpoi.png" width="278" height="329">
                            </div>
                        </div>
                        <div onclick="show_hide9()" class="box-u" id="yePro">
                            <div class="content-img" id="bo9">
                                <img src="img/tpom.png" width="278" height="328">
                            </div>
                        </div>
                            <div  class="box-u" id="noPro">
                                <div class="content-img">	
                            </div>
                        </div>
                        <div  class="box-u" id="noPro">
                            <div class="content-img">
                                
                            </div>
                        </div>
                    </div>

                    <div class="box-open">
                        <div class="box-i" id="box8">
                            <div class="box-i-left">
                                <div class="box-img">
                                    <img src="img/tpoi.png" width="278" height="330">
                                </div>
                            </div>
                            <div class="box-i-center"></div>
                            <div class="box-i-right">
                                <div class="box-name">Tarte au Poire</div>
                                <br>
                                <div class="box-description">One advanced diverted domestic sex repeated bringing you old. Possible procured her trifling laughter thoughts property she met way. Companions shy had solicitude favourable own. Which could saw guest man now heard but. Lasted my coming uneasy marked so should. Gravity letters it amongst herself dearest an windows by. Wooded ladies she basket season age her uneasy saw. Discourse unwilling am no described dejection incommode no listening of. Before nature his parish boy. </div>
                                <div class="box-final">
                                    <div class="box-price">Prix : 10$</div>
                                    <div class="box-panier">
                                        <a href="panier.php?action=ajout&amp;l=Tarte au Poire&amp;q=1&amp;p=10&amp;im='img/tpoi'" id="id_pan">Ajouter</a><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-i" id="box9">
                            <div class="box-i-left">
                                <div class="box-img">
                                    <img src="img/tpom.png" width="278" height="330">
                                </div>
                            </div>
                            <div class="box-i-center"></div>
                            <div class="box-i-right">
                                <div class="box-name">Tarte au Pomme</div>
                                <br>
                                <div class="box-description">One advanced diverted domestic sex repeated bringing you old. Possible procured her trifling laughter thoughts property she met way. Companions shy had solicitude favourable own. Which could saw guest man now heard but. Lasted my coming uneasy marked so should. Gravity letters it amongst herself dearest an windows by. Wooded ladies she basket season age her uneasy saw. Discourse unwilling am no described dejection incommode no listening of. Before nature his parish boy. </div>
                                <div class="box-final">
                                    <div class="box-price">Prix : 10$</div>
                                    <div class="box-panier">
                                        <a href="panier.php?action=ajout&amp;l=Tarte au Pomme&amp;q=1&amp;p=5&amp;im='img/tpom'" id="id_pan">Ajouter</a><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="produit-content" id="cakes"><h3 id="pcColor">&nbsp;Cakes</h3></div>

                    <div class="box">
                        <div onclick="show_hide10()" class="box-u" id="yePro">
                            <div class="content-img" id="bo10">
                                <img src="img/cfc.png" width="278" height="329">
                            </div>
                        </div>
                        <div onclick="show_hide11()" class="box-u" id="yePro">
                            <div class="content-img" id="bo11">
                                <img src="img/cp.png" width="278" height="328">
                            </div></div>
                        <div onclick="show_hide12()" class="box-u" id="yePro">
                            <div class="content-img" id="bo12">
                                <img src="img/cvc.png" width="278" height="328">
                            </div></div>
                        <div onclick="show_hide13()" class="box-u" id="yePro">
                            <div class="content-img" id="bo13">
                                <img src="img/mcc.png" width="280" height="328">
                            </div>
                        </div>
                    </div>

                    <div class="box-open">
                        <div class="box-i" id="box10">
                            <div class="box-i-left">
                                <div class="box-img">
                                    <img src="img/cfc.png" width="278" height="330">
                                </div>
                            </div>
                            <div class="box-i-center"></div>
                            <div class="box-i-right">
                                <div class="box-name">Cake Fruit Confit</div>
                                <br>
                                <div class="box-description">One advanced diverted domestic sex repeated bringing you old. Possible procured her trifling laughter thoughts property she met way. Companions shy had solicitude favourable own. Which could saw guest man now heard but. Lasted my coming uneasy marked so should. Gravity letters it amongst herself dearest an windows by. Wooded ladies she basket season age her uneasy saw. Discourse unwilling am no described dejection incommode no listening of. Before nature his parish boy. </div>
                                <div class="box-final">
                                    <div class="box-price">Prix : 10$</div>
                                    <div class="box-panier">
                                        <a href="panier.php?action=ajout&amp;l=Cake au Fruit Confit&amp;q=1&amp;p=10&amp;im='img/cfc'" id="id_pan">Ajouter</a><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-i" id="box11">
                            <div class="box-i-left">
                                <div class="box-img">
                                    <img src="img/cp.png" width="278" height="330">
                                </div>
                            </div>
                            <div class="box-i-center"></div>
                            <div class="box-i-right">
                                <div class="box-name">Cake Pistache</div>
                                <br>
                                <div class="box-description">One advanced diverted domestic sex repeated bringing you old. Possible procured her trifling laughter thoughts property she met way. Companions shy had solicitude favourable own. Which could saw guest man now heard but. Lasted my coming uneasy marked so should. Gravity letters it amongst herself dearest an windows by. Wooded ladies she basket season age her uneasy saw. Discourse unwilling am no described dejection incommode no listening of. Before nature his parish boy. </div>
                                <div class="box-final">
                                    <div class="box-price">Prix : 10$</div>
                                    <div class="box-panier">
                                        <a href="panier.php?action=ajout&amp;l=Cake Pistache&amp;q=1&amp;p=10&amp;im='img/cp'" id="id_pan">Ajouter</a><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-i" id="box12">
                            <div class="box-i-left">
                                <div class="box-img">
                                    <img src="img/cvc.png" width="278" height="330">
                                </div>
                            </div>
                            <div class="box-i-center"></div>
                            <div class="box-i-right">
                                <div class="box-name">Cake Vanille Choco</div>
                                <br>
                                <div class="box-description">One advanced diverted domestic sex repeated bringing you old. Possible procured her trifling laughter thoughts property she met way. Companions shy had solicitude favourable own. Which could saw guest man now heard but. Lasted my coming uneasy marked so should. Gravity letters it amongst herself dearest an windows by. Wooded ladies she basket season age her uneasy saw. Discourse unwilling am no described dejection incommode no listening of. Before nature his parish boy. </div>
                                <div class="box-final">
                                    <div class="box-price">Prix : 10$</div>
                                    <div class="box-panier">
                                        <a href="panier.php?action=ajout&amp;l=Muffin Chocolat Cerise&amp;q=1&amp;p=10&amp;im='img/cvc'" id="id_pan">Ajouter</a><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-i" id="box13">
                            <div class="box-i-left">
                                <div class="box-img">
                                    <img src="img/mcc.png" width="278" height="330">
                                </div>
                            </div>
                            <div class="box-i-center"></div>
                            <div class="box-i-right">
                                <div class="box-name">Muffin Chocolat Cerise</div>
                                <br>
                                <div class="box-description">One advanced diverted domestic sex repeated bringing you old. Possible procured her trifling laughter thoughts property she met way. Companions shy had solicitude favourable own. Which could saw guest man now heard but. Lasted my coming uneasy marked so should. Gravity letters it amongst herself dearest an windows by. Wooded ladies she basket season age her uneasy saw. Discourse unwilling am no described dejection incommode no listening of. Before nature his parish boy. </div>
                                <div class="box-final">
                                    <div class="box-price">Prix : 5$</div>
                                    <div class="box-panier">
                                        <a href="panier.php?action=ajout&amp;l=Muffin Chocolat Cerise&amp;q=1&amp;p=5&amp;im='img/mcc'" id="id_pan">Ajouter</a><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box">
                        <div onclick="show_hide14()" class="box-u" id="yePro">
                            <div class="content-img" id="bo14">
                                <img src="img/mc.png" width="278" height="329">
                            </div>
                        </div>
                        <div onclick="show_hide15()" class="box-u" id="yePro">
                            <div class="content-img" id="bo15">
                                <img src="img/mm.png" width="278" height="328">
                            </div></div>
                        <div onclick="show_hide16()" class="box-u" id="yePro">
                            <div class="content-img" id="bo16">
                                <img src="img/fs.png" width="278" height="328">
                            </div></div>
                        <div onclick="show_hide17()" class="box-u" id="yePro">
                            <div class="content-img" id="bo17">
                                <img src="img/none1.png" width="280" height="328">
                            </div>
                        </div>
                    </div>

                    <div class="box-open">
                        <div class="box-i" id="box14">
                            <div class="box-i-left">
                                <div class="box-img">
                                    <img src="img/mc.png" width="278" height="330">
                                </div>
                            </div>
                            <div class="box-i-center"></div>
                            <div class="box-i-right">
                                <div class="box-name">Muffin Chocoloat</div>
                                <br>
                                <div class="box-description">One advanced diverted domestic sex repeated bringing you old. Possible procured her trifling laughter thoughts property she met way. Companions shy had solicitude favourable own. Which could saw guest man now heard but. Lasted my coming uneasy marked so should. Gravity letters it amongst herself dearest an windows by. Wooded ladies she basket season age her uneasy saw. Discourse unwilling am no described dejection incommode no listening of. Before nature his parish boy. </div>
                                <div class="box-final">
                                    <div class="box-price">Prix : 5$</div>
                                    <div class="box-panier">
                                        <a href="panier.php?action=ajout&amp;l=Muffin Chocolat&amp;q=1&amp;p=5&amp;im='img/mc'" id="id_pan">Ajouter</a><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-i" id="box15">
                            <div class="box-i-left">
                                <div class="box-img">
                                    <img src="img/mm.png" width="278" height="330">
                                </div>
                            </div>
                            <div class="box-i-center"></div>
                            <div class="box-i-right">
                                <div class="box-name">Muffin Myrtilles</div>
                                <br>
                                <div class="box-description">One advanced diverted domestic sex repeated bringing you old. Possible procured her trifling laughter thoughts property she met way. Companions shy had solicitude favourable own. Which could saw guest man now heard but. Lasted my coming uneasy marked so should. Gravity letters it amongst herself dearest an windows by. Wooded ladies she basket season age her uneasy saw. Discourse unwilling am no described dejection incommode no listening of. Before nature his parish boy. </div>
                                <div class="box-final">
                                    <div class="box-price">Prix : 5$</div>
                                    <div class="box-panier">
                                        <a href="panier.php?action=ajout&amp;l=Muffin Myrtilles&amp;q=1&amp;p=5&amp;im='img/mm'" id="id_pan">Ajouter</a><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-i" id="box16">
                            <div class="box-i-left">
                                <div class="box-img">
                                    <img src="img/fs.png" width="278" height="330">
                                </div>
                            </div>
                            <div class="box-i-center"></div>
                            <div class="box-i-right">
                                <div class="box-name">Fougasse Sucré</div>
                                <br>
                                <div class="box-description">One advanced diverted domestic sex repeated bringing you old. Possible procured her trifling laughter thoughts property she met way. Companions shy had solicitude favourable own. Which could saw guest man now heard but. Lasted my coming uneasy marked so should. Gravity letters it amongst herself dearest an windows by. Wooded ladies she basket season age her uneasy saw. Discourse unwilling am no described dejection incommode no listening of. Before nature his parish boy. </div>
                                <div class="box-final">
                                    <div class="box-price">Prix : 10$</div>
                                    <div class="box-panier">
                                        <a href="panier.php?action=ajout&amp;l=Fougasse Sucré&amp;q=1&amp;p=10&amp;im='img/fs'" id="id_pan">Ajouter</a><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-i" id="box17">
                            <div class="box-i-left">
                                <div class="box-img">
                                    <img src="img/none1.png" width="278" height="330">
                                </div>
                            </div>
                            <div class="box-i-center"></div>
                            <div class="box-i-right">
                                <div class="box-name">Sans Nom</div>
                                <br>
                                <div class="box-description">One advanced diverted domestic sex repeated bringing you old. Possible procured her trifling laughter thoughts property she met way. Companions shy had solicitude favourable own. Which could saw guest man now heard but. Lasted my coming uneasy marked so should. Gravity letters it amongst herself dearest an windows by. Wooded ladies she basket season age her uneasy saw. Discourse unwilling am no described dejection incommode no listening of. Before nature his parish boy. </div>
                                <div class="box-final">
                                    <div class="box-price">Prix : 10$</div>
                                    <div class="box-panier">
                                        <a href="panier.php?action=ajout&amp;l=e Sans Nom&amp;q=1&amp;p=10&amp;im='img/none1'" id="id_pan">Ajouter</a><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box">
                        <div onclick="show_hide18()" class="box-u" id="yePro">
                            <div class="content-img" id="bo18">
                                <img src="img/none2.png" width="278" height="329">
                            </div>
                        </div>
                        <div onclick="show_hide19()" class="box-u" id="yePro">
                            <div class="content-img" id="bo19">
                                <img src="img/pe.png" width="278" height="328">
                            </div>
                        </div>
                        <div class="box-u" id="noPro">
                            <div class="content-img">
                                
                            </div>
                        </div>
                        <div class="box-u" id="noPro">
                            <div class="content-img">
                                
                            </div>
                        </div>
                    </div>

                    <div class="box-open">
                        <div class="box-i" id="box18">
                            <div class="box-i-left">
                                <div class="box-img">
                                    <img src="img/none2.png" width="278" height="330">
                                </div>
                            </div>
                            <div class="box-i-center"></div>
                            <div class="box-i-right">
                                <div class="box-name">Sans Nom</div>
                                <br>
                                <div class="box-description">One advanced diverted domestic sex repeated bringing you old. Possible procured her trifling laughter thoughts property she met way. Companions shy had solicitude favourable own. Which could saw guest man now heard but. Lasted my coming uneasy marked so should. Gravity letters it amongst herself dearest an windows by. Wooded ladies she basket season age her uneasy saw. Discourse unwilling am no described dejection incommode no listening of. Before nature his parish boy. </div>
                                <div class="box-final">
                                    <div class="box-price">Prix : 10$</div>
                                    <div class="box-panier">
                                        <a href="panier.php?action=ajout&amp;l=Sans Nom2&amp;q=1&amp;p=10&amp;im='img/none2'" id="id_pan">Ajouter</a><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-i" id="box19">
                            <div class="box-i-left">
                                <div class="box-img">
                                    <img src="img/pe.png" width="278" height="330">
                                </div>
                            </div>
                            <div class="box-i-center"></div>
                            <div class="box-i-right">
                                <div class="box-name">Pain D'Epice</div>
                                <br>
                                <div class="box-description">One advanced diverted domestic sex repeated bringing you old. Possible procured her trifling laughter thoughts property she met way. Companions shy had solicitude favourable own. Which could saw guest man now heard but. Lasted my coming uneasy marked so should. Gravity letters it amongst herself dearest an windows by. Wooded ladies she basket season age her uneasy saw. Discourse unwilling am no described dejection incommode no listening of. Before nature his parish boy. </div>
                                <div class="box-final">
                                    <div class="box-price">Prix : 10$</div>
                                    <div class="box-panier">
                                        <a href="panier.php?action=ajout&amp;l=Pin d'epice&amp;q=1&amp;p=10&amp;im='img/pe'" id="id_pan">Ajouter</a><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="produit-content" id="sales"><h3 id="pcColor">&nbsp;Salés</h3></div>

                    <div class="box">
                        <div onclick="show_hide20()" class="box-u" id="yePro">
                            <div class="content-img" id="bo20">
                                <img src="img/pp.png" width="278" height="329">
                            </div>
                        </div>
                        <div onclick="show_hide21()" class="box-u" id="yePro">
                            <div class="content-img" id="bo21">
                                <img src="img/tsal.png" width="278" height="328">
                            </div>
                        </div>
                        <div class="box-u" id="noPro">
                            <div class="content-img">
                                
                            </div>
                        </div>
                        <div class="box-u" id="noPro">
                            <div class="content-img">
                        
                            </div>
                        </div>
                    </div>

                    <div class="box-open">
                        <div class="box-i" id="box20">
                            <div class="box-i-left">
                                <div class="box-img">
                                    <img src="img/pp.png" width="278" height="330">
                                </div>
                            </div>
                            <div class="box-i-center"></div>
                            <div class="box-i-right">
                                <div class="box-name">Petite Pizza</div>
                                <br>
                                <div class="box-description">One advanced diverted domestic sex repeated bringing you old. Possible procured her trifling laughter thoughts property she met way. Companions shy had solicitude favourable own. Which could saw guest man now heard but. Lasted my coming uneasy marked so should. Gravity letters it amongst herself dearest an windows by. Wooded ladies she basket season age her uneasy saw. Discourse unwilling am no described dejection incommode no listening of. Before nature his parish boy. </div>
                                <div class="box-final">
                                    <div class="box-price">Prix : 5$</div>
                                    <div class="box-panier">
                                        <a href="panier.php?action=ajout&amp;l=Petite Pizza&amp;q=1&amp;p=5&amp;im='img/pp'" id="id_pan">Ajouter</a><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-i" id="box21">
                            <div class="box-i-left">
                                <div class="box-img">
                                    <img src="img/tsal.png" width="278" height="330">
                                </div>
                            </div>
                            <div class="box-i-center"></div>
                            <div class="box-i-right">
                                <div class="box-name">Tarte Salé</div>
                                <br>
                                <div class="box-description">One advanced diverted domestic sex repeated bringing you old. Possible procured her trifling laughter thoughts property she met way. Companions shy had solicitude favourable own. Which could saw guest man now heard but. Lasted my coming uneasy marked so should. Gravity letters it amongst herself dearest an windows by. Wooded ladies she basket season age her uneasy saw. Discourse unwilling am no described dejection incommode no listening of. Before nature his parish boy. </div>
                                <div class="box-final">
                                    <div class="box-price">Prix : 10$</div>
                                    <div class="box-panier">
                                        <a href="panier.php?action=ajout&amp;l=Tarte Salé&amp;q=1&amp;p=10&amp;im='img/tsal'" id="id_pan">Ajouter</a><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    </div>
                </div>
            </div>

            <script src="js/OnClickEvent.js"></script>
            
        </article>
        <?php
            include("footer.php");
        ?>

    </body>
    </html>