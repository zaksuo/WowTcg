<?php

namespace Tcg\DatabaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Tcg\DatabaseBundle\Entity\TcgTypeCarte;
use Tcg\DatabaseBundle\Form\TcgTypeCarteType;

/**
 * TcgTypeCarte controller.
 *
 */
class TypeCarteController extends Controller
{

    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('TcgDatabaseBundle:TcgTypeCarte')->findAll();

        return $this->render('TcgDatabaseBundle:TypeCarte:index.html.twig', array(
            'entities' => $entities
        ));
    }

    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TcgDatabaseBundle:TcgTypeCarte')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Type de carte introuvable.');
        }

        return $this->render('TcgDatabaseBundle:TypeCarte:show.html.twig', array(
            'entity'      => $entity
        ));
    }

    public function newAction()
    {
        $entity = new TcgTypeCarte();
        $form   = $this->createForm(new TcgTypeCarteType(), $entity);

        return $this->render('TcgDatabaseBundle:TypeCarte:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    public function createAction()
    {
        $entity  = new TcgTypeCarte();
        $request = $this->getRequest();
        $form    = $this->createForm(new TcgTypeCarteType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('type_carte_list'));
        }

        return $this->render('TcgDatabaseBundle:TypeCarte:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $entity = $em->getRepository('TcgDatabaseBundle:TcgTypeCarte')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Type de carte introuvable.');
        }

        $editForm = $this->createForm(new TcgTypeCarteType(), $entity);

        return $this->render('TcgDatabaseBundle:TypeCarte:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView()
        ));
    }

    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $entity = $em->getRepository('TcgDatabaseBundle:TcgTypeCarte')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Type de carte introuvable.');
        }

        $editForm   = $this->createForm(new TcgTypeCarteType(), $entity);
        $request = $this->getRequest();
        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('type_carte_list'));
        }

        return $this->render('TcgDatabaseBundle:TypeCarte:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView()
        ));
    }

    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $entity = $em->getRepository('TcgDatabaseBundle:TcgTypeCarte')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Type de carte introuvable.');
        }

        $em->remove($entity);
        $em->flush();

        return $this->redirect($this->generateUrl('type_carte_list'));
    }
}
