<?php include_once('header.php'); ?> 
<style>
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=submit] {
  background-color: black;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: green;

} 
</style>
<?php
if(isset($_POST['save'])){
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$mobilenumber=$_POST['mobilenumber'];
	$course=$_POST['course'];
	$subject=$_POST['subject'];
	$contactdatetime=date('Y-m-d:H:i:s');
	
	$sql="insert into tblcontactus (firstname, lastname, mobilenumber, course, subject, contactdatetime) values('$firstname', '$lastname', '$mobilenumber', '$course', '$subject', '$contactdatetime')";
	$res=mysqli_query($con,$sql);
	$returndata=mysqli_insert_id($con);
		if($returndata){
			echo "<script>alert('Thank You ...')</script>";
		}
}
?>
	<section id="about" style="background-color: #9b000808;">
      <div class="container pb-70 ">
        <div class="section-content">
			<h2 align="center">CONTACT US</h2>
			<div class="container">
				<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
					<form action="#" method="POST">
						<label for="firstname">First Name</label>
						<input type="text" id="firstname" name="firstname" placeholder="Your name.." required>
						<label for="lastname">Last Name</label>
						<input type="text" id="lastname" name="lastname" placeholder="Your Last Name.." required>
						<label for="mobilenumber">Mobile Number</label>
						<input type="text" id="mobilenumber" name="mobilenumber" placeholder="Your Mobile Number.." required>
						<label for="course">Course</label>
						<select id="course" name="course"  required>
							<option value="computer engineering">Computer Engineering</option>
							<option value="Mechanical Engineering">Mechanical Engineering</option>
							<option value="Civil Engineering">Civil Engineering</option>
							<option value="E&TC Engineering">E&TC Engineering</option>
							<option value="Electrical Engineering">Electrical Engineering</option>
							<option value="Dpharm">D Pharmacy</option>
							<option value="bpharm">B Pharmacy</option>
							<option value="diploma computer engineering">Diploma in Computer Engineering</option>
							<option value="diploma Mechanical Engineering">Diploma in Mechanical Engineering</option>
							<option value="diploma Mechatronics Engineering">Diploma in Mechatronics Engineering</option>
							<option value="diploma Civil Engineering">Diploma in Civil Engineering</option>
							<option value="diploma E&TC Engineering">Diploma in E&TC Engineering</option>
							<option value="diploma Electrical Engineering">Diploma in Electrical Engineering</option>
							<option value="mba">MBA</option>
							<option value="llb">LLB</option>
							<option value="bcs">BCS</option>
							<option value="iti">ITI</option>
							<option value="school">School</option>
						</select>
						<label for="subject">Subject</label>
						<textarea id="subject" name="subject" placeholder="Write something.." rows="5" cols="3"  required></textarea>
						<input type="submit" value="Submit" name="save" id="save" class="btn btn-block btn-sm">
					</form>
				</div>
				<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3761.1884456163725!2d74.9646634737285!3d19.49052663883132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdc9d4a008cdef3%3A0xc82cde85a672e5c4!2sBelhekar%20Group%20Of%20Institutes%20Bhanashiware!5e0!3m2!1sen!2sin!4v1721130879040!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
	</div>
</section>
<?php include_once('footer.php'); ?>


