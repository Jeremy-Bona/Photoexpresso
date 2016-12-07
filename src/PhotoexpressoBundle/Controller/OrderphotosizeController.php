<?php

namespace PhotoexpressoBundle\Controller;

use PhotoexpressoBundle\Entity\Orderphotosize;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Orderphotosize controller.
 *
 */
class OrderphotosizeController extends Controller
{
    /**
     * Lists all orderphotosize entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $orderphotosizes = $em->getRepository('PhotoexpressoBundle:Orderphotosize')->findAll();

        return $this->render('orderphotosize/index.html.twig', array(
            'orderphotosizes' => $orderphotosizes,
        ));
    }

    /**
     * Creates a new orderphotosize entity.
     *
     */
    public function newAction(Request $request)
    {
        $orderphotosize = new Orderphotosize();
        $form = $this->createForm('PhotoexpressoBundle\Form\OrderphotosizeType', $orderphotosize);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($orderphotosize);
            $em->flush($orderphotosize);

            return $this->redirectToRoute('order_photo_size_show', array('id' => $orderphotosize->getId()));
        }

        return $this->render('orderphotosize/new.html.twig', array(
            'orderphotosize' => $orderphotosize,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a orderphotosize entity.
     *
     */
    public function showAction(Orderphotosize $orderphotosize)
    {
        $deleteForm = $this->createDeleteForm($orderphotosize);

        return $this->render('orderphotosize/show.html.twig', array(
            'orderphotosize' => $orderphotosize,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing orderphotosize entity.
     *
     */
    public function editAction(Request $request, Orderphotosize $orderphotosize)
    {
        $deleteForm = $this->createDeleteForm($orderphotosize);
        $editForm = $this->createForm('PhotoexpressoBundle\Form\OrderphotosizeType', $orderphotosize);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('order_photo_size_edit', array('id' => $orderphotosize->getId()));
        }

        return $this->render('orderphotosize/edit.html.twig', array(
            'orderphotosize' => $orderphotosize,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a orderphotosize entity.
     *
     */
    public function deleteAction(Request $request, Orderphotosize $orderphotosize)
    {
        $form = $this->createDeleteForm($orderphotosize);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($orderphotosize);
            $em->flush($orderphotosize);
        }

        return $this->redirectToRoute('order_photo_size_index');
    }

    /**
     * Creates a form to delete a orderphotosize entity.
     *
     * @param Orderphotosize $orderphotosize The orderphotosize entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Orderphotosize $orderphotosize)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('order_photo_size_delete', array('id' => $orderphotosize->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
