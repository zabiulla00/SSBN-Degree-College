<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
		<title>SSBN Degree College - Application Form</title>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	
		<link rel="stylesheet" type="text/css" href="css/styles.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	</head>
<body>
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 float-right">
                <img src="http://ssbnc.in/images/ssbn.gif" class="img-fluid">
            </div>
            <div class="col-md-10 float-left">
                <h1 class="display-4" style="font-size: 3.5vw;"><strong>SRI SAI BABA NATIONAL DEGREE COLLEGE </strong></h1>
                <p style="font-size: 1.5vw;"><strong>Anantapuram- 515001 (A.P.)Phone:08554 -244852</strong></p>
                <p  style="font-size: 1.5vw;"><strong>An Autonomonus</strong> College Afliated to S.K. University Anantapur</p>
                <p  style="font-size: 1.5vw;">(Under The Management of A.D.N.E Trust)</p><hr>

            </div>

        </div>

    </div>
</main>
	<div>
		<div class="row">
			<div class="col-26 form-group">
				<input type="button" value="Student Search" class="btn btn-success btn-block text-center form-control" id="btnHome"   onClick="document.location.href='search.php'" />
			</div>
			
			<div class="container"> 
					<h4> Course for Admission:</h4>
					
					<div class="row form-group">
						<div class="col-25">
							<label for="coursetype" class>Select Course type:</label>
						</div>
						
						<div class="col-75 form-group">
							<label for="TD">
								<input type="radio" name="Ctype" id="Traditional" value="1" />Traditional</label>
							<label for="SF">
								<input type="radio" name="Ctype" id="Selffunding" value="2" />Self-Funding</label>
						</div> 
					</div>
					
					<div class="row form-group">
						<div class="col-25 ">
							<label for="Course">Select Course of Admission:</label><br>
						</div>
						
						<div class="col-75 form-group">
												
							<select id="options" class="form-control" name="Course"></select>
						</div> 
					</div>
					
					<div class="row">
						<div class="col-25">
							<label for="Cmedium">Select Medium of Instruction for the Selected Course:</label>
						</div>
						
						<div class="col-75">
							<label for="CEnglish">
									<input type="radio" name="Cmedium" id="Cmediume" value="English" checked />English</label>
								<label for="CTelugu">
									<input type="radio" name="Cmedium"  id="Cmediumt" value="Telugu"/>Telugu</label>
						</div> 
					</div>
					
					<div class="row">
						<div class="col-25">
							<label for="Slang">Select Second Language:</label>
						</div>
						
						<div class="col-75">
							<label for="STelugu">
									<input type="radio" name="Slang" id="Slang" value="Telugu" checked />Telugu</label>
								<label for="SSanskrit">
									<input type="radio" name="Slang" id="Slang" value="Sanskrit" />Sanskrit</label>
									
								<label for="SHindi">
									<input type="radio" name="Slang" id="Slang"  value="Hindi" />Hindi</label>
						</div> 
					</div>
</div>

	<div class="container">
			<form action="index.php" method="POST" enctype="multipart/form-data">
					<?php include('errors.php'); ?>
					<h4>Student Details:</h4>
					
					<div class="row form-group">
						<div class="col-25 ">
							<label for="Firstname">Firstname:</label>
						</div>
						
						<div class="col-75">
							<input type="text" name="Firstname" class="form-control" id="Firstname"required /> 
						</div> 
					</div>
					
					
					<div class="row form-group">
						<div class="col-25">
							<label for="Lastname">Lastname:</label>
						</div>
						
						<div class="col-75">
							<input type="text" name="Lastname" class="form-control" id="Lastname"required /> 
						</div> 
					</div>
					
					<div class="row form-group">
						<div class="col-25">
							<label for="Fathername">Fathername:</label>
						</div>
						
						<div class="col-75">
							<input type="text" name="Fathername" class="form-control" id="Fathername" required /> 
						</div> 
					</div>
					
					<div class="row form-group">
						<div class="col-25">
							<label for="MotherName">MotherName:</label>
						</div>
						
						<div class="col-75">
							<input type="text" name="MotherName" class="form-control" id="MotherName" required /> 
						</div> 
					</div>
					<br /><br />
