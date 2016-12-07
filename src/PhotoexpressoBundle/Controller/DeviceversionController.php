<?php

namespace PhotoexpressoBundle\Controller;

use PhotoexpressoBundle\Entity\Deviceversion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Deviceversion controller.
 *
 */
class DeviceversionController extends Controller
{
    /**
     * Lists all deviceversion entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $deviceversions = $em->getRepository('PhotoexpressoBundle:Deviceversion')->findAll();

        return $this->render('deviceversion/index.html.twig', array(
            'deviceversions' => $deviceversions,
        ));
    }

    /**
     * Creates a new deviceversion entity.
     *
     */
    public function newAction(Request $request)
    {
        $deviceversion = new Deviceversion();
        $form = $this->createForm('PhotoexpressoBundle\Form\DeviceversionType', $deviceversion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($deviceversion);
            $em->flush($deviceversion);

            return $this->redirectToRoute('device_version_show', array('id' => $deviceversion->getId()));
        }

        return $this->render('deviceversion/new.html.twig', array(
            'deviceversion' => $deviceversion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a deviceversion entity.
     *
     */
    public function showAction(Deviceversion $deviceversion)
    {
        $deleteForm = $this->createDeleteForm($deviceversion);

        return $this->render('deviceversion/show.html.twig', array(
            'deviceversion' => $deviceversion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing deviceversion entity.
     *
     */
    public function editAction(Request $request, Deviceversion $deviceversion)
    {
        $deleteForm = $this->createDeleteForm($deviceversion);
        $editForm = $this->createForm('PhotoexpressoBundle\Form\DeviceversionType', $deviceversion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('device_version_edit', array('id' => $deviceversion->getId()));
        }

        return $this->render('deviceversion/edit.html.twig', array(
            'deviceversion' => $deviceversion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a deviceversion entity.
     *
     */
    public function deleteAction(Request $request, Deviceversion $deviceversion)
    {
        $form = $this->createDeleteForm($deviceversion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($deviceversion);
            $em->flush($deviceversion);
        }

        return $this->redirectToRoute('device_version_index');
    }

    /**
     * Creates a form to delete a deviceversion entity.
     *
     * @param Deviceversion $deviceversion The deviceversion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Deviceversion $deviceversion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('device_version_delete', array('id' => $deviceversion->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
