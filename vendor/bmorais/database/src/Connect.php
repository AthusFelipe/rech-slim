<?php
namespace BMorais\Database;
use \PDO;
use \PDOException;

const CONFIG_DATA_LAYER = [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "intranet",
    "username" => "root",
    "passwd" => "",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8, lc_time_names = 'pt_BR'",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL,
        PDO::MYSQL_ATTR_FOUND_ROWS => true
    ],
    "directory_models" => "App\\Models\\",
    "return_error_json" => true,
    "display_errors_details" => true
];
/**
 * CLASSE BANCO
 *  Esta classe faz conexão com o banco de dados mysql utilizando o pdo
 *
 * @author Bruno Morais <brunomoraisti@gmail.com>
 * @copyright GPL © 2022, bmorais.com
 * @package bmorais\database
 * @subpackage class
 * @access private
 */


class Connect
{

    /** @var PDOException|null */
    private static ?PDOException $error = null;

    /** @var PDO */
    private static $instance;

    /**
     * Connect constructor.
     */
    final private function __construct()
    {
    }

    /**
     * Connect clone.
     */
    private function __clone()
    {
    }

    /**
     * @param array|null $database
     * @return PDO|null
     */
    public static function getInstance($database=CONFIG_DATA_LAYER["dbname"]): ?PDO
    {
        if (!isset (self::$instance)) {

            try {
                self::$instance = new PDO(CONFIG_DATA_LAYER["driver"] . ":host=" . CONFIG_DATA_LAYER["host"] . ";dbname=" . $database . ";port=" . CONFIG_DATA_LAYER["port"],
                    CONFIG_DATA_LAYER["username"],
                    CONFIG_DATA_LAYER["passwd"],
                    CONFIG_DATA_LAYER["options"]);
            } catch (PDOException $e) {
                self::setError($e);
            }
        }

        return self::$instance;
    }

    public static function setError(PDOException $e, string $sql = ''){
        self::$error = $e;
        if (CONFIG_DATA_LAYER["return_error_json"]) {
            $obj = [
                "error" => true,
                "message" => "Ooops! Aconteceu algo inesperado, tente mais tarde! Nossa equipe já foi informada",
                "code" => "500",
            ];

            if (CONFIG_DATA_LAYER["display_errors_details"] ?? true) {
                $obj["sql"] = $sql;
                $obj["exception"] = $e;
            }

            echo json_encode($obj);
        } else {
            $message = "<h4>Ooops! Aconteceu algo inesperado, tente mais tarde! Nossa equipe já foi informada</h5><hr>";
            $message .= "<p><b>File:</b>  " . $e->getFile() . "<br/>";
            $message .= "<b>SQL:</b>  " . $sql . "<br/>";
            $message .= "<b>Line:</b>  " . $e->getLine() . "<br/>";
            $message .= "<b>Message:</b>  " . $e->getMessage() . "<br/>";
            $message .= "<b>Exception:</b>" . $e->getCode() . "<br/>" . $e->getPrevious() . "<br/>" . $e->getTraceAsString() . "<br/></p>";

            if (CONFIG_DATA_LAYER["display_errors_details"]) {
                echo $message;
            } else {
                echo "<h4>Ooops! Aconteceu algo inesperado, tente mais tarde! Nossa equipe já foi informada</h5><hr>";
            }
        }
        die;
    }

    /**
     * @return array|null
     */
    public static function getError(): ?array
    {
        return self::$error;
    }
}

