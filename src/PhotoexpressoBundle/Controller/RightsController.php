<?php

namespace PhotoexpressoBundle\Controller;

use PhotoexpressoBundle\Entity\Rights;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Right controller.
 *
 */
class RightsController extends Controller
{
    /**
     * Lists all right entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $rights = $em->getRepository('PhotoexpressoBundle:Rights')->findAll();

        return $this->render('rights/index.html.twig', array(
            'rights' => $rights,
        ));
    }

    /**
     * Creates a new right entity.
     *
     */
    public function newAction(Request $request)
    {
        $right = new Right();
        $form = $this->createForm('PhotoexpressoBundle\Form\RightsType', $right);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($right);
            $em->flush($right);

            return $this->redirectToRoute('rights_show', array('id' => $right->getId()));
        }

        return $this->render('rights/new.html.twig', array(
            'right' => $right,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a right entity.
     *
     */
    public function showAction(Rights $right)
    {
        $deleteForm = $this->createDeleteForm($right);

        return $this->render('rights/show.html.twig', array(
            'right' => $right,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing right entity.
     *
     */
    public function editAction(Request $request, Rights $right)
    {
        $deleteForm = $this->createDeleteForm($right);
        $editForm = $this->createForm('PhotoexpressoBundle\Form\RightsType', $right);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('rights_edit', array('id' => $right->getId()));
        }

        return $this->render('rights/edit.html.twig', array(
            'right' => $right,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a right entity.
     *
     */
    public function deleteAction(Request $request, Rights $right)
    {
        $form = $this->createDeleteForm($right);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($right);
            $em->flush($right);
        }

        return $this->redirectToRoute('rights_index');
    }

    /**
     * Creates a form to delete a right entity.
     *
     * @param Rights $right The right entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Rights $right)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('rights_delete', array('id' => $right->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
