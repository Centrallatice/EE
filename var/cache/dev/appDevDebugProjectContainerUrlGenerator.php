<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevDebugProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
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
        '_assetic_bootstrap_css' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'bootstrap_css',    'pos' => NULL,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/vendor/bootstrap.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_bootstrap_css_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'bootstrap_css',    'pos' => 0,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/vendor/bootstrap_bootstrap_1.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_bootstrap_js' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'bootstrap_js',    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/vendor/bootstrap.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_bootstrap_js_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'bootstrap_js',    'pos' => 0,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/vendor/bootstrap_affix_1.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_bootstrap_js_1' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'bootstrap_js',    'pos' => 1,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/vendor/bootstrap_alert_2.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_bootstrap_js_2' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'bootstrap_js',    'pos' => 2,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/vendor/bootstrap_button_3.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_bootstrap_js_3' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'bootstrap_js',    'pos' => 3,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/vendor/bootstrap_carousel_4.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_bootstrap_js_4' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'bootstrap_js',    'pos' => 4,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/vendor/bootstrap_collapse_5.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_bootstrap_js_5' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'bootstrap_js',    'pos' => 5,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/vendor/bootstrap_dropdown_6.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_bootstrap_js_6' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'bootstrap_js',    'pos' => 6,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/vendor/bootstrap_modal_7.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_bootstrap_js_7' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'bootstrap_js',    'pos' => 7,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/vendor/bootstrap_tooltip_8.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_bootstrap_js_8' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'bootstrap_js',    'pos' => 8,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/vendor/bootstrap_popover_9.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_bootstrap_js_9' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'bootstrap_js',    'pos' => 9,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/vendor/bootstrap_scrollspy_10.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_bootstrap_js_10' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'bootstrap_js',    'pos' => 10,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/vendor/bootstrap_tab_11.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_bootstrap_js_11' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'bootstrap_js',    'pos' => 11,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/vendor/bootstrap_transition_12.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_fonts_glyphicons_eot' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'fonts_glyphicons_eot',    'pos' => NULL,    '_format' => 'eot',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/fonts/glyphicons-halflings-regular.eot',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_fonts_glyphicons_eot_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'fonts_glyphicons_eot',    'pos' => 0,    '_format' => 'eot',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/fonts/glyphicons-halflings-regular_glyphicons-halflings-regular_1.eot',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_fonts_glyphicons_svg' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'fonts_glyphicons_svg',    'pos' => NULL,    '_format' => 'svg',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/fonts/glyphicons-halflings-regular.svg',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_fonts_glyphicons_svg_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'fonts_glyphicons_svg',    'pos' => 0,    '_format' => 'svg',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/fonts/glyphicons-halflings-regular_glyphicons-halflings-regular_1.svg',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_fonts_glyphicons_ttf' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'fonts_glyphicons_ttf',    'pos' => NULL,    '_format' => 'ttf',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/fonts/glyphicons-halflings-regular.ttf',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_fonts_glyphicons_ttf_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'fonts_glyphicons_ttf',    'pos' => 0,    '_format' => 'ttf',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/fonts/glyphicons-halflings-regular_glyphicons-halflings-regular_1.ttf',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_fonts_glyphicons_woff' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'fonts_glyphicons_woff',    'pos' => NULL,    '_format' => 'woff',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/fonts/glyphicons-halflings-regular.woff',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_fonts_glyphicons_woff_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'fonts_glyphicons_woff',    'pos' => 0,    '_format' => 'woff',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/fonts/glyphicons-halflings-regular_glyphicons-halflings-regular_1.woff',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_open_file' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:openAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/open',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'eleve_default_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EleveBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'eleve_default_profil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EleveBundle\\Controller\\DefaultController::profilAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/my',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'eleve_default_paiements' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EleveBundle\\Controller\\DefaultController::paiementsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/paiements',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'eleve_default_getmessages' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EleveBundle\\Controller\\DefaultController::getMessagesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/getMessages',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'eleve_default_getticket' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'EleveBundle\\Controller\\DefaultController::getTicketAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/getTicket',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'eleve_default_getmessagestoolbar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EleveBundle\\Controller\\DefaultController::getMessagesToolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Ajax/Messages/top',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'questionnairesatisfaction_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EleveBundle\\Controller\\QuestionnaireSatisfactionController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/questionnairesatisfaction/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'questionnairesatisfaction_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'EleveBundle\\Controller\\QuestionnaireSatisfactionController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/questionnairesatisfaction',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'questionnairesatisfaction_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'EleveBundle\\Controller\\QuestionnaireSatisfactionController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/questionnairesatisfaction',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EleveBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EleveBundle\\Controller\\SecurityController::check',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EleveBundle\\Controller\\SecurityController::logout',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'kms_froala_editor_upload_image' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'KMS\\FroalaEditorBundle\\Controller\\MediaController::uploadImageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/froalaeditor/upload_image',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'kms_froala_editor_delete_image' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'KMS\\FroalaEditorBundle\\Controller\\MediaController::deleteImageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/froalaeditor/delete_image',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'kms_froala_editor_load_images' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'KMS\\FroalaEditorBundle\\Controller\\MediaController::loadImagesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/froalaeditor/load_images',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'kms_froala_editor_upload_file' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'KMS\\FroalaEditorBundle\\Controller\\MediaController::uploadFileAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/froalaeditor/upload_file',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
