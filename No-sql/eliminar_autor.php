<?php
    $koneksi    = new Mongo();
    $database   = $mongo->selectDB('librosdb');
    $member     = $database->selectCollection('autores');

   $id    = $_GET['id'];
   $delete = $member->remove(array('_id' => new MongoId($id)));
 ?>
