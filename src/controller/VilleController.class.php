<?php
use libs\system\Controller;

class VilleController extends controller

{
public function __construct()
{
    parent::__construct();
}
public function localisation()
{
    return $this->view-> load("Ville/localiser");
}

}
?>