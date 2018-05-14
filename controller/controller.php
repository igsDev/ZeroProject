<?php

/*  require del DB  */
require('../config/conndb.php');

$mode =  $_REQUEST['mode'] ? $_REQUEST['mode'] : '';

switch ($mode) {
    case 'inserimento_post':

        //  gestione file
        $upload_path = "img_post/";
    
        if(!isset($_FILE['foto_post']) || !is_uploaded_file($_FILE['foto_post']['tmp_name']) ){
            $foto = $upload_path.'not_file.PNG';
        } else {            
            $tmp_foto = $_FILE['foto_post']['tmp_name'];
            $name_foto = $_FILE['foto_post']['name'];

            if(move_uploaded_file( $tmp_foto , $upload_path.$name_foto) ){
                $foto = $upload_path.$name_foto;
            } else {
                $foto = $upload_path."not_file.PNG";
            }
        }
        
        $sql = "INSERT INTO posts (id_user , Titolo, Post, Foto_path)
                VALUES ('1' , '".$_POST['titolo_post']."' , '".$_POST['post']."' , '".$foto."')
        ";
        
        if(mysqli_query($conn, $sql)){
            header("Location: ../index.html"); 
        } else {
            echo "<h1>ERRORE NEL SALVATAGGIO</h1>";
        }

        
        break;
    
    case 'inserimento_info':
        echo "<h1>Aggiorna info</h1>";
        break;

    case 'view_post':
        header('Content-Type: application/json');
        $json = array();
        $sql = "SELECT * FROM posts ORDER BY datatime LIMIT 5";
        $res = mysqli_query($conn , $sql);
        if(mysqli_num_rows($res) > 0 ){
            while($row = mysqli_fetch_assoc($res)){
                $json[] = $row;
            }
        }
        echo json_encode($json , JSON_PRETTY_PRINT);
        //mysqli_close($conn);
        break;

    default:
        
        break;
}

?>