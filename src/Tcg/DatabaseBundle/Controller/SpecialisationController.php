<?php

namespace Tcg\DatabaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Tcg\DatabaseBundle\Entity\TcgSpecialisation;
use Tcg\DatabaseBundle\Form\TcgSpecialisationType;

/**
 * TcgSpecialisation controller.
 *
 */
class SpecialisationController extends Controller
{

    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('TcgDatabaseBundle:TcgSpecialisation')->findAll();

        return $this->render('TcgDatabaseBundle:Specialisation:index.html.twig', array(
            'entities' => $entities
        ));
    }

    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TcgDatabaseBundle:TcgSpecialisation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Spécialisation introuvable.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TcgDatabaseBundle:Specialisation:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    public function newAction()
    {
        $entity = new TcgSpecialisation();
        $form   = $this->createForm(new TcgSpecialisationType(), $entity);

        return $this->render('TcgDatabaseBundle:Specialisation:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    public function createAction()
    {
        $entity  = new TcgSpecialisation();
        $request = $this->getRequest();
        $form    = $this->createForm(new TcgSpecialisationType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('specialisation_list'));
        }

        return $this->render('TcgDatabaseBundle:Specialisation:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TcgDatabaseBundle:TcgSpecialisation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Spécialisation introuvable.');
        }

        $editForm = $this->createForm(new TcgSpecialisationType(), $entity);

        return $this->render('TcgDatabaseBundle:Specialisation:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView()
        ));
    }

    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TcgDatabaseBundle:TcgSpecialisation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Spécialisation introuvable.');
        }

        $editForm   = $this->createForm(new TcgSpecialisationType(), $entity);
        $request = $this->getRequest();
        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('specialisation_list'));
        }

        return $this->render('TcgDatabaseBundle:Specialisation:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView()
        ));
    }

    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $entity = $em->getRepository('TcgDatabaseBundle:TcgSpecialisation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Spécialisation introuvable.');
        }

        $em->remove($entity);
        $em->flush();

        return $this->redirect($this->generateUrl('specialisation_list'));
    }
}
