<?php

require 'Model.php';

// accès aux données
$billets = getBillets();

// affichage
require 'vueAccueil.php';
