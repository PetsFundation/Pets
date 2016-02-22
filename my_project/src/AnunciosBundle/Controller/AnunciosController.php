<?php

namespace AnunciosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AnunciosBundle\Entity\Anuncios;
use AnunciosBundle\Form\AnunciosType;
<<<<<<< HEAD
=======
use AnimalesBundle\Entity\Animales;
use AppBundle\Entity\User;
>>>>>>> david3

/**
 * Anuncios controller.
 *
 */
class AnunciosController extends Controller
{
    /**
     * Lists all Anuncios entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $anuncios = $em->getRepository('AnunciosBundle:Anuncios')->findAll();

        return $this->render('anuncios/index.html.twig', array(
            'anuncios' => $anuncios,
        ));
    }

    /**
     * Creates a new Anuncios entity.
     *
     */
    public function newAction(Request $request)
    {
        $anuncio = new Anuncios();
<<<<<<< HEAD
=======
        $animal = new Animales();
        $user = new User();
        
       $anuncio->setUser($this->getUser());
        $animal->setAnuncio($anuncio);
        $anuncio->setAnimal($animal);
>>>>>>> david3
        $form = $this->createForm('AnunciosBundle\Form\AnunciosType', $anuncio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($anuncio);
            $em->flush();

<<<<<<< HEAD
            return $this->redirectToRoute('anuncios_show', array('id' => $anuncios->getId()));
        }

=======
            return $this->redirectToRoute('anuncios_show', array('id' => $anuncio->getId()));
        }


>>>>>>> david3
        return $this->render('anuncios/new.html.twig', array(
            'anuncio' => $anuncio,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Anuncios entity.
     *
     */
    public function showAction(Anuncios $anuncio)
    {
        $deleteForm = $this->createDeleteForm($anuncio);

        return $this->render('anuncios/show.html.twig', array(
            'anuncio' => $anuncio,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Anuncios entity.
     *
     */
    public function editAction(Request $request, Anuncios $anuncio)
    {
        $deleteForm = $this->createDeleteForm($anuncio);
        $editForm = $this->createForm('AnunciosBundle\Form\AnunciosType', $anuncio);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($anuncio);
            $em->flush();

            return $this->redirectToRoute('anuncios_edit', array('id' => $anuncio->getId()));
        }

        return $this->render('anuncios/edit.html.twig', array(
            'anuncio' => $anuncio,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Anuncios entity.
     *
     */
    public function deleteAction(Request $request, Anuncios $anuncio)
    {
        $form = $this->createDeleteForm($anuncio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
<<<<<<< HEAD
            $em = $this->getDoctrine()->getManager();
            $em->remove($anuncio);
            $em->flush();
=======
      #      $em = $this->getDoctrine()->getManager();
      #      $em->remove($anuncio);
      #      $em->flush();
      
      $stmt = $this->getDoctrine()->getEntityManager()
        ->getConnection()
        ->prepare("update symfony.anuncios set anuncio_id=NULL, animal_id=NULL where anuncios.id=".$anuncio->getId().";");
        $stmt->execute();
    
>>>>>>> david3
        }

        return $this->redirectToRoute('anuncios_index');
    }

    /**
     * Creates a form to delete a Anuncios entity.
     *
     * @param Anuncios $anuncio The Anuncios entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Anuncios $anuncio)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('anuncios_delete', array('id' => $anuncio->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
<<<<<<< HEAD
=======
    public function getName()
    {
        return 'animal';
    }
    
    
    
>>>>>>> david3
}
