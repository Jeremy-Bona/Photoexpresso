<?php

namespace PhotoexpressoBundle\Controller;

use PhotoexpressoBundle\Entity\Promotionnal;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Promotionnal controller.
 *
 */
class PromotionnalController extends Controller
{
    /**
     * Lists all promotionnal entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $promotionnals = $em->getRepository('PhotoexpressoBundle:Promotionnal')->findAll();

        return $this->render('promotionnal/index.html.twig', array(
            'promotionnals' => $promotionnals,
        ));
    }

    /**
     * Creates a new promotionnal entity.
     *
     */
    public function newAction(Request $request)
    {
        $promotionnal = new Promotionnal();
        $form = $this->createForm('PhotoexpressoBundle\Form\PromotionnalType', $promotionnal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($promotionnal);
            $em->flush($promotionnal);

            return $this->redirectToRoute('promo_show', array('id' => $promotionnal->getId()));
        }

        return $this->render('promotionnal/new.html.twig', array(
            'promotionnal' => $promotionnal,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a promotionnal entity.
     *
     */
    public function showAction(Promotionnal $promotionnal)
    {
        $deleteForm = $this->createDeleteForm($promotionnal);

        return $this->render('promotionnal/show.html.twig', array(
            'promotionnal' => $promotionnal,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing promotionnal entity.
     *
     */
    public function editAction(Request $request, Promotionnal $promotionnal)
    {
        $deleteForm = $this->createDeleteForm($promotionnal);
        $editForm = $this->createForm('PhotoexpressoBundle\Form\PromotionnalType', $promotionnal);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('promo_edit', array('id' => $promotionnal->getId()));
        }

        return $this->render('promotionnal/edit.html.twig', array(
            'promotionnal' => $promotionnal,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a promotionnal entity.
     *
     */
    public function deleteAction(Request $request, Promotionnal $promotionnal)
    {
        $form = $this->createDeleteForm($promotionnal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($promotionnal);
            $em->flush($promotionnal);
        }

        return $this->redirectToRoute('promo_index');
    }

    /**
     * Creates a form to delete a promotionnal entity.
     *
     * @param Promotionnal $promotionnal The promotionnal entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Promotionnal $promotionnal)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('promo_delete', array('id' => $promotionnal->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
