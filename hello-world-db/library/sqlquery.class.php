<?php
/**
 * This class responsible for handling mysql database via mysqli functions.
 * Class provides 2 connections based on read and write abilities.
 * As this class is designed on basis of singleton pattern.
 * It can be accessed by SQLQuery::getInstance();
 * Every instance of the class contains 1 read and 1 write connection.
 * @package SocialGamesLibrary
 *
 */
class SQLQuery {

    private static $_instance;

    public $mysqli_read, $mysqli_write;

    /**
     * intialize the connections
     */
    private function __construct() {
        $this->mysqli_read = new mysqli(DB_READ_HOST, DB_READ_USER, DB_READ_PASSWORD, DB_READ_NAME);
    }

    /**
     * get the instance of the class
     * @return SQLQuery Object
     */
    public static function getInstance() {
        if(!self::$_instance) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    /**
     * execute read queries
     * @param string sql statement
     * @return mysqli_query result
     */

    public function read_query($query) {
        return self::getInstance()->mysqli_read->query($query);
    }

    /**
     * execute write queries
     * @param string sql statement
     * @return mysqli_query result
     */

    public function write_query($query) {
        return self::getInstance()->mysqli_read->query($query);
    }

}
