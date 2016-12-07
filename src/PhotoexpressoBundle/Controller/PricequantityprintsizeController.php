<?php

namespace PhotoexpressoBundle\Controller;

use PhotoexpressoBundle\Entity\Pricequantityprintsize;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Pricequantityprintsize controller.
 *
 */
class PricequantityprintsizeController extends Controller
{
    /**
     * Lists all pricequantityprintsize entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $pricequantityprintsizes = $em->getRepository('PhotoexpressoBundle:Pricequantityprintsize')->findAll();

        return $this->render('pricequantityprintsize/index.html.twig', array(
            'pricequantityprintsizes' => $pricequantityprintsizes,
        ));
    }

    /**
     * Creates a new pricequantityprintsize entity.
     *
     */
    public function newAction(Request $request)
    {
        $pricequantityprintsize = new Pricequantityprintsize();
        $form = $this->createForm('PhotoexpressoBundle\Form\PricequantityprintsizeType', $pricequantityprintsize);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pricequantityprintsize);
            $em->flush($pricequantityprintsize);

            return $this->redirectToRoute('price_show', array('id' => $pricequantityprintsize->getId()));
        }

        return $this->render('pricequantityprintsize/new.html.twig', array(
            'pricequantityprintsize' => $pricequantityprintsize,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a pricequantityprintsize entity.
     *
     */
    public function showAction(Pricequantityprintsize $pricequantityprintsize)
    {
        $deleteForm = $this->createDeleteForm($pricequantityprintsize);

        return $this->render('pricequantityprintsize/show.html.twig', array(
            'pricequantityprintsize' => $pricequantityprintsize,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing pricequantityprintsize entity.
     *
     */
    public function editAction(Request $request, Pricequantityprintsize $pricequantityprintsize)
    {
        $deleteForm = $this->createDeleteForm($pricequantityprintsize);
        $editForm = $this->createForm('PhotoexpressoBundle\Form\PricequantityprintsizeType', $pricequantityprintsize);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('price_edit', array('id' => $pricequantityprintsize->getId()));
        }

        return $this->render('pricequantityprintsize/edit.html.twig', array(
            'pricequantityprintsize' => $pricequantityprintsize,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a pricequantityprintsize entity.
     *
     */
    public function deleteAction(Request $request, Pricequantityprintsize $pricequantityprintsize)
    {
        $form = $this->createDeleteForm($pricequantityprintsize);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($pricequantityprintsize);
            $em->flush($pricequantityprintsize);
        }

        return $this->redirectToRoute('price_index');
    }

    /**
     * Creates a form to delete a pricequantityprintsize entity.
     *
     * @param Pricequantityprintsize $pricequantityprintsize The pricequantityprintsize entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Pricequantityprintsize $pricequantityprintsize)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('price_delete', array('id' => $pricequantityprintsize->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
