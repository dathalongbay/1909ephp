<?php
/**
 * Created by PhpStorm.
 * User: datdo
 * Date: 8/31/2019
 * Time: 7:28 PM
 */

class Redis extends Database implements Crud , Log , Search {


    public function connect()
    {
        // TODO: Implement connect() method.
        //Connecting to Redis server on localhost
        $redis = new Redis();
        $redis->connect('127.0.0.1', 6379);
        echo "Connection to server sucessfully";
        //check whether server is running or not
        echo "Server is running: ".$redis->ping();
    }

    public function insert() {


    }

    public function create()
    {
        // TODO: Implement create() method.
    }

    public function delete()
    {
        // TODO: Implement delete() method.
    }

    public function read()
    {
        // TODO: Implement read() method.
    }

    public function update()
    {
        // TODO: Implement update() method.
    }

    public function search()
    {

    }

    public function readLog()
    {
        // TODO: Implement readLog() method.
    }

    public function writeLog()
    {
        // TODO: Implement writeLog() method.
    }

}