</div>
<div class="container">
					<h4>candidate Address:</h4>
					<div class="row form-group">
						<div class="col-25">
							<label for="PhoneNumber">PhoneNumber:</label>
						</div>
						
						<div class="col-75">
							<input type="text" name="PhoneNumber" class="form-control" id="PhoneNumber" required /> 
						</div> 
					</div>
					
					<div class="row form-group">
						<div class="col-25">
							<label for="Email">Email:</label>
						</div>
						
						<div class="col-75">
							<input type="text" name="Email" class="form-control" id="Email" required  /> 
						</div> 
					</div>
					
					<div class="row form-group">
						<div class="col-25">
							<label for="Address">Address:</label>
						</div>
						
						<div class="col-75">
							<textarea name="Address" id="Address" class="form-control" style="height:200px" required ></textarea>
						</div> 
					</div>
</div>
<div class="container">
					
					<br /><br />
					<h4>Personal Details:</h4>
					<div class="row form-group">
						<div class="col-25">
							<label for="DOB">Date of Birth:</label>
						</div>
						
						<div class="col-75">
							<input type="Date" name="DOB"class="form-control" id="datePickerId" required /> 
						</div> 
					</div>
					
					<div class="row form-group">
						<div class="col-25">
							<label for="Age">Age:</label>
						</div>
						
						<div class="col-75">
							<input type="text" class="form-control" name="Age" id="Age" required /> 
						</div> 
					</div>
					
					<div class="row form-group">
						<div class="col-25">
							<label for="Gender">Gender:</label>
						</div>
						
						<div class="col-75">
							<label for="male">
									<input type="radio" name="Gender" id="Gender" value="m" checked/>Male</label>
								<label for="female">
									<input type="radio" name="Gender"  id="Gender" value="f" />Female</label>
						</div> 
					</div>
					
					<div class="row form-group">
						<div class="col-25">
							<label for="Nationality">Nationality:</label>
						</div>
						
						<div class="col-75">
						<select name="nationality" id="nationality" required  class="form-control">
                    <option value="--select">--Select</option>
                <option value="indian">Indian</option>
                </select> 
						</div> 
					</div>
					
					<div class="row form-group">
						<div class="col-25">
							<label for="Category">Category:</label>
						</div>
						
						<div class="col-75">
							<select id="Category" name="Category"  class="form-control">
								<option value=""> </option>
								<option value="Rural">Rural</option>
								<option value="Urban">Urban</option>
								
							</select>	
						</div> 
					</div>
					
					<div class="row form-group">
						<div class="col-25">
							<label for="Mothertounge">Mothertounge:</label>
						</div>
						
						<div class="col-75">
							<label for="Telugu">
									<input type="radio" name="Mothertounge" id="Mothertounge" value="Telugu" checked/>Telugu</label>
							<label for="Hindi">
									<input type="radio" name="Mothertounge" id="Mothertounge" value="Hindi" />Hindi</label>
							<label for="English">
									<input type="radio" name="Mothertounge" id="Mothertounge" value="English" />English</label>
							
						</div> 
					</div>
					
					<div class="row form-group">
						<div class="col-25">
							<label for="Caste">Caste:</label>
						</div>
						
						<div class="col-75">
							<select id="Caste" name="Caste"  class="form-control">
								<option value=""> </option>
								<option value="OC">OC</option>
								<option value="BC">BC</option>
								<option value="EBC">EBC</option>
								<option value="SC">SC</option>
								<option value="ST">ST</option>
							</select>	
						</div> 
					</div>
					
					<div class="row form-group">
						<div class="col-25">
							<label for="physicalHandicapped">physicalHandicapped:</label>
						</div>
						
						<div class="col-75">
							<label for="Yes">
									<input type="radio" name="physicalHandicapped" id="physicalHandicapped" value="Yes" />Yes</label>
								<label for="No">
									<input type="radio" name="physicalHandicapped" id="physicalHandicapped" value="No" checked />No</label>
						</div> 
					</div>
					
					
					
					<div class="row form-group">
						<div class="col-25">
							<label for="AadharNumber">AadharNumber:</label>
						</div>
						
						<div class="col-75">
							<input type="text"  class="form-control" name="AadharNumber" id="AadharNumber" required /> 
						</div> 
					</div>
					<div class="row form-group">
						<div class="col-25">
							<label for="District">District:</label>
						</div>
						
						<div class="col-75">
						<select name="district" id="districtSel" class="form-control">
                        <option value="--select">--Select</option>
                        <option value="Anantapura">Anantapur</option>
                    </select>
						</div> 
					</div>
					
					<div class="row form-group">
						<div class="col-25">
							<label for="State">State:</label>
						</div>
						
						<div class="col-75">
						<select name="State" id="districtSel" class="form-control">
                        <option value="--select">--Select</option>
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                    </select>
						</div> 
					</div>
					
					<br /><br />
