<?php

class homeController extends Controller
{

    public function indexAction()
    {
        $data = array();

        $this->RenderLayout("main", "home", "index", $data);
    }

}
