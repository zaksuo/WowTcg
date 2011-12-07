<?php

namespace Tcg\DatabaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Tcg\DatabaseBundle\Entity\TcgRace;
use Tcg\DatabaseBundle\Form\TcgRaceType;

/**
 * TcgRace controller.
 *
 */
class RaceController extends Controller
{

    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('TcgDatabaseBundle:TcgRace')->findAll();

        return $this->render('TcgDatabaseBundle:Race:index.html.twig', array(
            'entities' => $entities
        ));
    }

    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TcgDatabaseBundle:TcgRace')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TcgRace entity.');
        }

        return $this->render('TcgDatabaseBundle:Race:show.html.twig', array(
            'entity'      => $entity
        ));
    }

    public function newAction()
    {
        $entity = new TcgRace();
        $form   = $this->createForm(new TcgRaceType(), $entity);

        return $this->render('TcgDatabaseBundle:Race:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    public function createAction()
    {
        $entity  = new TcgRace();
        $request = $this->getRequest();
        $form    = $this->createForm(new TcgRaceType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('race_list'));
            
        }

        return $this->render('TcgDatabaseBundle:Race:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TcgDatabaseBundle:TcgRace')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Race introuvable.');
        }

        $editForm = $this->createForm(new TcgRaceType(), $entity);

        return $this->render('TcgDatabaseBundle:Race:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView()
        ));
    }

    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TcgDatabaseBundle:TcgRace')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Race introuvable.');
        }

        $editForm   = $this->createForm(new TcgRaceType(), $entity);
        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('race_list'));
        }

        return $this->render('TcgDatabaseBundle:Race:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        ));
    }

    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $race = $em->getRepository('TcgDatabaseBundle:TcgRace')->find($id);

        if (!$race) {
            throw $this->createNotFoundException('Race introuvable.');
        }

        $em->remove($race);
        $em->flush();

        return $this->redirect($this->generateUrl('race_list'));
    }
}
