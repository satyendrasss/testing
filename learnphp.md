## GET MULTI-SELECT DROPDOWN
```js
	var select_multi78 = $('.mlt78 option:selected').toArray().map(item => item.value); //array
	var select_multi78 = $('.mlt78 option:selected').toArray().map(item => item.value).join(); // as a string

```
## CHECKED VALUE
```js
	$(document).ready(function() {
        $(".btn_click").click(function(){
            var test = new Array();
            $("input[name='programming']:checked").each(function() {
                test.push($(this).val());
            });
 
            alert("My favourite programming languages are: " + test);
        });
    });
```

## Current Data & Time
```php
	
	$date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
	echo $date->format('Y-m-d H:i:s');
	
```

## Last Week, Month and Year Date

```php
	echo $weekstart = date('Y-m-d',strtotime('last Monday'));
	echo $weekend = date('Y-m-d',strtotime('next Sunday'));

 	echo date("Y-n-j", strtotime("first day of previous month"));
 	echo date("Y-n-j", strtotime("last day of previous month"));

	echo $monthStartDate = date("Y-n-j", strtotime("first day of previous year"));
	echo $monthEndDate = date("Y-n-j", strtotime("last day of previous year"));
```


## CURL
```php
	$url_name = "https://google.com";
	$ch_session = curl_init();
	curl_setopt($ch_session, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch_session, CURLOPT_URL, $url);
	$result_url = curl_exec($ch_session);
	echo $result_url;
```

```php
	$datam = array(
                    "token"=>"9ed47053b4b961842c7d0c9b245b0da4b7b21597",
                    "priority"=>"1",
                    "application"=>"8",
                    "globalmedia"=>"$soil_img",
                    //  "globalmedia"=> "https://services.indevconsultancy.in/image/sss.jpeg",
                    "data" => array(array("number"=>"$number","message"=>"$message")),
                    );
                    $dataString =  json_encode($datam);
			        $url = 'http://pickyassist.com/app/api/v2/push';
			        $ch = curl_init($url);                                                                      
                    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);                                                                  
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
                    curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
                        'Content-Type: application/json',                                                                                
                        'Content-Length: ' . strlen($dataString))                                                                       
                    );                                                                                                                   
                                                                                                                                            
   $result = curl_exec($ch);
```

## Multi Level Array Short

```php
	//$element['id']; =>=>=> id=>key name which you want to short
	array_multisort(array_map(function($element) {
			  return $element['id'];
		}, $sssArrr), SORT_ASC, $sssArrr);
```

## Export to CSV

```php
	<?php include_once('../includes/config.php'); ?>
	<?php
	session_start();
	$ssColumn = '';
	$db_column = $_SESSION['db_column'];
	$columnArr = explode(",", $db_column);
	$sql=$_SESSION['query'];
				
	$head_column = $_SESSION['header_column'];
	$qry = mysqli_query($conn,$sql);
	$data = $head_column."\n";
	while($row = mysqli_fetch_array($qry)) {
		foreach($columnArr as $vl)
		{
			$row[$vl]=str_replace(",","`", $row[$vl]);
			$data.=$row[$vl].",";
		}
		$data.="\n";
	}

	header('Content-Type: application/csv');
	header('Content-Disposition: attachment; filename=filename.csv');
	echo $data; exit();
	?>
```

## Unique Number 
```php
	$digits = 10;
	echo $uniq_card_number = str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);10;
```

## IMPORT DATABASE
```sql
	mysql -u root -p batabase < file.sql
```

## Add Index in MySQL
```sql
	ALTER TABLE mtrainer ADD INDEX (iDistrictId);
```
 

## EXPORT DATABASE
```sql
	mysqldump -u {username} -p {database} > {file_name} / {file_path}
	OR
	mysqldump -u {username} -p {database} > {file_name}
	e.g
	mysqldump -u root -p schat > schat.sql
	
	EXPORT SINGLE TABLE
	mysqldump -u {username} -p {database_name} {table_name} > {file_name}
	
```

## Foreign Key
```sql
	ALTER TABLE `users` ADD CONSTRAINT `role_id_fkey` FOREIGN KEY (`role_id`) REFERENCES `roles`(`id`) ON DELETE CASCADE ON UPDATE CASCADE

