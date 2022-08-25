<?php

require 'app.php';

function incluirTemplates($nombre, $inicio = false) {
    include TEMPLATES_URL . "/${nombre}.php";
};