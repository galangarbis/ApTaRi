<?php

	error_reporting( ~E_NOTICE ); // avoid notice
	
	require_once 'dbconfig.php';
	
	if(isset($_POST['btnsave']))
	{
		$nimku = $_POST['nimm'];
		$namafotokuu = $_POST['namafotoku'];// user name
		$keteranganfotokuu = $_POST['keteranganfotoku'];
		// user email

		$imgFile = $_FILES['user_image']['name'];
		$tmp_dir = $_FILES['user_image']['tmp_name'];
		$imgSize = $_FILES['user_image']['size'];
		
		
		if(empty($namafotokuu)){
			$errMSG = "Please Enter Foto Name.";
		}
		else if(empty($keteranganfotokuu)){
			$errMSG = "Please Enter Keterangan Foto.";
		}
		else if(empty($imgFile)){
			$errMSG = "Please Select Image File.";
		}
		else
		{
			$upload_dir = 'user_images/'; // upload directory
	
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
		
			// valid image extensions
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'mp4'); // valid extensions
		
			// rename uploading image
			$userpic = rand(1000,1000000).".".$imgExt;
				
			// allow valid image file formats
			if(in_array($imgExt, $valid_extensions)){			
				// Check file size '5MB'
				if($imgSize < 500000000)				{
					move_uploaded_file($tmp_dir,$upload_dir.$userpic);
				}
				else{
					$errMSG = "Sorry, your file is too large.";
				}
			}
			else{
				$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";		
			}
		}
		
		
		// if no error occured, continue ....
		if(!isset($errMSG))
		{
			$stmt = $DB_con->prepare('INSERT INTO foto(nim, id_foto, nama_foto, keterangan_foto,picture) VALUES(:nimid, null,:uname, :ujob, :upic)');
			$stmt->bindParam(':nimid',$nimku);
			$stmt->bindParam(':uname',$namafotokuu);
			$stmt->bindParam(':ujob',$keteranganfotokuu);
			$stmt->bindParam(':upic',$userpic);
			
			if($stmt->execute())
			{
				$successMSG = "new record succesfully inserted ...";
				header("refresh:5;Location: http://localhost/AppsDataDiri/index.php?page=datafoto"); // redirects image view page after 5 seconds.
			}
			else
			{
				$errMSG = "error while inserting....";
			}
		}
	}
?>

	<div class="page-header">
    	
    </div>
    

	<?php
	if(isset($errMSG)){
			?>
            <div class="alert alert-danger">
            	<span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong>
            </div>
            <?php
	}
	else if(isset($successMSG)){
		?>
        <div class="alert alert-success">
              <strong><span class="glyphicon glyphicon-info-sign"></span> <?php echo $successMSG; ?></strong>
        </div>
        <?php
	}
	?>   

<form method="post" enctype="multipart/form-data" class="form-horizontal">
	    
	<table class="table table-bordered table-responsive">
	
	<tr>
    	<td><label class="control-label">nim</label> </td>
        <td><input class="form-control" type="text" name="nimm" value="<?php echo $nimmah; ?>" /></td>
    </tr>
    
    <tr>
    	<td><label class="control-label">nama foto.</label> </td>
        <td><input class="form-control" type="text" name="namafotoku" placeholder="Enter Foto Name" value="<?php echo $namafotokuu; ?>" /></td>
    </tr>
    
    <tr>
    	<td><label class="control-label">keterangan foto.</label></td>
        <td><input class="form-control" type="text" name="keteranganfotoku" placeholder="Keterangan foto" value="<?php echo $keteranganfotokuu; ?>" /></td>
    </tr>
    
    <tr>
    	<td><label class="control-label">Profile Img.</label></td>
        <td><input class="input-group" type="file" name="user_image" accept="image/*" /></td>
    </tr>
    
    <tr>
        <td colspan="2"><button type="submit" name="btnsave" class="btn btn-default">
        <span class="glyphicon glyphicon-save"></span> &nbsp; save
        </button>
        </td>
    </tr>
    
    </table>
    
</form>



<div class="alert alert-info">
    WORK
</div>

