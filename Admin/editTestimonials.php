<!doctype html>
<html lang="en">
<?php include 'includes/head.php' ?>


<?php 
session_start();
if(isset($_GET['id_c']) && !empty($_GET['id_c']))
{
    $id=$_GET['id_c'];
    $stmt_eidt=$db->prepare('SELECT * FROM testimonials WHERE id_t=:uid');
    $stmt_eidt->execute(array(':uid'=>$id));
    $edit_row=$stmt_eidt->fetch(PDO::FETCH_ASSOC);
    extract($edit_row);
}else 

{
    header("Location: testimonials.php");
}

if(isset($_POST['sub']))

    {

        $image=$_FILES['pict']['name'];
		$tmp_dir=$_FILES['pict']['tmp_name'];
		$imageSize=$_FILES['pict']['size'];
        $text = $_POST['text'];
        $name = $_POST['name'];
        $work =$_POST['work'];
        $upload_dir='assets/img/';
        
        $imgExt=strtolower(pathinfo($image,PATHINFO_EXTENSION));
        $valid_extensions=array('jpeg', 'jpg', 'png', 'gif', 'pdf');
        $pic=rand(1000, 1000000).".".$imgExt;
        unlink($upload_dir.$edit_row['pict']);
        move_uploaded_file($tmp_dir, $upload_dir.$pic);
        $stmt=$db->prepare('UPDATE testimonials SET pict=:pict,text=:text,name_t=:name_t,work=:work WHERE id_t=:uid');
        $stmt->bindParam(':pict',$pic);
        $stmt->bindParam(':text',$text);
        $stmt->bindParam(':name_t',$name);
        $stmt->bindParam(':work',$work);
        $stmt->bindParam(':uid',$id);
        if($stmt->execute())
        {
            ?>
            <script type="text/javascript">
                alert('Successfully Update');
                window.location.href="testimonials.php";
            </script>
            <?php 
        }else 

        ?>
        <script type="text/javascript">
            alert('Error while update data and iamge');
            window.location.href="testimonials.php";
        </script>
        <?php 

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
                        <h3>Cont</h3>
                    </div>
                    <div class="row">
                     
                    <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">Edit testimonials</div>
                                <div class="card-body">
                                    <h5 class="card-title"></h5>
                                    <form class="form-horizontal"  method="POST"  enctype="multipart/form-data">
                                        <div class="form-group row">

                                            <label class="col-sm-2">Picture</label>
                                            <div class="col-sm-10">
                                            <img src="assets/img/<?php echo $pict; ?>" class="img-rounded">
                                            <input type="file" name="pict"  class="form-control"  accept="*/image">
                                            </div>
                                        </div>
                                        <div class="line"></div><br>
                                        <div class="form-group row">
                                            <label class="col-sm-2">Text</label>
                                            <div class="col-sm-10">
                                                <textarea type="text" name="text" class="form-control" value="<?php echo $text;?>"></textarea>
                                            </div>
                                        </div>
                                        <div class="line"></div><br>
                                        <div class="form-group row">
                                            <label class="col-sm-2">Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="name" class="form-control" value="<?php echo $name_t;?>">
                                            </div>
                                        </div>
                                        <div class="line"></div><br>
                                        <div class="form-group row">
                                            <label class="col-sm-2">Work</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="work" class="form-control" value="<?php echo $work;?>">
                                            </div>
                                        </div>
                                        
                                          
                                                
                                 
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