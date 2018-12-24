<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        'site_admin_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),),
        'site_admin_homepage_add_article' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::ajouterArticleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/manageArticle',    ),  ),  4 =>   array (  ),),
        'site_admin_homepage_add_video' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::ajouterVideoHpAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/manageVideoHp',    ),  ),  4 =>   array (  ),),
        'site_admin_collection' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::collectionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/collection',    ),  ),  4 =>   array (  ),),
        'site_admin_add_collection' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::ajouterCollectionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/manageCollection',    ),  ),  4 =>   array (  ),),
        'site_admin_sous_menu' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::sousMenuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/sousMenu',    ),  ),  4 =>   array (  ),),
        'site_admin_add_sous_menu' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::ajouterSousMenuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/manageSousMenuCollection',    ),  ),  4 =>   array (  ),),
        'site_admin_degustation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::degustationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/degustation',    ),  ),  4 =>   array (  ),),
        'site_admin_add_degustation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::ajouterDegustationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/manageDegustation',    ),  ),  4 =>   array (  ),),
        'site_admin_sous_menu_degustation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::sousMenuDegustationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/sousMenuDegustation',    ),  ),  4 =>   array (  ),),
        'site_admin_add_sous_menu_degustation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::ajouterSousMenuDegustationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/manageSousMenuDegustation',    ),  ),  4 =>   array (  ),),
        'site_admin_produit_pro' => array (  0 =>   array (    0 => 'id',    1 => 'type',  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::produitAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/espace_pro_produits',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'type',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    3 =>     array (      0 => 'text',      1 => '/admin',    ),  ),  4 =>   array (  ),),
        'site_admin_manage_produits_pro' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::ajouterProduitAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/espace_pro_manageProduits',    ),  ),  4 =>   array (  ),),
        'site_admin_manage_degustation_pro' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::ajouterProduitAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/espace_pro_manageDegustation',    ),  ),  4 =>   array (  ),),
        'site_admin_degustation_pro' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::degustationProAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/espace_pro_degustation',    ),  ),  4 =>   array (  ),),
        'site_admin_sous_menu_produit_pro' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::sousMenuProduitAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/espace_pro_sous_menu_produit',    ),  ),  4 =>   array (  ),),
        'site_admin_manage_sous_menu_produit_pro' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::ajouterSousMenuProduitAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/espace_pro_manage_sous_menu_produit',    ),  ),  4 =>   array (  ),),
        'site_admin_manage_sous_menu_degustation_pro' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::ajouterSousMenuDegustationProAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/espace_pro_manage_sous_menu_degustation_pro',    ),  ),  4 =>   array (  ),),
        'site_admin_menu_pro' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::autreMenuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/espace_pro_menu_pro',    ),  ),  4 =>   array (  ),),
        'site_admin_manage_menu_pro' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::ajouterAutreMenuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/espace_pro_manage_menu_pro',    ),  ),  4 =>   array (  ),),
        'listes_pays' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::paysAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/pays',    ),  ),  4 =>   array (  ),),
        'ajout_pays' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::ajouterPaysAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/managePays',    ),  ),  4 =>   array (  ),),
        'supprimer' => array (  0 =>   array (    0 => 'table',    1 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::supprimerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'table',    ),    2 =>     array (      0 => 'text',      1 => '/admin/supprimer',    ),  ),  4 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/login',    ),  ),  4 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\AdminBundle\\Controller\\DefaultController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/logout',    ),  ),  4 =>   array (  ),),
        'site_cartron_archive' => array (  0 =>   array (    0 => 'demande',  ),  1 =>   array (    '_controller' => 'Site\\CartronBundle\\Controller\\DefaultController::zipArchiverAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/archive',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'demande',    ),  ),  4 =>   array (  ),),
        'site_cartron_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\CartronBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        'site_cartron_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\CartronBundle\\Controller\\DefaultController::contactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contact',    ),  ),  4 =>   array (  ),),
        'site_cartron_collection' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\CartronBundle\\Controller\\DefaultController::collectionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/collection',    ),  ),  4 =>   array (  ),),
        'site_cartron_collection_produit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\CartronBundle\\Controller\\DefaultController::collectionProduitAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/collection_produit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),  ),  4 =>   array (  ),),
        'site_cartron_degustation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\CartronBundle\\Controller\\DefaultController::degustationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/degustation',    ),  ),  4 =>   array (  ),),
        'site_cartron_degustation_produit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\CartronBundle\\Controller\\DefaultController::degustationProduitAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/degustation_produit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),  ),  4 =>   array (  ),),
        'site_cartron_first_connexion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\CartronBundle\\Controller\\DefaultController::firstConnexionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/premier_connexion',    ),  ),  4 =>   array (  ),),
        'site_cartron_get_news' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\CartronBundle\\Controller\\DefaultController::getNewsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/get_news',    ),  ),  4 =>   array (  ),),
        'site_cartron_creer_compte_pro' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\CartronBundle\\Controller\\DefaultController::creerCompteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/compte',    ),  ),  4 =>   array (  ),),
        'site_cartron_login_pro' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\CartronBundle\\Controller\\DefaultController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),),
        'site_cartron_mpo_pro' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\CartronBundle\\Controller\\DefaultController::motPasseOublieAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/mot_passe_oublie',    ),  ),  4 =>   array (  ),),
        'site_cartron_hp_pro' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Site\\CartronBundle\\Controller\\DefaultController::hpProAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/accueil_pro',    ),  ),  4 =>   array (  ),),
        'site_cartron_detail_produit_pro' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\CartronBundle\\Controller\\DefaultController::detailProduitAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/detail_produit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),  ),  4 =>   array (  ),),
        'site_cartron_liste_produit_pro' => array (  0 =>   array (    0 => 'type',    1 => 'id',  ),  1 =>   array (    '_controller' => 'Site\\CartronBundle\\Controller\\DefaultController::listProduitAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'type',    ),  ),  4 =>   array (  ),),
        'site_cartron_page_statique' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    '_controller' => 'Site\\CartronBundle\\Controller\\DefaultController::pageStatiqueAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'page',    ),  ),  4 =>   array (  ),),
        'myapp_choisir_langue' => array (  0 =>   array (    0 => 'langue',  ),  1 =>   array (    '_controller' => 'Site\\CartronBundle\\Controller\\DefaultController::choisirLangueAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/choisir-langue/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'langue',    ),  ),  4 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}