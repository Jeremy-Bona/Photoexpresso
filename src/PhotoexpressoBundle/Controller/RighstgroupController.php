<?php

namespace PhotoexpressoBundle\Controller;

use PhotoexpressoBundle\Entity\Righstgroup;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Righstgroup controller.
 *
 */
class RighstgroupController extends Controller
{
    /**
     * Lists all righstgroup entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $righstgroups = $em->getRepository('PhotoexpressoBundle:Righstgroup')->findAll();

        return $this->render('righstgroup/index.html.twig', array(
            'righstgroups' => $righstgroups,
        ));
    }

    /**
     * Creates a new righstgroup entity.
     *
     */
    public function newAction(Request $request)
    {
        $righstgroup = new Righstgroup();
        $form = $this->createForm('PhotoexpressoBundle\Form\RighstgroupType', $righstgroup);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($righstgroup);
            $em->flush($righstgroup);

            return $this->redirectToRoute('right_group_show', array('id' => $righstgroup->getId()));
        }

        return $this->render('righstgroup/new.html.twig', array(
            'righstgroup' => $righstgroup,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a righstgroup entity.
     *
     */
    public function showAction(Righstgroup $righstgroup)
    {
        $deleteForm = $this->createDeleteForm($righstgroup);

        return $this->render('righstgroup/show.html.twig', array(
            'righstgroup' => $righstgroup,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing righstgroup entity.
     *
     */
    public function editAction(Request $request, Righstgroup $righstgroup)
    {
        $deleteForm = $this->createDeleteForm($righstgroup);
        $editForm = $this->createForm('PhotoexpressoBundle\Form\RighstgroupType', $righstgroup);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('right_group_edit', array('id' => $righstgroup->getId()));
        }

        return $this->render('righstgroup/edit.html.twig', array(
            'righstgroup' => $righstgroup,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a righstgroup entity.
     *
     */
    public function deleteAction(Request $request, Righstgroup $righstgroup)
    {
        $form = $this->createDeleteForm($righstgroup);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($righstgroup);
            $em->flush($righstgroup);
        }

        return $this->redirectToRoute('right_group_index');
    }

    /**
     * Creates a form to delete a righstgroup entity.
     *
     * @param Righstgroup $righstgroup The righstgroup entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Righstgroup $righstgroup)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('right_group_delete', array('id' => $righstgroup->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