</div>
<div class="container">
		<h4>Qualification:</h4>
					
			<div class="row form-group">
						
						
				<div class="col-75">
					<table id="students">
						<tr>
								   <th>Sl.no </th>
								   <th>Qualification</th>
								   <th>NameOftheInstitution</th>
								   <th>Board of institution</th>
								   <th>MediumOfInstruction</th>
								   <th>Percentage</th>
								   <th>YearOfPassing</th>
							  </tr>
							  <tr>
								   <td>1</td> 
								   <td>class10</td>
								   <td><input type="text"name="NameOfTheInstitutionX"  class="form-control"required></td>
								   <td><select name="BoardX" id="Board" class="form-control">
                              <option value="">--Select</option>
                              <option value="CBSE">CBSE</option>
                              <option value="state">BSEAP(State))</option>
                          </select></td>
								   <td><select name="MediumOfInstructionX" id="Qmedium"  class="form-control" required>
                              <option value="">--Select</option>
                              <option value="english">English</option>
                              <option value="Telugu">Telugu</option>
                          </select></td>
								   <td><input type="text"  class="form-control" name="PercentageX"  id="cgpassc"required /> </td>
								   <td><select id="selectElementIdt" class="form-control" name="yearX"></select> </td>
							  </tr>
							  <tr>
								   <td>2</td>
								   <td>class10+2</td>
								   <td><input type="text"name="NameOfTheInstitutionXi"  class="form-control"required ></td>
								   <td><select name="BoardX" id="Board" class="form-control">
                              <option value="">--Select</option>
                              <option value="CBSE">CBSE</option>
                              <option value="state">BSEAP(State))</option>
                          </select></td>
								   <td><select name="MediumOfInstructionXi" id="Qmedium"  class="form-control" required>
                              <option value="">--Select</option>
                              <option value="english">English</option>
                              <option value="Telugu">Telugu</option> </td>
								   <td><input type="text" name="PercentageXi" class="form-control" id="cgpainter"required /> </td>
								   <td><select id="selectElementId" class="form-control" name="yearXi"></select> </td>
							  </tr>
							</table>
						</div> 
					</div>
					
					<br /><br />
