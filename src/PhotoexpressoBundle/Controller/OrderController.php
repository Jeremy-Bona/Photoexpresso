<?php

namespace PhotoexpressoBundle\Controller;

use PhotoexpressoBundle\Entity\Order;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Order controller.
 *
 */
class OrderController extends Controller
{
    /**
     * Lists all order entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $orders = $em->getRepository('PhotoexpressoBundle:Order')->findAll();

        return $this->render('order/index.html.twig', array(
            'orders' => $orders,
        ));
    }

    /**
     * Creates a new order entity.
     *
     */
    public function newAction(Request $request)
    {
        $order = new Order();
        $form = $this->createForm('PhotoexpressoBundle\Form\OrderType', $order);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($order);
            $em->flush($order);

            return $this->redirectToRoute('order_show', array('id' => $order->getId()));
        }

        return $this->render('order/new.html.twig', array(
            'order' => $order,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a order entity.
     *
     */
    public function showAction(Order $order)
    {
        $deleteForm = $this->createDeleteForm($order);

        return $this->render('order/show.html.twig', array(
            'order' => $order,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing order entity.
     *
     */
    public function editAction(Request $request, Order $order)
    {
        $deleteForm = $this->createDeleteForm($order);
        $editForm = $this->createForm('PhotoexpressoBundle\Form\OrderType', $order);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('order_edit', array('id' => $order->getId()));
        }

        return $this->render('order/edit.html.twig', array(
            'order' => $order,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a order entity.
     *
     */
    public function deleteAction(Request $request, Order $order)
    {
        $form = $this->createDeleteForm($order);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($order);
            $em->flush($order);
        }

        return $this->redirectToRoute('order_index');
    }

    /**
     * Creates a form to delete a order entity.
     *
     * @param Order $order The order entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Order $order)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('order_delete', array('id' => $order->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
