<?php
// src/AppBundle/Controller/GameController.php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class GameController {
    public function indexAction($name) {
        return new Response('<html><body>Hello '.$name.'!</body></html>');
    }
}
?>