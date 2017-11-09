<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

use AppBundle\Entity\User;
use AppBundle\Form\RegisterType;


class UserController extends Controller
{
    #Para los mensajes flash y trabajar con sesiones
    private $session;
    
    public function __construct() {
        return $this->session = new Session();
    }
    
    
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user_repo = $em->getRepository('AppBundle:User');
        
        $user = $user_repo->find(8);
        

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'user' => $user
        )
            
        );
    }

    /*
     * Método para el login
     */
    public function loginAction(Request $request, AuthenticationUtils $authUtils)
    {
        //Controlamos que hayamos iniciado sesión, controlando si getUser es un objeto
        if (is_object($this->getUser())) {
            
            //redireccionamos a la home
            return $this->redirect('home');
        }
        // get the login error if there is one
        $error = $authUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authUtils->getLastUsername();

        return $this->render('User/login.html.twig', array(
            'last_username' => $lastUsername,
            'error'         => $error,
        ));
    }
    
    /*
     * Método para el registro en la aplicación
     */
    public function registerAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm(RegisterType::class, $user);
        
        #Recogemos lo que viene del formulario
        $form->handleRequest($request);
        #Si está enviado... 
        if($form->isSubmitted()){
            #y es válido...
            if($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $user_repo = $em->getRepository('AppBundle:User');
                
                $query = $em->createQuery('SELECT u FROM AppBundle:User u WHERE u.email = :email')
                    ->setParameter('email', $form->get('email')->getData());
                
                $user_isset = $query->getResult();
                
                if(count($user_isset) == 0){
                    #Tratamos la contraseña para cifrarla
                    $factory = $this->get('security.encoder_factory');
                    $encoder = $factory->getEncoder($user);
                    
                    $password = $encoder->encodePassword($form->get('password')->getData(), $user->getSalt());
                    
                    #Seteamos la contraseña cifrada con el encoder
                    $user->setPassword($password);
                    $user->setRole('ROLE_USER');
                    $user->setImage(null);
                    
                    $em->persist($user);
                    $flush = $em->flush();
                    
                    if($flush == null){
                        $status = 'El usuario se ha registrado correctamente'; 
                        
                        $this->session->getFlashBag()->add('message', $status);
                        
                        return $this->redirect('login');
                    }else{
                        $status = 'El usuario no se ha registrado correctamente';
                    }                                   
                }else{
                    $status = 'El usuario ya existe en la base de datos';
                }
            }else{
                $status = 'No te has registrado correctamente';
            }
            
            $this->session->getFlashBag()->add('message', $status);
        }
        
        return $this->render('User/register.html.twig', array(
            'form' => $form->createView()
        ));
    }
    
    /**
     * Método que lista todos los usuarios
     */
    public function jugadoresAction(Request $request){
        
        $em = $this->getDoctrine()->getManager();
        $user_repo = $em->getRepository('AppBundle:User');
        
        $users = $user_repo->findAll();
        

        // replace this example code with whatever you need
        return $this->render('User/jugadores.html.twig', array(
            'users' => $users
        )
            
        );
    }
    
    /*
     * Método que comprueba si el email está en uso (por AJAX)
     */
    public function emailExistAction(Request $request){
        
        #Recogemos lo que nos viene por POST
        $email = $request->get('email');
        
        $em = $this->getDoctrine()->getManager();
        $user_data = $em->getRepository('AppBundle:User');
        $email_exist = $user_data->findOneBy(array('email' => $email));
        
        $respuesta = 'email usado';
        
        if(count($email_exist) >= 1 && is_object($email_exist)){
            $respuesta = 'email usado';
        }else{
            $respuesta =  'email no usado';
        }
        
        return new Response($respuesta);       
    }
       
}
