<?php

namespace Tcg\DatabaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Tcg\DatabaseBundle\Entity\TcgCarte;
use Tcg\DatabaseBundle\Form\TcgCarteType;

/**
 * TcgCarte controller.
 *
 */
class CarteController extends Controller
{

    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('TcgDatabaseBundle:TcgCarte')->findAll();

        return $this->render('TcgDatabaseBundle:Carte:index.html.twig', array(
            'entities' => $entities
        ));
    }

    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $entity = $em->getRepository('TcgDatabaseBundle:TcgCarte')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Carte introuvable.');
        }

        return $this->render('TcgDatabaseBundle:Carte:show.html.twig', array(
            'entity'      => $entity
        ));
    }

    public function newAction()
    {
        $entity = new TcgCarte();
        $form   = $this->createForm(new TcgCarteType(), $entity);

        return $this->render('TcgDatabaseBundle:Carte:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    public function createAction()
    {
        $entity  = new TcgCarte();
        $request = $this->getRequest();
        $form    = $this->createForm(new TcgCarteType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('carte_show', array('id' => $entity->getId())));
        }

        return $this->render('TcgDatabaseBundle:Carte:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $entity = $em->getRepository('TcgDatabaseBundle:TcgCarte')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Carte introuvable.');
        }

        $editForm = $this->createForm(new TcgCarteType(), $entity);

        return $this->render('TcgDatabaseBundle:Carte:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView()
        ));
    }

    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $entity = $em->getRepository('TcgDatabaseBundle:TcgCarte')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Carte introuvable.');
        }

        $editForm   = $this->createForm(new TcgCarteType(), $entity);
        $request = $this->getRequest();
        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('carte_show', array('id' => $id)));
        }

        return $this->render('TcgDatabaseBundle:Carte:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView()
        ));
    }

    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $entity = $em->getRepository('TcgDatabaseBundle:TcgCarte')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Carte introuvable.');
        }

        $em->remove($entity);
        $em->flush();

        return $this->redirect($this->generateUrl('carte_list'));
    }
}
