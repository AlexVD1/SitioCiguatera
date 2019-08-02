<?php

class Conexion_Watson {

 

               private $Usuario = "";

               private $Contraseña = "";

               private $Contexto = "";

 

               function __construct()

    {

               $this->Contexto = $_SESSION['context'];

    }

 

               public function set_credenciales($usr,$pass){

                               $this->Usuario = $usr;

                               $this->Contraseña = $pass;

               }

 

               public function set_contexto($context){

              

                                              $this->Contexto = $context;

                                              $_SESSION['context'] = $context;

                              

               }

 

                public function Enviar_Pregunta($text, $workspace) {

                    $curl = curl_init();

                   

                    $context_data = json_decode($this->Current_Context);

                    $resp = array(

                                        'input' => array(

                                                              'text' => $text

                                              ),

                                        'context' => $context_data

                    );

                               

                                $dataa = json_encode($resp);

 

                    curl_setopt($curl, CURLOPT_POST, true);

                    curl_setopt($curl, CURLOPT_POSTFIELDS, $dataa);

                    curl_setopt($curl, CURLOPT_HTTPHEADER, array(

                              'Content-Type: application/json',                                                                              

                              'Content-Length: ' . strlen($dataa))                                                                      

                                ); 

                    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

                    curl_setopt($curl, CURLOPT_USERPWD, $this->Usuario.":".$this->Contraseña);

                    curl_setopt($curl, CURLOPT_URL, "https://gateway.watsonplatform.net/assistant/api/v2/assistants/c2428482-7370-4323-b13d-e6ffe03a7d85/messages?version=2019-08-01");

                    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

                    $result = curl_exec($curl);

                    if (curl_errno($curl)) {

                                                  echo 'Error: d' . curl_error($curl);

                                }

                    curl_close($curl);

                    $decoded = json_decode($result, true);

     return $decoded;

                }

              

                }

               ?>