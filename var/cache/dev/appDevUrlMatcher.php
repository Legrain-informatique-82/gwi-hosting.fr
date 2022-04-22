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

        // public-homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'public-homepage');
            }

            return array (  '_controller' => 'PublicBundle\\Controller\\DefaultController::indexAction',  '_route' => 'public-homepage',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            // ajax-check-ndd
            if (0 === strpos($pathinfo, '/ajaxcheckndd') && preg_match('#^/ajaxcheckndd/(?P<iduseless>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajax-check-ndd')), array (  '_controller' => 'PublicBundle\\Controller\\DefaultController::ajaxCheckNddAction',));
            }

            if (0 === strpos($pathinfo, '/acheter-un-')) {
                // public-buy-server
                if ($pathinfo === '/acheter-un-serveur') {
                    return array (  '_controller' => 'PublicBundle\\Controller\\DefaultController::buyServerAction',  '_route' => 'public-buy-server',);
                }

                // public-buy-ndd
                if ($pathinfo === '/acheter-un-nom-de-domaine') {
                    return array (  '_controller' => 'PublicBundle\\Controller\\DefaultController::buyNddAction',  '_route' => 'public-buy-ndd',);
                }

            }

        }

        // register-agency-ok
        if ($pathinfo === '/mail-sent') {
            return array (  '_controller' => 'PublicBundle\\Controller\\DefaultController::registerAgencyOkAction',  '_route' => 'register-agency-ok',);
        }

        // register-agency
        if ($pathinfo === '/register-agency') {
            return array (  '_controller' => 'PublicBundle\\Controller\\DefaultController::registerAgencyAction',  '_route' => 'register-agency',);
        }

        if (0 === strpos($pathinfo, '/private')) {
            if (0 === strpos($pathinfo, '/private/a')) {
                // after-payment
                if ($pathinfo === '/private/after-payment') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AccountBalanceController::afterPayementAction',  '_route' => 'after-payment',);
                }

                if (0 === strpos($pathinfo, '/private/account_balance')) {
                    // credit_account_balance
                    if ($pathinfo === '/private/account_balance/credit') {
                        return array (  'iduser' => 0,  '_controller' => 'AppBundle\\Controller\\AccountBalanceController::creditAccountBalanceAction',  '_route' => 'credit_account_balance',);
                    }

                    // historic_account_balance_user
                    if ($pathinfo === '/private/account_balance/historic') {
                        return array (  'iduser' => 0,  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\AccountBalanceController::historicAccountBalanceAction',  '_route' => 'historic_account_balance_user',);
                    }

                }

            }

            // historic_account_balance_admin
            if (0 === strpos($pathinfo, '/private/customer') && preg_match('#^/private/customer/(?P<iduser>[^/]++)/account_balance/historic$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'historic_account_balance_admin')), array (  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\AccountBalanceController::historicAccountBalanceAction',));
            }

            if (0 === strpos($pathinfo, '/private/a')) {
                // historic_account_balance_super_admin
                if (0 === strpos($pathinfo, '/private/administrator') && preg_match('#^/private/administrator/(?P<idagency>[^/]++)/customer/(?P<iduser>[^/]++)/account_balance/historic$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'historic_account_balance_super_admin')), array (  '_controller' => 'AppBundle\\Controller\\AccountBalanceController::historicAccountBalanceAction',));
                }

                if (0 === strpos($pathinfo, '/private/agency')) {
                    // choice_facturation_agency
                    if ($pathinfo === '/private/agency/choice-facturation') {
                        return array (  '_controller' => 'AppBundle\\Controller\\AgencyController::choiceFacturationAgencyAction',  '_route' => 'choice_facturation_agency',);
                    }

                    // param-infos-paiements
                    if ($pathinfo === '/private/agency/param-infos-paiements') {
                        return array (  '_controller' => 'AppBundle\\Controller\\AgencyController::setInfosPaiementsAction',  '_route' => 'param-infos-paiements',);
                    }

                    // list-agency
                    if ($pathinfo === '/private/agency') {
                        return array (  '_controller' => 'AppBundle\\Controller\\AgencyController::listAction',  '_route' => 'list-agency',);
                    }

                    // delete-agency
                    if (0 === strpos($pathinfo, '/private/agency/delete') && preg_match('#^/private/agency/delete/(?P<idagency>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete-agency')), array (  '_controller' => 'AppBundle\\Controller\\AgencyController::deleteAction',));
                    }

                    // create-agency
                    if ($pathinfo === '/private/agency/create') {
                        return array (  '_controller' => 'AppBundle\\Controller\\AgencyController::createAction',  '_route' => 'create-agency',);
                    }

                    // update-agency
                    if (0 === strpos($pathinfo, '/private/agency/update') && preg_match('#^/private/agency/update/(?P<idAgency>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'update-agency')), array (  '_controller' => 'AppBundle\\Controller\\AgencyController::updateAction',));
                    }

                }

            }

            // myagency
            if ($pathinfo === '/private/myagency') {
                return array (  'idAgency' => 0,  '_controller' => 'AppBundle\\Controller\\AgencyController::updateAction',  '_route' => 'myagency',);
            }

            // list_product_next_payement
            if ($pathinfo === '/private/produits-en-attente-de-validation') {
                return array (  '_controller' => 'AppBundle\\Controller\\CartController::listProductsNextPayement',  '_route' => 'list_product_next_payement',);
            }

        }

        // public_remove_item_cart
        if (0 === strpos($pathinfo, '/removeItemCart') && preg_match('#^/removeItemCart/(?P<idline>[^/]++)/(?P<redirect>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'public_remove_item_cart')), array (  '_controller' => 'AppBundle\\Controller\\CartController::public_remove_item_cart',));
        }

        if (0 === strpos($pathinfo, '/private')) {
            // remove_item_cart
            if (0 === strpos($pathinfo, '/private/removeItemCart') && preg_match('#^/private/removeItemCart/(?P<idline>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_item_cart')), array (  '_controller' => 'AppBundle\\Controller\\CartController::remove_item_cart',));
            }

            if (0 === strpos($pathinfo, '/private/c')) {
                if (0 === strpos($pathinfo, '/private/cart')) {
                    // submit_cart
                    if (0 === strpos($pathinfo, '/private/cart/pay') && preg_match('#^/private/cart/pay/(?P<iduserwhopay>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'submit_cart')), array (  '_controller' => 'AppBundle\\Controller\\CartController::submitCartAction',));
                    }

                    if (0 === strpos($pathinfo, '/private/cart/next-step-')) {
                        // next_step_cart_server
                        if ($pathinfo === '/private/cart/next-step-server') {
                            return array (  '_controller' => 'AppBundle\\Controller\\CartController::cartNextStepServerAction',  '_route' => 'next_step_cart_server',);
                        }

                        // next_step_cart
                        if ($pathinfo === '/private/cart/next-step-ndd') {
                            return array (  '_controller' => 'AppBundle\\Controller\\CartController::cartNextStepNddAction',  '_route' => 'next_step_cart',);
                        }

                    }

                    // final_step_cart
                    if ($pathinfo === '/private/cart/final') {
                        return array (  '_controller' => 'AppBundle\\Controller\\CartController::cartLastAction',  '_route' => 'final_step_cart',);
                    }

                    // after-payement
                    if ($pathinfo === '/private/cart/thx') {
                        return array (  '_controller' => 'AppBundle\\Controller\\CartController::afterPayement',  '_route' => 'after-payement',);
                    }

                    // credit_and_pay
                    if (0 === strpos($pathinfo, '/private/cart/credit_and_pay') && preg_match('#^/private/cart/credit_and_pay/(?P<iduserwhopay>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'credit_and_pay')), array (  '_controller' => 'AppBundle\\Controller\\CartController::creditAndPayAction',));
                    }

                    // pay_cart
                    if ($pathinfo === '/private/cart') {
                        return array (  '_controller' => 'AppBundle\\Controller\\CartController::payCartAction',  '_route' => 'pay_cart',);
                    }

                }

                if (0 === strpos($pathinfo, '/private/cgu')) {
                    // gestion-cgv
                    if ($pathinfo === '/private/cgu/list') {
                        return array (  '_controller' => 'AppBundle\\Controller\\CguController::indexAction',  '_route' => 'gestion-cgv',);
                    }

                    // add-cgv
                    if ($pathinfo === '/private/cgu/add') {
                        return array (  '_controller' => 'AppBundle\\Controller\\CguController::addCguAction',  '_route' => 'add-cgv',);
                    }

                    // update-cgv
                    if (0 === strpos($pathinfo, '/private/cgu/update') && preg_match('#^/private/cgu/update/(?P<idcgu>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'update-cgv')), array (  '_controller' => 'AppBundle\\Controller\\CguController::updateCguAction',));
                    }

                    // remove-cgv
                    if (0 === strpos($pathinfo, '/private/cgu/remove') && preg_match('#^/private/cgu/remove/(?P<idcgu>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove-cgv')), array (  '_controller' => 'AppBundle\\Controller\\CguController::removeCguAction',));
                    }

                    // lecture-cgv
                    if (0 === strpos($pathinfo, '/private/cgu/a') && preg_match('#^/private/cgu/a/(?P<url>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'lecture-cgv')), array (  '_controller' => 'AppBundle\\Controller\\CguController::readCguAction',));
                    }

                }

                // get_changelog
                if ($pathinfo === '/private/changelog') {
                    return array (  '_controller' => 'AppBundle\\Controller\\ChangelogController::getChangelogAction',  '_route' => 'get_changelog',);
                }

                if (0 === strpos($pathinfo, '/private/contact')) {
                    // update-contact
                    if (0 === strpos($pathinfo, '/private/contact/update') && preg_match('#^/private/contact/update/(?P<idcontact>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'update-contact')), array (  '_controller' => 'AppBundle\\Controller\\ContactController::updateContactAction',));
                    }

                    // list-contacts
                    if ($pathinfo === '/private/contact/list') {
                        return array (  '_controller' => 'AppBundle\\Controller\\ContactController::listContactsAction',  '_route' => 'list-contacts',);
                    }

                    // fancybox_add_contact
                    if (0 === strpos($pathinfo, '/private/contact/addContact') && preg_match('#^/private/contact/addContact/(?P<idCartLine>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fancybox_add_contact')), array (  '_controller' => 'AppBundle\\Controller\\ContactController::fancyCreateContact',));
                    }

                    // fancybox_return_contact
                    if (0 === strpos($pathinfo, '/private/contact/returnContact') && preg_match('#^/private/contact/returnContact/(?P<idLine>[^/]++)/(?P<code>[^/]++)/(?P<value>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fancybox_return_contact')), array (  '_controller' => 'AppBundle\\Controller\\ContactController::fancyReturnContact',));
                    }

                    // fancybox_close
                    if ($pathinfo === '/private/contact/closeContact') {
                        return array (  '_controller' => 'AppBundle\\Controller\\ContactController::fancyCloseContact',  '_route' => 'fancybox_close',);
                    }

                    // fancybox_complete_contact
                    if (0 === strpos($pathinfo, '/private/contact/updateContact') && preg_match('#^/private/contact/updateContact/(?P<contactName>[^/]++)/(?P<ndd>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fancybox_complete_contact')), array (  '_controller' => 'AppBundle\\Controller\\ContactController::fancyCompleteContact',));
                    }

                }

            }

            // homepage
            if (rtrim($pathinfo, '/') === '/private') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'homepage');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            }

            if (0 === strpos($pathinfo, '/private/zipCode')) {
                // addZipCode
                if (rtrim($pathinfo, '/') === '/private/zipCode/add') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'addZipCode');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::createZipCodeAction',  '_route' => 'addZipCode',);
                }

                // listZipCodes
                if (rtrim($pathinfo, '/') === '/private/zipCode/list') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'listZipCodes');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::listZipCodesAction',  '_route' => 'listZipCodes',);
                }

            }

            if (0 === strpos($pathinfo, '/private/city/add')) {
                // addCity
                if (rtrim($pathinfo, '/') === '/private/city/add') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'addCity');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::createCityAction',  '_route' => 'addCity',);
                }

                // cityAddZipCode
                if (rtrim($pathinfo, '/') === '/private/city/addZipCode') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'cityAddZipCode');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::cityAddZipCodeAction',  '_route' => 'cityAddZipCode',);
                }

            }

            // my_email_account
            if (rtrim($pathinfo, '/') === '/private/myMailbox') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'my_email_account');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\EmailController::myemailAccount',  '_route' => 'my_email_account',);
            }

            // email
            if (0 === strpos($pathinfo, '/private/user') && preg_match('#^/private/user/(?P<iduser>[^/]++)/ndd/(?P<ndd>[^/]++)/emaild/(?P<emailAddress>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'email')), array (  '_controller' => 'AppBundle\\Controller\\EmailController::email',));
            }

            // myemail
            if (0 === strpos($pathinfo, '/private/ndd') && preg_match('#^/private/ndd/(?P<ndd>[^/]++)/emaild/(?P<emailAddress>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'myemail')), array (  'iduser' => 0,  '_controller' => 'AppBundle\\Controller\\EmailController::email',));
            }

            // empty_list_emails_for_domain
            if (0 === strpos($pathinfo, '/private/user') && preg_match('#^/private/user/(?P<iduser>[^/]++)/ndd/(?P<ndd>[^/]++)/create\\-email\\-first$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'empty_list_emails_for_domain')), array (  '_controller' => 'AppBundle\\Controller\\EmailController::emptyListAction',));
            }

            // emptylistemail
            if (0 === strpos($pathinfo, '/private/ndd') && preg_match('#^/private/ndd/(?P<ndd>[^/]++)/create\\-email\\-first$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'emptylistemail')), array (  'iduser' => 0,  '_controller' => 'AppBundle\\Controller\\EmailController::emptyListAction',));
            }

            // list_emails_for_domain_super_admin
            if (0 === strpos($pathinfo, '/private/administrator') && preg_match('#^/private/administrator/(?P<idagency>[^/]++)/customer/(?P<iduser>[^/]++)/ndd/(?P<ndd>[^/]++)/email$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_emails_for_domain_super_admin')), array (  '_controller' => 'AppBundle\\Controller\\EmailController::indexAction',));
            }

            // list_emails_for_domain_admin
            if (0 === strpos($pathinfo, '/private/customer') && preg_match('#^/private/customer/(?P<iduser>[^/]++)/ndd/(?P<ndd>[^/]++)/email$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_emails_for_domain_admin')), array (  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\EmailController::indexAction',));
            }

            // list_emails_for_domain_user
            if (0 === strpos($pathinfo, '/private/ndd') && preg_match('#^/private/ndd/(?P<ndd>[^/]++)/email$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_emails_for_domain_user')), array (  'iduser' => 0,  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\EmailController::indexAction',));
            }

            // activate_responder_super_admin
            if (0 === strpos($pathinfo, '/private/administrator') && preg_match('#^/private/administrator/(?P<idagency>[^/]++)/customer/(?P<iduser>[^/]++)/ndd/(?P<ndd>[^/]++)/email/activateresponder/(?P<emailAddress>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'activate_responder_super_admin')), array (  '_controller' => 'AppBundle\\Controller\\EmailController::activateResponder',));
            }

            // activate_responder_admin
            if (0 === strpos($pathinfo, '/private/customer') && preg_match('#^/private/customer/(?P<iduser>[^/]++)/ndd/(?P<ndd>[^/]++)/email/activateresponder/(?P<emailAddress>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'activate_responder_admin')), array (  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\EmailController::activateResponder',));
            }

            // activate_responder_user
            if (0 === strpos($pathinfo, '/private/ndd') && preg_match('#^/private/ndd/(?P<ndd>[^/]++)/email/activateresponder/(?P<emailAddress>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'activate_responder_user')), array (  'iduser' => 0,  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\EmailController::activateResponder',));
            }

            if (0 === strpos($pathinfo, '/private/a')) {
                // activate_responder_compte_email
                if (rtrim($pathinfo, '/') === '/private/activateresponder') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'activate_responder_compte_email');
                    }

                    return array (  'iduser' => 0,  'idagency' => 0,  'emailAddress' => 0,  'ndd' => 0,  '_controller' => 'AppBundle\\Controller\\EmailController::activateResponder',  '_route' => 'activate_responder_compte_email',);
                }

                // disable_responder_super_admin
                if (0 === strpos($pathinfo, '/private/administrator') && preg_match('#^/private/administrator/(?P<idagency>[^/]++)/customer/(?P<iduser>[^/]++)/ndd/(?P<ndd>[^/]++)/email/disableresponder/(?P<emailAddress>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'disable_responder_super_admin')), array (  '_controller' => 'AppBundle\\Controller\\EmailController::disableresponder',));
                }

            }

            // disable_responder_admin
            if (0 === strpos($pathinfo, '/private/customer') && preg_match('#^/private/customer/(?P<iduser>[^/]++)/ndd/(?P<ndd>[^/]++)/email/disableresponder/(?P<emailAddress>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'disable_responder_admin')), array (  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\EmailController::disableresponder',));
            }

            // disable_responder_user
            if (0 === strpos($pathinfo, '/private/ndd') && preg_match('#^/private/ndd/(?P<ndd>[^/]++)/email/disableresponder/(?P<emailAddress>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'disable_responder_user')), array (  'iduser' => 0,  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\EmailController::disableresponder',));
            }

            // disable_responder_compte_email
            if (rtrim($pathinfo, '/') === '/private/disableresponder') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'disable_responder_compte_email');
                }

                return array (  'iduser' => 0,  'idagency' => 0,  'ndd' => 0,  'emailAddress' => 0,  '_controller' => 'AppBundle\\Controller\\EmailController::disableresponder',  '_route' => 'disable_responder_compte_email',);
            }

            // update_mailbox_super_admin
            if (0 === strpos($pathinfo, '/private/administrator') && preg_match('#^/private/administrator/(?P<idagency>[^/]++)/customer/(?P<iduser>[^/]++)/ndd/(?P<ndd>[^/]++)/email/update/(?P<emailAddress>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_mailbox_super_admin')), array (  '_controller' => 'AppBundle\\Controller\\EmailController::updateMailbox',));
            }

            // update_mailbox_admin
            if (0 === strpos($pathinfo, '/private/customer') && preg_match('#^/private/customer/(?P<iduser>[^/]++)/ndd/(?P<ndd>[^/]++)/email/update/(?P<emailAddress>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_mailbox_admin')), array (  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\EmailController::updateMailbox',));
            }

            // update_mailbox_user
            if (0 === strpos($pathinfo, '/private/ndd') && preg_match('#^/private/ndd/(?P<ndd>[^/]++)/email/update/(?P<emailAddress>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_mailbox_user')), array (  'iduser' => 0,  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\EmailController::updateMailbox',));
            }

            // update_role_compte_email
            if (rtrim($pathinfo, '/') === '/private/updateMyMailbox') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'update_role_compte_email');
                }

                return array (  'iduser' => 0,  'idagency' => 0,  'emailAddress' => 0,  'ndd' => 0,  '_controller' => 'AppBundle\\Controller\\EmailController::updateMailbox',  '_route' => 'update_role_compte_email',);
            }

            // create_mailbox_super_admin
            if (0 === strpos($pathinfo, '/private/administrator') && preg_match('#^/private/administrator/(?P<idagency>[^/]++)/customer/(?P<iduser>[^/]++)/ndd/(?P<ndd>[^/]++)/email/create$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'create_mailbox_super_admin')), array (  '_controller' => 'AppBundle\\Controller\\EmailController::createMailbox',));
            }

            // create_mailbox_admin
            if (0 === strpos($pathinfo, '/private/customer') && preg_match('#^/private/customer/(?P<iduser>[^/]++)/ndd/(?P<ndd>[^/]++)/email/create$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'create_mailbox_admin')), array (  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\EmailController::createMailbox',));
            }

            // create_mailbox_user
            if (0 === strpos($pathinfo, '/private/ndd') && preg_match('#^/private/ndd/(?P<ndd>[^/]++)/email/create$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'create_mailbox_user')), array (  'iduser' => 0,  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\EmailController::createMailbox',));
            }

            // update_mail_forward_super_admin
            if (0 === strpos($pathinfo, '/private/administrator') && preg_match('#^/private/administrator/(?P<idagency>[^/]++)/customer/(?P<iduser>[^/]++)/ndd/(?P<ndd>[^/]++)/email/updateforward/(?P<emailAddress>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_mail_forward_super_admin')), array (  '_controller' => 'AppBundle\\Controller\\EmailController::updateForward',));
            }

            // update_mail_forward_admin
            if (0 === strpos($pathinfo, '/private/customer') && preg_match('#^/private/customer/(?P<iduser>[^/]++)/ndd/(?P<ndd>[^/]++)/email/updateforward/(?P<emailAddress>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_mail_forward_admin')), array (  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\EmailController::updateForward',));
            }

            // update_mail_forward_user
            if (0 === strpos($pathinfo, '/private/ndd') && preg_match('#^/private/ndd/(?P<ndd>[^/]++)/email/updateforward/(?P<emailAddress>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_mail_forward_user')), array (  'iduser' => 0,  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\EmailController::updateForward',));
            }

            // delete_mail_forward_super_admin
            if (0 === strpos($pathinfo, '/private/administrator') && preg_match('#^/private/administrator/(?P<idagency>[^/]++)/customer/(?P<iduser>[^/]++)/ndd/(?P<ndd>[^/]++)/email/deleteforward/(?P<emailAddress>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_mail_forward_super_admin')), array (  '_controller' => 'AppBundle\\Controller\\EmailController::deleteForward',));
            }

            // delete_mail_forward_admin
            if (0 === strpos($pathinfo, '/private/customer') && preg_match('#^/private/customer/(?P<iduser>[^/]++)/ndd/(?P<ndd>[^/]++)/email/deleteforward/(?P<emailAddress>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_mail_forward_admin')), array (  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\EmailController::deleteForward',));
            }

            // delete_mail_forward_user
            if (0 === strpos($pathinfo, '/private/ndd') && preg_match('#^/private/ndd/(?P<ndd>[^/]++)/email/deleteforward/(?P<emailAddress>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_mail_forward_user')), array (  'iduser' => 0,  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\EmailController::deleteForward',));
            }

            // create_forward_super_admin
            if (0 === strpos($pathinfo, '/private/administrator') && preg_match('#^/private/administrator/(?P<idagency>[^/]++)/customer/(?P<iduser>[^/]++)/ndd/(?P<ndd>[^/]++)/email/createforward$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'create_forward_super_admin')), array (  '_controller' => 'AppBundle\\Controller\\EmailController::createForward',));
            }

            // create_forward_admin
            if (0 === strpos($pathinfo, '/private/customer') && preg_match('#^/private/customer/(?P<iduser>[^/]++)/ndd/(?P<ndd>[^/]++)/email/createforward$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'create_forward_admin')), array (  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\EmailController::createForward',));
            }

            // create_forward_user
            if (0 === strpos($pathinfo, '/private/ndd') && preg_match('#^/private/ndd/(?P<ndd>[^/]++)/email/createforward$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'create_forward_user')), array (  'iduser' => 0,  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\EmailController::createForward',));
            }

            // list_alias_mailbox_super_admin
            if (0 === strpos($pathinfo, '/private/administrator') && preg_match('#^/private/administrator/(?P<idagency>[^/]++)/customer/(?P<iduser>[^/]++)/ndd/(?P<ndd>[^/]++)/email/(?P<emailAddress>[^/]++)/alias/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'list_alias_mailbox_super_admin');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_alias_mailbox_super_admin')), array (  '_controller' => 'AppBundle\\Controller\\EmailController::listAlias',));
            }

            // list_alias_mailbox_admin
            if (0 === strpos($pathinfo, '/private/customer') && preg_match('#^/private/customer/(?P<iduser>[^/]++)/ndd/(?P<ndd>[^/]++)/email/(?P<emailAddress>[^/]++)/alias/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'list_alias_mailbox_admin');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_alias_mailbox_admin')), array (  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\EmailController::listAlias',));
            }

            // list_alias_mailbox_user
            if (0 === strpos($pathinfo, '/private/ndd') && preg_match('#^/private/ndd/(?P<ndd>[^/]++)/email/(?P<emailAddress>[^/]++)/alias/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'list_alias_mailbox_user');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_alias_mailbox_user')), array (  'iduser' => 0,  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\EmailController::listAlias',));
            }

            // mailbox
            if (0 === strpos($pathinfo, '/private/user') && preg_match('#^/private/user/(?P<iduser>[^/]++)/ndd/(?P<ndd>[^/]++)/email/(?P<addressEmail>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mailbox')), array (  '_controller' => 'AppBundle\\Controller\\EmailController::mailbox',));
            }

            // delete_alias_mailbox_super_admin
            if (0 === strpos($pathinfo, '/private/administrator') && preg_match('#^/private/administrator/(?P<idagency>[^/]++)/customer/(?P<iduser>[^/]++)/ndd/(?P<ndd>[^/]++)/email/(?P<emailAddress>[^/]++)/alias/delete/(?P<alias>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'delete_alias_mailbox_super_admin');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_alias_mailbox_super_admin')), array (  '_controller' => 'AppBundle\\Controller\\EmailController::deleteAlias',));
            }

            // delete_alias_mailbox_admin
            if (0 === strpos($pathinfo, '/private/customer') && preg_match('#^/private/customer/(?P<iduser>[^/]++)/ndd/(?P<ndd>[^/]++)/email/(?P<emailAddress>[^/]++)/alias/delete/(?P<alias>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'delete_alias_mailbox_admin');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_alias_mailbox_admin')), array (  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\EmailController::deleteAlias',));
            }

            // delete_alias_mailbox_user
            if (0 === strpos($pathinfo, '/private/ndd') && preg_match('#^/private/ndd/(?P<ndd>[^/]++)/email/(?P<emailAddress>[^/]++)/alias/delete/(?P<alias>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'delete_alias_mailbox_user');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_alias_mailbox_user')), array (  'iduser' => 0,  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\EmailController::deleteAlias',));
            }

            // delete_alias_compte_email
            if (0 === strpos($pathinfo, '/private/supprimerAlias') && preg_match('#^/private/supprimerAlias/(?P<alias>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'delete_alias_compte_email');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_alias_compte_email')), array (  'iduser' => 0,  'idagency' => 0,  'emailAddress' => 0,  'ndd' => 0,  '_controller' => 'AppBundle\\Controller\\EmailController::deleteAlias',));
            }

            // add_alias_mailbox_super_admin
            if (0 === strpos($pathinfo, '/private/administrator') && preg_match('#^/private/administrator/(?P<idagency>[^/]++)/customer/(?P<iduser>[^/]++)/ndd/(?P<ndd>[^/]++)/email/(?P<emailAddress>[^/]++)/alias/create/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'add_alias_mailbox_super_admin');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_alias_mailbox_super_admin')), array (  '_controller' => 'AppBundle\\Controller\\EmailController::createAlias',));
            }

            // add_alias_mailbox_admin
            if (0 === strpos($pathinfo, '/private/customer') && preg_match('#^/private/customer/(?P<iduser>[^/]++)/ndd/(?P<ndd>[^/]++)/email/(?P<emailAddress>[^/]++)/alias/create/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'add_alias_mailbox_admin');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_alias_mailbox_admin')), array (  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\EmailController::createAlias',));
            }

            // add_alias_mailbox_user
            if (0 === strpos($pathinfo, '/private/ndd') && preg_match('#^/private/ndd/(?P<ndd>[^/]++)/email/(?P<emailAddress>[^/]++)/alias/create/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'add_alias_mailbox_user');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_alias_mailbox_user')), array (  'iduser' => 0,  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\EmailController::createAlias',));
            }

            if (0 === strpos($pathinfo, '/private/ad')) {
                // add_alias_mailbox_compte_email
                if (rtrim($pathinfo, '/') === '/private/addAlias') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'add_alias_mailbox_compte_email');
                    }

                    return array (  'iduser' => 0,  'idagency' => 0,  'emailAddress' => 0,  'ndd' => 0,  '_controller' => 'AppBundle\\Controller\\EmailController::createAlias',  '_route' => 'add_alias_mailbox_compte_email',);
                }

                // delete_mailbox_super_admin
                if (0 === strpos($pathinfo, '/private/administrator') && preg_match('#^/private/administrator/(?P<idagency>[^/]++)/customer/(?P<iduser>[^/]++)/ndd/(?P<ndd>[^/]++)/email/delete/(?P<emailAddress>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_mailbox_super_admin')), array (  '_controller' => 'AppBundle\\Controller\\EmailController::deleteMailbox',));
                }

            }

            // delete_mailbox_admin
            if (0 === strpos($pathinfo, '/private/customer') && preg_match('#^/private/customer/(?P<iduser>[^/]++)/ndd/(?P<ndd>[^/]++)/email/delete/(?P<emailAddress>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_mailbox_admin')), array (  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\EmailController::deleteMailbox',));
            }

            // delete_mailbox_user
            if (0 === strpos($pathinfo, '/private/ndd') && preg_match('#^/private/ndd/(?P<ndd>[^/]++)/email/delete/(?P<emailAddress>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_mailbox_user')), array (  'iduser' => 0,  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\EmailController::deleteMailbox',));
            }

            // add_heber_super_admin
            if (0 === strpos($pathinfo, '/private/administrator') && preg_match('#^/private/administrator/(?P<idagency>[^/]++)/customer/(?P<iduser>[^/]++)/ndd/(?P<ndd>[^/]++)/hebergement/add$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_heber_super_admin')), array (  '_controller' => 'AppBundle\\Controller\\HebergementController::addHebergementAction',));
            }

            // add_heber_admin
            if (0 === strpos($pathinfo, '/private/customer') && preg_match('#^/private/customer/(?P<iduser>[^/]++)/ndd/(?P<ndd>[^/]++)/hebergement/add$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_heber_admin')), array (  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\HebergementController::addHebergementAction',));
            }

            // add_heber_user
            if (0 === strpos($pathinfo, '/private/ndd') && preg_match('#^/private/ndd/(?P<ndd>[^/]++)/hebergement/add$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_heber_user')), array (  'iduser' => 0,  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\HebergementController::addHebergementAction',));
            }

            // add_heber_ndd_super_admin
            if (0 === strpos($pathinfo, '/private/administrator') && preg_match('#^/private/administrator/(?P<idagency>[^/]++)/customer/(?P<iduser>[^/]++)/ndd/(?P<ndd>[^/]++)/hebergement/addn$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_heber_ndd_super_admin')), array (  '_controller' => 'AppBundle\\Controller\\HebergementController::addHebergementNddAction',));
            }

            // add_heber_ndd_admin
            if (0 === strpos($pathinfo, '/private/customer') && preg_match('#^/private/customer/(?P<iduser>[^/]++)/ndd/(?P<ndd>[^/]++)/hebergement/addn$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_heber_ndd_admin')), array (  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\HebergementController::addHebergementNddAction',));
            }

            // add_heber_ndd_user
            if (0 === strpos($pathinfo, '/private/ndd') && preg_match('#^/private/ndd/(?P<ndd>[^/]++)/hebergement/addn$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_heber_ndd_user')), array (  'iduser' => 0,  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\HebergementController::addHebergementNddAction',));
            }

            // delete_vhost_super_admin
            if (0 === strpos($pathinfo, '/private/administrator') && preg_match('#^/private/administrator/(?P<idagency>[^/]++)/customer/(?P<iduser>[^/]++)/ndd/(?P<ndd>[^/]++)/hebergement/delete/(?P<vhost>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_vhost_super_admin')), array (  'idinstance' => 0,  '_controller' => 'AppBundle\\Controller\\HebergementController::deleteHebergementAction',));
            }

            // delete_vhost_admin
            if (0 === strpos($pathinfo, '/private/customer') && preg_match('#^/private/customer/(?P<iduser>[^/]++)/ndd/(?P<ndd>[^/]++)/hebergement/delete/(?P<vhost>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_vhost_admin')), array (  'idagency' => 0,  'idinstance' => 0,  '_controller' => 'AppBundle\\Controller\\HebergementController::deleteHebergementAction',));
            }

            // delete_vhost_user
            if (0 === strpos($pathinfo, '/private/ndd') && preg_match('#^/private/ndd/(?P<ndd>[^/]++)/hebergement/delete/(?P<vhost>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_vhost_user')), array (  'iduser' => 0,  'idagency' => 0,  'idinstance' => 0,  '_controller' => 'AppBundle\\Controller\\HebergementController::deleteHebergementAction',));
            }

            // delete_vhost_2_super_admin
            if (0 === strpos($pathinfo, '/private/administrator') && preg_match('#^/private/administrator/(?P<idagency>[^/]++)/customer/(?P<iduser>[^/]++)/server/(?P<idinstance>[^/]++)/delete/(?P<vhost>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_vhost_2_super_admin')), array (  'ndd' => 0,  '_controller' => 'AppBundle\\Controller\\HebergementController::deleteHebergementAction',));
            }

            // delete_vhost_2_admin
            if (0 === strpos($pathinfo, '/private/customer') && preg_match('#^/private/customer/(?P<iduser>[^/]++)/server/(?P<idinstance>[^/]++)/delete/(?P<vhost>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_vhost_2_admin')), array (  'idagency' => 0,  'ndd' => 0,  '_controller' => 'AppBundle\\Controller\\HebergementController::deleteHebergementAction',));
            }

            // delete_vhost_2_user
            if (0 === strpos($pathinfo, '/private/server') && preg_match('#^/private/server/(?P<idinstance>[^/]++)/delete/(?P<vhost>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_vhost_2_user')), array (  'iduser' => 0,  'idagency' => 0,  'ndd' => 0,  '_controller' => 'AppBundle\\Controller\\HebergementController::deleteHebergementAction',));
            }

            // hebergement_super_admin
            if (0 === strpos($pathinfo, '/private/administrator') && preg_match('#^/private/administrator/(?P<idagency>[^/]++)/customer/(?P<iduser>[^/]++)/ndd/(?P<ndd>[^/]++)/hebergement$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hebergement_super_admin')), array (  '_controller' => 'AppBundle\\Controller\\HebergementController::hebergementAction',));
            }

            // hebergement_admin
            if (0 === strpos($pathinfo, '/private/customer') && preg_match('#^/private/customer/(?P<iduser>[^/]++)/ndd/(?P<ndd>[^/]++)/hebergement$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hebergement_admin')), array (  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\HebergementController::hebergementAction',));
            }

            // hebergement_user
            if (0 === strpos($pathinfo, '/private/ndd') && preg_match('#^/private/ndd/(?P<ndd>[^/]++)/hebergement$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hebergement_user')), array (  'iduser' => 0,  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\HebergementController::hebergementAction',));
            }

            // liaison_instance_gandi
            if ($pathinfo === '/private/instance/liaisonInstanceGandi') {
                return array (  '_controller' => 'AppBundle\\Controller\\InstanceController::liaisonInstanceGandiAction',  '_route' => 'liaison_instance_gandi',);
            }

            if (0 === strpos($pathinfo, '/private/a')) {
                // all_instances_admin
                if ($pathinfo === '/private/all-servers') {
                    return array (  '_controller' => 'AppBundle\\Controller\\InstanceController::listAllInstancesAction',  '_route' => 'all_instances_admin',);
                }

                // instances_super_admin
                if (0 === strpos($pathinfo, '/private/administrator') && preg_match('#^/private/administrator/(?P<idagency>[^/]++)/customer/(?P<iduser>[^/]++)/server$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'instances_super_admin')), array (  '_controller' => 'AppBundle\\Controller\\InstanceController::listInstancesAction',));
                }

            }

            // instances_admin
            if (0 === strpos($pathinfo, '/private/customer') && preg_match('#^/private/customer/(?P<iduser>[^/]++)/server$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'instances_admin')), array (  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\InstanceController::listInstancesAction',));
            }

            // instances_user
            if ($pathinfo === '/private/server') {
                return array (  'iduser' => 0,  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\InstanceController::listInstancesAction',  '_route' => 'instances_user',);
            }

            // instance_super_admin
            if (0 === strpos($pathinfo, '/private/administrator') && preg_match('#^/private/administrator/(?P<idagency>[^/]++)/customer/(?P<iduser>[^/]++)/server/(?P<idinstance>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'instance_super_admin')), array (  '_controller' => 'AppBundle\\Controller\\InstanceController::instanceAction',));
            }

            // instance_admin
            if (0 === strpos($pathinfo, '/private/customer') && preg_match('#^/private/customer/(?P<iduser>[^/]++)/server/(?P<idinstance>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'instance_admin')), array (  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\InstanceController::instanceAction',));
            }

            // instance_user
            if (0 === strpos($pathinfo, '/private/server') && preg_match('#^/private/server/(?P<idinstance>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'instance_user')), array (  'iduser' => 0,  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\InstanceController::instanceAction',));
            }

            // update_options_instance_super_admin
            if (0 === strpos($pathinfo, '/private/administrator') && preg_match('#^/private/administrator/(?P<idagency>[^/]++)/customer/(?P<iduser>[^/]++)/server/(?P<idinstance>[^/]++)/options$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_options_instance_super_admin')), array (  '_controller' => 'AppBundle\\Controller\\InstanceController::updateOptionsInstanceAction',));
            }

            // update_options_instance_admin
            if (0 === strpos($pathinfo, '/private/customer') && preg_match('#^/private/customer/(?P<iduser>[^/]++)/server/(?P<idinstance>[^/]++)/options$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_options_instance_admin')), array (  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\InstanceController::updateOptionsInstanceAction',));
            }

            // update_options_instance_user
            if (0 === strpos($pathinfo, '/private/server') && preg_match('#^/private/server/(?P<idinstance>[^/]++)/options$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_options_instance_user')), array (  'iduser' => 0,  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\InstanceController::updateOptionsInstanceAction',));
            }

            // toggle_option_maintenance_simple_hosting_super_admin
            if (0 === strpos($pathinfo, '/private/administrator') && preg_match('#^/private/administrator/(?P<idagency>[^/]++)/customer/(?P<iduser>[^/]++)/server/(?P<idinstance>[^/]++)/toggle/(?P<vhost>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'toggle_option_maintenance_simple_hosting_super_admin')), array (  '_controller' => 'AppBundle\\Controller\\InstanceController::toggleOptionMaintenanceAction',));
            }

            // toggle_option_maintenance_simple_hosting_admin
            if (0 === strpos($pathinfo, '/private/customer') && preg_match('#^/private/customer/(?P<iduser>[^/]++)/server/(?P<idinstance>[^/]++)/toggle/(?P<vhost>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'toggle_option_maintenance_simple_hosting_admin')), array (  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\InstanceController::toggleOptionMaintenanceAction',));
            }

            // toggle_option_maintenance_simple_hosting_user
            if (0 === strpos($pathinfo, '/private/server') && preg_match('#^/private/server/(?P<idinstance>[^/]++)/toggle/(?P<vhost>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'toggle_option_maintenance_simple_hosting_user')), array (  'iduser' => 0,  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\InstanceController::toggleOptionMaintenanceAction',));
            }

            // renew_instance_super_admin
            if (0 === strpos($pathinfo, '/private/administrator') && preg_match('#^/private/administrator/(?P<idagency>[^/]++)/customer/(?P<iduser>[^/]++)/server/(?P<idinstance>[^/]++)/renew$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'renew_instance_super_admin')), array (  '_controller' => 'AppBundle\\Controller\\InstanceController::renewInstanceAction',));
            }

            // renew_instance_admin
            if (0 === strpos($pathinfo, '/private/customer') && preg_match('#^/private/customer/(?P<iduser>[^/]++)/server/(?P<idinstance>[^/]++)/renew$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'renew_instance_admin')), array (  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\InstanceController::renewInstanceAction',));
            }

            // renew_instance_user
            if (0 === strpos($pathinfo, '/private/server') && preg_match('#^/private/server/(?P<idinstance>[^/]++)/renew$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'renew_instance_user')), array (  'iduser' => 0,  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\InstanceController::renewInstanceAction',));
            }

            if (0 === strpos($pathinfo, '/private/administrator')) {
                // del_tag_intervention
                if (preg_match('#^/private/administrator/(?P<idagency>[^/]++)/customer/(?P<iduser>[^/]++)/del\\-tag\\-bugzilla/(?P<tag>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'del_tag_intervention')), array (  '_controller' => 'AppBundle\\Controller\\InterventionController::delTagBugzillaAction',));
                }

                // gestTagBugzilla
                if (preg_match('#^/private/administrator/(?P<idagency>[^/]++)/customer/(?P<iduser>[^/]++)/gest\\-tags\\-bugzilla$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gestTagBugzilla')), array (  '_controller' => 'AppBundle\\Controller\\InterventionController::gestTagBugzillaAction',));
                }

                // intervention_d_super_admin
                if (preg_match('#^/private/administrator/(?P<idagency>[^/]++)/customer/(?P<iduser>[^/]++)/ndd/(?P<ndd>[^/]++)/intervention/(?P<idbug>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'intervention_d_super_admin')), array (  '_controller' => 'AppBundle\\Controller\\InterventionController::interventionAction',));
                }

            }

            // intervention_d_admin
            if (0 === strpos($pathinfo, '/private/customer') && preg_match('#^/private/customer/(?P<iduser>[^/]++)/ndd/(?P<ndd>[^/]++)/intervention/(?P<idbug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'intervention_d_admin')), array (  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\InterventionController::interventionAction',));
            }

            // intervention_d_user
            if (0 === strpos($pathinfo, '/private/ndd') && preg_match('#^/private/ndd/(?P<ndd>[^/]++)/intervention/(?P<idbug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'intervention_d_user')), array (  'iduser' => 0,  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\InterventionController::interventionAction',));
            }

            // intervention_super_admin
            if (0 === strpos($pathinfo, '/private/administrator') && preg_match('#^/private/administrator/(?P<idagency>[^/]++)/customer/(?P<iduser>[^/]++)/ndd/(?P<ndd>[^/]++)/intervention$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'intervention_super_admin')), array (  '_controller' => 'AppBundle\\Controller\\InterventionController::listInterventionAction',));
            }

            // intervention_admin
            if (0 === strpos($pathinfo, '/private/customer') && preg_match('#^/private/customer/(?P<iduser>[^/]++)/ndd/(?P<ndd>[^/]++)/intervention$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'intervention_admin')), array (  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\InterventionController::listInterventionAction',));
            }

            // intervention_user
            if (0 === strpos($pathinfo, '/private/ndd') && preg_match('#^/private/ndd/(?P<ndd>[^/]++)/intervention$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'intervention_user')), array (  'iduser' => 0,  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\InterventionController::listInterventionAction',));
            }

            // renew_ndd_super_admin
            if (0 === strpos($pathinfo, '/private/administrator') && preg_match('#^/private/administrator/(?P<idagency>[^/]++)/customer/(?P<iduser>[^/]++)/ndd/renew/(?P<ndd>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'renew_ndd_super_admin')), array (  '_controller' => 'AppBundle\\Controller\\NddController::renewNddAction',));
            }

            // renew_ndd_admin
            if (0 === strpos($pathinfo, '/private/customer') && preg_match('#^/private/customer/(?P<iduser>[^/]++)/ndd/renew/(?P<ndd>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'renew_ndd_admin')), array (  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\NddController::renewNddAction',));
            }

            // renew_ndd_user
            if (0 === strpos($pathinfo, '/private/ndd/renew') && preg_match('#^/private/ndd/renew/(?P<ndd>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'renew_ndd_user')), array (  'iduser' => 0,  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\NddController::renewNddAction',));
            }

            // emptyndd
            if (0 === strpos($pathinfo, '/private/user') && preg_match('#^/private/user/(?P<iduser>[^/]++)/empty\\-ndd$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'emptyndd')), array (  '_controller' => 'AppBundle\\Controller\\NddController::emptyListAction',));
            }

            // emptyndduser
            if ($pathinfo === '/private/empty-ndd') {
                return array (  'iduser' => 0,  '_controller' => 'AppBundle\\Controller\\NddController::emptyListAction',  '_route' => 'emptyndduser',);
            }

            if (0 === strpos($pathinfo, '/private/a')) {
                // all_ndds_admin
                if ($pathinfo === '/private/all-ndds') {
                    return array (  '_controller' => 'AppBundle\\Controller\\NddController::allDomainsAction',  '_route' => 'all_ndds_admin',);
                }

                // ndds_super_admin
                if (0 === strpos($pathinfo, '/private/administrator') && preg_match('#^/private/administrator/(?P<idagency>[^/]++)/customer/(?P<iduser>[^/]++)/ndd$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ndds_super_admin')), array (  '_controller' => 'AppBundle\\Controller\\NddController::indexAction',));
                }

            }

            // ndds_admin
            if (0 === strpos($pathinfo, '/private/customer') && preg_match('#^/private/customer/(?P<iduser>[^/]++)/ndd$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ndds_admin')), array (  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\NddController::indexAction',));
            }

            // ndds_user
            if ($pathinfo === '/private/ndd') {
                return array (  'iduser' => 0,  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\NddController::indexAction',  '_route' => 'ndds_user',);
            }

            // ndd_super_admin
            if (0 === strpos($pathinfo, '/private/administrator') && preg_match('#^/private/administrator/(?P<idagency>[^/]++)/customer/(?P<iduser>[^/]++)/ndd/(?P<ndd>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ndd_super_admin')), array (  '_controller' => 'AppBundle\\Controller\\NddController::domainAction',));
            }

            // ndd_admin
            if (0 === strpos($pathinfo, '/private/customer') && preg_match('#^/private/customer/(?P<iduser>[^/]++)/ndd/(?P<ndd>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ndd_admin')), array (  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\NddController::domainAction',));
            }

            // ndd_user
            if (0 === strpos($pathinfo, '/private/ndd') && preg_match('#^/private/ndd/(?P<ndd>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ndd_user')), array (  'iduser' => 0,  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\NddController::domainAction',));
            }

            if (0 === strpos($pathinfo, '/private/priceList')) {
                // price-list-update-prices
                if (preg_match('#^/private/priceList/(?P<idPriceList>[^/]++)/gestion$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'price-list-update-prices')), array (  '_controller' => 'AppBundle\\Controller\\PriceListController::priceListUpdatePricesAction',));
                }

                // list-pricelists
                if ($pathinfo === '/private/priceList') {
                    return array (  '_controller' => 'AppBundle\\Controller\\PriceListController::listPriceListAction',  '_route' => 'list-pricelists',);
                }

                // price-list-update-liste
                if (0 === strpos($pathinfo, '/private/priceList/update') && preg_match('#^/private/priceList/update/(?P<idPriceList>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'price-list-update-liste')), array (  '_controller' => 'AppBundle\\Controller\\PriceListController::updatePriceListAction',));
                }

                // create-list-pricelists
                if ($pathinfo === '/private/priceList/create') {
                    return array (  '_controller' => 'AppBundle\\Controller\\PriceListController::createPriceListAction',  '_route' => 'create-list-pricelists',);
                }

            }

            if (0 === strpos($pathinfo, '/private/administrator/list-products')) {
                // update-product
                if (0 === strpos($pathinfo, '/private/administrator/list-products/update') && preg_match('#^/private/administrator/list\\-products/update/(?P<idproduct>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'update-product')), array (  '_controller' => 'AppBundle\\Controller\\ProductController::updateProductAction',));
                }

                // list-products
                if ($pathinfo === '/private/administrator/list-products') {
                    return array (  '_controller' => 'AppBundle\\Controller\\ProductController::listProductsActions',  '_route' => 'list-products',);
                }

            }

            // register
            if ($pathinfo === '/private/register') {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::registerAction',  '_route' => 'register',);
            }

            // password_forgotten
            if ($pathinfo === '/private/password-forgotten') {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::passwordForgottenAction',  '_route' => 'password_forgotten',);
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_login_check;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::check',  '_route' => 'login_check',);
                }
                not_login_check:

            }

            // logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_logout;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::logout',  '_route' => 'logout',);
            }
            not_logout:

        }

        // list_all_my_renew
        if ($pathinfo === '/private/mes-renouvellements') {
            return array (  '_controller' => 'AppBundle\\Controller\\ServicesController::indexAction',  '_route' => 'list_all_my_renew',);
        }

        if (0 === strpos($pathinfo, '/test')) {
            // test_init
            if ($pathinfo === '/test/init') {
                return array (  '_controller' => 'AppBundle\\Controller\\TestController::indexAction',  '_route' => 'test_init',);
            }

            // test_redirect
            if ($pathinfo === '/test/redirect') {
                return array (  '_controller' => 'AppBundle\\Controller\\TestController::redirectAction',  '_route' => 'test_redirect',);
            }

        }

        if (0 === strpos($pathinfo, '/private')) {
            // myprofile
            if ($pathinfo === '/private/user/update') {
                return array (  '_controller' => 'AppBundle\\Controller\\UserController::indexAction',  '_route' => 'myprofile',);
            }

            if (0 === strpos($pathinfo, '/private/administrator')) {
                // list-users-agency
                if ($pathinfo === '/private/administrator') {
                    return array (  '_controller' => 'AppBundle\\Controller\\UserController::listUserAgency',  '_route' => 'list-users-agency',);
                }

                // update_customer_super_admin
                if (preg_match('#^/private/administrator/(?P<idagency>[^/]++)/customer/(?P<iduser>[^/]++)/update$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_customer_super_admin')), array (  '_controller' => 'AppBundle\\Controller\\UserController::updateClientsAgency',));
                }

            }

            // update_customer_admin
            if (0 === strpos($pathinfo, '/private/customer') && preg_match('#^/private/customer/(?P<iduser>[^/]++)/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_customer_admin')), array (  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\UserController::updateClientsAgency',));
            }

            // delete_customer_super_admin
            if (0 === strpos($pathinfo, '/private/administrator') && preg_match('#^/private/administrator/(?P<idagency>[^/]++)/customer/(?P<iduser>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_customer_super_admin')), array (  '_controller' => 'AppBundle\\Controller\\UserController::deleteClientsAgency',));
            }

            // delete_customer_admin
            if (0 === strpos($pathinfo, '/private/customer') && preg_match('#^/private/customer/(?P<iduser>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_customer_admin')), array (  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\UserController::deleteClientsAgency',));
            }

            // add_customer_super_admin
            if (0 === strpos($pathinfo, '/private/administrator') && preg_match('#^/private/administrator/(?P<idagency>[^/]++)/customer/add/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'add_customer_super_admin');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_customer_super_admin')), array (  '_controller' => 'AppBundle\\Controller\\UserController::createClientsAgency',));
            }

            // add_customer_admin
            if (rtrim($pathinfo, '/') === '/private/customer/add') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'add_customer_admin');
                }

                return array (  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\UserController::createClientsAgency',  '_route' => 'add_customer_admin',);
            }

            // customer_super_admin
            if (0 === strpos($pathinfo, '/private/administrator') && preg_match('#^/private/administrator/(?P<idagency>[^/]++)/customer/(?P<iduser>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'customer_super_admin')), array (  '_controller' => 'AppBundle\\Controller\\UserController::ficheCustomer',));
            }

            // customer_admin
            if (0 === strpos($pathinfo, '/private/customer') && preg_match('#^/private/customer/(?P<iduser>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'customer_admin')), array (  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\UserController::ficheCustomer',));
            }

            // list_customer_super_admin
            if (0 === strpos($pathinfo, '/private/administrator') && preg_match('#^/private/administrator/(?P<idagency>[^/]++)/customers$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_customer_super_admin')), array (  '_controller' => 'AppBundle\\Controller\\UserController::listCustomers',));
            }

            // list_customer_admin
            if ($pathinfo === '/private/customers') {
                return array (  'idagency' => 0,  '_controller' => 'AppBundle\\Controller\\UserController::listCustomers',  '_route' => 'list_customer_admin',);
            }

            // create-users-agency
            if ($pathinfo === '/private/administrator/create') {
                return array (  '_controller' => 'AppBundle\\Controller\\UserController::createUserAgency',  '_route' => 'create-users-agency',);
            }

            // adm_gest_ndd
            if ($pathinfo === '/private/userndd/add') {
                return array (  '_controller' => 'AppBundle\\Controller\\UserNddController::indexAction',  '_route' => 'adm_gest_ndd',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
