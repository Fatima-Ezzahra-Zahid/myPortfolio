<?php
include 'includes/head.php';

Session::start();

if($_SERVER['REQUEST_METHOD'] == "GET"){

    
    try{
        if(isset($_GET['id_c'])){
            $id_c = (int)($_GET['id_c']);
            $query = "DELETE FROM `professional_expe` WHERE  id_ex = $id_c";
            $select = $db->query($query);
            if(!empty($select)){
                header('Location:Experience.php?deleteEperience=true&msg=delete'); 
                $msg = "supp success";
            } else {
                $msg="Error delete";
            }
        }
    }catch(Exception $e){
        $msg ='Exception delete';
    }

    
}else{
$msg ='Erreur POST';
}

?>