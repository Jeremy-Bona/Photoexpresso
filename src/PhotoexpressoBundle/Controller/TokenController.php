<?php

namespace PhotoexpressoBundle\Controller;

use PhotoexpressoBundle\Entity\Token;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Token controller.
 *
 */
class TokenController extends Controller
{
    /**
     * Lists all token entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tokens = $em->getRepository('PhotoexpressoBundle:Token')->findAll();

        return $this->render('token/index.html.twig', array(
            'tokens' => $tokens,
        ));
    }

    /**
     * Creates a new token entity.
     *
     */
    public function newAction(Request $request)
    {
        $token = new Token();
        $form = $this->createForm('PhotoexpressoBundle\Form\TokenType', $token);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($token);
            $em->flush($token);

            return $this->redirectToRoute('token_show', array('id' => $token->getId()));
        }

        return $this->render('token/new.html.twig', array(
            'token' => $token,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a token entity.
     *
     */
    public function showAction(Token $token)
    {
        $deleteForm = $this->createDeleteForm($token);

        return $this->render('token/show.html.twig', array(
            'token' => $token,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing token entity.
     *
     */
    public function editAction(Request $request, Token $token)
    {
        $deleteForm = $this->createDeleteForm($token);
        $editForm = $this->createForm('PhotoexpressoBundle\Form\TokenType', $token);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('token_edit', array('id' => $token->getId()));
        }

        return $this->render('token/edit.html.twig', array(
            'token' => $token,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a token entity.
     *
     */
    public function deleteAction(Request $request, Token $token)
    {
        $form = $this->createDeleteForm($token);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($token);
            $em->flush($token);
        }

        return $this->redirectToRoute('token_index');
    }

    /**
     * Creates a form to delete a token entity.
     *
     * @param Token $token The token entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Token $token)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('token_delete', array('id' => $token->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
