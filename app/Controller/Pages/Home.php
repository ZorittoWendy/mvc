<?php

namespace App\Controller\Pages;

use App\Utils\View;
use App\Model\Entity\Organization;

class Home extends Page
{
    public static function getHome()
    {
        $obOrganization = new Organization;
        echo "<pre>";
        print_r($obOrganization);
        echo "</pre>";
        exit;

        $content = View::render("pages/home", [
            "name" => "ZORITTO - DEV",
            "description" => "liekdin: www.linkedin.com/in/wendeson-farias",
            "site" => "www.linkedin.com/in/wendeson-farias",
        ]);

        return parent::getPage("ZORITTO - canal - Home", $content);
    }
}
