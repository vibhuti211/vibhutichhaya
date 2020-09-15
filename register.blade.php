
<!DOCTYPE html>
<html lang="en">
<head>
<style>
.bookbtn{
	
	padding:15px;
	background-color:#CF2D50;
    color: white;
	font-size: 16px;
	border: 2px solid;
    border-radius:10px;
    cursor: pointer;
	margin-top:30px;
}

</style>

<title></title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Event Registration Form Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- //for-mobile-apps -->
<!-- //custom-theme -->
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lora|Oswald" media="screen">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato" media="screen">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto" media="screen">
    
<link rel="stylesheet" type="text/css" href="{{asset('asset/style2.css')}}">
<script type="text/javascript" src="{{asset('asset/jquery-1.11.0.min.js')}}"></script>

</head>
<body>
<!-- banner -->
	<div class="center-container">
		<div class="main">
				<div class="w3layouts_main_grid">
					<form action="registeration" method="post" class="w3_form_post">
						@csrf
					<center><font color="white" font="Georgia" size="100">Register Form</font></center><br><br>
                    <div class="w3_agileits_main_grid w3l_main_grid">
                            <span class="agileits_grid">
                                <label>Name </label>
                                <input type="text" name="name" placeholder="Name" id="name">
                                <p class="error-register" id="nameidcheck"></p>

                            </span>
                        </div>
                        
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>EmailId </label>
								<input type="email" name="email" placeholder="Email" id="email">
								<p class="error-register" id="emailidcheck"></p>

							</span>
						</div>
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Password </label>
								<input type="password" name="password" placeholder="password" id="password" >
								<p class="error-register" id="loginpasscheck"></p>

							</span>
						</div>
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
						
						<input type="checkbox" onclick="myFunction()">Show Password

<script>
function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

</script>
<script type="text/javascript">
    
    $(document).ready(function()
    {
        $('#nameidcheck').hide();
        $('#emailidcheck').hide();
        $('#loginpasscheck').hide();

        var nameid_err=true;
        var emailid_err=true;
        var loginpass_err=true;

$('#name').keyup(function()
                {
                    nameid_check();

                });

                
                function nameid_check()
                {
                    var nameid_val = $('#name').val();

                        if(nameid_val.length == '')
                        {
                            $('#nameidcheck').show();
                            $('#nameidcheck').html("** please fill the name");
                            $('#nameidcheck').focus();
                            $('#nameidcheck').css("color","#ffb600");
                            nameid_err = false;
                            return false;
                         }
                         else
                         {
                            $('#nameidcheck').hide();
                              
                         }


                }

         $('#email').keyup(function()
                {
                    emailid_check();

                });

                
                function emailid_check()
                {
                    var emailid_val = $('#email').val();

                        if(emailid_val.length == '')
                        {
                            $('#emailidcheck').show();
                            $('#emailidcheck').html("** please fill the email");
                            $('#emailidcheck').focus();
                            $('#emailidcheck').css("color","#ffb600");
                            emailid_err = false;
                            return false;
                         }
                         else
                         {
                            $('#emailidcheck').hide();
                              
                         }


                         if(emailid_val.indexOf('@') <= 0)
                         {                     
                            $('#emailidcheck').show();
                            $('#emailidcheck').html("** @ enter please");
                            $('#emailidcheck').focus();
                            $('#emailidcheck').css("color","#ffb600");
                            emailid_err = false;
                            return false;
                         }
                         if (emailid_val.charAt(emailid_val.length-4)!='.' && (emailid_val.charAt(emailid_val.length-3)!='.')) {

                            $('#emailidcheck').show();
                            $('#emailidcheck').html("** please enter email in proper way");
                            $('#emailidcheck').focus();
                            $('#emailidcheck').css("color","red");
                            emailid_err = false;
                            return false;
                         

                         }

                        else
                         {
                            $('#emailidcheck').hide();
                              
                         }
                        
                }
                $('#password').keyup(function()
                {
                        loginpass_check();
                });

                    function loginpass_check()
                    {

                        var passwrd = $('#password').val();

                        if(passwrd.length == '')
                        {
                        $('#loginpasscheck').show();
                        $('#loginpasscheck').html("**Please Fill the password");
                        $('#loginpasscheck').focus();
                        $('#loginpasscheck').css("color","#ffb600");
                        loginpass_err = false;
                        return false;

                        }
                        else
                        {
                            $('#loginpasscheck').hide();
                        }
                            var upper_text= new RegExp('[A-Z]*');
                            var lower_text= new RegExp('[a-z]*');
                            var number_check=new RegExp('[0-9]*');
                        
                        if((passwrd.length < 8 ) && passwrd.match(upper_text) && passwrd.match(lower_text) && passwrd.match(number_check) )
                        {
                            $('#loginpasscheck').show();
                            $('#loginpasscheck').html("**password length must be 8 charachter and upper and lower and digits");
                            $('#loginpasscheck').focus();
                            $('#loginpasscheck').css("color","#ffb600");
                            loginpass_err = false;
                            return false;

                        }
                        
                        else
                        {
                            $('#loginpasscheck').hide();
                            
                        }
                    }

                     $('#btnSubmit').click(function()
                       {
                       		var emailid_err=true;
                          var loginpass_err=true;

                            emailid_check();
                            loginpass_check();
                            

                               
                             
                        if((emailid_err == true) && (loginpass_err == true))
                        {
                            return true;
                        }
                        else
                        {
                            return false;
                        }
                             
                        
                    });

                       


                      

              
                     
                         

    });


</script>


<br></span>

						</div>
						

										<div class="content-w3ls">
						<div class="form-w3ls">
							<div class="content-wthree2">
								<div class="clear"></div>
							</div>
						</div>
						<div class="clear"></div>
					</div>
					<div class="w3_main_grid">
						<div class="w3_main_grid_right">
							<center><input type="submit" value="Login" name="login" id="btnSubmit">&nbsp;&nbsp;
							</center>
									
						</div></br>
						
					</div>
				</form>
				
			</div>
				
		<!-- Calendar -->
			<link rel="stylesheet" href="../admin/css/jquery-ui.css" />
				<script src="../admin/js/jquery-ui.js"></script>
					<script>
						$(function() {
							$( "#datepicker" ).datepicker();
						});
					</script>
		<!-- //Calendar -->
			<div class="w3layouts_copy_right">
				<div class="container">
				</div>
			</div>
		</div>
	</div>
<!-- //footer -->
</body>
</html>