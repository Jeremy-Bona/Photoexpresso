<?php

namespace PhotoexpressoBundle\Controller;

use PhotoexpressoBundle\Entity\Appversioning;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Appversioning controller.
 *
 */
class AppversioningController extends Controller
{
    /**
     * Lists all appversioning entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $appversionings = $em->getRepository('PhotoexpressoBundle:Appversioning')->findAll();

        return $this->render('appversioning/index.html.twig', array(
            'appversionings' => $appversionings,
        ));
    }

    /**
     * Creates a new appversioning entity.
     *
     */
    public function newAction(Request $request)
    {
        $appversioning = new Appversioning();
        $form = $this->createForm('PhotoexpressoBundle\Form\AppversioningType', $appversioning);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($appversioning);
            $em->flush($appversioning);

            return $this->redirectToRoute('app_version_show', array('id' => $appversioning->getId()));
        }

        return $this->render('appversioning/new.html.twig', array(
            'appversioning' => $appversioning,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a appversioning entity.
     *
     */
    public function showAction(Appversioning $appversioning)
    {
        $deleteForm = $this->createDeleteForm($appversioning);

        return $this->render('appversioning/show.html.twig', array(
            'appversioning' => $appversioning,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing appversioning entity.
     *
     */
    public function editAction(Request $request, Appversioning $appversioning)
    {
        $deleteForm = $this->createDeleteForm($appversioning);
        $editForm = $this->createForm('PhotoexpressoBundle\Form\AppversioningType', $appversioning);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('app_version_edit', array('id' => $appversioning->getId()));
        }

        return $this->render('appversioning/edit.html.twig', array(
            'appversioning' => $appversioning,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a appversioning entity.
     *
     */
    public function deleteAction(Request $request, Appversioning $appversioning)
    {
        $form = $this->createDeleteForm($appversioning);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($appversioning);
            $em->flush($appversioning);
        }

        return $this->redirectToRoute('app_version_index');
    }

    /**
     * Creates a form to delete a appversioning entity.
     *
     * @param Appversioning $appversioning The appversioning entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Appversioning $appversioning)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('app_version_delete', array('id' => $appversioning->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
