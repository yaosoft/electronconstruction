<?php
	use ElectronApp\Form;
	header('Content-Type: text/html; charset=iso-8859-1');
/**
 * Created by PhpStorm.
 * User: Luditel 3CX Server
 * Date: 3/26/2016
 * Time: 5:08 PM
 */
?>

<html>
<head>
    <title>Electron Engineering SARL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="iso-8859-1">
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="icon" type="image/gif" href="../images/smalllogo.gif" />
    <!--[if lte IE 8]><link rel="stylesheet" href='../css/ie8.css'/><![endif]-->
</head>
<body>

<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<div id="page-wrapper">

    <!-- Header -->
    <div id="header">
        <!-- Logo -->
        <div class="divLogoContainer">
            <div class="logoLeft">
                <a href="../index.php">
                    <div class="logoBig">
                        <img class="logoimg" src="../images/logoBig.png">
                    </div>
                </a>
                
            </div>
            <div class="logoMidle">
                &nbsp;
            </div>
            <div class="logoRight">
                <a href="#" class="image left"><img src='../images/anim00.gif' alt="" /></a>
            </div>
        </div>
		
        <!-- Nav -->
        <nav id="nav">
            <ul>
                <li <?php echo ($current == 'accueil') ? "class='current'" : "class=''"; ?> >
                    <a href="../index.php">Accueil</a>
                </li>
                <li <?php echo ($current == 'bureau') ? "class='current'" : "class=''"; ?>>
                    <a href="../index.php/?p=etudes d'avant-projet">Bureau d'&eacute;tudes</a>
                    <ul>
                        <li><a href="../index.php/?p=etudes d'avant-projet">&Eacute;tudes d'avant projet</a></li>
                        <li><a href="../index.php/?p=pid et pfd">PID</a></li>
                        <li><a href="../index.php/?p=structure">Structure</a></li>
                        <li><a href="../index.php/?p=tuyauterie">Tuyauterie</a></li>
                        <li><a href="../index.php/?p=genie civil">G&eacute;nie civil</a></li>
                    </ul>
                </li>
                <li <?php echo ($current == 'assistance') ? "class='current'" : "class=''"; ?>>
                    <a href="../index.php/?p=assistance technique">Assistance Technique</a>
                    <ul>
                        <li><a href="../index.php/?p=assistance technique">Formation du personel</a></li>
                        <li><a href="../index.php/?p=contrôle supervision et mise à disposition du personnel">Mise &agrave; disposition du personnel</a></li>
                    </ul>
                </li>
                <li <?php echo ($current == 'formation') ? "class='current'" : "class=''"; ?>>
                    <a href="../index.php/?p=formation">Formations</a>
                    <ul>
                        <li>
                            <a href="../index.php/?p=AUTOCAD">Autocad</a>
                            <ul>
                                <li><a href="../index.php/?p=Autocad Structural Detailing">Autocad Structural Detailing</a></li>
                                <li><a href="../index.php/?p=Autocad Robot Structural Analysis">Autocad Robot Structural</a></li>
                                <li><a href="../index.php/?p=AUTOCAD/AUTOCAD LT - Niveau 1">Autocad/Autocad LT - Niveau 1</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="../index.php/?p=Cadworx Paint Design">Cadworx</a>
                            <ul>
                                <li><a href="../index.php/?p=Cadworx Paint Design">Cadworx Pant  Design</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li <?php echo ($current == 'HSE') ? "class='current'" : "class=''"; ?>>
                     <a href="../index.php/?p=charte HSE">HSE</a>
                    <ul>
                        <li>
							<a href="../index.php/?p=sommaire hse">Manuel HSE</a>
							 <ul>
							    <li><a href="../index.php/?p=sommaire hse">Sommaire</a></li>
                                <li><a href="../index.php/?p=organisation hse">Organisation HSE</a></li>
                                <li><a href="../index.php/?p=gestion des risques">Gestion des risques</a></li>
								<li><a href="../index.php/?p=communication hse">Communication des information HSE</a></li>
								<li><a href="../index.php/?p=gestion des operations dangereuses">Gestion des op&eacute;rations dangereuses</a></li>
								<li><a href="../index.php/?p=gestion des urgences">Gestion des urgences </a></li>
								<li><a href="../index.php/?p=procedures specifiques">Autres proc&eacute;dures sp&eacute;cifiques</a></li>
                            </ul>
						</li>
						<li>
                            <a href="../index.php/?p=charte HSE">Charte HSE</a>
                        </li>
                        
                        <li>
							<a href="../index.php/?p=politique HSE">Politique HSE</a>
                        </li>
                    </ul>
                </li>
                <li <?php echo ($current == 'contact') ? "class='current'" : "class=''"; ?>>
                    <a href="../index.php/?p=contactez nous">Contacts</a>
                </li>
            </ul>
        </nav>
    </div>
    <!-- Main -->
    <section class="wrapper style1">
        <div class="container">
            <div class="row 200%">
                <div class="8u 12u(narrower)">
                    <div id="content">

                        <!-- Content -->

                        <article>
                            <header>
                                <h2><?php echo $titre ?></h2>
                                <p><?php echo $sousTitre ?></p>
                            </header>

                            <span class="image featured"><img src="../images/banner.jpg" alt="" /></span>
                            <?php
                               if($_POST)
		{
		    $form = new form;
		 	$nameClient = $_POST['name'];
		 	$emailClient = $_POST['email'];
	  		$message = $_POST['message'];
	        $subject = 'Message de '.$nameClient.'('.$emailClient.'), via Electron-construction.ga';
		    $form->sendmail($subject, $message);
			echo "<div class=\"merci\">Merci mr/mme ".$nameClient.", nous vous contacterons bient&ocirc;t.  <a onclick=\"history.back();\">retour</a></div>";
		}
		else
		{
		    echo $contenu;
		}
                            ?>

                        </article>

                    </div>
                </div>
                <div class="4u 12u(narrower)">
                    <div id="sidebar">

                        <!-- Sidebar -->

                        <section>
                            <h3>Formation AUTOCAD</h3>
                            <p>Le logiciel AutoCAD est le leader du secteur en matiere de Logiciel
                                CAO 2D et CAO 3D. Il est orient&eacute; vers la conception,
                                le dessin et la de mod&eacute;lisation..</p>
                            <footer>
                                <a href="../index.php/?p=AUTOCAD" class="button">Continuez &agrave; lire</a>
                            </footer>
                        </section>

                        <section>
                            <h3>Autres fomations</h3>
                            <ul class="links">
                                <li><a href="../index.php/?p=Autocad Structural Detailing">Autocad Structural Detailing</a></li>
                                <li><a href="../index.php/?p=Autocad Robot Structural Analysis">Autocad Robot Structural</a></li>
                                <li><a href="../index.php/?p=AUTOCAD/AUTOCAD LT - Niveau 1">Autocad/Autocad LT - Niveau 1</a></li>
                                <li><a href="../index.php/?p=Cadworx Paint Design">Cadworx Pant  Design</a></li>
                            </ul>
                            <footer>
                                <a href="../index.php/?p=contactez nous" class="button">Contactez nous</a>
                            </footer>
                        </section>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <div id="footer">
        <div class="container">
            <div class="row">
                <section class="3u 6u$(narrower) 12u$(mobilep) electron">
                    <h3>Electron Construction</h3>
                    <ul class="links">
                        <li><a href="#">B.P.: 1070 Port - Gentil</a></li>
                        <li><a href="#">T&eacute;l.: (00241)   07-01-08-46<br>(00237)   697 43 54 30</a></li>
                        <li><a href="#">Email: info@electron-construction.ga</a></li>
                        <li><a href="#">Web: http://www.electron-construction.ga</a></li>
                    </ul>
                </section>
                <section class="6u 12u(narrower)">
                    <h3>Ecrivez-nous</h3>
                    <form method="post">
                        <div class="row 50%">
                            <div class="6u 12u(mobilep)">
                                <input type="text" name="name" id="name" placeholder="Nom" />
                            </div>
                            <div class="6u 12u(mobilep)">
                                <input type="email" name="email" id="email" placeholder="Email" />
                            </div>
                        </div>
                        <div class="row 50%">
                            <div class="12u">
                                <textarea name="message" id="message" placeholder="Message" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="row 50%">
                            <div class="12u">
                                <ul class="actions">
                                    <li><input type="submit" class="button alt" value="Envoyer" /></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>

        <!-- Icons -->
        <ul class="icons">
            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
            <li><a href="https://server200.serverange.net:2096/cpsess0151966654/3rdparty/roundcube/?_task=mail&_mbox=INBOX" title="Messagerie @electron-construction.ga" target="_blank" class="icon"><img src='../images/mail.png'></a></li>
        </ul>

        <!-- Copyright -->
        <div class="copyright">
            <ul class="menu">
                <li>&copy; 2013 - 2023 Electron Engineering SARL. Tous droits reserv&eacute;s</li>
            </ul>
        </div>

    </div>

</div>
<!-- Scripts -->
<script src =  '../js/jquery.min.js'></script>
<script src =  '../js/jquery.dropotron.min.js'></script>
<script src =  '../js/skel.min.js'></script>
<script src =  '../js/util.js'></script>
<script src =  '../js/ie/respond.min.js'></script>
<script src =  '../js/main.js'></script>
</body>
</html>
