<?php

/**
 * Routes.php
 * @Auteur: Christophe Dufour
 * 
 * Gére les différentes route de l'application
 */

namespace App\Frontend\Routes;

use Blackfox\Router\Router;

Router::set("/", "Example", "index");