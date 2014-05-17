<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
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

        // mischiros_tienda_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'mischiros_tienda_homepage');
            }

            return array (  '_controller' => 'Mischiros\\TiendaBundle\\Controller\\DefaultController::homeAction',  '_route' => 'mischiros_tienda_homepage',);
        }

        // mischiros_tienda_comprarpage
        if ($pathinfo === '/comprar/listar') {
            return array (  '_controller' => 'Mischiros\\TiendaBundle\\Controller\\RopaController::ListarAction',  '_route' => 'mischiros_tienda_comprarpage',);
        }

        if (0 === strpos($pathinfo, '/media')) {
            if (0 === strpos($pathinfo, '/media/gallery')) {
                // sonata_media_gallery_index
                if (rtrim($pathinfo, '/') === '/media/gallery') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sonata_media_gallery_index');
                    }

                    return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryController::indexAction',  '_route' => 'sonata_media_gallery_index',);
                }

                // sonata_media_gallery_view
                if (0 === strpos($pathinfo, '/media/gallery/view') && preg_match('#^/media/gallery/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_gallery_view')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryController::viewAction',));
                }

            }

            // sonata_media_view
            if (0 === strpos($pathinfo, '/media/view') && preg_match('#^/media/view/(?P<id>[^/]++)(?:/(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_view')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaController::viewAction',  'format' => 'reference',));
            }

            // sonata_media_download
            if (0 === strpos($pathinfo, '/media/download') && preg_match('#^/media/download/(?P<id>[^/]++)(?:/(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_download')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaController::downloadAction',  'format' => 'reference',));
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

            if (0 === strpos($pathinfo, '/login')) {
                // sonata_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::loginAction',  '_route' => 'sonata_user_security_login',);
                }

                // sonata_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_sonata_user_security_check;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::checkAction',  '_route' => 'sonata_user_security_check',);
                }
                not_sonata_user_security_check:

            }

            // sonata_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::logoutAction',  '_route' => 'sonata_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ($pathinfo === '/resetting/request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

            if (0 === strpos($pathinfo, '/resetting/re')) {
                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::resetAction',));
                }
                not_fos_user_resetting_reset:

                // sonata_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sonata_user_resetting_request;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::requestAction',  '_route' => 'sonata_user_resetting_request',);
                }
                not_sonata_user_resetting_request:

            }

            // sonata_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_sonata_user_resetting_send_email;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::sendEmailAction',  '_route' => 'sonata_user_resetting_send_email',);
            }
            not_sonata_user_resetting_send_email:

            // sonata_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_sonata_user_resetting_check_email;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::checkEmailAction',  '_route' => 'sonata_user_resetting_check_email',);
            }
            not_sonata_user_resetting_check_email:

            // sonata_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_sonata_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_user_resetting_reset')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::resetAction',));
            }
            not_sonata_user_resetting_reset:

        }

        if (0 === strpos($pathinfo, '/perfil')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/perfil') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            if (0 === strpos($pathinfo, '/perfil/edit-')) {
                // fos_user_profile_edit_authentication
                if ($pathinfo === '/perfil/edit-authentication') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editAuthenticationAction',  '_route' => 'fos_user_profile_edit_authentication',);
                }

                // fos_user_profile_edit
                if ($pathinfo === '/perfil/edit-profile') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editProfileAction',  '_route' => 'fos_user_profile_edit',);
                }

            }

            // sonata_user_profile_show
            if (rtrim($pathinfo, '/') === '/perfil') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_sonata_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_user_profile_show');
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::showAction',  '_route' => 'sonata_user_profile_show',);
            }
            not_sonata_user_profile_show:

            if (0 === strpos($pathinfo, '/perfil/edit-')) {
                // sonata_user_profile_edit_authentication
                if ($pathinfo === '/perfil/edit-authentication') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editAuthenticationAction',  '_route' => 'sonata_user_profile_edit_authentication',);
                }

                // sonata_user_profile_edit
                if ($pathinfo === '/perfil/edit-profile') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editProfileAction',  '_route' => 'sonata_user_profile_edit',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/registro')) {
            // fos_user_registration_register
            if (rtrim($pathinfo, '/') === '/registro') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::registerAction',  '_route' => 'fos_user_registration_register',);
            }

            if (0 === strpos($pathinfo, '/registro/c')) {
                // fos_user_registration_check_email
                if ($pathinfo === '/registro/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_registration_check_email;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/registro/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/registro/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::confirmAction',));
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ($pathinfo === '/registro/confirmed') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    }
                    not_fos_user_registration_confirmed:

                }

            }

            // sonata_user_registration_register
            if (rtrim($pathinfo, '/') === '/registro') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_user_registration_register');
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::registerAction',  '_route' => 'sonata_user_registration_register',);
            }

            if (0 === strpos($pathinfo, '/registro/c')) {
                // sonata_user_registration_check_email
                if ($pathinfo === '/registro/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sonata_user_registration_check_email;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::checkEmailAction',  '_route' => 'sonata_user_registration_check_email',);
                }
                not_sonata_user_registration_check_email:

                if (0 === strpos($pathinfo, '/registro/confirm')) {
                    // sonata_user_registration_confirm
                    if (preg_match('#^/registro/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sonata_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_user_registration_confirm')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::confirmAction',));
                    }
                    not_sonata_user_registration_confirm:

                    // sonata_user_registration_confirmed
                    if ($pathinfo === '/registro/confirmed') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sonata_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::confirmedAction',  '_route' => 'sonata_user_registration_confirmed',);
                    }
                    not_sonata_user_registration_confirmed:

                }

            }

        }

        if (0 === strpos($pathinfo, '/perfil/change-password')) {
            // fos_user_change_password
            if ($pathinfo === '/perfil/change-password') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ChangePasswordFOSUser1Controller::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

            // sonata_user_change_password
            if ($pathinfo === '/perfil/change-password') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_sonata_user_change_password;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ChangePasswordFOSUser1Controller::changePasswordAction',  '_route' => 'sonata_user_change_password',);
            }
            not_sonata_user_change_password:

        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/log')) {
                if (0 === strpos($pathinfo, '/admin/login')) {
                    // sonata_user_admin_security_login
                    if ($pathinfo === '/admin/login') {
                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::loginAction',  '_route' => 'sonata_user_admin_security_login',);
                    }

                    // sonata_user_admin_security_check
                    if ($pathinfo === '/admin/login_check') {
                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::checkAction',  '_route' => 'sonata_user_admin_security_check',);
                    }

                }

                // sonata_user_admin_security_logout
                if ($pathinfo === '/admin/logout') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::logoutAction',  '_route' => 'sonata_user_admin_security_logout',);
                }

            }

            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            if (0 === strpos($pathinfo, '/admin/mischiros/tienda')) {
                if (0 === strpos($pathinfo, '/admin/mischiros/tienda/t')) {
                    if (0 === strpos($pathinfo, '/admin/mischiros/tienda/tipo')) {
                        // admin_mischiros_tienda_tipo_list
                        if ($pathinfo === '/admin/mischiros/tienda/tipo/list') {
                            return array (  '_controller' => 'Mischiros\\TiendaBundle\\Controller\\TipoAdminController::listAction',  '_sonata_admin' => 'mischiros_tienda.admin.tipo',  '_sonata_name' => 'admin_mischiros_tienda_tipo_list',  '_route' => 'admin_mischiros_tienda_tipo_list',);
                        }

                        // admin_mischiros_tienda_tipo_create
                        if ($pathinfo === '/admin/mischiros/tienda/tipo/create') {
                            return array (  '_controller' => 'Mischiros\\TiendaBundle\\Controller\\TipoAdminController::createAction',  '_sonata_admin' => 'mischiros_tienda.admin.tipo',  '_sonata_name' => 'admin_mischiros_tienda_tipo_create',  '_route' => 'admin_mischiros_tienda_tipo_create',);
                        }

                        // admin_mischiros_tienda_tipo_batch
                        if ($pathinfo === '/admin/mischiros/tienda/tipo/batch') {
                            return array (  '_controller' => 'Mischiros\\TiendaBundle\\Controller\\TipoAdminController::batchAction',  '_sonata_admin' => 'mischiros_tienda.admin.tipo',  '_sonata_name' => 'admin_mischiros_tienda_tipo_batch',  '_route' => 'admin_mischiros_tienda_tipo_batch',);
                        }

                        // admin_mischiros_tienda_tipo_edit
                        if (preg_match('#^/admin/mischiros/tienda/tipo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_mischiros_tienda_tipo_edit')), array (  '_controller' => 'Mischiros\\TiendaBundle\\Controller\\TipoAdminController::editAction',  '_sonata_admin' => 'mischiros_tienda.admin.tipo',  '_sonata_name' => 'admin_mischiros_tienda_tipo_edit',));
                        }

                        // admin_mischiros_tienda_tipo_delete
                        if (preg_match('#^/admin/mischiros/tienda/tipo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_mischiros_tienda_tipo_delete')), array (  '_controller' => 'Mischiros\\TiendaBundle\\Controller\\TipoAdminController::deleteAction',  '_sonata_admin' => 'mischiros_tienda.admin.tipo',  '_sonata_name' => 'admin_mischiros_tienda_tipo_delete',));
                        }

                        // admin_mischiros_tienda_tipo_show
                        if (preg_match('#^/admin/mischiros/tienda/tipo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_mischiros_tienda_tipo_show')), array (  '_controller' => 'Mischiros\\TiendaBundle\\Controller\\TipoAdminController::showAction',  '_sonata_admin' => 'mischiros_tienda.admin.tipo',  '_sonata_name' => 'admin_mischiros_tienda_tipo_show',));
                        }

                        // admin_mischiros_tienda_tipo_export
                        if ($pathinfo === '/admin/mischiros/tienda/tipo/export') {
                            return array (  '_controller' => 'Mischiros\\TiendaBundle\\Controller\\TipoAdminController::exportAction',  '_sonata_admin' => 'mischiros_tienda.admin.tipo',  '_sonata_name' => 'admin_mischiros_tienda_tipo_export',  '_route' => 'admin_mischiros_tienda_tipo_export',);
                        }

                        // admin_mischiros_tienda_tipo_acl
                        if (preg_match('#^/admin/mischiros/tienda/tipo/(?P<id>[^/]++)/acl$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_mischiros_tienda_tipo_acl')), array (  '_controller' => 'Mischiros\\TiendaBundle\\Controller\\TipoAdminController::aclAction',  '_sonata_admin' => 'mischiros_tienda.admin.tipo',  '_sonata_name' => 'admin_mischiros_tienda_tipo_acl',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/mischiros/tienda/talla')) {
                        // admin_mischiros_tienda_talla_list
                        if ($pathinfo === '/admin/mischiros/tienda/talla/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'mischiros_tienda.admin.talla',  '_sonata_name' => 'admin_mischiros_tienda_talla_list',  '_route' => 'admin_mischiros_tienda_talla_list',);
                        }

                        // admin_mischiros_tienda_talla_create
                        if ($pathinfo === '/admin/mischiros/tienda/talla/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'mischiros_tienda.admin.talla',  '_sonata_name' => 'admin_mischiros_tienda_talla_create',  '_route' => 'admin_mischiros_tienda_talla_create',);
                        }

                        // admin_mischiros_tienda_talla_batch
                        if ($pathinfo === '/admin/mischiros/tienda/talla/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'mischiros_tienda.admin.talla',  '_sonata_name' => 'admin_mischiros_tienda_talla_batch',  '_route' => 'admin_mischiros_tienda_talla_batch',);
                        }

                        // admin_mischiros_tienda_talla_edit
                        if (preg_match('#^/admin/mischiros/tienda/talla/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_mischiros_tienda_talla_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'mischiros_tienda.admin.talla',  '_sonata_name' => 'admin_mischiros_tienda_talla_edit',));
                        }

                        // admin_mischiros_tienda_talla_delete
                        if (preg_match('#^/admin/mischiros/tienda/talla/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_mischiros_tienda_talla_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'mischiros_tienda.admin.talla',  '_sonata_name' => 'admin_mischiros_tienda_talla_delete',));
                        }

                        // admin_mischiros_tienda_talla_show
                        if (preg_match('#^/admin/mischiros/tienda/talla/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_mischiros_tienda_talla_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'mischiros_tienda.admin.talla',  '_sonata_name' => 'admin_mischiros_tienda_talla_show',));
                        }

                        // admin_mischiros_tienda_talla_export
                        if ($pathinfo === '/admin/mischiros/tienda/talla/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'mischiros_tienda.admin.talla',  '_sonata_name' => 'admin_mischiros_tienda_talla_export',  '_route' => 'admin_mischiros_tienda_talla_export',);
                        }

                        // admin_mischiros_tienda_talla_acl
                        if (preg_match('#^/admin/mischiros/tienda/talla/(?P<id>[^/]++)/acl$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_mischiros_tienda_talla_acl')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::aclAction',  '_sonata_admin' => 'mischiros_tienda.admin.talla',  '_sonata_name' => 'admin_mischiros_tienda_talla_acl',));
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/mischiros/tienda/medida')) {
                    // admin_mischiros_tienda_medida_list
                    if ($pathinfo === '/admin/mischiros/tienda/medida/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'mischiros_tienda.admin.medida',  '_sonata_name' => 'admin_mischiros_tienda_medida_list',  '_route' => 'admin_mischiros_tienda_medida_list',);
                    }

                    // admin_mischiros_tienda_medida_create
                    if ($pathinfo === '/admin/mischiros/tienda/medida/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'mischiros_tienda.admin.medida',  '_sonata_name' => 'admin_mischiros_tienda_medida_create',  '_route' => 'admin_mischiros_tienda_medida_create',);
                    }

                    // admin_mischiros_tienda_medida_batch
                    if ($pathinfo === '/admin/mischiros/tienda/medida/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'mischiros_tienda.admin.medida',  '_sonata_name' => 'admin_mischiros_tienda_medida_batch',  '_route' => 'admin_mischiros_tienda_medida_batch',);
                    }

                    // admin_mischiros_tienda_medida_edit
                    if (preg_match('#^/admin/mischiros/tienda/medida/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_mischiros_tienda_medida_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'mischiros_tienda.admin.medida',  '_sonata_name' => 'admin_mischiros_tienda_medida_edit',));
                    }

                    // admin_mischiros_tienda_medida_delete
                    if (preg_match('#^/admin/mischiros/tienda/medida/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_mischiros_tienda_medida_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'mischiros_tienda.admin.medida',  '_sonata_name' => 'admin_mischiros_tienda_medida_delete',));
                    }

                    // admin_mischiros_tienda_medida_show
                    if (preg_match('#^/admin/mischiros/tienda/medida/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_mischiros_tienda_medida_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'mischiros_tienda.admin.medida',  '_sonata_name' => 'admin_mischiros_tienda_medida_show',));
                    }

                    // admin_mischiros_tienda_medida_export
                    if ($pathinfo === '/admin/mischiros/tienda/medida/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'mischiros_tienda.admin.medida',  '_sonata_name' => 'admin_mischiros_tienda_medida_export',  '_route' => 'admin_mischiros_tienda_medida_export',);
                    }

                    // admin_mischiros_tienda_medida_acl
                    if (preg_match('#^/admin/mischiros/tienda/medida/(?P<id>[^/]++)/acl$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_mischiros_tienda_medida_acl')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::aclAction',  '_sonata_admin' => 'mischiros_tienda.admin.medida',  '_sonata_name' => 'admin_mischiros_tienda_medida_acl',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/mischiros/tienda/prenda')) {
                    // admin_mischiros_tienda_prenda_list
                    if ($pathinfo === '/admin/mischiros/tienda/prenda/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'mischiros_tienda.admin.prenda',  '_sonata_name' => 'admin_mischiros_tienda_prenda_list',  '_route' => 'admin_mischiros_tienda_prenda_list',);
                    }

                    // admin_mischiros_tienda_prenda_create
                    if ($pathinfo === '/admin/mischiros/tienda/prenda/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'mischiros_tienda.admin.prenda',  '_sonata_name' => 'admin_mischiros_tienda_prenda_create',  '_route' => 'admin_mischiros_tienda_prenda_create',);
                    }

                    // admin_mischiros_tienda_prenda_batch
                    if ($pathinfo === '/admin/mischiros/tienda/prenda/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'mischiros_tienda.admin.prenda',  '_sonata_name' => 'admin_mischiros_tienda_prenda_batch',  '_route' => 'admin_mischiros_tienda_prenda_batch',);
                    }

                    // admin_mischiros_tienda_prenda_edit
                    if (preg_match('#^/admin/mischiros/tienda/prenda/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_mischiros_tienda_prenda_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'mischiros_tienda.admin.prenda',  '_sonata_name' => 'admin_mischiros_tienda_prenda_edit',));
                    }

                    // admin_mischiros_tienda_prenda_delete
                    if (preg_match('#^/admin/mischiros/tienda/prenda/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_mischiros_tienda_prenda_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'mischiros_tienda.admin.prenda',  '_sonata_name' => 'admin_mischiros_tienda_prenda_delete',));
                    }

                    // admin_mischiros_tienda_prenda_show
                    if (preg_match('#^/admin/mischiros/tienda/prenda/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_mischiros_tienda_prenda_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'mischiros_tienda.admin.prenda',  '_sonata_name' => 'admin_mischiros_tienda_prenda_show',));
                    }

                    // admin_mischiros_tienda_prenda_export
                    if ($pathinfo === '/admin/mischiros/tienda/prenda/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'mischiros_tienda.admin.prenda',  '_sonata_name' => 'admin_mischiros_tienda_prenda_export',  '_route' => 'admin_mischiros_tienda_prenda_export',);
                    }

                    // admin_mischiros_tienda_prenda_acl
                    if (preg_match('#^/admin/mischiros/tienda/prenda/(?P<id>[^/]++)/acl$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_mischiros_tienda_prenda_acl')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::aclAction',  '_sonata_admin' => 'mischiros_tienda.admin.prenda',  '_sonata_name' => 'admin_mischiros_tienda_prenda_acl',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/mischiros/tienda/ingreso')) {
                    // admin_mischiros_tienda_ingreso_list
                    if ($pathinfo === '/admin/mischiros/tienda/ingreso/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'mischiros_tienda.admin.ingreso',  '_sonata_name' => 'admin_mischiros_tienda_ingreso_list',  '_route' => 'admin_mischiros_tienda_ingreso_list',);
                    }

                    // admin_mischiros_tienda_ingreso_create
                    if ($pathinfo === '/admin/mischiros/tienda/ingreso/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'mischiros_tienda.admin.ingreso',  '_sonata_name' => 'admin_mischiros_tienda_ingreso_create',  '_route' => 'admin_mischiros_tienda_ingreso_create',);
                    }

                    // admin_mischiros_tienda_ingreso_batch
                    if ($pathinfo === '/admin/mischiros/tienda/ingreso/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'mischiros_tienda.admin.ingreso',  '_sonata_name' => 'admin_mischiros_tienda_ingreso_batch',  '_route' => 'admin_mischiros_tienda_ingreso_batch',);
                    }

                    // admin_mischiros_tienda_ingreso_edit
                    if (preg_match('#^/admin/mischiros/tienda/ingreso/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_mischiros_tienda_ingreso_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'mischiros_tienda.admin.ingreso',  '_sonata_name' => 'admin_mischiros_tienda_ingreso_edit',));
                    }

                    // admin_mischiros_tienda_ingreso_delete
                    if (preg_match('#^/admin/mischiros/tienda/ingreso/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_mischiros_tienda_ingreso_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'mischiros_tienda.admin.ingreso',  '_sonata_name' => 'admin_mischiros_tienda_ingreso_delete',));
                    }

                    // admin_mischiros_tienda_ingreso_show
                    if (preg_match('#^/admin/mischiros/tienda/ingreso/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_mischiros_tienda_ingreso_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'mischiros_tienda.admin.ingreso',  '_sonata_name' => 'admin_mischiros_tienda_ingreso_show',));
                    }

                    // admin_mischiros_tienda_ingreso_export
                    if ($pathinfo === '/admin/mischiros/tienda/ingreso/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'mischiros_tienda.admin.ingreso',  '_sonata_name' => 'admin_mischiros_tienda_ingreso_export',  '_route' => 'admin_mischiros_tienda_ingreso_export',);
                    }

                    // admin_mischiros_tienda_ingreso_acl
                    if (preg_match('#^/admin/mischiros/tienda/ingreso/(?P<id>[^/]++)/acl$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_mischiros_tienda_ingreso_acl')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::aclAction',  '_sonata_admin' => 'mischiros_tienda.admin.ingreso',  '_sonata_name' => 'admin_mischiros_tienda_ingreso_acl',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/sonata')) {
                if (0 === strpos($pathinfo, '/admin/sonata/user')) {
                    if (0 === strpos($pathinfo, '/admin/sonata/user/user')) {
                        // admin_sonata_user_user_list
                        if ($pathinfo === '/admin/sonata/user/user/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_list',  '_route' => 'admin_sonata_user_user_list',);
                        }

                        // admin_sonata_user_user_create
                        if ($pathinfo === '/admin/sonata/user/user/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_create',  '_route' => 'admin_sonata_user_user_create',);
                        }

                        // admin_sonata_user_user_batch
                        if ($pathinfo === '/admin/sonata/user/user/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_batch',  '_route' => 'admin_sonata_user_user_batch',);
                        }

                        // admin_sonata_user_user_edit
                        if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_edit',));
                        }

                        // admin_sonata_user_user_delete
                        if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_delete',));
                        }

                        // admin_sonata_user_user_show
                        if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_show',));
                        }

                        // admin_sonata_user_user_export
                        if ($pathinfo === '/admin/sonata/user/user/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_export',  '_route' => 'admin_sonata_user_user_export',);
                        }

                        // admin_sonata_user_user_acl
                        if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/acl$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_acl')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::aclAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_acl',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/sonata/user/group')) {
                        // admin_sonata_user_group_list
                        if ($pathinfo === '/admin/sonata/user/group/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_list',  '_route' => 'admin_sonata_user_group_list',);
                        }

                        // admin_sonata_user_group_create
                        if ($pathinfo === '/admin/sonata/user/group/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_create',  '_route' => 'admin_sonata_user_group_create',);
                        }

                        // admin_sonata_user_group_batch
                        if ($pathinfo === '/admin/sonata/user/group/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_batch',  '_route' => 'admin_sonata_user_group_batch',);
                        }

                        // admin_sonata_user_group_edit
                        if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_edit',));
                        }

                        // admin_sonata_user_group_delete
                        if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_delete',));
                        }

                        // admin_sonata_user_group_show
                        if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_show',));
                        }

                        // admin_sonata_user_group_export
                        if ($pathinfo === '/admin/sonata/user/group/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_export',  '_route' => 'admin_sonata_user_group_export',);
                        }

                        // admin_sonata_user_group_acl
                        if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/acl$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_acl')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::aclAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_acl',));
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/sonata/media')) {
                    if (0 === strpos($pathinfo, '/admin/sonata/media/media')) {
                        // admin_sonata_media_media_list
                        if ($pathinfo === '/admin/sonata/media/media/list') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::listAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_list',  '_route' => 'admin_sonata_media_media_list',);
                        }

                        // admin_sonata_media_media_create
                        if ($pathinfo === '/admin/sonata/media/media/create') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::createAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_create',  '_route' => 'admin_sonata_media_media_create',);
                        }

                        // admin_sonata_media_media_batch
                        if ($pathinfo === '/admin/sonata/media/media/batch') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::batchAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_batch',  '_route' => 'admin_sonata_media_media_batch',);
                        }

                        // admin_sonata_media_media_edit
                        if (preg_match('#^/admin/sonata/media/media/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_media_edit')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::editAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_edit',));
                        }

                        // admin_sonata_media_media_delete
                        if (preg_match('#^/admin/sonata/media/media/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_media_delete')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::deleteAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_delete',));
                        }

                        // admin_sonata_media_media_show
                        if (preg_match('#^/admin/sonata/media/media/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_media_show')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::showAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_show',));
                        }

                        // admin_sonata_media_media_export
                        if ($pathinfo === '/admin/sonata/media/media/export') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::exportAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_export',  '_route' => 'admin_sonata_media_media_export',);
                        }

                        // admin_sonata_media_media_acl
                        if (preg_match('#^/admin/sonata/media/media/(?P<id>[^/]++)/acl$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_media_acl')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::aclAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_acl',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/sonata/media/gallery')) {
                        // admin_sonata_media_gallery_list
                        if ($pathinfo === '/admin/sonata/media/gallery/list') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::listAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_list',  '_route' => 'admin_sonata_media_gallery_list',);
                        }

                        // admin_sonata_media_gallery_create
                        if ($pathinfo === '/admin/sonata/media/gallery/create') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::createAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_create',  '_route' => 'admin_sonata_media_gallery_create',);
                        }

                        // admin_sonata_media_gallery_batch
                        if ($pathinfo === '/admin/sonata/media/gallery/batch') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::batchAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_batch',  '_route' => 'admin_sonata_media_gallery_batch',);
                        }

                        // admin_sonata_media_gallery_edit
                        if (preg_match('#^/admin/sonata/media/gallery/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_gallery_edit')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::editAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_edit',));
                        }

                        // admin_sonata_media_gallery_delete
                        if (preg_match('#^/admin/sonata/media/gallery/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_gallery_delete')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::deleteAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_delete',));
                        }

                        // admin_sonata_media_gallery_show
                        if (preg_match('#^/admin/sonata/media/gallery/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_gallery_show')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::showAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_show',));
                        }

                        // admin_sonata_media_gallery_export
                        if ($pathinfo === '/admin/sonata/media/gallery/export') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::exportAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_export',  '_route' => 'admin_sonata_media_gallery_export',);
                        }

                        // admin_sonata_media_gallery_acl
                        if (preg_match('#^/admin/sonata/media/gallery/(?P<id>[^/]++)/acl$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_gallery_acl')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::aclAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_acl',));
                        }

                        if (0 === strpos($pathinfo, '/admin/sonata/media/galleryhasmedia')) {
                            // admin_sonata_media_galleryhasmedia_list
                            if ($pathinfo === '/admin/sonata/media/galleryhasmedia/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_list',  '_route' => 'admin_sonata_media_galleryhasmedia_list',);
                            }

                            // admin_sonata_media_galleryhasmedia_create
                            if ($pathinfo === '/admin/sonata/media/galleryhasmedia/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_create',  '_route' => 'admin_sonata_media_galleryhasmedia_create',);
                            }

                            // admin_sonata_media_galleryhasmedia_batch
                            if ($pathinfo === '/admin/sonata/media/galleryhasmedia/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_batch',  '_route' => 'admin_sonata_media_galleryhasmedia_batch',);
                            }

                            // admin_sonata_media_galleryhasmedia_edit
                            if (preg_match('#^/admin/sonata/media/galleryhasmedia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_galleryhasmedia_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_edit',));
                            }

                            // admin_sonata_media_galleryhasmedia_delete
                            if (preg_match('#^/admin/sonata/media/galleryhasmedia/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_galleryhasmedia_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_delete',));
                            }

                            // admin_sonata_media_galleryhasmedia_show
                            if (preg_match('#^/admin/sonata/media/galleryhasmedia/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_galleryhasmedia_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_show',));
                            }

                            // admin_sonata_media_galleryhasmedia_export
                            if ($pathinfo === '/admin/sonata/media/galleryhasmedia/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_export',  '_route' => 'admin_sonata_media_galleryhasmedia_export',);
                            }

                            // admin_sonata_media_galleryhasmedia_acl
                            if (preg_match('#^/admin/sonata/media/galleryhasmedia/(?P<id>[^/]++)/acl$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_galleryhasmedia_acl')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::aclAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_acl',));
                            }

                        }

                    }

                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
