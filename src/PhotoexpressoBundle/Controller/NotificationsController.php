<?php

namespace PhotoexpressoBundle\Controller;

use PhotoexpressoBundle\Entity\Notifications;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Notification controller.
 *
 */
class NotificationsController extends Controller
{
    /**
     * Lists all notification entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $notifications = $em->getRepository('PhotoexpressoBundle:Notifications')->findAll();

        return $this->render('notifications/index.html.twig', array(
            'notifications' => $notifications,
        ));
    }

    /**
     * Creates a new notification entity.
     *
     */
    public function newAction(Request $request)
    {
        $notification = new Notification();
        $form = $this->createForm('PhotoexpressoBundle\Form\NotificationsType', $notification);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($notification);
            $em->flush($notification);

            return $this->redirectToRoute('notif_show', array('id' => $notification->getId()));
        }

        return $this->render('notifications/new.html.twig', array(
            'notification' => $notification,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a notification entity.
     *
     */
    public function showAction(Notifications $notification)
    {
        $deleteForm = $this->createDeleteForm($notification);

        return $this->render('notifications/show.html.twig', array(
            'notification' => $notification,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing notification entity.
     *
     */
    public function editAction(Request $request, Notifications $notification)
    {
        $deleteForm = $this->createDeleteForm($notification);
        $editForm = $this->createForm('PhotoexpressoBundle\Form\NotificationsType', $notification);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('notif_edit', array('id' => $notification->getId()));
        }

        return $this->render('notifications/edit.html.twig', array(
            'notification' => $notification,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a notification entity.
     *
     */
    public function deleteAction(Request $request, Notifications $notification)
    {
        $form = $this->createDeleteForm($notification);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($notification);
            $em->flush($notification);
        }

        return $this->redirectToRoute('notif_index');
    }

    /**
     * Creates a form to delete a notification entity.
     *
     * @param Notifications $notification The notification entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Notifications $notification)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('notif_delete', array('id' => $notification->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
