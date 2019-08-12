<?php
require_once 'dbconfig.php';
error_reporting( ~E_NOTICE );
	
	if(isset($_POST['btn-save']))
	{
		$productName = $_POST['productName'];
		$productQuantity = $_POST['productQuantity'];
                $productPrice = $_POST['productPrice'];
                 $stockDate = $_POST['stockDate'];
				$imgFile = $_FILES['user_image']['name'];
		$tmp_dir = $_FILES['user_image']['tmp_name'];
		$imgSize = $_FILES['user_image']['size'];
		if(empty($productName)){
			$errMSG = "Please Enter productName.";
		}
		if(empty($productQuantity)){
			$errMSG = "Please Enter productQuantity.";
		}
		
		else if(empty($productPrice)){
			$errMSG = "Please Enter productPrice.";
		}
		else if(empty($imgFile)){
			$errMSG = "Please Select An Image File.";
		}
		else
		{
			$upload_dir = '../user_images/'; // upload directory
	
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
		
			// valid image extensions
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
		
			// rename uploading image
			$userpic = rand(1000,1000000).".".$imgExt;
				
			// allow valid image file formats
			if(in_array($imgExt, $valid_extensions)){			
				// Check file size '5MB'
				if($imgSize < 5000000)				{
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
		
		if(!isset($errMSG)){
			
			$stmt = $DB_con->prepare('INSERT INTO products(productName,productImage,productQuantity,productPrice,stockDate) VALUES(:pName, :pImage, :pDesc, :pPrice, :pType)');
			$stmt->bindParam(':pName', $productName);
			$stmt->bindParam(':pImage', $userpic);
			$stmt->bindParam(':pDesc', $productQuantity);
            $stmt->bindParam(':pPrice', $productPrice);
            $stmt->bindParam(':pType', $stockDate);
		
			
		if($stmt->execute())
			{
				echo "new record succesfully inserted ...";
				header("refresh:2;farmerindex.php"); // redirects image view page after 5 seconds.
			}
			else
			{
				$errMSG = "error while addind item....";
			}
		}
	}

?>