<?php

namespace PREX\ProfileBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ProfileInfoController extends ProfileControllerBase
{
    public function contentAction()
    {
        return $this->render('PREXProfileBundle:Profile:info.html.twig');
    }
}
