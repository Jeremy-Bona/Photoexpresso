<?php

namespace PhotoexpressoBundle\Controller;

use PhotoexpressoBundle\Entity\Useractions;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Useraction controller.
 *
 */
class UseractionsController extends Controller
{
    /**
     * Lists all useraction entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $useractions = $em->getRepository('PhotoexpressoBundle:Useractions')->findAll();

        return $this->render('useractions/index.html.twig', array(
            'useractions' => $useractions,
        ));
    }

    /**
     * Creates a new useraction entity.
     *
     */
    public function newAction(Request $request)
    {
        $useraction = new Useraction();
        $form = $this->createForm('PhotoexpressoBundle\Form\UseractionsType', $useraction);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($useraction);
            $em->flush($useraction);

            return $this->redirectToRoute('user_action_show', array('id' => $useraction->getId()));
        }

        return $this->render('useractions/new.html.twig', array(
            'useraction' => $useraction,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a useraction entity.
     *
     */
    public function showAction(Useractions $useraction)
    {
        $deleteForm = $this->createDeleteForm($useraction);

        return $this->render('useractions/show.html.twig', array(
            'useraction' => $useraction,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing useraction entity.
     *
     */
    public function editAction(Request $request, Useractions $useraction)
    {
        $deleteForm = $this->createDeleteForm($useraction);
        $editForm = $this->createForm('PhotoexpressoBundle\Form\UseractionsType', $useraction);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('user_action_edit', array('id' => $useraction->getId()));
        }

        return $this->render('useractions/edit.html.twig', array(
            'useraction' => $useraction,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a useraction entity.
     *
     */
    public function deleteAction(Request $request, Useractions $useraction)
    {
        $form = $this->createDeleteForm($useraction);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($useraction);
            $em->flush($useraction);
        }

        return $this->redirectToRoute('user_action_index');
    }

    /**
     * Creates a form to delete a useraction entity.
     *
     * @param Useractions $useraction The useraction entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Useractions $useraction)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('user_action_delete', array('id' => $useraction->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
