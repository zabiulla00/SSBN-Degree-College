<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>SSBN Degree College, Anantapur-Search Student</title>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <style>body
{
background-color:#ccffcc;
font-family:sans-serif;
border-style:solid;
padding-top:25px;
padding-bottom:25px;
padding-right:25px;
padding-left:25px;
margin:100px;
}</style>
  
 </head>
 <body>
  <div class="container">
   <br />
   <h1 align="center">SRI SAI BABA NATIONAL DEGREE COLLEGE(AIDED)</h1>
            <h3 align="center">(An Autonomous College affiliated to S.K University,Anantapur)</h3>
            <h3 align="center">Re-accrediated with 'A' grade by NAAC <br>
			Govt.Hospital Road,Anatapuramu-515001,(A.P)<br>(Under the management of A.D.N.E trust)</h3><hr><h3 align="center">.......Search Admissions.......</h3><hr>
			<div class="form-group">
				<input type="button" value="Home" class="btn btn-success btn-block text-center" id="btnHome"  onClick="document.location.href='index.php'" />
			</div>
   <div class="form-group">
    <div class="input-group">
     <span class="input-group-addon">Search</span>
     <input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" />
    </div>
   </div>
   <br />
   <div id="result"></div>
  </div>
 </body>
</html>


<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>