```


## Password
```php
	<?php
  
  // The plain text password to be hashed
  $plaintext_password = "Password@123";
  
  // The hash of the password that
  // can be stored in the database
  $hash = password_hash($plaintext_password, PASSWORD_DEFAULT);
 
  // Print the generated hash
  echo "Generated hash: ".$hash;
?>


<?php
  
  // Plaintext password entered by the user
  $plaintext_password = "Password@123";
  
  // The hashed password retrieved from database
  $hash = "$2y$10$8sA2N5Sx/1zMQv2yrTDAaOFlbGWECrrgB68axL.hBb78NhQdyAqWm";
  
  // Verify the hash against the password entered
  $verify = password_verify($plaintext_password, $hash);
  
  // Print the result depending if they match
  if ($verify) {
      echo 'Password Verified!';
  } else {
      echo 'Incorrect Password!';
  }
?>
```

## Search
```
	<?php
	
	$haystack = 'How are you?';
	$needle   = 'are';

	if (strpos($haystack, $needle) !== false) {
		echo 'true';
	}
	

	$a = 'How are you?';
	$search = 'are yo';
	if(preg_match("/{$search}/i", $a)) {
		echo 'true';
	}
	?> 
```



## Insert Image as BLOB
```php
	<?php 
// Include the database configuration file  
require_once 'dbConfig.php'; 
 
// If file upload form is submitted 
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // Insert image content into database 
            $insert = $db->query("INSERT into images (image, created) VALUES ('$imgContent', NOW())"); 
             
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
} 
 
// Display status message 
echo $statusMsg; 
?>

///////////////////////
//////////////////////
////Display BLOB Image//

<?php 
// Include the database configuration file  
require_once 'dbConfig.php'; 
 
// Get image data from database 
$result = $db->query("SELECT image FROM images ORDER BY id DESC"); 
?>

<?php if($result->num_rows > 0){ ?> 
    <div class="gallery"> 
        <?php while($row = $result->fetch_assoc()){ ?> 
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> 
        <?php } ?> 
    </div> 
<?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php } ?>

```

##Session Management
```php
	<?php

		$secure = true; // if you only want to receive the cookie over HTTPS
		$httponly = true; // prevent JavaScript access to session cookie
		$samesite = 'lax';

		if(PHP_VERSION_ID < 70300) {
			session_set_cookie_params($maxlifetime, '/; samesite='.$samesite, $_SERVER['HTTP_HOST'], $secure, $httponly);
		} else {
			session_set_cookie_params([
				'lifetime' => $maxlifetime,
				'path' => '/',
				'domain' => $_SERVER['HTTP_HOST'],
				'secure' => $secure,
				'httponly' => $httponly,
				'samesite' => $samesite
			]);
		}
	?>
	<?php

		// Here we start as usual
		session_set_cookie_params('3600'); // 1 hour
		session_start();

		// More code...

		// Now we found in some database that the user whishes
		// the cookie to expire after for example 10 minutes
		// we can change it instantly ! 

		session_set_cookie_params('600'); // 10 minutes.
		session_regenerate_id(true); 

		// This will delete old cookie and adopt new expire settings and the
		// old cookie variables in a new cookie

	?>
```

## Strong Password

```php
$msg="";
if(isset($_POST['sss'])) {
	$password = $_POST['password'];
	if (!preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $password)) {
	 echo "Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
	} else {
	 echo "Your password is strong.";
	}

```

## Encryption Decryption 
```php
	<?php
		function encrypt_url($string) {
			$output = false;
			$secret_iv = "1234567891011121";
			$secret_key = "Satyendra";
			$key = hash('sha256', $secret_key);
			$iv = substr(hash('sha256', $secret_iv), 0, 16);
			$encrypt_method = "AES-256-CBC";
			$result = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
			$output = base64_encode($result);
			return $output;
		}

		function decrypt_url($string) {
			$output = false;
			$secret_iv = "1234567891011121";
			$secret_key = "Satyendra";
			$key = hash('sha256', $secret_key);
			$iv = substr(hash('sha256', $secret_iv), 0, 16);
			$encrypt_method = "AES-256-CBC";
			$output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
			return $output;
		}

		$string="438";
		echo encrypt_url($string);

		echo "<br>";
		$string1 = "UEJCRkhkTi82a2ZTL1phYTVlc2xyUT09";
		echo decrypt_url($string1);
	?>
