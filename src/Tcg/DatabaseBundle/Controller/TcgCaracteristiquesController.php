<?php

namespace Tcg\DatabaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Tcg\DatabaseBundle\Entity\TcgCaracteristiques;
use Tcg\DatabaseBundle\Form\TcgCaracteristiquesType;

/**
 * TcgCaracteristiques controller.
 *
 */
class TcgCaracteristiquesController extends Controller
{
    /**
     * Lists all TcgCaracteristiques entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('TcgDatabaseBundle:TcgCaracteristiques')->findAll();

        return $this->render('TcgDatabaseBundle:TcgCaracteristiques:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a TcgCaracteristiques entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TcgDatabaseBundle:TcgCaracteristiques')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TcgCaracteristiques entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TcgDatabaseBundle:TcgCaracteristiques:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new TcgCaracteristiques entity.
     *
     */
    public function newAction()
    {
        $entity = new TcgCaracteristiques();
        $form   = $this->createForm(new TcgCaracteristiquesType(), $entity);

        return $this->render('TcgDatabaseBundle:TcgCaracteristiques:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new TcgCaracteristiques entity.
     *
     */
    public function createAction()
    {
        $entity  = new TcgCaracteristiques();
        $request = $this->getRequest();
        $form    = $this->createForm(new TcgCaracteristiquesType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('caracteristiques_show', array('id' => $entity->getId())));
            
        }

        return $this->render('TcgDatabaseBundle:TcgCaracteristiques:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing TcgCaracteristiques entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TcgDatabaseBundle:TcgCaracteristiques')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TcgCaracteristiques entity.');
        }

        $editForm = $this->createForm(new TcgCaracteristiquesType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TcgDatabaseBundle:TcgCaracteristiques:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing TcgCaracteristiques entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TcgDatabaseBundle:TcgCaracteristiques')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TcgCaracteristiques entity.');
        }

        $editForm   = $this->createForm(new TcgCaracteristiquesType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('caracteristiques_edit', array('id' => $id)));
        }

        return $this->render('TcgDatabaseBundle:TcgCaracteristiques:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a TcgCaracteristiques entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('TcgDatabaseBundle:TcgCaracteristiques')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TcgCaracteristiques entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('caracteristiques'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
