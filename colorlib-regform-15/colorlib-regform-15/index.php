<!DOCTYPE html>
<html>
 <head>
  <title>Student Registration</title>
  
  <meta charset="utf-8">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />

  
 <style>
 .signup-content {
	 padding: 20px;
	 
	 
 }
 .signup-form {
	 border: 2px solid black;
	 padding: 5px;
	 
 }
 
select{
    height: 28px !important;
    border: 1px solid #ABADB3;
    margin: 0;
    padding: 0 0 0 0;
    font-size:17px;
}
 
 </style>
 
 
 
 </head>
 <body>
<div class="main">
        <div class="container">
            <div class="signup-content">
                
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form" action="insert.php">
                        <h2>Student registration form</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Name :</label> <br>
                                <input type="text" name="name" id="name" style="width:500px;" required/> 
                            </div>
                            <div class="form-group">
                                <label for="father_name">Father Name :</label> <br>
                                <input type="text" name="father_name" id="father_name" style="width:500px;" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Address :</label> <br>
                            <input type="text" name="address" id="address" style="width:500px;" required/>
                        </div>
                        <div class="form-radio">
                            <label for="gender" class="radio-label">Gender :</label>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="male" checked>
                                <label for="male">Male</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="female">
                                <label for="female">Female</label>
                                <span class="check"></span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="state">State :</label>
                                <div class="form-select">
                                    <select name="state" id="state">
                                        <option value="">--Select--</option>
                                        <option value="ap">Andhra Pradesh</option>
                                        <option value="ar">Arunachal Pradesh</option>
                                        <option value="as">Assam</option>
                                        <option value="br">Bihar</option>
                                        <option value="us">Chhattisgarh</option>
										<option value="ch">Chandigarh</option>
										<option value="dl">Delhi</option>
                                        <option value="uk">Goa</option>
                                        <option value="us">Gujarat</option>
                                        <option value="uk">Haryana</option>
                                        <option value="us">Himachal Pradesh</option>
                                        <option value="uk">Jammu and Kashmir</option>
                                        <option value="us">Jharkand</option>
                                        <option value="uk">Karnataka</option>
                                        <option value="us">Kerala</option>
                                        <option value="uk">Madhya Pradesh</option>
                                        <option value="us">Maharashtra</option>
                                        <option value="uk">Manipur</option>
                                        <option value="us">Meghalaya</option>
                                        <option value="uk">Mizoram</option>
                                        <option value="us">Nagaland</option>
                                        <option value="uk">Odisha</option>
                                        <option value="us">Punjab</option>
                                        <option value="uk">Rajasthan</option>
                                        <option value="us">Sikkim</option>
                                        <option value="uk">Tamil Nadu</option>
                                        <option value="us">Telangana</option>
                                        <option value="uk">Tripura</option>
                                        <option value="us">Uttar Pradesh</option>
                                        <option value="uk">Uttarakhand</option>
                                        <option value="us">West Bengal</option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>

                        </div>
                        <div class="form-group" style="width:500px;">
                            <label for="birth_date">DOB :</label>
                            <input class="form-control" id="date" name="date" placeholder="DD-MM-YYYY" type="date">
                        </div>
                        <div class="form-group">
                            <label for="pincode">Pincode :</label> <br>
                            <input type="text" name="pincode" id="pincode" style="width:500px;">
                        </div>
                        <div class="form-group" style="width:500px;">
                            <label for="course">Course(s) :</label> <br>
					
     				<select id="framework" name="framework[]" multiple class="form-control">
									<option value="c/c++">C/C++</option> 
                                    <option value="python">Python</option>
									<option value="java">Java</option> 
									<option value="php">PHP</option> 
                                    <option value="c#">C#</option>
                                    <option value="xml">XML</option> 
									<option value="angularjs">Angular JS</option>
                                    <option value="backbonejs">Backbone JS</option> 
                                    <option value="css/js">HTML/CSS/JS</option>
									<option value="net">.NET</option> 
                                    <option value="vb">Visual Basic</option>
                                    <option value="asp">ASP</option> 
									<option value="corel">Corel Draw</option>
                                    <option value="flash">Flash</option> 
                                    <option value="photoshop">Photoshop</option>
									<option value="pagemaker">Page Maker</option> 
                                    <option value="android">Android</option>
                                    <option value="msoffice">MS-Office</option> 
									<option value="sqlserver">SQL Server</option>
                                    <option value="mysql">MySQL</option> 
                                    <option value="linux">Linux</option>
									<option value="hacking">Ethical Hacking</option> 

					</select>
					
						</div>
    
						<div class="form-group">
                            <label for="email">Email ID :</label> <br>
                            <input type="email" name="email" id="email" style="width:500px;" />
                        </div>

    <div class="form-group" style="text-align:center;">
     	<input type="submit" value="Reset All" class="submit" name="reset" id="reset" />
		<input type="submit" class="btn btn-info" name="submit" value="Submit" />
    </div>
   </form>
  </div>
</div>
</div>
</div>

<!-- JS 
        <script src="vendor/jquery/jquery.min.js"></script> -->
	<!-- <script src="js/main.js"></script>  -->

 </body>
</<html>

<script>
$(document).ready(function(){
 $('#framework').multiselect({
  nonSelectedText: 'Select Course(s)',
  enableFiltering: true,
  enableCaseInsensitiveFiltering: true,
  buttonWidth:'400px'
 });
 

 
 $('#register-form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"insert.php",
   method:"POST",
   data:form_data,
   success:function(data)
   {
    $('#framework option:selected').each(function(){
     $(this).prop('selected', false);
    });
    $('#framework').multiselect('refresh');
    alert(data);
   }
  });
 });
 
 
});
</script> 


