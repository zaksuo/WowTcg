<?php

namespace Tcg\DatabaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Tcg\DatabaseBundle\Entity\TcgEdition;
use Tcg\DatabaseBundle\Form\EditionType;

/**
 * Edition controller.
 *
 */
class EditionController extends Controller
{
    /**
     * Lists all Edition entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('TcgDatabaseBundle:TcgEdition')->findAll();
        
        return $this->render('TcgDatabaseBundle:Edition:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a Edition entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TcgDatabaseBundle:TcgEdition')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Edition entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TcgDatabaseBundle:Edition:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new Edition entity.
     *
     */
    public function newAction()
    {
        $entity = new TcgEdition();
        $form   = $this->createForm(new EditionType(), $entity);

        return $this->render('TcgDatabaseBundle:Edition:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new Edition entity.
     *
     */
    public function createAction()
    {
        $entity  = new TcgEdition();
        $request = $this->getRequest();
        $form    = $this->createForm(new EditionType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            
            $filepath = "D:/appli/perso/WowTcgCollection/web/files/";
            $entity->setUploadPath($filepath);
            
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('edition_show', array('id' => $entity->getId())));
            
        }

        return $this->render('TcgDatabaseBundle:Edition:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Edition entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TcgDatabaseBundle:TcgEdition')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Edition entity.');
        }

        $editForm = $this->createForm(new EditionType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TcgDatabaseBundle:Edition:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Edition entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TcgDatabaseBundle:TcgEdition')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Edition entity.');
        }

        $editForm   = $this->createForm(new EditionType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('edition_edit', array('id' => $id)));
        }

        return $this->render('TcgDatabaseBundle:Edition:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Edition entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('TcgDatabaseBundle:TcgEdition')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Edition entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('edition'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
