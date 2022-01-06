<?php

class View
{

    public function __construct()
    {
    }

    public function render($nombre, $data = [])
    {
        require_once("views/" . $nombre . ".php");
    }
}
