<?php

namespace PhotoexpressoBundle\Controller;

use PhotoexpressoBundle\Entity\Userdevice;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Userdevice controller.
 *
 */
class UserdeviceController extends Controller
{
    /**
     * Lists all userdevice entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $userdevices = $em->getRepository('PhotoexpressoBundle:Userdevice')->findAll();

        return $this->render('userdevice/index.html.twig', array(
            'userdevices' => $userdevices,
        ));
    }

    /**
     * Creates a new userdevice entity.
     *
     */
    public function newAction(Request $request)
    {
        $userdevice = new Userdevice();
        $form = $this->createForm('PhotoexpressoBundle\Form\UserdeviceType', $userdevice);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($userdevice);
            $em->flush($userdevice);

            return $this->redirectToRoute('user_device_show', array('id' => $userdevice->getId()));
        }

        return $this->render('userdevice/new.html.twig', array(
            'userdevice' => $userdevice,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a userdevice entity.
     *
     */
    public function showAction(Userdevice $userdevice)
    {
        $deleteForm = $this->createDeleteForm($userdevice);

        return $this->render('userdevice/show.html.twig', array(
            'userdevice' => $userdevice,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing userdevice entity.
     *
     */
    public function editAction(Request $request, Userdevice $userdevice)
    {
        $deleteForm = $this->createDeleteForm($userdevice);
        $editForm = $this->createForm('PhotoexpressoBundle\Form\UserdeviceType', $userdevice);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('user_device_edit', array('id' => $userdevice->getId()));
        }

        return $this->render('userdevice/edit.html.twig', array(
            'userdevice' => $userdevice,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a userdevice entity.
     *
     */
    public function deleteAction(Request $request, Userdevice $userdevice)
    {
        $form = $this->createDeleteForm($userdevice);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($userdevice);
            $em->flush($userdevice);
        }

        return $this->redirectToRoute('user_device_index');
    }

    /**
     * Creates a form to delete a userdevice entity.
     *
     * @param Userdevice $userdevice The userdevice entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Userdevice $userdevice)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('user_device_delete', array('id' => $userdevice->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
