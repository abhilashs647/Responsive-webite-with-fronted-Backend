<?php
 include("connection.php")
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scaler=1">
	<title>PHP Crud operation</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="connection.php">
</head>
<body><center><h1>WELCOME TO WEBSITE</h1>
<nav class="navbar"><h1>
            <a href="#home" style="--i:1" class="active">Home</a>
            <a href="#about" style="--i:2">About</a>
            <a href="#contact" style="--i:5">Contact</a><h1>
        </nav>
         <section class="home" id="home">
        <div class="home-content">
            <h1>NIKETAN ACADEMY</h1>
            <p>WELCOME TO NIKETAN ACADEMY <br/>
             <h3> Niketan Academy is an innovative online platform dedicated to teaching coding and programming skills to learners of all ages
            </p>
            <p> Niketan Academy is a popular online coding academy known for its interactive and accessible approach to learning programming.</p></h3><br><br>
           <h4> Wide Range of Courses<br>
            Interactive Learning Platform<br>
            Structured Curriculum<br>
            Flexibility<br>
            Certification<br><h4>
            <div class="home-scl">
                <a href="#" style="--i:7"><i class='bx bxl-facebook'></i></a>
                <a href="#" style="--i:8"><i class='bx bxl-instagram' ></i></a>
                <a href="#" style="--i:9"><i class='bx bxl-whatsapp' ></i></a>
                <a href="#" style="--i:10"><i class='bx bxl-linkedin' ></i></a>
           
    </section><br><br>
     <section class="about" id="about">
        </div>
        <div class="about-text">
            <h2>About <span>Academy</span></h2>
            <p><h3>
               Here are some interesting aspects of the academy:</p>

<p>1. *Comprehensive Curriculum*: Niketan Academy offers a wide range of courses covering various programming languages and technologies, from Python and JavaScript to advanced topics like machine learning and web development.</p>

<p>2. *Interactive Learning*: The platform provides interactive coding environments where students can write, test, and debug their code directly in the browser, making the learning experience engaging and hands-on.</p>

<p>3. *Expert Instructors*: Courses are designed and taught by industry professionals and experienced educators who bring real-world knowledge and expertise to the virtual classroom.</p>

<p>4. *Project-Based Learning*: Niketan Academy emphasizes learning by doing, encouraging students to build real projects. This approach helps learners apply theoretical knowledge to practical scenarios, reinforcing their understanding.</p>

<p>5. *Community Support*: The academy fosters a supportive community where students can collaborate, share ideas, and get help from peers and mentors. This network is invaluable for motivation and problem-solving.</p>

<p>6. *Flexible Learning*: With self-paced courses and flexible schedules, learners can progress through the material at their own pace, making it ideal for busy professionals, students, and hobbyists alike.</p>

<p>7. *Certification*: Upon completion of courses, students receive certificates that can be showcased on their resumes or LinkedIn profiles, demonstrating their new skills to potential employers.</p>

<p>8. *Career Services*: Niketan Academy also offers career support, including resume reviews, interview preparation, and job placement assistance to help students transition into tech careers.</p>

<p>9. *Continual Updates*: The curriculum is regularly updated to keep pace with the latest industry trends and technological advancements, ensuring that students learn the most relevant and up-to-date skills.</p>
<p>Niketan Academy's dedication to quality education and student success makes it a standout choice for anyone looking to embark on or advance their journey in the world of coding.</p></h3><br><br><br><br>
            
            
    </section><section class="contact" id="contact">
        <div class="contact-text">
            <h2>Welcome <span> For</span> Registration<span></h2>
            

       



       	<div class="container">
		<form action="pdf.php" method="POST">
		<div class="title">
			Registration Form			
		</div>

			<div class="form">
				<center>

			<div class="input_field"  >
				<label>First Name</label>
				<input type="text" class="input" name="fname" required>	
			</div>
		
			<div class="input_field">
				<label>Last Name</label>
				<input type="text" class="input" name="lname" required>	
			</div>
		 


		<div class="input_field">
			<label>Password</label>
			<input type="text" class="input" name="password" required>	
    	</div>


			<div class="input_field">
				<label>Confirm Password</label>
				<input type="text" class="input" name="conpassword" required>	
			</div>



			<div class="input_field">
				<label>Gender</label>
				
			<div class="custom_select">
				<select name="gender" required>
					<option value="">Select</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
					<option value="Other">Other</option>
				</select>
			</div>	
			</div>


			<div class="input_field">
				<label>Email Address</label>
				<input type="text" class="input" name="email" required>	
			</div>
		

			<div class="input_field">
				<label>Phone Number</label>
				<input type="Number" class="input" name="phone" required>	
			</div>
		</div>

		<div class="form">
			<div class="input_field">
				<label>Full Address</label>
				<textarea class="textarea" name="address"></textarea>	
			</div>




			<div class="input_field terms">
				<label class="check">
					<input type="checkbox" required>
					<span class="checkmark"></span>
		    	</label>
		    	<p>Agree to tearms and conditions</p>	
			</div>

			<div class="input_field">
				<input type="submit" value="Register" class="btn" name="register" required>
			</div>


		</div></center>
		</form>
	</div>

</body>
</html>

<?php
	
	if ($_POST['register'])
	{
		$fname    = $_POST['fname'];
		$lname    = $_POST['lname'];
		$pwd      = $_POST['password'];
		$cpwd     = $_POST['conpassword'];
		$gender   = $_POST['gender'];
		$email    = $_POST['email'];
		$phone    = $_POST['phone'];
		$address  = $_POST['address'];
	
  		$query = "INSERT INTO FORM VALUES('$fname','$lname','$pwd','$cpwd','$gender','$email','$phone','$address')";
     
  		$data = mysqli_query($conn,$query);
  
  		if ($data)
  		{
  		  	echo "<script>alert('Form Submited')</script>";
  	    }
  		else
  		{ 
  		   	echo "Form nor Submited";
  		}
  	}
?>