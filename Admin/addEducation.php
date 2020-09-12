<!doctype html>
<html lang="en">
<?php include 'includes/head.php' ?>


<?php 
 session_start();

if($_SERVER['REQUEST_METHOD'] == "POST"){ 

        try{
            if(isset($_POST['title']) && isset($_POST['years']) && isset($_POST['name'])){
                $id_c = Session::get('id_c_edit');
                $title = $db->quote($_POST['title']);
                $years = $db->quote($_POST['years']);
                $name = $db->quote($_POST['name']);

                $query = "INSERT INTO education(`title`,`years`,`name_sc`)VALUES($title,$years,$name)";
                $select = $db->query($query);
                if(!empty($select)){
                    header('Location:education.php?addEducation=true&msg=added');                 
                } else {
                    $msg="Error Work";
                }
            }
        }catch(Exception $e){
            $msg ='Exception Work';
        }


        
       
}else{
    $msg ='Erreur POST';
}

?>

<body>
    <div class="wrapper">
    <?php include 'includes/header.php' ?>

      
        <div id="body" class="active">
            
        <nav class="navbar navbar-expand-lg navbar-white bg-white">
                <button type="button" id="sidebarCollapse" class="btn btn-outline-secondary default-secondary-menu"><i class="fas fa-bars"></i><span></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="" class="nav-item nav-link dropdown-toggle text-secondary" data-toggle="dropdown"><i class="fas fa-user"></i> <span><?php echo  $_SESSION['username']  ?></span> <i style="font-size: .8em;" class="fas fa-caret-down"></i></a>
                                <div class="dropdown-menu dropdown-menu-right nav-link-menu">
                                    <ul class="nav-list">
                                        <li><a href="logout.php" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="content">
                <div class="container-fluid">
                    <div class="page-title">
                        <h3>Education</h3>
                    </div>
                    <div class="row">
                     

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">Add Education</div>
                                <div class="card-body">
                                    <h5 class="card-title"></h5>
                                    <form class="form-horizontal"  method="POST">
                                        <div class="form-group row">
                                            <label class="col-sm-2">Ttile</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="title" class="form-control">
                                            </div>
                                        </div>
                                        <div class="line"></div><br>
                                        <div class="form-group row">
                                            <label class="col-sm-2">Years</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="years" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="line"></div><br>
                                        <div class="form-group row">
                                            <label class="col-sm-2">Name of school</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="name" class="form-control">
                                            </div>
                                        </div>
                                        
                                          
                                                
                                 
                                        <div class="line"></div><br>
                                        <div class="form-group row">
                                            <div class="col-sm-4 offset-sm-2">
                                                <button type="submit" class="btn btn-secondary mb-2"><i class="fas fa-times"></i> Cancel</button>
                                                <button type="submit" class="btn btn-primary mb-2"><i class="fas fa-save"></i> Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php' ?>

</body>

</html>