<?php

    function conexion(){

    $host = "host=dpg-da7fk9e7bikc73aitq80-a.ohio-postgres.render.com";
    $port = "port=5432";
    $dbname = "dbname=test_db_zckp";
    $user = "user=test_db_zckp_user";
    $password = "password=bxhimpglanMhjzCkinzUa8EdJ6GlmKw5";

    $db = pg_connect("$host $port $dbname $user $password");

    return $db;
}
?>
