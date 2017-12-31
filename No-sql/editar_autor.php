      <?php
   $koneksi    = new Mongo();
   $database   = $mongo->selectDB('librosdb');
   $member   = $database->selectCollection('autores');
   $id = $_GET['id'];

   $nombre = $_POST['nombre'];
   $libro = $_POST['libro'];

               $data_member = array (
                    "nombre"              => $ni,
                    "libro"             => $nm
               );
   $update = $member->update(array('_id'=>new MongoId($id)), $data_member);
}
?>