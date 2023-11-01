<?php

        if($_POST){

            $asunto="";
            if(empty($_POST['name']) || empty($_POST['phone']) || empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['message']) ){
                $arrResponse = array('status' => false, 'msg' => 'No se ha enviado el mensaje' );
                
            }
            else
            {
                $nombre=$_POST['name'];
                $celular=$_POST['phone'];
                $email=$_POST['email'];
                $mensaje=$_POST['message'];
                $asunto = $_POST['subject'];
       
                    switch ($asunto) {
                        case '1':
                            $asunto = "Marca Empleadora";
                            break;
                        
                        case '2':
                            $asunto = "Marca Personal";
                            break;
                        
                        case '3':
                            $asunto = "Negocios";
                            break;
                        
                        case '4':
                            $asunto = "Empleabilidad";
                            break;
                      
                    }
              
                //datos para el correo
                $to = $email;
                $subject = $asunto;
                $message = '
                <html>
                <head>
                  <meta charset="utf-8">
                  <title>' . $asunto . '</title>
                  <style>
                    body {
                      font-family: Arial, sans-serif;
                    }
                    .header {
                      background-color: #f8f8f8;
                      padding: 20px;
                      text-align: center;
                    }
                    .content {
                      margin: 20px;
                    }
                  </style>
                </head>
                <body>
                  <div class="header">
                    <img src="https://masventasconlinkedin/assets/img/logo.png" alt="Logo" style="width: 200px;">
                  </div>
                  <div class="content">
                    <p>Hola ' . $nombre . ',</p>
                    <p>En breves minutos te enviaremos un mensaje con toda la información</p>
                    <p>Martin Cerro Flores</p>
                    <p>CEO & FOUNDER</p>
                  </div>
                </body>
                </html>
                ';
                $headers = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
                $headers .= 'From: contacto@masventasconlinkedin.com' . "\r\n" .
                    'Reply-To: contacto@masventasconlinkedin.com' . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();
                     
                //enviar mensaje
                $mail=@mail($to, $subject, $message, $headers);
                
                if($mail){
                    $arrResponse = array('status' => true, 'msg' => 'Se envió correctame el mensaje'); 
                }else{
                    $arrResponse = array('status' => false, 'msg' => 'No se ha enviado el mensaje' );
                }
            }

            echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);

        }
        else
        {
            $arrResponse = array('status' => false, 'msg' => 'No se ha enviado el mensaje');
            echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
        }
        die();
?>