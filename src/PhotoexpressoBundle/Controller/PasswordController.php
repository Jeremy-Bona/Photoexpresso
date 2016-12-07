<?php

namespace PhotoexpressoBundle\Controller;

use PhotoexpressoBundle\Entity\Password;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Password controller.
 *
 */
class PasswordController extends Controller
{
    /**
     * Lists all password entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $passwords = $em->getRepository('PhotoexpressoBundle:Password')->findAll();

        return $this->render('password/index.html.twig', array(
            'passwords' => $passwords,
        ));
    }

    /**
     * Creates a new password entity.
     *
     */
    public function newAction(Request $request)
    {
        $password = new Password();
        $form = $this->createForm('PhotoexpressoBundle\Form\PasswordType', $password);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($password);
            $em->flush($password);

            return $this->redirectToRoute('passwd_show', array('id' => $password->getId()));
        }

        return $this->render('password/new.html.twig', array(
            'password' => $password,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a password entity.
     *
     */
    public function showAction(Password $password)
    {
        $deleteForm = $this->createDeleteForm($password);

        return $this->render('password/show.html.twig', array(
            'password' => $password,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing password entity.
     *
     */
    public function editAction(Request $request, Password $password)
    {
        $deleteForm = $this->createDeleteForm($password);
        $editForm = $this->createForm('PhotoexpressoBundle\Form\PasswordType', $password);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('passwd_edit', array('id' => $password->getId()));
        }

        return $this->render('password/edit.html.twig', array(
            'password' => $password,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a password entity.
     *
     */
    public function deleteAction(Request $request, Password $password)
    {
        $form = $this->createDeleteForm($password);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($password);
            $em->flush($password);
        }

        return $this->redirectToRoute('passwd_index');
    }

    /**
     * Creates a form to delete a password entity.
     *
     * @param Password $password The password entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Password $password)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('passwd_delete', array('id' => $password->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
