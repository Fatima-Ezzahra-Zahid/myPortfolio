
<!doctype html>
<html lang="en">
<?php include 'includes/head.php' ;
      session_start();  

        if(isset($_GET['msg'])){
             
            if($_GET['msg']=='added'){
 ?>
            <div class="alert alert-success text-center" role="alert">Successfully Added !

          </div>


            <?php
            }
            else if($_GET['msg']=='updated')
            {
            ?>
              <div class="alert alert-success text-center" role="alert">Successfully updated !</div>
            <?php
            }
            
            else if($_GET['msg']=='delete')
            {
            ?>
              <div class="alert alert-success text-center" role="alert">Successfully delete !</div>
            <?php
            }
            if($_GET['msg']=='error'){
                ?>
                <div class="alert alert-danger text-center" role="alert">Error</div>
                <?php
            } } 
            ?>










<?php 
$selectE = $db->query("SELECT * FROM education");
$educ = $selectE->fetchAll();
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
                                <a href="" class="nav-item nav-link dropdown-toggle text-secondary" data-toggle="dropdown"><i class="fas fa-user"></i> <span><?php echo $_SESSION['username'] ?></span> <i style="font-size: .8em;" class="fas fa-caret-down"></i></a>
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
                        <h3>Education 
                
                        </h3>
                    </div>
                    <div class="box box-primary">
                        <div class="box-body">
                            <table width="100%" class="table table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>id_ed</th>
                                        <th>Title</th>
                                        <th>years</th>
                                        <th>name school</th>
                                    </tr>
                                </thead>
                                <tbody>
                               
                                <?php foreach($educ as $educ):?>
                                    <tr>
                                    <input type="hidden" class="input" name="id_c" value="<?=$count['id_c']; ?>">
                                        <td><?=$educ['id_ed'] ;?></td>
                                        <td><?=$educ['title'] ;?></td>
                                        <td><?=$educ['years'] ;?></td>
                                        <td><?=$educ['name_sc'] ;?></td>
                                        <td class="text-right">
                                            <a href="educationEdit.php?id_c=<?=$educ['id_ed'] ;?>" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                            <a href="EducationDelete.php?id_c=<?=$educ['id_ed'] ;?>" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                 <?php endforeach ?>
                           
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php include 'includes/footer.php' ?>
</body>

</html>