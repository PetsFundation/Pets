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

        // contactame_homepage
        if ($pathinfo === '/contactame') {
            return array (  '_controller' => 'ContactameBundle\\Controller\\DefaultController::indexAction',  '_route' => 'contactame_homepage',);
        }

        // donaciones_homepage
        if ($pathinfo === '/donaciones') {
            return array (  '_controller' => 'DonacionesBundle\\Controller\\DefaultController::indexAction',  '_route' => 'donaciones_homepage',);
        }

        // paginas_index_homepage
        if ($pathinfo === '/paginas') {
            return array (  '_controller' => 'PaginasIndexBundle\\Controller\\DefaultController::indexAction',  '_route' => 'paginas_index_homepage',);
        }

        // paginas_camadas
        if ($pathinfo === '/camadas') {
            return array (  '_controller' => 'PaginasIndexBundle\\Controller\\DefaultController::camadasAction',  '_route' => 'paginas_camadas',);
        }

        // paginas_adopciones
        if ($pathinfo === '/adopciones') {
            return array (  '_controller' => 'PaginasIndexBundle\\Controller\\DefaultController::adopcionesAction',  '_route' => 'paginas_adopciones',);
        }

        // paginas_protectoras
        if ($pathinfo === '/protectoras') {
            return array (  '_controller' => 'PaginasIndexBundle\\Controller\\DefaultController::protectorasAction',  '_route' => 'paginas_protectoras',);
        }

        // paginas_sebusca
        if ($pathinfo === '/sebusca') {
            return array (  '_controller' => 'PaginasIndexBundle\\Controller\\DefaultController::sebuscaAction',  '_route' => 'paginas_sebusca',);
        }

        // index_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'index_homepage');
            }

            return array (  '_controller' => 'IndexBundle\\Controller\\DefaultController::indexAction',  '_route' => 'index_homepage',);
        }

        if (0 === strpos($pathinfo, '/an')) {
            // ani
            if ($pathinfo === '/animales/new') {
                return array (  '_controller' => 'AnimalesBundle\\Controller\\AnimalesController::newAction',  '_route' => 'ani',);
            }

            if (0 === strpos($pathinfo, '/anuncios')) {
                // anunc
                if ($pathinfo === '/anuncios/new') {
                    return array (  '_controller' => 'AnunciosBundle\\Controller\\AnunciosController::newAction',  '_route' => 'anunc',);
                }

                // anuncios_index
                if (rtrim($pathinfo, '/') === '/anuncios') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_anuncios_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'anuncios_index');
                    }

                    return array (  '_controller' => 'AnunciosBundle\\Controller\\AnunciosController::indexAction',  '_route' => 'anuncios_index',);
                }
                not_anuncios_index:

                // anuncios_show
                if (preg_match('#^/anuncios/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_anuncios_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'anuncios_show')), array (  '_controller' => 'AnunciosBundle\\Controller\\AnunciosController::showAction',));
                }
                not_anuncios_show:

                // anuncios_new
                if ($pathinfo === '/anuncios/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_anuncios_new;
                    }

                    return array (  '_controller' => 'AnunciosBundle\\Controller\\AnunciosController::newAction',  '_route' => 'anuncios_new',);
                }
                not_anuncios_new:

                // anuncios_edit
                if (preg_match('#^/anuncios/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_anuncios_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'anuncios_edit')), array (  '_controller' => 'AnunciosBundle\\Controller\\AnunciosController::editAction',));
                }
                not_anuncios_edit:

                // anuncios_delete
                if (preg_match('#^/anuncios/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_anuncios_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'anuncios_delete')), array (  '_controller' => 'AnunciosBundle\\Controller\\AnunciosController::deleteAction',));
                }
                not_anuncios_delete:

            }

        }

        // anuncios_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'anuncios_homepage');
            }

            return array (  '_controller' => 'AnunciosBundle\\Controller\\DefaultController::indexAction',  '_route' => 'anuncios_homepage',);
        }

        if (0 === strpos($pathinfo, '/propietario')) {
            // propietario_index
            if (rtrim($pathinfo, '/') === '/propietario') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_propietario_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'propietario_index');
                }

                return array (  '_controller' => 'PropietarioBundle\\Controller\\PropietarioController::indexAction',  '_route' => 'propietario_index',);
            }
            not_propietario_index:

            // propietario_show
            if (preg_match('#^/propietario/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_propietario_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'propietario_show')), array (  '_controller' => 'PropietarioBundle\\Controller\\PropietarioController::showAction',));
            }
            not_propietario_show:

            // propietario_new
            if ($pathinfo === '/propietario/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_propietario_new;
                }

                return array (  '_controller' => 'PropietarioBundle\\Controller\\PropietarioController::newAction',  '_route' => 'propietario_new',);
            }
            not_propietario_new:

            // propietario_edit
            if (preg_match('#^/propietario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_propietario_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'propietario_edit')), array (  '_controller' => 'PropietarioBundle\\Controller\\PropietarioController::editAction',));
            }
            not_propietario_edit:

            // propietario_delete
            if (preg_match('#^/propietario/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_propietario_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'propietario_delete')), array (  '_controller' => 'PropietarioBundle\\Controller\\PropietarioController::deleteAction',));
            }
            not_propietario_delete:

        }

        // propietario_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'propietario_homepage');
            }

            return array (  '_controller' => 'PropietarioBundle:Default:index',  '_route' => 'propietario_homepage',);
        }

        // animales_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'animales_default_index');
            }

            return array (  '_controller' => 'AnimalesBundle\\Controller\\DefaultController::indexAction',  '_route' => 'animales_default_index',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/animales')) {
            // animales_index
            if (rtrim($pathinfo, '/') === '/animales') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_animales_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'animales_index');
                }

                return array (  '_controller' => 'AnimalesBundle\\Controller\\AnimalesController::indexAction',  '_route' => 'animales_index',);
            }
            not_animales_index:

            // animales_show
            if (preg_match('#^/animales/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_animales_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'animales_show')), array (  '_controller' => 'AnimalesBundle\\Controller\\AnimalesController::showAction',));
            }
            not_animales_show:

            // animales_new
            if ($pathinfo === '/animales/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_animales_new;
                }

                return array (  '_controller' => 'AnimalesBundle\\Controller\\AnimalesController::newAction',  '_route' => 'animales_new',);
            }
            not_animales_new:

            // animales_edit
            if (preg_match('#^/animales/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_animales_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'animales_edit')), array (  '_controller' => 'AnimalesBundle\\Controller\\AnimalesController::editAction',));
            }
            not_animales_edit:

            // animales_delete
            if (preg_match('#^/animales/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_animales_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'animales_delete')), array (  '_controller' => 'AnimalesBundle\\Controller\\AnimalesController::deleteAction',));
            }
            not_animales_delete:

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
