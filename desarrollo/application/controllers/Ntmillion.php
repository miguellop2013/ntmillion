<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Ntmillion extends CI_Controller {
    
    function  __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Perfil_model');
        $this->load->model('Publicar_model');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('paypal_lib');
        $this->load->library('form_validation');
    }

	public function index()
	{
		$this->load->view('index');
		
	}
	
	public function payments(){
        //Set variables for paypal form
        $returnURL = base_url().'Ntmillion/paymentsSuccess'; //payment success url
        $cancelURL = base_url().'Ntmillion/payments_cancel'; //payment cancel url
        $notifyURL = base_url().'Ntmillion/paymentsIPN'; //ipn url
        //get particular product data
        //$product = $this->product->getRows($id);
        $userID = $this->input->post("email"); //current user id
        $logo = 'http://ntmillion.com/desarrollo/img/Ntmillion.png';
        
        $this->paypal_lib->add_field('return', $returnURL);
        $this->paypal_lib->add_field('cancel_return', $cancelURL);
        $this->paypal_lib->add_field('notify_url', $notifyURL);
        $this->paypal_lib->add_field('item_name', "Subscripcion");
        $this->paypal_lib->add_field('custom', $userID);
        $this->paypal_lib->add_field('item_number',  "1");
        $this->paypal_lib->add_field('amount','1');        
        //$this->paypal_lib->image($logo);
        $this->paypal_lib->paypal_auto_form();
    }
    
    public function paymentsSuccess()
    {
        $data_user = $this->User_model->findUser(array("email"=>$_POST['custom'],"status"=>"payed"));
        if(!$data_user)
        {
            if($_POST['custom'])
            {
                if($this->User_model->updateUser(array("email"=>$_POST['custom']),array("status"=>"verifed")))
                {
                    $this->load->view("assets/head");
                    $this->load->view("Admin");
                    $this->load->view("assets/footer");
                }
                else{
                 echo "Ha ocurrido un error por favor contacte al administrador <br> error: 001";
                }
           /* print_r($_POST);
            */
            }
            else
                echo "Su pago ha sido cargado pero paypal no nos ha enviado el comprobante, por favor espere uno minutos y vuelva a intentar";
        }
        else
        {
            echo "iniciar sesion";
        }
    }
    
    function paymentsIPN(){
        //paypal return transaction details array
        /*
        $paypalInfo    = $this->input->post();

        $data['user_id'] = $paypalInfo['custom'];
        $data['product_id']    = $paypalInfo["item_number"];
        $data['txn_id']    = $paypalInfo["txn_id"];
        $data['payment_gross'] = $paypalInfo["mc_gross"];
        $data['currency_code'] = $paypalInfo["mc_currency"];
        $data['payer_email'] = $paypalInfo["payer_email"];
        $data['payment_status']    = $paypalInfo["payment_status"];

        $paypalURL = $this->paypal_lib->paypal_url;        
        $result    = $this->paypal_lib->curlPost($paypalURL,$paypalInfo);
        
        //check whether the payment is verified
        if(preg_match("/VERIFIED/i",$result)){
            //insert the transaction data into the database
            $this->product->insertTransaction($data);
        }
        */
        $archivo = fopen("datos.txt","w+b");
        if( $this->paypal_lib->validate_ipn() )
        {
            if( $archivo == false ) {
              echo "Error al crear el archivo";
            }
            else
            {
                $paypalInfo    = $_SERVER;
                // Escribir en el archivo:
                 fwrite($archivo, "valido");
                // Fuerza a que se escriban los datos pendientes en el buffer:
                 fflush($archivo);
            }
            // Cerrar el archivo:
            fclose($archivo);
        }
        else
            fwrite($archivo, "No valido");
    }
	
	public function singUp()
	{
        $usuario = $this->input->post();
        unset($usuario['password2']);
	    $data_user = $this->User_model->findUser(array("email"=>$this->input->post("email")));
	    if(!$data_user){
	        if(!$this->User_model->saveUser($usuario)) 
	        {
	            redirect('http://ntmillion.com/desarrollo/', 'refresh');
	        }
	        else
	        {
                // esto hay q activarlo para cuando se realicen los pagos
                # $this->payments();
                //esto se quita cuando se haga lo de pagos
                $this->singIn();
	        }
	    }
	    else{
            //aca antes hay q mostrar un mensaje diciendole q ya estaba registrado
	        $this->singIn();
	    }
	}
	
	public function singIn()
	{
        $data_user = $this->User_model->findUser(array("email"=>$this->input->post("email"),"password"=>$this->input->post("password")));
        $data = array(

            'imagen' => $this->User_model->verImg(),
            'dump' => 0
        );
        if($data_user)
        {
            $this->session->set_userdata('logueado', $data_user);
            redirect(base_url().'Ntmillion/Home', 'refresh');
        }
        else
        {
            echo "datos incorrectos";
            redirect(base_url().'Ntmillion/Home', 'refresh');
        }	
         
    }    

    public function logOut()
    {
        #chequearSession();
        $this->session->unset_userdata('logueado');
        session_destroy();
        redirect(base_url(), 'refresh');
    }
    public function Home()
    {
        $data = array(
        'imagen' => $this->User_model->verImg(),
        'dump' => 0
        );
         
        $this->load->view('assets/head');
        $this->load->view('inicio',$data);
        $this->load->view('assets/footer');
    }
    public function actualizar(){
        $data = array(
            'password' => $this->input->post('password')
        );
        $this->User_model->guardarFU($data);

    }
   public function misImagenes(){

        $data = array(

            'imagen' => $this->User_model->verImg(),
            'dump' => 0
        );
            $this->load->view("assets/head");
            $this->load->view('m_imagenes', $data);
            $this->load->view("assets/footer");
    }

    public function misVideos(){

        $data = array(

            'imagen' => $this->User_model->verImg(),
            'dump' => 0
        );
            $this->load->view("assets/head");
            $this->load->view('m_videos', $data);
            $this->load->view("assets/footer");
    }
    
    public function changeStatusFriend()
    {
        switch($this->uri->segment(3))
        {
            case '0':
                $data = array("requestStatus"=>0, "user"=>$_SESSION['logueado'][0]['iDuser'], "friend"=>$this->uri->segment(4));
                if($this->Perfil_model->agregarSolicitudAmistad($data))
                    echo "guarda";
                else
                    echo "no guarda";
            break;
            
            case '1':
                $data = array("requestStatus"=>1, "user"=>$_SESSION['logueado'][0]['iDuser'], "friend"=>$this->uri->segment(4));
                $condicion = array('user'=>$_SESSION['logueado'][0]['iDuser'], "friend"=>$this->uri->segment(4));
                if($this->Perfil_model->aceptarSolicitudAmistad($condicion,$data))
                    echo "acepta";
                else
                    echo "error";
            break;
            
            case '2': //esto es cuando rechaza, se elimina la solicitud
                $condicion = array('user'=>$_SESSION['logueado'][0]['iDuser'], "friend"=>$this->uri->segment(4));
                if($this->Perfil_model->borrarSolicitudAmistad($condicion))
                    echo "elimina";
                else
                    echo "error al elimianr solicitud";
            break;
        }
        
        
    }
    
    public function searchPeople(){
        if($this->input->post('search')=="")
        {
            $this->home();
        }
        //esto hay q colocarlo en una vista
        else
        {
           
            $this->load->model("Perfil_model");
            $resultado_perfil = $this->Perfil_model->search($this->input->post('search'));
            if($resultado_perfil!=false)
            {
                foreach ($resultado_perfil->result() as $datos)
                {
                    
                    echo $datos->name.' '.$datos->lastName.'<br>';
                    if($datos->requestStatus=="")
                        echo "link agregar amigos";
                    else
                        echo "link visitar perfil";
                    switch($datos->requestStatus)
                    {
                        /*
                            0 es solicitude de amistad enviada
                            1 es solicitud de amistan aprobada
                            null es cuando no hay nada
                            ejemplo: /changeStatusFriend/0/x
                            lo anterior agrega la solicitud de amistad para el perfil id 0
                        */
                        case '':
                         {
                            echo "<br><a href='".base_url()."/Ntmillion/changeStatusFriend/0/".$datos->iDuser."' >Agregar a amigos </a>"; // no se ha enviado solicitud
                            break;
                         } 
                        case '0':
                         {
                            echo "<br><a href='".base_url()."/Ntmillion/changeStatusFriend/1/".$datos->iDuser."' >aceptar solicitud (esto es para el recpetor) </a>"; // no se ha enviado solicitud
                            echo "<br><a href='".base_url()."/Ntmillion/changeStatusFriend/2/".$datos->iDuser."' >rechazar solicitud (esto es para el recpetor) </a>"; // no se ha enviado solicitud
                            break;
                         }
                         case '1':
                         {
                            echo "<br>Visitar perfil"; // se acepto una solicitud de amistad
                            break;
                         }
                    }
                    echo "<br>***************";
                }
            }
            else
            {
                echo "no hay resultados";
            }
        }
    }
}
?>