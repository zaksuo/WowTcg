<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       'tcg_home_default_index' => true,
       'TcgDatabaseBundle_homepage' => true,
       'edition_list' => true,
       'edition_show' => true,
       'edition_new' => true,
       'edition_create' => true,
       'edition_edit' => true,
       'edition_update' => true,
       'edition_delete' => true,
       'type_edition_list' => true,
       'type_edition_show' => true,
       'type_edition_new' => true,
       'type_edition_create' => true,
       'type_edition_edit' => true,
       'type_edition_update' => true,
       'type_edition_delete' => true,
       'faction_list' => true,
       'faction_show' => true,
       'faction_new' => true,
       'faction_create' => true,
       'faction_edit' => true,
       'faction_update' => true,
       'faction_delete' => true,
       'race_list' => true,
       'race_show' => true,
       'race_new' => true,
       'race_create' => true,
       'race_edit' => true,
       'race_update' => true,
       'race_delete' => true,
       'classe_list' => true,
       'classe_show' => true,
       'classe_new' => true,
       'classe_create' => true,
       'classe_edit' => true,
       'classe_update' => true,
       'classe_delete' => true,
       'specialisation_list' => true,
       'specialisation_show' => true,
       'specialisation_new' => true,
       'specialisation_create' => true,
       'specialisation_edit' => true,
       'specialisation_update' => true,
       'specialisation_delete' => true,
       'type_carte_list' => true,
       'type_carte_show' => true,
       'type_carte_new' => true,
       'type_carte_create' => true,
       'type_carte_edit' => true,
       'type_carte_update' => true,
       'type_carte_delete' => true,
       'caracteristiques' => true,
       'caracteristiques_show' => true,
       'donnees_list' => true,
       'donnees_show' => true,
       'donnees_new' => true,
       'donnees_create' => true,
       'donnees_edit' => true,
       'donnees_update' => true,
       'donnees_delete' => true,
       'carte_list' => true,
       'carte_show' => true,
       'carte_new' => true,
       'carte_create' => true,
       'carte_edit' => true,
       'carte_update' => true,
       'carte_delete' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
    }

    private function gettcg_home_default_indexRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Tcg\\HomeBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/hello',  ),));
    }

    private function getTcgDatabaseBundle_homepageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\DatabaseController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/database',  ),));
    }

    private function getedition_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\EditionController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/editions',  ),));
    }

    private function getedition_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\EditionController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/edition',  ),));
    }

    private function getedition_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\EditionController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edition/new',  ),));
    }

    private function getedition_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\EditionController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/edition/create',  ),));
    }

    private function getedition_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\EditionController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/edition',  ),));
    }

    private function getedition_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\EditionController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/edition',  ),));
    }

    private function getedition_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\EditionController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/edition',  ),));
    }

    private function gettype_edition_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\TypeEditionController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/types_editions',  ),));
    }

    private function gettype_edition_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\TypeEditionController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/type_edition',  ),));
    }

    private function gettype_edition_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\TypeEditionController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/type_edition/new',  ),));
    }

    private function gettype_edition_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\TypeEditionController::createAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/type_edition/create',  ),));
    }

    private function gettype_edition_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\TypeEditionController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/type_edition',  ),));
    }

    private function gettype_edition_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\TypeEditionController::updateAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/type_edition',  ),));
    }

    private function gettype_edition_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\TypeEditionController::deleteAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/type_edition',  ),));
    }

    private function getfaction_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\FactionController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/factions',  ),));
    }

    private function getfaction_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\FactionController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/faction',  ),));
    }

    private function getfaction_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\FactionController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/faction/new',  ),));
    }

    private function getfaction_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\FactionController::createAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/faction/create',  ),));
    }

    private function getfaction_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\FactionController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/faction',  ),));
    }

    private function getfaction_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\FactionController::updateAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/faction',  ),));
    }

    private function getfaction_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\FactionController::deleteAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/faction',  ),));
    }

    private function getrace_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\RaceController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/races',  ),));
    }

    private function getrace_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\RaceController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/race',  ),));
    }

    private function getrace_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\RaceController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/race/new',  ),));
    }

    private function getrace_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\RaceController::createAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/race/create',  ),));
    }

    private function getrace_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\RaceController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/race',  ),));
    }

    private function getrace_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\RaceController::updateAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/race',  ),));
    }

    private function getrace_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\RaceController::deleteAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/race',  ),));
    }

    private function getclasse_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\ClasseController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/classes',  ),));
    }

    private function getclasse_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\ClasseController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/classe',  ),));
    }

    private function getclasse_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\ClasseController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/classe/new',  ),));
    }

    private function getclasse_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\ClasseController::createAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/classe/create',  ),));
    }

    private function getclasse_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\ClasseController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/classe',  ),));
    }

    private function getclasse_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\ClasseController::updateAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/classe',  ),));
    }

    private function getclasse_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\ClasseController::deleteAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/classe',  ),));
    }

    private function getspecialisation_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\SpecialisationController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/specialisations',  ),));
    }

    private function getspecialisation_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\SpecialisationController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/specialisation',  ),));
    }

    private function getspecialisation_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\SpecialisationController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/specialisation/new',  ),));
    }

    private function getspecialisation_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\SpecialisationController::createAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/specialisation/create',  ),));
    }

    private function getspecialisation_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\SpecialisationController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/specialisation',  ),));
    }

    private function getspecialisation_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\SpecialisationController::updateAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/specialisation',  ),));
    }

    private function getspecialisation_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\SpecialisationController::deleteAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/specialisation',  ),));
    }

    private function gettype_carte_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\TypeCarteController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/type_cartes',  ),));
    }

    private function gettype_carte_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\TypeCarteController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/type_carte',  ),));
    }

    private function gettype_carte_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\TypeCarteController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/type_carte/new',  ),));
    }

    private function gettype_carte_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\TypeCarteController::createAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/type_carte/create',  ),));
    }

    private function gettype_carte_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\TypeCarteController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/type_carte',  ),));
    }

    private function gettype_carte_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\TypeCarteController::updateAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/type_carte',  ),));
    }

    private function gettype_carte_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\TypeCarteController::deleteAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/type_carte',  ),));
    }

    private function getcaracteristiquesRouteInfo()
    {
        return array(array (), array (  '_controller' => 'TcgDatabaseBundle:Caracteristiques:index',), array (), array (  0 =>   array (    0 => 'text',    1 => '/caracteristiques',  ),));
    }

    private function getcaracteristiques_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'TcgDatabaseBundle:Caracteristiques:show',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/caracteristiques',  ),));
    }

    private function getdonnees_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\TcgDonneesController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/donnees',  ),));
    }

    private function getdonnees_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\TcgDonneesController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/donnees',  ),));
    }

    private function getdonnees_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\TcgDonneesController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/donnees/new',  ),));
    }

    private function getdonnees_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\TcgDonneesController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/donnees/create',  ),));
    }

    private function getdonnees_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\TcgDonneesController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/donnees',  ),));
    }

    private function getdonnees_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\TcgDonneesController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/donnees',  ),));
    }

    private function getdonnees_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\TcgDonneesController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/donnees',  ),));
    }

    private function getcarte_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\CarteController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/cartes',  ),));
    }

    private function getcarte_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\CarteController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/carte',  ),));
    }

    private function getcarte_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\CarteController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/carte/new',  ),));
    }

    private function getcarte_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\CarteController::createAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/carte/create',  ),));
    }

    private function getcarte_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\CarteController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/carte',  ),));
    }

    private function getcarte_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\CarteController::updateAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/carte',  ),));
    }

    private function getcarte_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\CarteController::deleteAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/carte',  ),));
    }
}
