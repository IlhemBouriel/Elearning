<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

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

        // etudiant_deconnect_homepage
        if ($pathinfo === '/deconnect') {
            return array (  '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::deconnectAction',  '_route' => 'etudiant_deconnect_homepage',);
        }

        // etudiant_allcourses_homepage
        if ($pathinfo === '/getall') {
            return array (  '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::getallAction',  '_route' => 'etudiant_allcourses_homepage',);
        }

        // etudiant_follow_homepage
        if ($pathinfo === '/follow') {
            return array (  '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::followAction',  '_route' => 'etudiant_follow_homepage',);
        }

        // etudiant_mycourses_homepage
        if ($pathinfo === '/mine') {
            return array (  '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::mineAction',  '_route' => 'etudiant_mycourses_homepage',);
        }

        // etudiant_deleteC_homepage
        if ($pathinfo === '/delC') {
            return array (  '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::deleteCourseAction',  '_route' => 'etudiant_deleteC_homepage',);
        }

        // etudiant_openC_homepage
        if ($pathinfo === '/openC') {
            return array (  '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::openCourseAction',  '_route' => 'etudiant_openC_homepage',);
        }

        // etudiant_result_homepage
        if ($pathinfo === '/result') {
            return array (  '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::getResultAction',  '_route' => 'etudiant_result_homepage',);
        }

        // etudiant_improve_homepage
        if ($pathinfo === '/improve') {
            return array (  '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::improveAction',  '_route' => 'etudiant_improve_homepage',);
        }

        if (0 === strpos($pathinfo, '/g')) {
            // etudiant_qcmGroupedByC_homepage
            if ($pathinfo === '/groupByC') {
                return array (  '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::qcmGroupByAction',  '_route' => 'etudiant_qcmGroupedByC_homepage',);
            }

            // etudiant_getQcm_homepage
            if ($pathinfo === '/getQcm') {
                return array (  '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::getQcmAction',  '_route' => 'etudiant_getQcm_homepage',);
            }

        }

        // etudiant_verify_homepage
        if ($pathinfo === '/verify') {
            return array (  '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::verifyAction',  '_route' => 'etudiant_verify_homepage',);
        }

        // etudiant_getpoint_homepage
        if ($pathinfo === '/getpoint') {
            return array (  '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::getpointAction',  '_route' => 'etudiant_getpoint_homepage',);
        }

        // etudiant_randomQcm_homepage
        if ($pathinfo === '/random') {
            return array (  '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::randomAction',  '_route' => 'etudiant_randomQcm_homepage',);
        }

        // etudiant_test_homepage
        if ($pathinfo === '/testanswer') {
            return array (  '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::testanswerAction',  '_route' => 'etudiant_test_homepage',);
        }

        if (0 === strpos($pathinfo, '/get')) {
            // etudiant_getpointAll_homepage
            if ($pathinfo === '/getScore') {
                return array (  '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::getScoreAction',  '_route' => 'etudiant_getpointAll_homepage',);
            }

            // etudiant_getcertifications_homepage
            if ($pathinfo === '/getcertif') {
                return array (  '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::getCertifAction',  '_route' => 'etudiant_getcertifications_homepage',);
            }

            // etudiant_mymessages_homepage
            if ($pathinfo === '/getmessages') {
                return array (  '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::getMessagesAction',  '_route' => 'etudiant_mymessages_homepage',);
            }

        }

        // etudiant_updateMsg_homepage
        if ($pathinfo === '/updateMsg') {
            return array (  '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::updateMsgAction',  '_route' => 'etudiant_updateMsg_homepage',);
        }

        // etudiant_getFormSend_homepage
        if ($pathinfo === '/getFormSend') {
            return array (  '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::getFormSendAction',  '_route' => 'etudiant_getFormSend_homepage',);
        }

        if (0 === strpos($pathinfo, '/Se')) {
            // etudiant_sendmessage_homepage
            if ($pathinfo === '/SendMsg') {
                return array (  '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::SendMsgAction',  '_route' => 'etudiant_sendmessage_homepage',);
            }

            // etudiant_SetProfile_homepage
            if ($pathinfo === '/SetProfile') {
                return array (  '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::SetProfileAction',  '_route' => 'etudiant_SetProfile_homepage',);
            }

        }

        // etudiant_UpdateProfile_homepage
        if ($pathinfo === '/upDateProfile') {
            return array (  '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::upDateProfileAction',  '_route' => 'etudiant_UpdateProfile_homepage',);
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
