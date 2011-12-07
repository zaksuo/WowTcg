<?php

namespace Tcg\DatabaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Tcg\DatabaseBundle\Entity\TcgTypeEdition;
use Tcg\DatabaseBundle\Form\TcgTypeEditionType;

/**
 * TcgTypeEdition controller.
 *
 */
class TypeEditionController extends Controller
{

    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('TcgDatabaseBundle:TcgTypeEdition')->findAll();

        return $this->render('TcgDatabaseBundle:TypeEdition:index.html.twig', array(
            'entities' => $entities
        ));
    }

    public function newAction()
    {
        $entity = new TcgTypeEdition();
        $form   = $this->createForm(new TcgTypeEditionType(), $entity);

        return $this->render('TcgDatabaseBundle:TypeEdition:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    public function createAction()
    {
        $entity  = new TcgTypeEdition();
        $request = $this->getRequest();
        $form    = $this->createForm(new TcgTypeEditionType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('type_edition_list', array('id' => $entity->getId())));
            
        }

        return $this->render('TcgDatabaseBundle:TypeEdition:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TcgDatabaseBundle:TcgTypeEdition')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TcgTypeEdition entity.');
        }

        $editForm = $this->createForm(new TcgTypeEditionType(), $entity);
        return $this->render('TcgDatabaseBundle:TypeEdition:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView()
        ));
    }

    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TcgDatabaseBundle:TcgTypeEdition')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Type d\'édition introuvable.');
        }

        $editForm   = $this->createForm(new TcgTypeEditionType(), $entity);
        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('type_edition_list', array('id' => $id)));
        }

        return $this->render('TcgDatabaseBundle:TypeEdition:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView()
        ));
    }

    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $entity = $em->getRepository('TcgDatabaseBundle:TcgTypeEdition')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Type d\'édition introuvable.');
        }

        $em->remove($entity);
        $em->flush();

        return $this->redirect($this->generateUrl('type_edition_list'));
    }
}
