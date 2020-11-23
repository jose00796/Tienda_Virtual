<?php

class Errors extends Controllers
{
    public function __construct()
    {
        parent::__construct();
    }

    public function notFound()
    {
        $this->view->getView($this,"error");
    }
}

$notfound = new Errors();
$notfound->notFound();