```

```php
	<?php
	header('Content-type: text/xml');
	$doc = new DOMDocument("1.0","UTF-8");
	$node = $doc->createElement("para");
	$newnode = $doc->appendChild($node);
	$newnode->setAttribute("name", "Satyendra");
	echo $doc->saveXML();
	?>
```

##Compress Image Size
```html
	<form action="list.php" method="post" enctype="multipart/form-data">
		<label>Select Image File:</label>
		<input type="file" name="image">
		<input type="submit" name="submit" value="Upload">
	</form>
	
	
	<?php 
	 
	/* 
	 * Custom function to compress image size and 
	 * upload to the server using PHP 
	 */ 
	function compressImage($source, $destination, $quality) { 
		// Get image info 
		$imgInfo = getimagesize($source); 
		$mime = $imgInfo['mime']; 
		 
		// Create a new image from file 
		switch($mime){ 
			case 'image/jpeg': 
				$image = imagecreatefromjpeg($source); 
			   imagejpeg($image, $destination, $quality);
				break; 
			case 'image/png': 
				$image = imagecreatefrompng($source); 
				imagepng($image, $destination, $quality);
				break; 
			case 'image/gif': 
				$image = imagecreatefromgif($source); 
				imagegif($image, $destination, $quality);
				break; 
			default: 
				$image = imagecreatefromjpeg($source); 
			   imagejpeg($image, $destination, $quality);
		} 
		 
		 
		// Return compressed image 
		return $destination; 
	} 
	 
	 
	// File upload path 
	$uploadPath = "uploads/"; 
	 
	// If file upload form is submitted 
	$status = $statusMsg = ''; 
	if(isset($_POST["submit"])){ 
		$status = 'error'; 
		if(!empty($_FILES["image"]["name"])) { 
			// File info 
			$fileName = basename($_FILES["image"]["name"]); 
			$imageUploadPath = $uploadPath . $fileName; 
			$fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION); 
			 
			// Allow certain file formats 
			$allowTypes = array('jpg','png','jpeg','gif'); 
			if(in_array($fileType, $allowTypes)){ 
				// Image temp source 
				$imageTemp = $_FILES["image"]["tmp_name"]; 
				 
				// Compress size and upload image 
				$compressedImage = compressImage($imageTemp, $imageUploadPath, 75); 
				 
				if($compressedImage){ 
					$status = 'success'; 
					$statusMsg = "Image compressed successfully."; 
				}else{ 
					$statusMsg = "Image compress failed!"; 
				} 
			}else{ 
				$statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
			} 
		}else{ 
			$statusMsg = 'Please select an image file to upload.'; 
		} 
	} 
	 
	// Display status message 
	echo $statusMsg; 
	 
	?>

```

##Google Autocomplete Address Example
```html
	<!doctype html>
	<html lang="en">
	<head>
	<title>PHP Google Autocomplete Address Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="crossorigin="anonymous"></script>
	</head>
	<body>
	<div class="container mt-5">
	<div class="row">
	<div class="col-xl-6 col-lg-6 col-md-8 col-sm-12 col-12 m-auto">
	<div class="card shadow">
	<div class="card-header bg-primary">
	<h5 class="card-title text-white">PHP Google Autocomplete Address</h5>
	</div>
	<div class="card-body">
	<div class="form-group">
	<label for="autocomplete"> Location/City/Address </label>
	<input type="text" name="autocomplete" id="autocomplete" class="form-control" placeholder="Select Location">
	</div>
	<div class="form-group" id="lat_area">
	<label for="latitude"> Latitude </label>
	<input type="text" name="latitude" id="latitude" class="form-control">
	</div>
	<div class="form-group" id="long_area">
	<label for="latitude"> Longitude </label>
	<input type="text" name="longitude" id="longitude" class="form-control">
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyA5-ed0P7eZL44UHUnOF_WB-BN3XaUk4zk&libraries=places&callback=initAutocomplete" type="text/javascript"></script>
	<script src="/address.js"></script>
	</body>
	</html>
	
	
	//address.js
	
	$(document).ready(function() {
	$("#lat_area").addClass("d-none");
	$("#long_area").addClass("d-none");
	});
	google.maps.event.addDomListener(window, 'load', initialize);
	function initialize() {
	var input = document.getElementById('autocomplete');
	var autocomplete = new google.maps.places.Autocomplete(input);
	autocomplete.addListener('place_changed', function() {
	var place = autocomplete.getPlace();
	$('#latitude').val(place.geometry['location'].lat());
	$('#longitude').val(place.geometry['location'].lng());
	// --------- show lat and long ---------------
	$("#lat_area").removeClass("d-none");
	$("#long_area").removeClass("d-none");
	});
	}
	
