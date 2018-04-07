<?php  

    if(! defined('BASEPATH')){

        exit('No está permitido el acceso directo a la secuencia de comandos');

    }



    

    if (!function_exists('chequearSession'))

    {

        function chequearSession()

        {

           // session_start();

            $ci = get_instance();

            if(empty($ci->session->userdata('logueado'))){

                redirect(base_url().'SitioAdmin', 'refresh');            

            }

        }

    }
?>