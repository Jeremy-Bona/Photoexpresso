<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/order')) {
            // order_index
            if (rtrim($pathinfo, '/') === '/order') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_order_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'order_index');
                }

                return array (  '_controller' => 'PhotoexpressoBundle\\Controller\\OrderController::indexAction',  '_route' => 'order_index',);
            }
            not_order_index:

            // order_show
            if (preg_match('#^/order/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_order_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'order_show')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\OrderController::showAction',));
            }
            not_order_show:

            // order_new
            if ($pathinfo === '/order/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_order_new;
                }

                return array (  '_controller' => 'PhotoexpressoBundle\\Controller\\OrderController::newAction',  '_route' => 'order_new',);
            }
            not_order_new:

            // order_edit
            if (preg_match('#^/order/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_order_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'order_edit')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\OrderController::editAction',));
            }
            not_order_edit:

            // order_delete
            if (preg_match('#^/order/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_order_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'order_delete')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\OrderController::deleteAction',));
            }
            not_order_delete:

        }

        if (0 === strpos($pathinfo, '/user')) {
            // user_index
            if (rtrim($pathinfo, '/') === '/user') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user_index');
                }

                return array (  '_controller' => 'PhotoexpressoBundle\\Controller\\UserController::indexAction',  '_route' => 'user_index',);
            }
            not_user_index:

            // user_show
            if (preg_match('#^/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\UserController::showAction',));
            }
            not_user_show:

            // user_new
            if ($pathinfo === '/user/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_user_new;
                }

                return array (  '_controller' => 'PhotoexpressoBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
            }
            not_user_new:

            // user_edit
            if (preg_match('#^/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_user_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\UserController::editAction',));
            }
            not_user_edit:

            // user_delete
            if (preg_match('#^/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\UserController::deleteAction',));
            }
            not_user_delete:

        }

        if (0 === strpos($pathinfo, '/adress')) {
            // adress_index
            if (rtrim($pathinfo, '/') === '/adress') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_adress_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'adress_index');
                }

                return array (  '_controller' => 'PhotoexpressoBundle\\Controller\\AddressController::indexAction',  '_route' => 'adress_index',);
            }
            not_adress_index:

            // adress_show
            if (preg_match('#^/adress/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_adress_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adress_show')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\AddressController::showAction',));
            }
            not_adress_show:

            // adress_new
            if ($pathinfo === '/adress/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_adress_new;
                }

                return array (  '_controller' => 'PhotoexpressoBundle\\Controller\\AddressController::newAction',  '_route' => 'adress_new',);
            }
            not_adress_new:

            // adress_edit
            if (preg_match('#^/adress/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_adress_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adress_edit')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\AddressController::editAction',));
            }
            not_adress_edit:

            // adress_delete
            if (preg_match('#^/adress/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_adress_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adress_delete')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\AddressController::deleteAction',));
            }
            not_adress_delete:

        }

        if (0 === strpos($pathinfo, '/passwd')) {
            // passwd_index
            if (rtrim($pathinfo, '/') === '/passwd') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_passwd_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'passwd_index');
                }

                return array (  '_controller' => 'PhotoexpressoBundle\\Controller\\PasswordController::indexAction',  '_route' => 'passwd_index',);
            }
            not_passwd_index:

            // passwd_show
            if (preg_match('#^/passwd/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_passwd_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'passwd_show')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\PasswordController::showAction',));
            }
            not_passwd_show:

            // passwd_new
            if ($pathinfo === '/passwd/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_passwd_new;
                }

                return array (  '_controller' => 'PhotoexpressoBundle\\Controller\\PasswordController::newAction',  '_route' => 'passwd_new',);
            }
            not_passwd_new:

            // passwd_edit
            if (preg_match('#^/passwd/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_passwd_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'passwd_edit')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\PasswordController::editAction',));
            }
            not_passwd_edit:

            // passwd_delete
            if (preg_match('#^/passwd/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_passwd_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'passwd_delete')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\PasswordController::deleteAction',));
            }
            not_passwd_delete:

        }

        if (0 === strpos($pathinfo, '/t')) {
            if (0 === strpos($pathinfo, '/ticket')) {
                // tickets_index
                if (rtrim($pathinfo, '/') === '/ticket') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_tickets_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'tickets_index');
                    }

                    return array (  '_controller' => 'PhotoexpressoBundle\\Controller\\TicketController::indexAction',  '_route' => 'tickets_index',);
                }
                not_tickets_index:

                // tickets_show
                if (preg_match('#^/ticket/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_tickets_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tickets_show')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\TicketController::showAction',));
                }
                not_tickets_show:

                // tickets_new
                if ($pathinfo === '/ticket/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_tickets_new;
                    }

                    return array (  '_controller' => 'PhotoexpressoBundle\\Controller\\TicketController::newAction',  '_route' => 'tickets_new',);
                }
                not_tickets_new:

                // tickets_edit
                if (preg_match('#^/ticket/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_tickets_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tickets_edit')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\TicketController::editAction',));
                }
                not_tickets_edit:

                // tickets_delete
                if (preg_match('#^/ticket/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_tickets_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tickets_delete')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\TicketController::deleteAction',));
                }
                not_tickets_delete:

            }

            if (0 === strpos($pathinfo, '/token')) {
                // token_index
                if (rtrim($pathinfo, '/') === '/token') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_token_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'token_index');
                    }

                    return array (  '_controller' => 'PhotoexpressoBundle\\Controller\\TokenController::indexAction',  '_route' => 'token_index',);
                }
                not_token_index:

                // token_show
                if (preg_match('#^/token/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_token_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'token_show')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\TokenController::showAction',));
                }
                not_token_show:

                // token_new
                if ($pathinfo === '/token/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_token_new;
                    }

                    return array (  '_controller' => 'PhotoexpressoBundle\\Controller\\TokenController::newAction',  '_route' => 'token_new',);
                }
                not_token_new:

                // token_edit
                if (preg_match('#^/token/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_token_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'token_edit')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\TokenController::editAction',));
                }
                not_token_edit:

                // token_delete
                if (preg_match('#^/token/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_token_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'token_delete')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\TokenController::deleteAction',));
                }
                not_token_delete:

            }

        }

        if (0 === strpos($pathinfo, '/user_')) {
            if (0 === strpos($pathinfo, '/user_rights')) {
                // user_rights_index
                if (rtrim($pathinfo, '/') === '/user_rights') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_user_rights_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'user_rights_index');
                    }

                    return array (  '_controller' => 'PhotoexpressoBundle\\Controller\\UserrightsController::indexAction',  '_route' => 'user_rights_index',);
                }
                not_user_rights_index:

                // user_rights_show
                if (preg_match('#^/user_rights/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_user_rights_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_rights_show')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\UserrightsController::showAction',));
                }
                not_user_rights_show:

                // user_rights_new
                if ($pathinfo === '/user_rights/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_user_rights_new;
                    }

                    return array (  '_controller' => 'PhotoexpressoBundle\\Controller\\UserrightsController::newAction',  '_route' => 'user_rights_new',);
                }
                not_user_rights_new:

                // user_rights_edit
                if (preg_match('#^/user_rights/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_user_rights_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_rights_edit')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\UserrightsController::editAction',));
                }
                not_user_rights_edit:

                // user_rights_delete
                if (preg_match('#^/user_rights/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_user_rights_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_rights_delete')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\UserrightsController::deleteAction',));
                }
                not_user_rights_delete:

            }

            if (0 === strpos($pathinfo, '/user_promo')) {
                // user_promo_index
                if (rtrim($pathinfo, '/') === '/user_promo') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_user_promo_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'user_promo_index');
                    }

                    return array (  '_controller' => 'PhotoexpressoBundle\\Controller\\UserPromoController::indexAction',  '_route' => 'user_promo_index',);
                }
                not_user_promo_index:

                // user_promo_show
                if (preg_match('#^/user_promo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_user_promo_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_promo_show')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\UserPromoController::showAction',));
                }
                not_user_promo_show:

                // user_promo_new
                if ($pathinfo === '/user_promo/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_user_promo_new;
                    }

                    return array (  '_controller' => 'PhotoexpressoBundle\\Controller\\UserPromoController::newAction',  '_route' => 'user_promo_new',);
                }
                not_user_promo_new:

                // user_promo_edit
                if (preg_match('#^/user_promo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_user_promo_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_promo_edit')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\UserPromoController::editAction',));
                }
                not_user_promo_edit:

                // user_promo_delete
                if (preg_match('#^/user_promo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_user_promo_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_promo_delete')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\UserPromoController::deleteAction',));
                }
                not_user_promo_delete:

            }

        }

        if (0 === strpos($pathinfo, '/promo')) {
            // promo_index
            if (rtrim($pathinfo, '/') === '/promo') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_promo_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'promo_index');
                }

                return array (  '_controller' => 'PhotoexpressoBundle\\Controller\\PromotionnalController::indexAction',  '_route' => 'promo_index',);
            }
            not_promo_index:

            // promo_show
            if (preg_match('#^/promo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_promo_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'promo_show')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\PromotionnalController::showAction',));
            }
            not_promo_show:

            // promo_new
            if ($pathinfo === '/promo/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_promo_new;
                }

                return array (  '_controller' => 'PhotoexpressoBundle\\Controller\\PromotionnalController::newAction',  '_route' => 'promo_new',);
            }
            not_promo_new:

            // promo_edit
            if (preg_match('#^/promo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_promo_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'promo_edit')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\PromotionnalController::editAction',));
            }
            not_promo_edit:

            // promo_delete
            if (preg_match('#^/promo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_promo_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'promo_delete')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\PromotionnalController::deleteAction',));
            }
            not_promo_delete:

        }

        if (0 === strpos($pathinfo, '/notif')) {
            // notif_index
            if (rtrim($pathinfo, '/') === '/notif') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_notif_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'notif_index');
                }

                return array (  '_controller' => 'PhotoexpressoBundle\\Controller\\NotificationsController::indexAction',  '_route' => 'notif_index',);
            }
            not_notif_index:

            // notif_show
            if (preg_match('#^/notif/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_notif_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'notif_show')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\NotificationsController::showAction',));
            }
            not_notif_show:

            // notif_new
            if ($pathinfo === '/notif/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_notif_new;
                }

                return array (  '_controller' => 'PhotoexpressoBundle\\Controller\\NotificationsController::newAction',  '_route' => 'notif_new',);
            }
            not_notif_new:

            // notif_edit
            if (preg_match('#^/notif/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_notif_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'notif_edit')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\NotificationsController::editAction',));
            }
            not_notif_edit:

            // notif_delete
            if (preg_match('#^/notif/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_notif_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'notif_delete')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\NotificationsController::deleteAction',));
            }
            not_notif_delete:

        }

        if (0 === strpos($pathinfo, '/user_action')) {
            // user_action_index
            if (rtrim($pathinfo, '/') === '/user_action') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_action_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user_action_index');
                }

                return array (  '_controller' => 'PhotoexpressoBundle\\Controller\\UseractionsController::indexAction',  '_route' => 'user_action_index',);
            }
            not_user_action_index:

            // user_action_show
            if (preg_match('#^/user_action/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_action_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_action_show')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\UseractionsController::showAction',));
            }
            not_user_action_show:

            // user_action_new
            if ($pathinfo === '/user_action/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_user_action_new;
                }

                return array (  '_controller' => 'PhotoexpressoBundle\\Controller\\UseractionsController::newAction',  '_route' => 'user_action_new',);
            }
            not_user_action_new:

            // user_action_edit
            if (preg_match('#^/user_action/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_user_action_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_action_edit')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\UseractionsController::editAction',));
            }
            not_user_action_edit:

            // user_action_delete
            if (preg_match('#^/user_action/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_user_action_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_action_delete')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\UseractionsController::deleteAction',));
            }
            not_user_action_delete:

        }

        if (0 === strpos($pathinfo, '/right')) {
            // rights_index
            if (rtrim($pathinfo, '/') === '/right') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_rights_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'rights_index');
                }

                return array (  '_controller' => 'PhotoexpressoBundle\\Controller\\RightsController::indexAction',  '_route' => 'rights_index',);
            }
            not_rights_index:

            // rights_show
            if (preg_match('#^/right/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_rights_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rights_show')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\RightsController::showAction',));
            }
            not_rights_show:

            // rights_new
            if ($pathinfo === '/right/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_rights_new;
                }

                return array (  '_controller' => 'PhotoexpressoBundle\\Controller\\RightsController::newAction',  '_route' => 'rights_new',);
            }
            not_rights_new:

            // rights_edit
            if (preg_match('#^/right/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_rights_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rights_edit')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\RightsController::editAction',));
            }
            not_rights_edit:

            // rights_delete
            if (preg_match('#^/right/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_rights_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rights_delete')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\RightsController::deleteAction',));
            }
            not_rights_delete:

            if (0 === strpos($pathinfo, '/right_group')) {
                // right_group_index
                if (rtrim($pathinfo, '/') === '/right_group') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_right_group_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'right_group_index');
                    }

                    return array (  '_controller' => 'PhotoexpressoBundle\\Controller\\RighstgroupController::indexAction',  '_route' => 'right_group_index',);
                }
                not_right_group_index:

                // right_group_show
                if (preg_match('#^/right_group/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_right_group_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'right_group_show')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\RighstgroupController::showAction',));
                }
                not_right_group_show:

                // right_group_new
                if ($pathinfo === '/right_group/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_right_group_new;
                    }

                    return array (  '_controller' => 'PhotoexpressoBundle\\Controller\\RighstgroupController::newAction',  '_route' => 'right_group_new',);
                }
                not_right_group_new:

                // right_group_edit
                if (preg_match('#^/right_group/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_right_group_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'right_group_edit')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\RighstgroupController::editAction',));
                }
                not_right_group_edit:

                // right_group_delete
                if (preg_match('#^/right_group/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_right_group_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'right_group_delete')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\RighstgroupController::deleteAction',));
                }
                not_right_group_delete:

            }

        }

        if (0 === strpos($pathinfo, '/order_photo_size')) {
            // order_photo_size_index
            if (rtrim($pathinfo, '/') === '/order_photo_size') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_order_photo_size_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'order_photo_size_index');
                }

                return array (  '_controller' => 'PhotoexpressoBundle\\Controller\\OrderphotosizeController::indexAction',  '_route' => 'order_photo_size_index',);
            }
            not_order_photo_size_index:

            // order_photo_size_show
            if (preg_match('#^/order_photo_size/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_order_photo_size_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'order_photo_size_show')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\OrderphotosizeController::showAction',));
            }
            not_order_photo_size_show:

            // order_photo_size_new
            if ($pathinfo === '/order_photo_size/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_order_photo_size_new;
                }

                return array (  '_controller' => 'PhotoexpressoBundle\\Controller\\OrderphotosizeController::newAction',  '_route' => 'order_photo_size_new',);
            }
            not_order_photo_size_new:

            // order_photo_size_edit
            if (preg_match('#^/order_photo_size/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_order_photo_size_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'order_photo_size_edit')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\OrderphotosizeController::editAction',));
            }
            not_order_photo_size_edit:

            // order_photo_size_delete
            if (preg_match('#^/order_photo_size/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_order_photo_size_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'order_photo_size_delete')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\OrderphotosizeController::deleteAction',));
            }
            not_order_photo_size_delete:

        }

        if (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/pri')) {
                if (0 === strpos($pathinfo, '/print_size')) {
                    // print_size_index
                    if (rtrim($pathinfo, '/') === '/print_size') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_print_size_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'print_size_index');
                        }

                        return array (  '_controller' => 'PhotoexpressoBundle\\Controller\\PrintsizeController::indexAction',  '_route' => 'print_size_index',);
                    }
                    not_print_size_index:

                    // print_size_show
                    if (preg_match('#^/print_size/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_print_size_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'print_size_show')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\PrintsizeController::showAction',));
                    }
                    not_print_size_show:

                    // print_size_new
                    if ($pathinfo === '/print_size/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_print_size_new;
                        }

                        return array (  '_controller' => 'PhotoexpressoBundle\\Controller\\PrintsizeController::newAction',  '_route' => 'print_size_new',);
                    }
                    not_print_size_new:

                    // print_size_edit
                    if (preg_match('#^/print_size/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_print_size_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'print_size_edit')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\PrintsizeController::editAction',));
                    }
                    not_print_size_edit:

                    // print_size_delete
                    if (preg_match('#^/print_size/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_print_size_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'print_size_delete')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\PrintsizeController::deleteAction',));
                    }
                    not_print_size_delete:

                }

                if (0 === strpos($pathinfo, '/price')) {
                    // price_index
                    if (rtrim($pathinfo, '/') === '/price') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_price_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'price_index');
                        }

                        return array (  '_controller' => 'PhotoexpressoBundle\\Controller\\PricequantityprintsizeController::indexAction',  '_route' => 'price_index',);
                    }
                    not_price_index:

                    // price_show
                    if (preg_match('#^/price/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_price_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'price_show')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\PricequantityprintsizeController::showAction',));
                    }
                    not_price_show:

                    // price_new
                    if ($pathinfo === '/price/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_price_new;
                        }

                        return array (  '_controller' => 'PhotoexpressoBundle\\Controller\\PricequantityprintsizeController::newAction',  '_route' => 'price_new',);
                    }
                    not_price_new:

                    // price_edit
                    if (preg_match('#^/price/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_price_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'price_edit')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\PricequantityprintsizeController::editAction',));
                    }
                    not_price_edit:

                    // price_delete
                    if (preg_match('#^/price/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_price_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'price_delete')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\PricequantityprintsizeController::deleteAction',));
                    }
                    not_price_delete:

                }

            }

            if (0 === strpos($pathinfo, '/photo')) {
                // photo_index
                if (rtrim($pathinfo, '/') === '/photo') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_photo_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'photo_index');
                    }

                    return array (  '_controller' => 'PhotoexpressoBundle\\Controller\\PhotoController::indexAction',  '_route' => 'photo_index',);
                }
                not_photo_index:

                // photo_show
                if (preg_match('#^/photo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_photo_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'photo_show')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\PhotoController::showAction',));
                }
                not_photo_show:

                // photo_new
                if ($pathinfo === '/photo/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_photo_new;
                    }

                    return array (  '_controller' => 'PhotoexpressoBundle\\Controller\\PhotoController::newAction',  '_route' => 'photo_new',);
                }
                not_photo_new:

                // photo_edit
                if (preg_match('#^/photo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_photo_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'photo_edit')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\PhotoController::editAction',));
                }
                not_photo_edit:

                // photo_delete
                if (preg_match('#^/photo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_photo_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'photo_delete')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\PhotoController::deleteAction',));
                }
                not_photo_delete:

            }

        }

        if (0 === strpos($pathinfo, '/device')) {
            // device_index
            if (rtrim($pathinfo, '/') === '/device') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_device_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'device_index');
                }

                return array (  '_controller' => 'PhotoexpressoBundle\\Controller\\DeviceController::indexAction',  '_route' => 'device_index',);
            }
            not_device_index:

            // device_show
            if (preg_match('#^/device/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_device_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'device_show')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\DeviceController::showAction',));
            }
            not_device_show:

            // device_new
            if ($pathinfo === '/device/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_device_new;
                }

                return array (  '_controller' => 'PhotoexpressoBundle\\Controller\\DeviceController::newAction',  '_route' => 'device_new',);
            }
            not_device_new:

            // device_edit
            if (preg_match('#^/device/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_device_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'device_edit')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\DeviceController::editAction',));
            }
            not_device_edit:

            // device_delete
            if (preg_match('#^/device/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_device_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'device_delete')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\DeviceController::deleteAction',));
            }
            not_device_delete:

            if (0 === strpos($pathinfo, '/device_version')) {
                // device_version_index
                if (rtrim($pathinfo, '/') === '/device_version') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_device_version_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'device_version_index');
                    }

                    return array (  '_controller' => 'PhotoexpressoBundle\\Controller\\DeviceversionController::indexAction',  '_route' => 'device_version_index',);
                }
                not_device_version_index:

                // device_version_show
                if (preg_match('#^/device_version/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_device_version_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'device_version_show')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\DeviceversionController::showAction',));
                }
                not_device_version_show:

                // device_version_new
                if ($pathinfo === '/device_version/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_device_version_new;
                    }

                    return array (  '_controller' => 'PhotoexpressoBundle\\Controller\\DeviceversionController::newAction',  '_route' => 'device_version_new',);
                }
                not_device_version_new:

                // device_version_edit
                if (preg_match('#^/device_version/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_device_version_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'device_version_edit')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\DeviceversionController::editAction',));
                }
                not_device_version_edit:

                // device_version_delete
                if (preg_match('#^/device_version/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_device_version_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'device_version_delete')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\DeviceversionController::deleteAction',));
                }
                not_device_version_delete:

            }

        }

        if (0 === strpos($pathinfo, '/app_version')) {
            // app_version_index
            if (rtrim($pathinfo, '/') === '/app_version') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_app_version_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'app_version_index');
                }

                return array (  '_controller' => 'PhotoexpressoBundle\\Controller\\AppversioningController::indexAction',  '_route' => 'app_version_index',);
            }
            not_app_version_index:

            // app_version_show
            if (preg_match('#^/app_version/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_app_version_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_version_show')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\AppversioningController::showAction',));
            }
            not_app_version_show:

            // app_version_new
            if ($pathinfo === '/app_version/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_app_version_new;
                }

                return array (  '_controller' => 'PhotoexpressoBundle\\Controller\\AppversioningController::newAction',  '_route' => 'app_version_new',);
            }
            not_app_version_new:

            // app_version_edit
            if (preg_match('#^/app_version/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_app_version_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_version_edit')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\AppversioningController::editAction',));
            }
            not_app_version_edit:

            // app_version_delete
            if (preg_match('#^/app_version/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_app_version_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_version_delete')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\AppversioningController::deleteAction',));
            }
            not_app_version_delete:

        }

        if (0 === strpos($pathinfo, '/user_device')) {
            // user_device_index
            if (rtrim($pathinfo, '/') === '/user_device') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_device_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user_device_index');
                }

                return array (  '_controller' => 'PhotoexpressoBundle\\Controller\\UserdeviceController::indexAction',  '_route' => 'user_device_index',);
            }
            not_user_device_index:

            // user_device_show
            if (preg_match('#^/user_device/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_device_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_device_show')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\UserdeviceController::showAction',));
            }
            not_user_device_show:

            // user_device_new
            if ($pathinfo === '/user_device/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_user_device_new;
                }

                return array (  '_controller' => 'PhotoexpressoBundle\\Controller\\UserdeviceController::newAction',  '_route' => 'user_device_new',);
            }
            not_user_device_new:

            // user_device_edit
            if (preg_match('#^/user_device/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_user_device_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_device_edit')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\UserdeviceController::editAction',));
            }
            not_user_device_edit:

            // user_device_delete
            if (preg_match('#^/user_device/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_user_device_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_device_delete')), array (  '_controller' => 'PhotoexpressoBundle\\Controller\\UserdeviceController::deleteAction',));
            }
            not_user_device_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
