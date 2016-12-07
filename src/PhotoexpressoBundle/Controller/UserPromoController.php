<?php

namespace PhotoexpressoBundle\Controller;

use PhotoexpressoBundle\Entity\UserPromo;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Userpromo controller.
 *
 */
class UserPromoController extends Controller
{
    /**
     * Lists all userPromo entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $userPromos = $em->getRepository('PhotoexpressoBundle:UserPromo')->findAll();

        return $this->render('userpromo/index.html.twig', array(
            'userPromos' => $userPromos,
        ));
    }

    /**
     * Creates a new userPromo entity.
     *
     */
    public function newAction(Request $request)
    {
        $userPromo = new Userpromo();
        $form = $this->createForm('PhotoexpressoBundle\Form\UserPromoType', $userPromo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($userPromo);
            $em->flush($userPromo);

            return $this->redirectToRoute('user_promo_show', array('id' => $userPromo->getId()));
        }

        return $this->render('userpromo/new.html.twig', array(
            'userPromo' => $userPromo,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a userPromo entity.
     *
     */
    public function showAction(UserPromo $userPromo)
    {
        $deleteForm = $this->createDeleteForm($userPromo);

        return $this->render('userpromo/show.html.twig', array(
            'userPromo' => $userPromo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing userPromo entity.
     *
     */
    public function editAction(Request $request, UserPromo $userPromo)
    {
        $deleteForm = $this->createDeleteForm($userPromo);
        $editForm = $this->createForm('PhotoexpressoBundle\Form\UserPromoType', $userPromo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('user_promo_edit', array('id' => $userPromo->getId()));
        }

        return $this->render('userpromo/edit.html.twig', array(
            'userPromo' => $userPromo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a userPromo entity.
     *
     */
    public function deleteAction(Request $request, UserPromo $userPromo)
    {
        $form = $this->createDeleteForm($userPromo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($userPromo);
            $em->flush($userPromo);
        }

        return $this->redirectToRoute('user_promo_index');
    }

    /**
     * Creates a form to delete a userPromo entity.
     *
     * @param UserPromo $userPromo The userPromo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(UserPromo $userPromo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('user_promo_delete', array('id' => $userPromo->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
