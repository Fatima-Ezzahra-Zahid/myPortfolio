
<!doctype html>
<html lang="en">
<?php include 'includes/head.php' ?>

<?php 
session_start();
$selectT = $db->query("SELECT * FROM projects");
$project = $selectT->fetchAll();
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
                        <h3>Projects
                
                        </h3>
                    </div>
                    <div class="box box-primary">
                        <div class="box-body">
                            <table width="100%" class="table table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>id_pro</th>
                                        <th>name_project</th>
                                        <th>category</th>
                                        <th>project_date</th>
                                        <th>url_project</th>
                                        <th>desc_project</th>
                                        <th>picture</th>
                                    </tr>
                                </thead>
                                <tbody>
                               
                                <?php foreach($project as $project):?>
                                    <tr>
                                    <input type="hidden" class="input" name="id_c" value="<?=$project['id_pro']; ?>">
                                        <td><?=$project['id_pro'] ;?></td>
                                        <td><?=$project['name_project'] ;?></td>
                                        <td><?=$project['category'] ;?></td>
                                        <td><?=$project['project_date'] ;?></td>
                                        <td><?=$project['url_project'] ;?></td>
                                        <td><?=$project['desc_project'] ;?></td>
                                        <td><img src="assets/img/<?= $project['pict'];?>" width="200px"></td>
                                        <td class="text-right">
                                            <a href="EditProjects.php?id_c=<?= $project['id_pro'];?>" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                            <a href="deleteProjects.php?id_c=<?=$project['id_pro'];?>" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
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