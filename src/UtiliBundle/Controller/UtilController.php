<?php

namespace UtiliBundle\Controller;

use UtiliBundle\Entity\Util;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Util controller.
 *
 */
class UtilController extends Controller
{
    /**
     * Lists all util entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $utils = $em->getRepository('UtiliBundle:Util')->findAll();

        return $this->render('util/index.html.twig', array(
            'utils' => $utils,
        ));
    }

    /**
     * Creates a new util entity.
     *
     */
    public function newAction(Request $request)
    {
        $util = new Util();
        $form = $this->createForm('UtiliBundle\Form\UtilType', $util);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($util);
            $em->flush($util);

            return $this->redirectToRoute('util_show', array('id' => $util->getId()));
        }

        return $this->render('util/new.html.twig', array(
            'util' => $util,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a util entity.
     *
     */
    public function showAction(Util $util)
    {
        $deleteForm = $this->createDeleteForm($util);

        return $this->render('util/show.html.twig', array(
            'util' => $util,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing util entity.
     *
     */
    public function editAction(Request $request, Util $util)
    {
        $deleteForm = $this->createDeleteForm($util);
        $editForm = $this->createForm('UtiliBundle\Form\UtilType', $util);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('util_edit', array('id' => $util->getId()));
        }

        return $this->render('util/edit.html.twig', array(
            'util' => $util,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a util entity.
     *
     */
    public function deleteAction(Request $request, Util $util)
    {
        $form = $this->createDeleteForm($util);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($util);
            $em->flush($util);
        }

        return $this->redirectToRoute('util_index');
    }

    /**
     * Creates a form to delete a util entity.
     *
     * @param Util $util The util entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Util $util)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('util_delete', array('id' => $util->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