</div>
</div>
<div class="container">
					
					<br/> <br/>
					<h4 text-align="center">DECLARATION</h4>
					I promise to abide by the rules and Regulations of College,University and Govt.Authorities.I also declare that the statements I have made in this application form are correct.<br>
					<div class="row form-group">
						<div class="col-25">
							<label for="Station">Station:</label>
						</div>
						
						<div class="col-75">
							<input type="text" class="form-control" name="Station" id="Station"required /> 
						</div> 
					</div>
					
					<div class="row form-group">
						<div class="col-25">
							<label for="aDate">Date:</label>
						</div>
						
						<div class="col-75">
							<input type="text" class="form-control" name="aDate" id="aDate" value='<?php echo date("Y-m-d"); ?>' readonly /> 
						</div> 
					</div>
					
					
					<div class="row form-group">
					    <label>Click on upload image to upload your PassPhoto</label> 
                        <span><input type="file"  accept="image/*" name="image" id="file" class="form-control"  onchange="loadFile(event)" style="display: none;"></p>
                        <p><label for="file" style="cursor: pointer;"><strong>Upload Image</strong</label></span>
                        <span><img id="output" width="150" /></span>
					</div>
					
					<br/>
					<div class="row">
						<div class="col-26">
								<input type="Submit" name="add_adm" value="Submit" class="btn btn-success btn-block text-center" > </input></div>
						</div>
					</div>
					
		</form>
	</div>
					
					
					
<script> 
options = {
    'traditional': [
        'Bachelor of Commerce-BCOM(Gen)',
		'Economics,History& political sciences-BA(EHP)',
		'Mathematics, Physics & Chemistry-BSC(MPC)',
		'Mathematics, Physics & Statistics-BSC(MPS)',
		'Botany,Zoology & Chemistry-BSC(BZC)'
        ],
    'selffunding': [
        'Mathematics, Physics & Computer sciences-BSC(MPCs)',
		'Mathematics, Electronics & Computer sciences-BSC(MECs)',
		'Mathematics, stastistics & computer sciences-BSC(MSCs)',
		'Mathematics, Industrial Electronics & computer sciences-BSC(MIECs)',
		'Mathematics, Electronics & Statistics-BSC(MES)',
		'Bio-technology,Microbiology& chemistry-BSC(BTMC)',
		'Food technology,Microbiology& chemistry-BSC(FTMC)',
		'BachelorOfComputerApplication-BCOM(CA)',
		'BachelorOfBusinessAdministration-BBA'
        ]
};

var renderItems = function( arrItems, selectElement ){

    selectElement.innerHTML = '';

    for( var i = 0, l = arrItems.length; i < l; i++ )
    {
        var item = document.createElement( 'option' );
            item.innerHTML = arrItems[i];
        selectElement.appendChild( item );
    }

};

window.onload = function() {

    var radioTD = document.getElementById( 'Traditional' );
    var radioSF = document.getElementById( 'Selffunding' );
    var selectElement = document.getElementById( 'options' );


    radioTD.onclick = function(){ renderItems( options.traditional, selectElement ); document.getElementById("Cmediumt").disabled = false;};
    radioSF.onclick = function(){ renderItems( options.selffunding, selectElement ); document.getElementById("Cmediumt").disabled = true; document.getElementById("Cmediume").checked = true; };

    radioTD.click();
	
};

//date liniter
datePickerId.max = new Date().toISOString().split("T")[0];
////

//cgpa validater
function gpa() {
        var reg = /[0-9][.][0-9]/;
        if(!reg.test(document.getElementById("cgpassc").value)) {
            return false;
        }
        else {
            return true;
            alert("correct value");
        }
		if(!reg.test(document.getElementById("cgpainter").value)) {
            return false;
        }
        else {
            return true;
            alert("correct value");
        }
};
////
//years list generator
var min = 2012,
    max = 2021,
    select = document.getElementById('selectElementId');

for (var i = min; i<=max; i++){
    var opt = document.createElement('option');
    opt.value = i;
    opt.innerHTML = i;
    select.appendChild(opt);
}
    var min = 2012,
    max = 2021,
    select = document.getElementById('selectElementIdt');

for (var i = min; i<=max; i++){
    var opt = document.createElement('option');
    opt.value = i;
    opt.innerHTML = i;
    select.appendChild(opt);
}

	/////
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};


</script>
</body>
</html>
