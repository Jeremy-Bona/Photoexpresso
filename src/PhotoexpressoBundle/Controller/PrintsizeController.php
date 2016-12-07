<?php

namespace PhotoexpressoBundle\Controller;

use PhotoexpressoBundle\Entity\Printsize;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Printsize controller.
 *
 */
class PrintsizeController extends Controller
{
    /**
     * Lists all printsize entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $printsizes = $em->getRepository('PhotoexpressoBundle:Printsize')->findAll();

        return $this->render('printsize/index.html.twig', array(
            'printsizes' => $printsizes,
        ));
    }

    /**
     * Creates a new printsize entity.
     *
     */
    public function newAction(Request $request)
    {
        $printsize = new Printsize();
        $form = $this->createForm('PhotoexpressoBundle\Form\PrintsizeType', $printsize);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($printsize);
            $em->flush($printsize);

            return $this->redirectToRoute('print_size_show', array('id' => $printsize->getId()));
        }

        return $this->render('printsize/new.html.twig', array(
            'printsize' => $printsize,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a printsize entity.
     *
     */
    public function showAction(Printsize $printsize)
    {
        $deleteForm = $this->createDeleteForm($printsize);

        return $this->render('printsize/show.html.twig', array(
            'printsize' => $printsize,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing printsize entity.
     *
     */
    public function editAction(Request $request, Printsize $printsize)
    {
        $deleteForm = $this->createDeleteForm($printsize);
        $editForm = $this->createForm('PhotoexpressoBundle\Form\PrintsizeType', $printsize);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('print_size_edit', array('id' => $printsize->getId()));
        }

        return $this->render('printsize/edit.html.twig', array(
            'printsize' => $printsize,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a printsize entity.
     *
     */
    public function deleteAction(Request $request, Printsize $printsize)
    {
        $form = $this->createDeleteForm($printsize);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($printsize);
            $em->flush($printsize);
        }

        return $this->redirectToRoute('print_size_index');
    }

    /**
     * Creates a form to delete a printsize entity.
     *
     * @param Printsize $printsize The printsize entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Printsize $printsize)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('print_size_delete', array('id' => $printsize->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
