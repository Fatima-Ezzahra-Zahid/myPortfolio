<!doctype html>
<html lang="en">
<?php include 'includes/head.php' ?>

<?php 
	session_start();
	if(isset($_POST['sub']))
	{
        $image=$_FILES['pict']['name'];
		$tmp_dir=$_FILES['pict']['tmp_name'];
        $imageSize=$_FILES['pict']['size'];
        
        $name = $_POST['name'];
        $cat = $_POST['cat'];
        $project_date =$_POST['project_date'];
        $project_url =$_POST['project_url'];
        $project_descr =$_POST['project_descr'];

		$upload_dir='assets/img/';
		$imgExt=strtolower(pathinfo($image,PATHINFO_EXTENSION));
		$valid_extensions=array('jpeg', 'jpg', 'png', 'gif', 'pdf');
		$pic=rand(1000, 1000000).".".$imgExt;
        move_uploaded_file($tmp_dir, $upload_dir.$pic);
        
		$stmt=$db->prepare('INSERT INTO projects(name_project,category,project_date,url_project,desc_project,pict) VALUES (:name_project,:category,:project_date,:url_project,:desc_project,:pict)');
        $stmt->bindParam(':name_project', $name);
        $stmt->bindParam(':category', $cat);
        $stmt->bindParam(':project_date',$project_date);
        $stmt->bindParam(':url_project', $project_url);
        $stmt->bindParam(':desc_project', $project_descr);
        $stmt->bindParam(':pict',$pic);
	
		if($stmt->execute())
		{
			?>
			<script>
				alert("new record successul");
				window.location.href=('projects.php');
			</script>
		<?php
		}else 

		{
			?>
			<script>
				alert("Error");
				// window.location.href=('projects.php');
			</script>
		<?php
		}

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
                                <a href="" class="nav-item nav-link dropdown-toggle text-secondary" data-toggle="dropdown"><i class="fas fa-user"></i> <span><?php  echo  $_SESSION['username'] ?></span> <i style="font-size: .8em;" class="fas fa-caret-down"></i></a>
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
                        <h3>Projects</h3>
                    </div>
                    <div class="row">
                     

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">Add Projects</div>
                                <div class="card-body">
                                    <h5 class="card-title"></h5>
                                    <form class="form-horizontal"  method="POST"  enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label class="col-sm-2">Name project</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="line"></div><br>
                                        <div class="form-group row">
                                            <label class="col-sm-2">category</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="cat" class="form-control">
                                            </div>
                                        </div>
                                        <div class="line"></div><br>
                                        <div class="form-group row">
                                            <label class="col-sm-2">project date</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="project_date" class="form-control">
                                            </div>
                                        </div>

                                        <div class="line"></div><br>
                                        <div class="form-group row">
                                            <label class="col-sm-2">url project</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="project_url" class="form-control">
                                            </div>
                                        </div>

                                        <div class="line"></div><br>
                                        <div class="form-group row">
                                            <label class="col-sm-2">description project</label>
                                            <div class="col-sm-10">
                                                <textarea type="text" name="project_descr" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2">Picture</label>
                                            <div class="col-sm-10">
                                            <input type="file" name="pict" placeholder="Import an image" class="form-control">
                                            </div>
                                        </div>
                                        <div class="line"></div><br>
                                          
                                                
                                 
                                        <div class="line"></div><br>
                                        <div class="form-group row">
                                            <div class="col-sm-4 offset-sm-2">
                                                <button type="submit" class="btn btn-secondary mb-2"><i class="fas fa-times"></i> Cancel</button>
                                                <button type="submit" name="sub" class="btn btn-primary mb-2"><i class="fas fa-save"></i> Save</button>
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