<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = urldecode($pathinfo);

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // tcg_home_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Tcg\\HomeBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'tcg_home_default_index'));
        }

        // TcgDatabaseBundle_homepage
        if ($pathinfo === '/database') {
            return array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\DatabaseController::indexAction',  '_route' => 'TcgDatabaseBundle_homepage',);
        }

        // edition_list
        if ($pathinfo === '/editions') {
            return array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\EditionController::indexAction',  '_route' => 'edition_list',);
        }

        // edition_show
        if (0 === strpos($pathinfo, '/edition') && preg_match('#^/edition/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\EditionController::showAction',)), array('_route' => 'edition_show'));
        }

        // edition_new
        if ($pathinfo === '/edition/new') {
            return array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\EditionController::newAction',  '_route' => 'edition_new',);
        }

        // edition_create
        if ($pathinfo === '/edition/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_edition_create;
            }
            return array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\EditionController::createAction',  '_route' => 'edition_create',);
        }
        not_edition_create:

        // edition_edit
        if (0 === strpos($pathinfo, '/edition') && preg_match('#^/edition/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\EditionController::editAction',)), array('_route' => 'edition_edit'));
        }

        // edition_update
        if (0 === strpos($pathinfo, '/edition') && preg_match('#^/edition/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_edition_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\EditionController::updateAction',)), array('_route' => 'edition_update'));
        }
        not_edition_update:

        // edition_delete
        if (0 === strpos($pathinfo, '/edition') && preg_match('#^/edition/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_edition_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\EditionController::deleteAction',)), array('_route' => 'edition_delete'));
        }
        not_edition_delete:

        // type_edition_list
        if ($pathinfo === '/types_editions') {
            return array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\TypeEditionController::indexAction',  '_route' => 'type_edition_list',);
        }

        // type_edition_show
        if (0 === strpos($pathinfo, '/type_edition') && preg_match('#^/type_edition/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\TypeEditionController::showAction',)), array('_route' => 'type_edition_show'));
        }

        // type_edition_new
        if ($pathinfo === '/type_edition/new') {
            return array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\TypeEditionController::newAction',  '_route' => 'type_edition_new',);
        }

        // type_edition_create
        if ($pathinfo === '/type_edition/create') {
            return array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\TypeEditionController::createAction',  '_route' => 'type_edition_create',);
        }

        // type_edition_edit
        if (0 === strpos($pathinfo, '/type_edition') && preg_match('#^/type_edition/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\TypeEditionController::editAction',)), array('_route' => 'type_edition_edit'));
        }

        // type_edition_update
        if (0 === strpos($pathinfo, '/type_edition') && preg_match('#^/type_edition/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\TypeEditionController::updateAction',)), array('_route' => 'type_edition_update'));
        }

        // type_edition_delete
        if (0 === strpos($pathinfo, '/type_edition') && preg_match('#^/type_edition/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\TypeEditionController::deleteAction',)), array('_route' => 'type_edition_delete'));
        }

        // faction_list
        if ($pathinfo === '/factions') {
            return array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\FactionController::indexAction',  '_route' => 'faction_list',);
        }

        // faction_show
        if (0 === strpos($pathinfo, '/faction') && preg_match('#^/faction/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\FactionController::showAction',)), array('_route' => 'faction_show'));
        }

        // faction_new
        if ($pathinfo === '/faction/new') {
            return array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\FactionController::newAction',  '_route' => 'faction_new',);
        }

        // faction_create
        if ($pathinfo === '/faction/create') {
            return array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\FactionController::createAction',  '_route' => 'faction_create',);
        }

        // faction_edit
        if (0 === strpos($pathinfo, '/faction') && preg_match('#^/faction/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\FactionController::editAction',)), array('_route' => 'faction_edit'));
        }

        // faction_update
        if (0 === strpos($pathinfo, '/faction') && preg_match('#^/faction/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\FactionController::updateAction',)), array('_route' => 'faction_update'));
        }

        // faction_delete
        if (0 === strpos($pathinfo, '/faction') && preg_match('#^/faction/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\FactionController::deleteAction',)), array('_route' => 'faction_delete'));
        }

        // race_list
        if ($pathinfo === '/races') {
            return array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\RaceController::indexAction',  '_route' => 'race_list',);
        }

        // race_show
        if (0 === strpos($pathinfo, '/race') && preg_match('#^/race/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\RaceController::showAction',)), array('_route' => 'race_show'));
        }

        // race_new
        if ($pathinfo === '/race/new') {
            return array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\RaceController::newAction',  '_route' => 'race_new',);
        }

        // race_create
        if ($pathinfo === '/race/create') {
            return array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\RaceController::createAction',  '_route' => 'race_create',);
        }

        // race_edit
        if (0 === strpos($pathinfo, '/race') && preg_match('#^/race/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\RaceController::editAction',)), array('_route' => 'race_edit'));
        }

        // race_update
        if (0 === strpos($pathinfo, '/race') && preg_match('#^/race/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\RaceController::updateAction',)), array('_route' => 'race_update'));
        }

        // race_delete
        if (0 === strpos($pathinfo, '/race') && preg_match('#^/race/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\RaceController::deleteAction',)), array('_route' => 'race_delete'));
        }

        // classe_list
        if ($pathinfo === '/classes') {
            return array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\ClasseController::indexAction',  '_route' => 'classe_list',);
        }

        // classe_show
        if (0 === strpos($pathinfo, '/classe') && preg_match('#^/classe/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\ClasseController::showAction',)), array('_route' => 'classe_show'));
        }

        // classe_new
        if ($pathinfo === '/classe/new') {
            return array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\ClasseController::newAction',  '_route' => 'classe_new',);
        }

        // classe_create
        if ($pathinfo === '/classe/create') {
            return array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\ClasseController::createAction',  '_route' => 'classe_create',);
        }

        // classe_edit
        if (0 === strpos($pathinfo, '/classe') && preg_match('#^/classe/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\ClasseController::editAction',)), array('_route' => 'classe_edit'));
        }

        // classe_update
        if (0 === strpos($pathinfo, '/classe') && preg_match('#^/classe/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\ClasseController::updateAction',)), array('_route' => 'classe_update'));
        }

        // classe_delete
        if (0 === strpos($pathinfo, '/classe') && preg_match('#^/classe/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\ClasseController::deleteAction',)), array('_route' => 'classe_delete'));
        }

        // specialisation_list
        if ($pathinfo === '/specialisations') {
            return array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\SpecialisationController::indexAction',  '_route' => 'specialisation_list',);
        }

        // specialisation_show
        if (0 === strpos($pathinfo, '/specialisation') && preg_match('#^/specialisation/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\SpecialisationController::showAction',)), array('_route' => 'specialisation_show'));
        }

        // specialisation_new
        if ($pathinfo === '/specialisation/new') {
            return array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\SpecialisationController::newAction',  '_route' => 'specialisation_new',);
        }

        // specialisation_create
        if ($pathinfo === '/specialisation/create') {
            return array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\SpecialisationController::createAction',  '_route' => 'specialisation_create',);
        }

        // specialisation_edit
        if (0 === strpos($pathinfo, '/specialisation') && preg_match('#^/specialisation/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\SpecialisationController::editAction',)), array('_route' => 'specialisation_edit'));
        }

        // specialisation_update
        if (0 === strpos($pathinfo, '/specialisation') && preg_match('#^/specialisation/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\SpecialisationController::updateAction',)), array('_route' => 'specialisation_update'));
        }

        // specialisation_delete
        if (0 === strpos($pathinfo, '/specialisation') && preg_match('#^/specialisation/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\SpecialisationController::deleteAction',)), array('_route' => 'specialisation_delete'));
        }

        // type_carte_list
        if ($pathinfo === '/type_cartes') {
            return array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\TypeCarteController::indexAction',  '_route' => 'type_carte_list',);
        }

        // type_carte_show
        if (0 === strpos($pathinfo, '/type_carte') && preg_match('#^/type_carte/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\TypeCarteController::showAction',)), array('_route' => 'type_carte_show'));
        }

        // type_carte_new
        if ($pathinfo === '/type_carte/new') {
            return array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\TypeCarteController::newAction',  '_route' => 'type_carte_new',);
        }

        // type_carte_create
        if ($pathinfo === '/type_carte/create') {
            return array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\TypeCarteController::createAction',  '_route' => 'type_carte_create',);
        }

        // type_carte_edit
        if (0 === strpos($pathinfo, '/type_carte') && preg_match('#^/type_carte/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\TypeCarteController::editAction',)), array('_route' => 'type_carte_edit'));
        }

        // type_carte_update
        if (0 === strpos($pathinfo, '/type_carte') && preg_match('#^/type_carte/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\TypeCarteController::updateAction',)), array('_route' => 'type_carte_update'));
        }

        // type_carte_delete
        if (0 === strpos($pathinfo, '/type_carte') && preg_match('#^/type_carte/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\TypeCarteController::deleteAction',)), array('_route' => 'type_carte_delete'));
        }

        // caracteristiques
        if ($pathinfo === '/caracteristiques') {
            return array (  '_controller' => 'TcgDatabaseBundle:Caracteristiques:index',  '_route' => 'caracteristiques',);
        }

        // caracteristiques_show
        if (0 === strpos($pathinfo, '/caracteristiques') && preg_match('#^/caracteristiques/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'TcgDatabaseBundle:Caracteristiques:show',)), array('_route' => 'caracteristiques_show'));
        }

        // donnees_list
        if ($pathinfo === '/donnees') {
            return array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\TcgDonneesController::indexAction',  '_route' => 'donnees_list',);
        }

        // donnees_show
        if (0 === strpos($pathinfo, '/donnees') && preg_match('#^/donnees/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\TcgDonneesController::showAction',)), array('_route' => 'donnees_show'));
        }

        // donnees_new
        if ($pathinfo === '/donnees/new') {
            return array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\TcgDonneesController::newAction',  '_route' => 'donnees_new',);
        }

        // donnees_create
        if ($pathinfo === '/donnees/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_donnees_create;
            }
            return array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\TcgDonneesController::createAction',  '_route' => 'donnees_create',);
        }
        not_donnees_create:

        // donnees_edit
        if (0 === strpos($pathinfo, '/donnees') && preg_match('#^/donnees/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\TcgDonneesController::editAction',)), array('_route' => 'donnees_edit'));
        }

        // donnees_update
        if (0 === strpos($pathinfo, '/donnees') && preg_match('#^/donnees/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_donnees_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\TcgDonneesController::updateAction',)), array('_route' => 'donnees_update'));
        }
        not_donnees_update:

        // donnees_delete
        if (0 === strpos($pathinfo, '/donnees') && preg_match('#^/donnees/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_donnees_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\TcgDonneesController::deleteAction',)), array('_route' => 'donnees_delete'));
        }
        not_donnees_delete:

        // carte_list
        if ($pathinfo === '/cartes') {
            return array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\CarteController::indexAction',  '_route' => 'carte_list',);
        }

        // carte_show
        if (0 === strpos($pathinfo, '/carte') && preg_match('#^/carte/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\CarteController::showAction',)), array('_route' => 'carte_show'));
        }

        // carte_new
        if ($pathinfo === '/carte/new') {
            return array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\CarteController::newAction',  '_route' => 'carte_new',);
        }

        // carte_create
        if ($pathinfo === '/carte/create') {
            return array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\CarteController::createAction',  '_route' => 'carte_create',);
        }

        // carte_edit
        if (0 === strpos($pathinfo, '/carte') && preg_match('#^/carte/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\CarteController::editAction',)), array('_route' => 'carte_edit'));
        }

        // carte_update
        if (0 === strpos($pathinfo, '/carte') && preg_match('#^/carte/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\CarteController::updateAction',)), array('_route' => 'carte_update'));
        }

        // carte_delete
        if (0 === strpos($pathinfo, '/carte') && preg_match('#^/carte/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Tcg\\DatabaseBundle\\Controller\\CarteController::deleteAction',)), array('_route' => 'carte_delete'));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
