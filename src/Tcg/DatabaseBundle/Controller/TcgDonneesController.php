<?php

namespace Tcg\DatabaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Tcg\DatabaseBundle\Entity\TcgDonnees;
use Tcg\DatabaseBundle\Form\TcgDonneesType;

/**
 * TcgDonnees controller.
 *
 */
class TcgDonneesController extends Controller
{
    /**
     * Lists all TcgDonnees entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('TcgDatabaseBundle:TcgDonnees')->findAll();

        return $this->render('TcgDatabaseBundle:TcgDonnees:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a TcgDonnees entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TcgDatabaseBundle:TcgDonnees')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TcgDonnees entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TcgDatabaseBundle:TcgDonnees:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new TcgDonnees entity.
     *
     */
    public function newAction()
    {
        $entity = new TcgDonnees();
        $form   = $this->createForm(new TcgDonneesType(), $entity);

        return $this->render('TcgDatabaseBundle:TcgDonnees:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new TcgDonnees entity.
     *
     */
    public function createAction()
    {
        $entity  = new TcgDonnees();
        $request = $this->getRequest();
        $form    = $this->createForm(new TcgDonneesType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('donnees_show', array('id' => $entity->getId())));
            
        }

        return $this->render('TcgDatabaseBundle:TcgDonnees:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing TcgDonnees entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TcgDatabaseBundle:TcgDonnees')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TcgDonnees entity.');
        }

        $editForm = $this->createForm(new TcgDonneesType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TcgDatabaseBundle:TcgDonnees:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing TcgDonnees entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TcgDatabaseBundle:TcgDonnees')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TcgDonnees entity.');
        }

        $editForm   = $this->createForm(new TcgDonneesType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('donnees_edit', array('id' => $id)));
        }

        return $this->render('TcgDatabaseBundle:TcgDonnees:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a TcgDonnees entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('TcgDatabaseBundle:TcgDonnees')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TcgDonnees entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('donnees'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
