<?php
namespace ElectronApp;
/**
 * Class Autoloader
 */
class Autoloader{

    /**
     * Enregistre notre autoloader
     */
    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    /**
     * Inclue le fichier correspondant à notre classe - explications: transforme un namespace en lien, en suprimant le namespace dans le nom de la classe si il y en a, puis en remplaçant les antislaches par des slashes
     * @param $class string Le nom de la classe à charger
     */
    static function autoload($class){
        if (strpos($class, __NAMESPACE__ . '\\') === 0)
		{
		   				   
		    $class = str_replace(__NAMESPACE__ . '\\', '', $class);
           	$class = str_replace('\\', '/', $class);
			// echo "CLASS:".$class.", STRPOS:".strpos($class, 'Swift')."<br>";
			if(strpos($class, 'Swift') === 0)
			{
			   $class = str_replace('Swift_', '', $class);
			   echo $class."<br>";
			   require '../App/swiftmailer/lib/classes/Swift/' . $class . '.php'; 
			}
			else if(strpos($class, 'Swift') == "")
			{
			   // echo "AUTRE".$class;
			   require '../App/' . $class . '.php'; 
			}
        }
    }
}