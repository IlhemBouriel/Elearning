<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'etudiant_etudiant_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'etudiant_inscri_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::getformAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/form',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'etudiant_signin_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::insertAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sign',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'etudiant_connect_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::connectAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/connect',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'etudiant_getHome_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::gethomeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gethome',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'etudiant_deconnect_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::deconnectAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/deconnect',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'etudiant_allcourses_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::getallAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/getall',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'etudiant_follow_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::followAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/follow',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'etudiant_mycourses_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::mineAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/mine',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'etudiant_deleteC_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::deleteCourseAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delC',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'etudiant_openC_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::openCourseAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/openC',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'etudiant_result_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::getResultAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/result',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'etudiant_improve_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::improveAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/improve',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'etudiant_qcmGroupedByC_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::qcmGroupByAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/groupByC',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'etudiant_getQcm_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::getQcmAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/getQcm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'etudiant_verify_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::verifyAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/verify',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'etudiant_getpoint_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::getpointAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/getpoint',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'etudiant_randomQcm_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::randomAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/random',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'etudiant_test_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::testanswerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/testanswer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'etudiant_getpointAll_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::getScoreAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/getScore',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'etudiant_getcertifications_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::getCertifAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/getcertif',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'etudiant_mymessages_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::getMessagesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/getmessages',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'etudiant_updateMsg_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::updateMsgAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/updateMsg',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'etudiant_getFormSend_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::getFormSendAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/getFormSend',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'etudiant_sendmessage_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::SendMsgAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/SendMsg',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'etudiant_SetProfile_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::SetProfileAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/SetProfile',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'etudiant_UpdateProfile_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Etudiant\\EtudiantBundle\\Controller\\EtudiantController::upDateProfileAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/upDateProfile',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
