<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/css/vendor/bootstrap')) {
            // _assetic_bootstrap_css
            if ($pathinfo === '/css/vendor/bootstrap.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css',);
            }

            // _assetic_bootstrap_css_0
            if ($pathinfo === '/css/vendor/bootstrap_bootstrap_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js/vendor/bootstrap')) {
            // _assetic_bootstrap_js
            if ($pathinfo === '/js/vendor/bootstrap.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js',);
            }

            if (0 === strpos($pathinfo, '/js/vendor/bootstrap_')) {
                if (0 === strpos($pathinfo, '/js/vendor/bootstrap_a')) {
                    // _assetic_bootstrap_js_0
                    if ($pathinfo === '/js/vendor/bootstrap_affix_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_0',);
                    }

                    // _assetic_bootstrap_js_1
                    if ($pathinfo === '/js/vendor/bootstrap_alert_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_1',);
                    }

                }

                // _assetic_bootstrap_js_2
                if ($pathinfo === '/js/vendor/bootstrap_button_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_2',);
                }

                if (0 === strpos($pathinfo, '/js/vendor/bootstrap_c')) {
                    // _assetic_bootstrap_js_3
                    if ($pathinfo === '/js/vendor/bootstrap_carousel_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_3',);
                    }

                    // _assetic_bootstrap_js_4
                    if ($pathinfo === '/js/vendor/bootstrap_collapse_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_4',);
                    }

                }

                // _assetic_bootstrap_js_5
                if ($pathinfo === '/js/vendor/bootstrap_dropdown_6.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_5',);
                }

                // _assetic_bootstrap_js_6
                if ($pathinfo === '/js/vendor/bootstrap_modal_7.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_6',);
                }

                // _assetic_bootstrap_js_7
                if ($pathinfo === '/js/vendor/bootstrap_tooltip_8.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_7',);
                }

                // _assetic_bootstrap_js_8
                if ($pathinfo === '/js/vendor/bootstrap_popover_9.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_8',);
                }

                // _assetic_bootstrap_js_9
                if ($pathinfo === '/js/vendor/bootstrap_scrollspy_10.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_9',);
                }

                if (0 === strpos($pathinfo, '/js/vendor/bootstrap_t')) {
                    // _assetic_bootstrap_js_10
                    if ($pathinfo === '/js/vendor/bootstrap_tab_11.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_10',);
                    }

                    // _assetic_bootstrap_js_11
                    if ($pathinfo === '/js/vendor/bootstrap_transition_12.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_11',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/fonts/glyphicons-halflings-regular')) {
            // _assetic_fonts_glyphicons_eot
            if ($pathinfo === '/fonts/glyphicons-halflings-regular.eot') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fonts_glyphicons_eot',  'pos' => NULL,  '_format' => 'eot',  '_route' => '_assetic_fonts_glyphicons_eot',);
            }

            // _assetic_fonts_glyphicons_eot_0
            if ($pathinfo === '/fonts/glyphicons-halflings-regular_glyphicons-halflings-regular_1.eot') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fonts_glyphicons_eot',  'pos' => 0,  '_format' => 'eot',  '_route' => '_assetic_fonts_glyphicons_eot_0',);
            }

            // _assetic_fonts_glyphicons_svg
            if ($pathinfo === '/fonts/glyphicons-halflings-regular.svg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fonts_glyphicons_svg',  'pos' => NULL,  '_format' => 'svg',  '_route' => '_assetic_fonts_glyphicons_svg',);
            }

            // _assetic_fonts_glyphicons_svg_0
            if ($pathinfo === '/fonts/glyphicons-halflings-regular_glyphicons-halflings-regular_1.svg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fonts_glyphicons_svg',  'pos' => 0,  '_format' => 'svg',  '_route' => '_assetic_fonts_glyphicons_svg_0',);
            }

            // _assetic_fonts_glyphicons_ttf
            if ($pathinfo === '/fonts/glyphicons-halflings-regular.ttf') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fonts_glyphicons_ttf',  'pos' => NULL,  '_format' => 'ttf',  '_route' => '_assetic_fonts_glyphicons_ttf',);
            }

            // _assetic_fonts_glyphicons_ttf_0
            if ($pathinfo === '/fonts/glyphicons-halflings-regular_glyphicons-halflings-regular_1.ttf') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fonts_glyphicons_ttf',  'pos' => 0,  '_format' => 'ttf',  '_route' => '_assetic_fonts_glyphicons_ttf_0',);
            }

            // _assetic_fonts_glyphicons_woff
            if ($pathinfo === '/fonts/glyphicons-halflings-regular.woff') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fonts_glyphicons_woff',  'pos' => NULL,  '_format' => 'woff',  '_route' => '_assetic_fonts_glyphicons_woff',);
            }

            // _assetic_fonts_glyphicons_woff_0
            if ($pathinfo === '/fonts/glyphicons-halflings-regular_glyphicons-halflings-regular_1.woff') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fonts_glyphicons_woff',  'pos' => 0,  '_format' => 'woff',  '_route' => '_assetic_fonts_glyphicons_woff_0',);
            }

        }

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

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

        // eleve_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'eleve_default_index');
            }

            return array (  '_controller' => 'EleveBundle\\Controller\\DefaultController::indexAction',  '_route' => 'eleve_default_index',);
        }

        // eleve_default_profil
        if ($pathinfo === '/my') {
            return array (  '_controller' => 'EleveBundle\\Controller\\DefaultController::profilAction',  '_route' => 'eleve_default_profil',);
        }

        // eleve_default_paiements
        if ($pathinfo === '/paiements') {
            return array (  '_controller' => 'EleveBundle\\Controller\\DefaultController::paiementsAction',  '_route' => 'eleve_default_paiements',);
        }

        if (0 === strpos($pathinfo, '/get')) {
            // eleve_default_getmessages
            if ($pathinfo === '/getMessages') {
                return array (  '_controller' => 'EleveBundle\\Controller\\DefaultController::getMessagesAction',  '_route' => 'eleve_default_getmessages',);
            }

            // eleve_default_getticket
            if (0 === strpos($pathinfo, '/getTicket') && preg_match('#^/getTicket/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'eleve_default_getticket')), array (  '_controller' => 'EleveBundle\\Controller\\DefaultController::getTicketAction',));
            }

        }

        // eleve_default_getmessagestoolbar
        if ($pathinfo === '/Ajax/Messages/top') {
            return array (  '_controller' => 'EleveBundle\\Controller\\DefaultController::getMessagesToolbarAction',  '_route' => 'eleve_default_getmessagestoolbar',);
        }

        if (0 === strpos($pathinfo, '/questionnairesatisfaction')) {
            // questionnairesatisfaction_index
            if (rtrim($pathinfo, '/') === '/questionnairesatisfaction') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_questionnairesatisfaction_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'questionnairesatisfaction_index');
                }

                return array (  '_controller' => 'EleveBundle\\Controller\\QuestionnaireSatisfactionController::indexAction',  '_route' => 'questionnairesatisfaction_index',);
            }
            not_questionnairesatisfaction_index:

            // questionnairesatisfaction_show
            if (preg_match('#^/questionnairesatisfaction/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_questionnairesatisfaction_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'questionnairesatisfaction_show')), array (  '_controller' => 'EleveBundle\\Controller\\QuestionnaireSatisfactionController::showAction',));
            }
            not_questionnairesatisfaction_show:

            // questionnairesatisfaction_edit
            if (preg_match('#^/questionnairesatisfaction/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_questionnairesatisfaction_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'questionnairesatisfaction_edit')), array (  '_controller' => 'EleveBundle\\Controller\\QuestionnaireSatisfactionController::editAction',));
            }
            not_questionnairesatisfaction_edit:

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_login;
                    }

                    return array (  '_controller' => 'EleveBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }
                not_login:

                // login_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_login_check;
                    }

                    return array (  '_controller' => 'EleveBundle\\Controller\\SecurityController::check',  '_route' => 'login_check',);
                }
                not_login_check:

            }

            // logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_logout;
                }

                return array (  '_controller' => 'EleveBundle\\Controller\\SecurityController::logout',  '_route' => 'logout',);
            }
            not_logout:

        }

        if (0 === strpos($pathinfo, '/froalaeditor')) {
            // kms_froala_editor_upload_image
            if ($pathinfo === '/froalaeditor/upload_image') {
                return array (  '_controller' => 'KMS\\FroalaEditorBundle\\Controller\\MediaController::uploadImageAction',  '_route' => 'kms_froala_editor_upload_image',);
            }

            // kms_froala_editor_delete_image
            if ($pathinfo === '/froalaeditor/delete_image') {
                return array (  '_controller' => 'KMS\\FroalaEditorBundle\\Controller\\MediaController::deleteImageAction',  '_route' => 'kms_froala_editor_delete_image',);
            }

            // kms_froala_editor_load_images
            if ($pathinfo === '/froalaeditor/load_images') {
                return array (  '_controller' => 'KMS\\FroalaEditorBundle\\Controller\\MediaController::loadImagesAction',  '_route' => 'kms_froala_editor_load_images',);
            }

            // kms_froala_editor_upload_file
            if ($pathinfo === '/froalaeditor/upload_file') {
                return array (  '_controller' => 'KMS\\FroalaEditorBundle\\Controller\\MediaController::uploadFileAction',  '_route' => 'kms_froala_editor_upload_file',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
