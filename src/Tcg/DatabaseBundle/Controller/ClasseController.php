<?php

namespace Tcg\DatabaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Tcg\DatabaseBundle\Entity\TcgClasse;
use Tcg\DatabaseBundle\Form\TcgClasseType;

/**
 * TcgClasse controller.
 *
 */
class ClasseController extends Controller
{

    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('TcgDatabaseBundle:TcgClasse')->findAll();

        return $this->render('TcgDatabaseBundle:Classe:index.html.twig', array(
            'entities' => $entities
        ));
    }

    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TcgDatabaseBundle:TcgClasse')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Class introuvable.');
        }

        return $this->render('TcgDatabaseBundle:Classe:show.html.twig', array(
            'entity'      => $entity
        ));
    }

    public function newAction()
    {
        $entity = new TcgClasse();
        $form   = $this->createForm(new TcgClasseType(), $entity);

        return $this->render('TcgDatabaseBundle:Classe:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    public function createAction()
    {
        $entity  = new TcgClasse();
        $request = $this->getRequest();
        $form    = $this->createForm(new TcgClasseType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('classe_list'));
        }

        return $this->render('TcgDatabaseBundle:Classe:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TcgDatabaseBundle:TcgClasse')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Classe introuvable.');
        }

        $editForm = $this->createForm(new TcgClasseType(), $entity);

        return $this->render('TcgDatabaseBundle:Classe:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView()
        ));
    }

    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TcgDatabaseBundle:TcgClasse')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Classe introuvable');
        }

        $editForm   = $this->createForm(new TcgClasseType(), $entity);
        $request = $this->getRequest();
        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('classe_list'));
        }

        return $this->render('TcgDatabaseBundle:Classe:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView()
        ));
    }

    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $entity = $em->getRepository('TcgDatabaseBundle:TcgClasse')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Classe introuvable.');
        }

        $em->remove($entity);
        $em->flush();

        return $this->redirect($this->generateUrl('classe_list'));
    }
}
