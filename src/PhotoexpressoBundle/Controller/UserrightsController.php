<?php

namespace PhotoexpressoBundle\Controller;

use PhotoexpressoBundle\Entity\Userrights;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Userright controller.
 *
 */
class UserrightsController extends Controller
{
    /**
     * Lists all userright entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $userrights = $em->getRepository('PhotoexpressoBundle:Userrights')->findAll();

        return $this->render('userrights/index.html.twig', array(
            'userrights' => $userrights,
        ));
    }

    /**
     * Creates a new userright entity.
     *
     */
    public function newAction(Request $request)
    {
        $userright = new Userright();
        $form = $this->createForm('PhotoexpressoBundle\Form\UserrightsType', $userright);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($userright);
            $em->flush($userright);

            return $this->redirectToRoute('user_rights_show', array('id' => $userright->getId()));
        }

        return $this->render('userrights/new.html.twig', array(
            'userright' => $userright,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a userright entity.
     *
     */
    public function showAction(Userrights $userright)
    {
        $deleteForm = $this->createDeleteForm($userright);

        return $this->render('userrights/show.html.twig', array(
            'userright' => $userright,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing userright entity.
     *
     */
    public function editAction(Request $request, Userrights $userright)
    {
        $deleteForm = $this->createDeleteForm($userright);
        $editForm = $this->createForm('PhotoexpressoBundle\Form\UserrightsType', $userright);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('user_rights_edit', array('id' => $userright->getId()));
        }

        return $this->render('userrights/edit.html.twig', array(
            'userright' => $userright,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a userright entity.
     *
     */
    public function deleteAction(Request $request, Userrights $userright)
    {
        $form = $this->createDeleteForm($userright);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($userright);
            $em->flush($userright);
        }

        return $this->redirectToRoute('user_rights_index');
    }

    /**
     * Creates a form to delete a userright entity.
     *
     * @param Userrights $userright The userright entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Userrights $userright)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('user_rights_delete', array('id' => $userright->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