```

##Sweetalert
```html
	<div class="text-center">
	<p>Click on Delete Button</p>
	<button type="button" class="btn btn-danger">
	  <i class="glyphicon glyphicon-trash"></i> Delete
	</button>
	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script>
	$('button').click(function(){
	  
	  swal({
	  title: 'Are you sure?',
	  text: "It will permanently deleted !",
	  type: 'warning',
	  showCancelButton: true,
	  confirmButtonColor: '#3085d6',
	  cancelButtonColor: '#d33',
	  confirmButtonText: 'Yes, delete it!'
	}).then(function() {
	  swal(
		'Deleted!',
		'Your file has been deleted.',
		'success'
	  );
	})
	  
	})
	</script>
```

## Delete Files

```php
	<?php
		foreach (glob("*.zip") as $filename) {
		 if(unlink($filename)){
			 echo "success" ;
		 }
		 else{
			 echo "Failure";
		 } 
				
		}
	?>
```

## Get Random Data From table

```sql
	SELECT * FROM cop_campaign WHERE status='1' ORDER BY RAND() LIMIT 10
```
## Delete Duplicate
```sql
	DELETE t1 FROM hri_case_details t1 INNER JOIN hri_case_details t2 WHERE t1.id < t2.id AND t1.patient_pk_id = t2.patient_pk_id
```
## Enter Max Word
```html
	<input type="text"  id="message" />
    <script>
		$("#message").on("keyup", function(){
			var  string = $("#message").val(); 
			var  wordCount = string.split(' ').length;
			if(wordCount>2){
				 var finalString = string.split(' ').slice(0, 2).join(' ');
				 $("#message").val(finalString);
			}
		});
    </script>
```
## Media Query

```html
	<!DOCTYPE html>
	<html lang="en">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<head>
		<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
	  
		<style>
			.max-div{
				background-color: red;
				height: 500px;
			}
			#txt{
				color:white;
				font-size:20px;
				font-weight:bold;
			}
			@media only screen and (max-width: 600px) {
				.max-div{
					background-color: blue;
				}
			}
			
			@media only screen and (max-width: 480px) {
				.max-div{
					background-color: yellow;
				}
			}
		</style>
	</head>
	  
	<body>
		<div class="max-div">
			<p id="txt">sss</p>
		</div>
	</body>

	<script>
	/* $( "#go2" ).click(function() {
	  $( "#block2" )
		.animate({ width: "90%" }, 1000 )
		.animate({ fontSize: "24px" }, 1000 )
		.animate({ borderLeftWidth: "15px" }, 1000 );
	}); */
	$(document).ready(function(){
		//alert('ss');
		$("#txt").animate({
			//"font-size": "24px"
			//or
			//fontSize: "24px"
			"margin-left":"1000px"
		},1000);
	});


	</script>
	  
	</html>
```

## DIRECTORY FILE SIZE
```php
	///DIRECTORY FILE SIZE
	function dirSize($dir)
	{
		$dirSize = 0;
		if(!is_dir($dir)){return false;};
		$files = scandir($dir);if(!$files){return false;}
		$files = array_diff($files, array('.','..'));

		foreach ($files as $file) {
			if(is_dir("$dir/$file")){
				 $dirSize += dirSize("$dir/$file");
			}else{
				$dirSize += filesize("$dir/$file");
			}
		}
		return $dirSize;
	}
	$directory = 's3bucket';
	$bytes = dirSize($directory);
	echo $sizeinMB = $bytes / 1048576; 

```