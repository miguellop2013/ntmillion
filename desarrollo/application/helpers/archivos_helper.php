<?php  
    if(! defined('BASEPATH')){
        exit('No está permitido el acceso directo a la secuencia de comandos');
    }


    if(!function_exists("nombrarArchivo"))
    {
	    function nombrarArchivo($nombre_actual)
	    {
	    	$nombre_nuevo  = date("U");
	    	$nombre_nuevo .= rand();
	    	$nombre_nuevo  = md5($nombre_nuevo);
	    	$ext     = explode(".",$_FILES[$nombre_actual]['name']);
	    	$_FILES[$nombre_actual]['name']=$nombre_nuevo.".".$ext[1];
	    	//return $nombre;
	    }     	
    }
    if(!function_exists("subirArchivo"))
    {
        function subirArchivo($config,$archivo)
        {
                
                $ci = get_instance();
                $ci->load->library('upload', $config);
                
                if ( ! $ci->upload->do_upload($archivo))
                {
                        /*$error = array('error' => $ci->upload->display_errors());
                        print_r($error);
                       // $ci->load->view('noticia/insertar', $error);*/

                        return false;
                }
                else
                {
                        /*$data = array('upload_data' => $ci->upload->data());
                        $ci->load->view('upload_success', $data);*/
                        return true;
                }
        }
    }
 /*
    if(!function_exists("validarDimensionesImagen"))
    {
        //,$width_obligatorio,$height_obligatorio
        function validarDimensionesImagen($imagen,$width_obligatorio,$height_obligatorio)
        {
                
                
                //Array ( [0] => 721 [1] => 486 [2] => 2 [3] => width="721" height="486" [bits] => 8 [channels] => 3 [mime] => image/jpeg )
                
                $info_imgen = getimagesize($imagen['tmp_name']);
                $dimensiones = explode('"',$info_imgen[3]);
                $width = $dimensiones[1]; 
                $height= $dimensiones[3];
                $ci = get_instance();
                    $ci->form_validation->set_message('validarDimensionesImagen','Tu imagen no cumple con el ancho ni el largo correcto');
                if($width != $width_obligatorio || $height != $height_obligatorio ){
                    $ci->form_validation->set_message('validarDimensionesImagen','Tu imagen no cumple con el ancho ni el largo correcto');
                    return false;
                }
                else
                    return true;
        }
    }
   
	if(!function_exists("subirImagen"))
    {
    	function subirImagen($archivo)
        {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000000;
                $config['max_width']            = 10240000;
                $config['max_height']           = 7680000;
                $ci = get_instance();
                $ci->load->library('upload', $config);
                
                if ( ! $ci->upload->do_upload($archivo))
                {
                        /*$error = array('error' => $ci->upload->display_errors());
                        $ci->load->view('noticia/insertar', $error);*/
                      /*  return false;
                }
                else
                {
                        /*$data = array('upload_data' => $ci->upload->data());
                        $ci->load->view('upload_success', $data);*/
                       /* return true;
                }
        }
    }*/
    
    if(!function_exists("crearMiniatura"))
    {
        function crearMiniatura($filename){
        		$ci = get_instance();
                $config['image_library'] = 'gd2';
                //CARPETA EN LA QUE ESTÁ LA IMAGEN A REDIMENSIONAR
                $config['source_image'] = './uploads/'.$filename;
                $config['create_thumb'] = TRUE;
                $config['maintain_ratio'] = TRUE;
                //CARPETA EN LA QUE GUARDAMOS LA MINIATURA
                $config['new_image']='./uploads/thumbs/';
                $config['width'] = 150;
                $config['height'] = 150;
                $ci->load->library('image_lib', $config); 
                $ci->image_lib->resize();
        }

    }
    if(!function_exists("crearAdaptada"))
    {
        function crearAdaptada($filename,$width,$height){
                $ci = get_instance();
                $config['image_library'] = 'gd2';
                //CARPETA EN LA QUE ESTÁ LA IMAGEN A REDIMENSIONAR
                $config['source_image'] = './uploads/'.$filename;
                $config['create_thumb'] = TRUE;
                $config['maintain_ratio'] = FALSE;
                //CARPETA EN LA QUE GUARDAMOS LA MINIATURA
                $config['new_image']='./uploads/adapted/';
                $config['width'] = $width;
                $config['height'] = $height;
                $ci->load->library('image_lib', $config); 
                $ci->image_lib->resize();                
        }

    }

    /*if(!function_exists("eliminarArchivo"))
    {
        function eliminarArchivo($ruta, $archivo){
                $eliminar = $ruta.$archivo;
                unlink($eliminar);
        }
    }*/






?>