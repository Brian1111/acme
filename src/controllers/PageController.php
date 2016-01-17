<?php
namespace Acme\Controllers;

use duncan3dc\Laravel\BladeInstance;

class PageController extends BaseController
{

    public function getshowHomePage()
    {
        echo $this->blade->render("home");
    }

}
