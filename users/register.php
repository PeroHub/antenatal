<?php

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up | Antenatal  </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
		integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"
		integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous">
</head>
<body>
<style type="text/css">
	
	/* #text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;
	}


	*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
} */
body{
  /* height: 100vh; */
  /* display: flex; */
  
  justify-content: center;
  align-items: center;
  padding: 10px;
  background: #F6F6F9;
}
.container{
  max-width: 700px;
  margin: 0 auto;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.content form .user-details {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  /* width: calc(100% / 2 - 20px); */
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}
 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,
 #dot-3:checked ~ .category label .three{
   background: #9b59b6;
   border-color: #d9d9d9;
 }
 /* form input[type="radio"]{
   display: none;
 } */
 form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: #7380ec;
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: #7380ec;
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}
</style>


    <form method="post">
        <div class="container">
            <div class="" style="text-align: center; font-size: 30px;">Ante - Natal registration</div>
            <div class="content">
            <form action="#">
                <div class="user-details">
                <div class="input-box">
                    <span class="details">Patient Name</span>
                    <input type="text" name="patient_name" placeholder="Enter your reg number" required>
                </div>
                <div class="input-box">
                    <span class="details">Patient Address</span>
                    <input type="text" name="patient_address" placeholder="Enter your surname" required>
                </div>

                <div class="input-box">
                    <span class="details">Patient Blood Group</span>
                    <input type="text" name="blood_group" placeholder="Enter your username" required>
                </div>

                <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input type="text" name="phone_number" placeholder="Enter your username" required>
                </div>

                <div class="">
                    <span>Pregnancy Duration</span>
                    <section style="display: flex; margin-bottom: 20px; margin-top: 10px;">
                        <input type="radio" name="tremester" value="First" checked> First Tremester<br>
                        <input type="radio" name="tremester" value="Second"> Female<br>
                        <input type="radio" name="tremester" value="Third"> Other
                    </section>
                </div>

                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="email" name="email" placeholder="Enter your email" required>
                </div>


                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="text" name="password" placeholder="Enter your password" required>
                </div>
                <div class="input-box">
                    <span class="details">Confirm Password</span>
                    <input type="text" name="confirm_password" placeholder="Confirm your password" required>
                </div>
                </div>
                
                <div class="button">
                <input type="submit" value="Register">

                
            </div>
            <a href="login.php" style="margin-top: 30px;"> or login up</a>
            </form>
            </div>
        </div>
    </form>
</body>
</html>