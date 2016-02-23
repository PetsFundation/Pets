<?php

namespace PaginasIndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PaginasIndexBundle:Default:index.html.twig');
    }
    public function camadasAction()
    { 
        $stmt = $this->getDoctrine()->getEntityManager()
   ->getConnection()
    ->prepare("select
    anuncios.titulo,animales.descripcion,anuncios.Categoria,anuncios.anuncio_id,anuncios.animal_id,animales.Nombre,animales.Tipo,animales.Raza,animales.Sexo,animales.Nacimiento,animales.Propietario,animales.tlf,animales.Pedigri
    from
    symfony.anuncios
    LEFT JOIN
    symfony.animales ON anuncios.animal_id=animales.id
    where
    Categoria='Camadas' ORDER BY anuncios.id desc");
$stmt->execute();
$result = $stmt->fetchAll();
      
        
        return $this->render('PaginasIndexBundle:Default:Contenido_camadas.html.twig', array(
            'anuncios' => $result,
        ));
    }
    public function protectorasAction()
    {
        
        $stmt = $this->getDoctrine()->getEntityManager()
   ->getConnection()
    ->prepare("select
    anuncios.titulo,animales.descripcion,anuncios.Categoria,anuncios.anuncio_id,anuncios.animal_id,animales.Nombre,animales.Tipo,animales.Raza,animales.Sexo,animales.Nacimiento,animales.Propietario,animales.tlf,animales.Pedigri
    from
    symfony.anuncios
    LEFT JOIN
    symfony.animales ON anuncios.animal_id=animales.id
    where
    Categoria='Protectoras' ORDER BY anuncios.id desc");
$stmt->execute();
$result = $stmt->fetchAll();
      
        
        return $this->render('PaginasIndexBundle:Default:Contenido_protectoras.html.twig', array(
            'anuncios' => $result,
        ));
        
        
    }
    public function sebuscaAction()
    {
        
         $stmt = $this->getDoctrine()->getEntityManager()
   ->getConnection()
    ->prepare("select
    anuncios.titulo,animales.descripcion,anuncios.Categoria,anuncios.anuncio_id,anuncios.animal_id,animales.Nombre,animales.Tipo,animales.Raza,animales.Sexo,animales.Nacimiento,animales.Propietario,animales.tlf,animales.Pedigri
    from
    symfony.anuncios
    LEFT JOIN
    symfony.animales ON anuncios.animal_id=animales.id
    where
    Categoria='Se busca' ORDER BY anuncios.id desc");
$stmt->execute();
$result = $stmt->fetchAll();
      
        
        return $this->render('PaginasIndexBundle:Default:Contenido_sebusca.html.twig', array(
            'anuncios' => $result,
        ));
        
    }
    public function adopcionesAction()
    {
        
         $stmt = $this->getDoctrine()->getEntityManager()
   ->getConnection()
    ->prepare("select
   anuncios.titulo,animales.descripcion,anuncios.Categoria,anuncios.anuncio_id,anuncios.animal_id,animales.Nombre,animales.Tipo,animales.Raza,animales.Sexo,animales.Nacimiento,animales.Propietario,animales.tlf,animales.Pedigri
    from
    symfony.anuncios
    LEFT JOIN
    symfony.animales ON anuncios.animal_id=animales.id
    where
    Categoria='Adopciones' ORDER BY anuncios.id desc");
$stmt->execute();
$result = $stmt->fetchAll();
      
        
        return $this->render('PaginasIndexBundle:Default:Contenido_adopciones.html.twig', array(
            'anuncios' => $result,
        ));
        
    }
}
