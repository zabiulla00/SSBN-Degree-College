<?php
session_start();

// initializing variables

$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'studentinfo');

// REGISTER USER
if (isset($_POST['add_adm'])) {
  // receive all input values from the form
		$Firstname= mysqli_real_escape_string($db,$_POST['Firstname']);
		$Lastname= mysqli_real_escape_string($db,$_POST['Lastname']);
		$Fathername= mysqli_real_escape_string($db,$_POST['Fathername']);
		$MotherName= mysqli_real_escape_string($db,$_POST['MotherName']);
		$PhoneNumber= mysqli_real_escape_string($db,$_POST['PhoneNumber']);
		$Email= mysqli_real_escape_string($db,$_POST['Email']);
		$Address= mysqli_real_escape_string($db,$_POST['Address']);
		$DOB= $_POST['DOB'];
		$Age= mysqli_real_escape_string($db,$_POST['Age']);
		$Gender= mysqli_real_escape_string($db,$_POST['Gender']);
		$Nationality= mysqli_real_escape_string($db,$_POST['Nationality']);
		$Rcategory= mysqli_real_escape_string($db,$_POST['Category']);
		$Mothertounge= mysqli_real_escape_string($db,$_POST['Mothertounge']);
		$Caste= mysqli_real_escape_string($db,$_POST['Caste']);
		$PhysicallyHandicapped= mysqli_real_escape_string($db,$_POST['physicalHandicapped']);
		$District= mysqli_real_escape_string($db,$_POST['District']);
		$AadharNumber= mysqli_real_escape_string($db,$_POST['AadharNumber']);
		$State= mysqli_real_escape_string($db,$_POST['State']);
		$NameOfTheInstitutionX= mysqli_real_escape_string($db,$_POST['NameOfTheInstitutionX']);
		$NameOfTheInstitutionXi= mysqli_real_escape_string($db,$_POST['NameOfTheInstitutionXi']);
		$BoardX= mysqli_real_escape_string($db,$_POST['BoardX']);
		$BoardXi= mysqli_real_escape_string($db,$_POST['BoardXi']);
		$MediumOfInstructionX= mysqli_real_escape_string($db,$_POST['MediumOfInstructionX']);
		$MediumOfInstructionXi= mysqli_real_escape_string($db,$_POST['MediumOfInstructionXi']);
		$PercentageX= mysqli_real_escape_string($db,$_POST['PercentageX']);
		$PercentageXi= mysqli_real_escape_string($db,$_POST['PercentageXi']);
		$YearOfPassingX= mysqli_real_escape_string($db,$_POST['YearX']);
		$YearOfPassingXi= mysqli_real_escape_string($db,$_POST['YearXi']);
		$Course= substr(mysqli_real_escape_string($db,$_POST['Course']),strpos(mysqli_real_escape_string($db,$_POST['Course']),'-') +1);
		$Medium= mysqli_real_escape_string($db,$_POST['Cmedium']);
		$SecondLanguage= mysqli_real_escape_string($db,$_POST['Slang']);
		$Station= mysqli_real_escape_string($db,$_POST['Station']);
		$aDate= mysqli_real_escape_string($db,$_POST['aDate']);
		$temp = explode(".", $_FILES["image"]["name"]);
		$newfilename = round(microtime(true)) . '.' . end($temp);
		
		/*$filename = $_FILES['uploadfile']['name'];
		$filetmpname = $_FILES['uploadfile']['tmp_name'];
		//folder where images will be uploaded
		$folder = 'uploadedimgs/';*/

		  // form validation: ensure that the form is correctly filled ...
		  // by adding (array_push()) corresponding error unto $errors array
		if (empty($Firstname)) { array_push($errors,"Firstname is required"); }
		if (empty($Lastname)) { array_push($errors,"Lastname is required"); }
		if (empty($Fathername)) { array_push($errors,"Fathername is required"); }
		if (empty($MotherName)) { array_push($errors,"Mothername is required"); }
		if (empty($PhoneNumber)) { array_push($errors,"Phonenumber is required"); }
		if (empty($Email)) { array_push($errors,"Email is required"); }
		if (empty($Address)) { array_push($errors,"Address is required"); }
		if (empty($DOB)) { array_push($errors,"DOB is required"); }
		if (empty($Age)) { array_push($errors,"Age is required"); }
		if (empty($Gender)) { array_push($errors,"Gender is required"); }
		if (empty($Nationality)) { array_push($errors,"Nationality is required"); }
		if (empty($Mothertounge)) { array_push($errors,"Mothertounge is required"); }
		if (empty($Caste)) { array_push($errors,"Caste is required"); }
		if (empty($Rcategory)) { array_push($errors,"Village is required"); }
		if (empty($PhysicallyHandicapped)) { array_push($errors,"PhysicallyHandicapped is required"); }
		if (empty($District)) { array_push($errors,"District is required"); }
		if (empty($AadharNumber)) { array_push($errors,"AadharNumber is required"); }
		if (empty($State)) { array_push($errors,"State is required"); }
		if (empty($NameOfTheInstitutionX)) { array_push($errors,"NameOfTheInstitutionX is required"); }
		if (empty($NameOfTheInstitutionXi)) { array_push($errors,"NameOfTheInstitutionXi is required"); }
		if (empty($BoardX)) { array_push($errors,"BoardX is required"); }
		if (empty($BoardXi)) { array_push($errors,"BoardXi is required"); }
		if (empty($MediumOfInstructionX)) { array_push($errors,"MediumOfInstructionX is required"); }
		if (empty($MediumOfInstructionXi)) { array_push($errors,"MediumOfInstructionXi is required"); }
		if (empty($PercentageX)) { array_push($errors,"PercentageX is required"); }
		if (empty($PercentageXi)) { array_push($errors,"PercentageXi is required"); }
		if (empty($YearOfPassingX)) { array_push($errors,"YearOfPassingX is required"); }
		if (empty($YearOfPassingXi)) { array_push($errors,"YearOfPassingXi is required"); }
		if (empty($Course)) { array_push($errors,"BachelorOfsciencesf is required"); }
		if (empty($Medium)) { array_push($errors,"Medium is required"); }
		if (empty($SecondLanguage)) { array_push($errors,"SecondLanguage is required"); }
		if (empty($Station)) { array_push($errors,"Station is required"); }
		if (empty($aDate)) { array_push($errors,"Date is required"); }
		if (empty($newfilename)) { array_push($errors,"Image is required"); }


 
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  
	
	move_uploaded_file($_FILES["uploadfile"]["tmp_name"], "uploadedimgs/" . $newfilename);
	//move_uploaded_file($filetmpname, $folder.$filename);
	
  	$query = "INSERT INTO registration(Firstname, Lastname, Fathername, Mothername, PhoneNumber, Email, Address, DOB, Age, Gender, Nationality, 
									Mothertounge, Caste, Rescategory, PhysicallyHandicapped, District, AadharNumber, State, NameOfTheInstitutionX, 
									NameOfTheInstitututionXi, BoardX, BoardXi, MediumofInstructionX, MediumofInstructionXi, PercentageX, PercentageXi, 
									YearX, YearXi, Course, Medium, SecondLanguage, Station, Date,imagename) 
									VALUES ('$Firstname','$Lastname','$Fathername','$MotherName','$PhoneNumber','$Email','$Address','$DOB','$Age','$Gender',
											'$Nationality','$Mothertounge','$Caste','$Rcategory','$PhysicallyHandicapped','$District','$AadharNumber','$State',
											'$NameOfTheInstitutionX','$NameOfTheInstitutionXi','$BoardX','$BoardXi','$MediumOfInstructionX','$MediumOfInstructionXi',
											'$PercentageX','$PercentageXi','$YearOfPassingX','$YearOfPassingXi','$Course','$Medium','$SecondLanguage','$Station','$aDate','$newfilename')";
mysqli_query($db, $query);

$_SESSION['success'] = "Registration Complete";
header('location: success.php');
}
}

?>
