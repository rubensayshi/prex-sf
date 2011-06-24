<?php

namespace PREX\ProfileBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ProfileControllerBase extends Controller
{
    public function passportAction()
    {
        return $this->render('PREXProfileBundle:Profile:passport.html.twig');
    }
}
