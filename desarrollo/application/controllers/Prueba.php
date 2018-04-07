<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Prueba extends CI_Controller
{
    function  __construct() {
        parent::__construct();
        $this->load->library('paypal_lib');
        //$this->load->model('product');
    }
    
    function index(){
        //Set variables for paypal form
        $returnURL = base_url().'index.php/Prueba/success'; //payment success url
        $cancelURL = base_url().'index.php/Prueba/cancel'; //payment cancel url
        $notifyURL = base_url().'index.php/Prueba/ipn'; //ipn url
        //get particular product data
        //$product = $this->product->getRows($id);
        $userID = "Miguel"; //current user id
        //$logo = base_url().'assets/images/codexworld-logo.png';
        
        $this->paypal_lib->add_field('return', $returnURL);
        $this->paypal_lib->add_field('cancel_return', $cancelURL);
        $this->paypal_lib->add_field('notify_url', $notifyURL);
        $this->paypal_lib->add_field('item_name', "pago");
        $this->paypal_lib->add_field('userName', $userID);
        $this->paypal_lib->add_field('item_number',  "Subscripcion");
        $this->paypal_lib->add_field('amount','1');        
        //$this->paypal_lib->image($logo);
        
        $this->paypal_lib->paypal_auto_form();
    }

    function success()
    {
        //$paypalInfo = $this->input->get();
        print_r($_GET);
        //$paypalInfo = $this->input->post();
        print_r($_POST);
    }

    function cancel(){
        $this->load->view('paypal/cancel');
    }

    function ipn(){
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
    if( $archivo == false ) {
      echo "Error al crear el archivo";
    }
    else
    {
        $paypalInfo    = $this->input->post();
        // Escribir en el archivo:
         fwrite($archivo, json_encode($paypalInfo));
        // Fuerza a que se escriban los datos pendientes en el buffer:
         fflush($archivo);
    }
    // Cerrar el archivo:
    fclose($archivo);
    }
}


//ntmillion.dev
//billabong2009