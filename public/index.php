<?php
header("Content-Type: text/html;charset=utf-8");
use ElectronApp\Autoloader;
use ElectronApp\ArticlesLoader;
ini_set("display_errors","1");

error_reporting(E_ALL);
/**
 * Created by PhpStorm.
 * User: Luditel 3CX Server
 * Date: 3/26/2016
 * Time: 4:28 PM
 */
 
require '../App/Autoloader.php';
require_once '../App/swiftmailer/lib/swift_required.php';

Autoloader::register();

// gestion du routage

// echo "******************* " . $_GET['p'];

if(!isset($_GET['p'])){
    $p = 'accueil';
    $layoutLink = '../pages/templates/layout_A.php';
}
else if($_GET['p']=== 'accueil'){
    $p = 'accueil';
    $layoutLink = '../pages/templates/layout_A.php';
}
else if($_GET['p']!='accueil'){
    $layoutLink = '../pages/templates/layout_B.php';
    $p = $_GET['p'];
}

ob_start();
if($p ==='accueil'){
	$id = 1;
	$current = "accueil"; // pour l'encoche du menu courant: categorie du lien
} else if($p ==='bureau d\'étude'){
    $id = 2;
	$current = "bureau"; // pour l'encoche du menu courant
} else if($p ==='ingenierie'){
    $id = 3;
	$current = "bureau";
} else if($p ==='etudes d\'avant-projet'){
    $id = 4;
	$current = "bureau"; // pour l'encoche du menu courant
} else if($p ==='pid et pfd'){
    $id = 5;
	$current = "bureau"; // pour l'encoche du menu courant
} else if($p ==='notre savoir faire'){
    $id = 6;
}else if($p ==='conseils avant projets'){
    $id = 7;
}else if($p ==='assistance technique'){
    $id = 8;
	$current = "assistance"; // pour l'encoche du menu courant
}else if($p ==='notre histoire'){
    $id = 9;
}else if($p ==='formation'){
    $id = 10;
	$current = "formation"; // pour l'encoche du menu courant
}else if($p ==='contrôle supervision et mise à disposition du personnel'){
    $id = 11;
	$current = "assistance"; // pour l'encoche du menu courant
}else if($p ==='structure'){
    $id = 12;
	$current = "bureau"; // pour l'encoche du menu courant
}else if($p ==='tuyauterie'){
    $id = 13;
	$current = "bureau"; // pour l'encoche du menu courant
}else if($p ==='genie civil'){
    $id = 14;
	$current = "bureau"; // pour l'encoche du menu formation
}else if($p ==='AUTOCAD'){
    $id = 15;
	$current = "formation"; // pour l'encoche du menu formation
}else if($p ==='Cadworx Paint Design'){
    $id = 16;
	$current = "formation"; // pour l'encoche du menu formation
}else if($p ==='Autocad Structural Detailing'){
    $id = 17;
	$current = "formation"; // pour l'encoche du menu formation
}else if($p ==='Autocad Robot Structural Analysis'){
    $id = 18;
	$current = "formation"; // pour l'encoche du menu formation
}else if($p ==='AUTOCAD/AUTOCAD LT - Niveau 1'){
    $id = 19;
	$current = "formation"; // pour l'encoche du menu formation
}else if($p ==='nos réalisations'){
    $id = 20;
	$current = "formation"; // pour l'encoche du menu formation
}else if($p ==='contactez nous'){
    $id = 21;
	$current = "contact"; // pour l'encoche du menu contact
}else if($p ==='études de la faisabilité'){
    $id = 22;
	$current = "bureau d'études"; // pour l'encoche du menu contact
}else if($p ==='contactFormAction'){
    $id = 23;
	$current = "contact"; // pour l'encoche du menu contact
}
else if($p ==='charte HSE'){
    $id = 24;
	$current = "HSE"; // pour l'encoche du menu HSE
}
else if($p ==='politique HSE'){
    $id = 25;
	$current = "HSE"; // pour l'encoche du menu HSE
}
else if($p ==='sommaire hse'){
    $id = 26;
	$current = "HSE"; // pour l'encoche du menu HSE
}
else if($p ==='organisation hse'){
    $id = 27;
	$current = "HSE"; // pour l'encoche du menu HSE
}
else if($p ==='gestion des risques'){
    $id = 28;
	$current = "HSE"; // pour l'encoche du menu HSE
}
else if($p ==='contrôle et amélioration'){
    $id = 29;
	$current = "HSE"; // pour l'encoche du menu HSE
}
else if($p ==='communication hse'){
    $id = 30;
	$current = "HSE"; // pour l'encoche du menu HSE
}
else if($p ==='gestion des operations dangereuses'){
    $id = 31;
	$current = "HSE"; // pour l'encoche du menu HSE
}
else if($p ==='gestion des urgences'){
    $id = 32;
	$current = "HSE"; // pour l'encoche du menu HSE
}
else if($p ==='procedures specifiques'){
    $id = 33;
	$current = "HSE"; // pour l'encoche du menu HSE
}
else if($p ==='formation Cadworx'){
    $id = 34;
	$current = "formation"; // pour l'encoche du menu formation
}
else if($p ==='formation Autocad Structural Detailing'){
    $id = 35;
	$current = "formation"; // pour l'encoche du menu formation
}
else if($p ==='Formation Cadworx'){
    $id = 36;
	$current = "formation"; // pour l'encoche du menu formation
}
else if($p ==='manuel hse'){
    $id = 37;
	$current = "HSE"; // pour l'encoche du menu formation
}
else if($p ==='AUTOCAD/AUTOCAD LT - Niveau 2'){
    $id = 38;
	$current = "HSE"; // pour l'encoche du menu formation
}
else if($p ==='genie civil'){
    $id = 39;
	$current = "bureau d'études"; // pour l'encoche du menu formation
}
else if($p ==='procedures specifiques'){
    $id = 40;
	$current = "HSE"; // pour l'encoche du menu formation
}




$articlesLoader = new ArticlesLoader($id);
$titre = $articlesLoader->titre;
$sousTitre = $articlesLoader->soustitre;
$contenu =  $articlesLoader->contenu;

$content = ob_get_clean();

require $layoutLink;