<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // etudiant_etudiant_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'etudiant_etudiant_homepage');
            }

            return array (  '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::indexAction',  '_route' => 'etudiant_etudiant_homepage',);
        }

        // etudiant_inscri_homepage
        if ($pathinfo === '/form') {
            return array (  '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::getformAction',  '_route' => 'etudiant_inscri_homepage',);
        }

        // etudiant_signin_homepage
        if ($pathinfo === '/sign') {
            return array (  '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::insertAction',  '_route' => 'etudiant_signin_homepage',);
        }

        // etudiant_connect_homepage
        if ($pathinfo === '/connect') {
            return array (  '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::connectAction',  '_route' => 'etudiant_connect_homepage',);
        }

        // etudiant_getHome_homepage
        if ($pathinfo === '/gethome') {
            return array (  '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::gethomeAction',  '_route' => 'etudiant_getHome_homepage',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
