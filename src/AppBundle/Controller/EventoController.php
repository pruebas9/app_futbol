<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;
 
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

use AppBundle\Entity\User;
use AppBundle\Entity\PartidosEvento;
use AppBundle\Form\AddPartidoType;



class EventoController extends Controller
{
    
    #Para los mensajes flash y trabajar con sesiones
    private $session;
    
    public function __construct() {
        return $this->session = new Session();
    }
    
    /*
     * Método que obtiene todos los eventos (por AJAX)
     */
    public function getEventAction(Request $request){
        
        if($request->isXmlHttpRequest())
        {
            $encoders = array(new JsonEncoder());
            $normalizers = array(new ObjectNormalizer());
 
            $serializer = new Serializer($normalizers, $encoders);
 
            $em = $this->getDoctrine()->getManager();
            $events_data = $em->getRepository('AppBundle:Evento')->findAll();
            $response = new JsonResponse();
            $response->setStatusCode(200);
            $response->setData(array(
                'response' => 'success',
                'events' => $serializer->serialize($events_data, 'json')
            ));
                 
            return $response;            
        }
        
    }
      
    
    public function addPartidoAction(Request $request){
        
        $evento = new PartidosEvento();
        $form = $this->createForm(AddPartidoType::class, $evento); 
        
        $form->handleRequest($request);
        
        # Si el formulario se ha enviado
        if($form->isSubmitted()){
            
            # Y es válido          
            $user = $this->getUser();
            
            if($form->isValid()){
               
                $nombre = $form->get('nombre')->getData();
                $start = $form->get('start')->getData();
                $end = $form->get('end')->getData();
                $pabellon = $form->get('idPabellon')->getData();

                $em = $this->getDoctrine()->getManager();
                $evento->setNombre($nombre);
                $evento->setStart($start);
                $evento->setEnd($end);
                $evento->setIdPabellon($pabellon);

                $em->persist($evento);
                $flush = $em->flush(); 
                
                //Comprobamos que se guarda bien en la base de datos. 
                if($flush == null){
                    $message = 'Se ha creado el partido correctamente';
                    
                    $this->session->getFlashBag()->add('message', $message);
                    
                }
                else{
                    $message = 'No se ha creado el partido correctamente';
                    
                    $this->session->getFlashBag()->add('message', $message);
                    
                }
                
            }
            
            return $this->redirect('home');
                
        }
        
                
        return $this->render('User/add_partido.html.twig', array(
            'form' => $form->createView()
        ));
        
            
        
    }
    
}
