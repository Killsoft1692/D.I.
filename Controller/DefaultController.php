<?php

namespace Acme\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/debug")
     * @Template()
     */
    public function indexAction(Request $request)
    {
        dump($this->container, $request);

        return $this->render('AcmeAppBundle:Default:index.html.twig');
    }

    /**
     * @Route("/container")
     */
    public function controllerAction()
    {

        return new Response($this->get('acme.app.helper.test_helper')->getNumber(5));
    }

    /**
     * @Route("/container2")
     */
    public function controller2Action()
    {
        return new Response($this->get('acme.app.helper.test_helper2')->getFunction());
    }
}
