<?php

namespace AQ\CompraVentaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AQCompraVentaBundle:Default:index.html.twig');
    }
    
    /**
     * @Template()
     */
    public function showAction($id){
        
    }
}
