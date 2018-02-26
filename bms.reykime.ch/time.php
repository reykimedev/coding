<?php
/**
 * Created by IntelliJ IDEA.
 * User: Mike
 * Date: 26/02/2018
 * Time: 20:43
 */


if(isset($_GET["time"])){

    file_put_contents("time.txt",$_GET["time"]);

    $time = file_get_contents("time.txt");
    echo $time;
}