<?php

namespace Tcg\DatabaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Tcg\DatabaseBundle\Entity\TcgFaction;
use Tcg\DatabaseBundle\Form\TcgFactionType;

/**
 * TcgFaction controller.
 *
 */
class FactionController extends Controller
{

    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('TcgDatabaseBundle:TcgFaction')->findAll();

        return $this->render('TcgDatabaseBundle:Faction:index.html.twig', array(
            'entities' => $entities
        ));
    }

    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TcgDatabaseBundle:TcgFaction')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Faction introuvable.');
        }

        $editForm = $this->createForm(new TcgFactionType, $entity);

        return $this->render('TcgDatabaseBundle:Faction:show.html.twig', array(
            'entity'      => $entity,
            'edit_form' => $editForm->createView()
        ));
    }

    public function newAction()
    {
        $entity = new TcgFaction();
        $form   = $this->createForm(new TcgFactionType(), $entity);

        return $this->render('TcgDatabaseBundle:Faction:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    public function createAction()
    {
        $entity  = new TcgFaction();
        $request = $this->getRequest();
        $form    = $this->createForm(new TcgFactionType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('faction_list'));
        }

        return $this->render('TcgDatabaseBundle:Faction:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TcgDatabaseBundle:TcgFaction')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Faction introuvable.');
        }

        $editForm = $this->createForm(new TcgFactionType(), $entity);

        return $this->render('TcgDatabaseBundle:Faction:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView()
        ));
    }

    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TcgDatabaseBundle:TcgFaction')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Faction introuvable.');
        }

        $editForm   = $this->createForm(new TcgFactionType(), $entity);
        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('faction_list'));
        }

        return $this->render('TcgDatabaseBundle:Faction:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView()
        ));
    }

    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $entity = $em->getRepository('TcgDatabaseBundle:TcgFaction')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Faction introuvable.');
        }

        $em->remove($entity);
        $em->flush();

        return $this->redirect($this->generateUrl('faction_list'));
    }
}
