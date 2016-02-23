<?php

namespace PropietarioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use PropietarioBundle\Entity\Propietario;
use PropietarioBundle\Form\PropietarioType;

/**
 * Propietario controller.
 *
 */
class PropietarioController extends Controller
{
    /**
     * Lists all Propietario entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $propietarios = $em->getRepository('PropietarioBundle:Propietario')->findAll();

        return $this->render('propietario/index.html.twig', array(
            'propietarios' => $propietarios,
        ));
    }

    /**
     * Creates a new Propietario entity.
     *
     */
    public function newAction(Request $request)
    {
        $propietario = new Propietario();
        $form = $this->createForm('PropietarioBundle\Form\PropietarioType', $propietario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($propietario);
            $em->flush();

            return $this->redirectToRoute('propietario_show', array('id' => $propietario->getId()));
        }

        return $this->render('propietario/new.html.twig', array(
            'propietario' => $propietario,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Propietario entity.
     *
     */
    public function showAction(Propietario $propietario)
    {
        $deleteForm = $this->createDeleteForm($propietario);

        return $this->render('propietario/show.html.twig', array(
            'propietario' => $propietario,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Propietario entity.
     *
     */
    public function editAction(Request $request, Propietario $propietario)
    {
        $deleteForm = $this->createDeleteForm($propietario);
        $editForm = $this->createForm('PropietarioBundle\Form\PropietarioType', $propietario);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($propietario);
            $em->flush();

            return $this->redirectToRoute('propietario_edit', array('id' => $propietario->getId()));
        }

        return $this->render('propietario/edit.html.twig', array(
            'propietario' => $propietario,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Propietario entity.
     *
     */
    public function deleteAction(Request $request, Propietario $propietario)
    {
        $form = $this->createDeleteForm($propietario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($propietario);
            $em->flush();
        }

        return $this->redirectToRoute('propietario_index');
    }

    /**
     * Creates a form to delete a Propietario entity.
     *
     * @param Propietario $propietario The Propietario entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Propietario $propietario)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('propietario_delete', array('id' => $propietario->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
