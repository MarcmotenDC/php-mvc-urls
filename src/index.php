<?php

// get the controller and action from the query string
$controller = $_GET["controller"];
$action = $_GET["action"];

// require the necessary controller using the variable value
require "src/controllers/$controller.php";

// assign the name of the desired controller to a $controller_object variable
$controller_object = new $controller;

// call the method from the controller using the $action value
$controller_object->$action();