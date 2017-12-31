<?php
   $koneksi    = new Mongo();
   $database   = $mongo->selectDB('librosdb');
   $member   = $database->selectCollection('autores');
   
   $nombre = $_POST['nombre'];

               $data_member = array (
                    "nombre"              => $nombre
               );
   $insert = $member->insert($data_member);
 ?>