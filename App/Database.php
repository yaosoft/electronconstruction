<?php

namespace ElectronApp;
use \PDO;
class Database extends PDO
{
    // sauvegarde de pdo dans une propriété de la classe pour les requettes
    private $dns;
    private $file = 'DB.ini';
    public function __construct()
    {
        $file = $this->file;
        if (!$settings = parse_ini_file($file, TRUE)) throw new exception('Unable to open ' . $file . '.');

        $dns = $settings['database']['driver'] .
            ':host=' . $settings['database']['host'] .
            ((!empty($settings['database']['port'])) ? (';port=' . $settings['database']['port']) : '') .
            ';dbname=' . $settings['database']['schema'];
        parent::__construct($dns, $settings['database']['username'], $settings['database']['password']);
    }

    public function requettesArticle ($id){
        // $count = parent::exec($requette);
        $sql = "select * from articles where id =:id";
        $prepared = parent::prepare($sql, array(
            PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY,
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        ));
        $prepared->execute( array(":id"=>$id));
        $result =  $prepared->fetchAll(PDO::FETCH_OBJ);
        return $result;
        // $sql = "INSERT INTO $table (titre, date) VALUES ('Titre', '$date')";
    }
}