
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
$selectC = $db->query("SELECT id_c,nb_cl,nb_projetc,nb_hours,nb_workes FROM counte");
$count = $selectC->fetchAll();
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
                        <h3>Count
                
                        </h3>
                    </div>
                    <div class="box box-primary">
                        <div class="box-body">
                            <table width="100%" class="table table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Id_Count</th>
                                        <th>Happy Clients</th>
                                        <th>Projects</th>
                                        <th>Hours Of Support</th>
                                        <th>Hard Workers</th>
                                    </tr>
                                </thead>
                                <tbody>
                               
                                <?php foreach($count as $count):?>
                                    <tr>
                                    <input type="hidden" class="input" name="id_c" value="<?=$count['id_c']; ?>">
                                        <td><?=$count['id_c'] ;?></td>
                                        <td><?=$count['nb_cl'] ;?></td>
                                        <td><?=$count['nb_projetc'] ;?></td>
                                        <td><?=$count['nb_hours'] ;?></td>
                                        <td><?=$count['nb_workes'] ;?></td>
                                        <td class="text-right">
                                            <a href="editCount.php?id_c=<?= $count['id_c'];?>" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                            <a href="deleteCount.php?id_c=<?= $count['id_c'];?>" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
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