<?php include_once('header.php');
	if(isset($_POST['Save'])){
  		$email=trim($_POST['email']);
		$pass=trim($_POST['pass']);
		$sql = "SELECT id,studname,dept as studdept,admyear as studyear FROM tblstudent where email='".$email."' and pass='".$pass."'";
		$result = mysqli_query($con, $sql);
		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result);
			$_SESSION['studid']=$row["id"];
			$_SESSION['studname']=$row["studname"];
			$_SESSION['studdept']=$row["studdept"];
			$_SESSION['studyear']=$row["studyear"];
	      	echo "<script> window.location='index.php'; </script>";
 		} else {
			session_destroy();
			echo "<script> alert('Please Enter Valid Username & Password.'); </script>";
			echo "<script> window.location='login.php'; </script>";
 		}
 	}
	?>
<section id="about" style="background-color: #9b000808;">
    <div class="container pb-70 ">
        <div class="section-content" style="margin:auto;max-width:600px;">
            <h2 class="text-uppercase mt-0 text-center"> Student <span class="text-theme-color-2"> Login </span></h2>
            <div class="row">

                <form id="formid" method="post" action="">
                    <div class="row">
                        <div class="col-12">
                            <div class="col-4">
                                <label>User Name</label>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control textfields required" id="email"
                                    placeholder="Enter Your User Id" name="email">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="col-4">
                                <label>Password</label>
                            </div>
                            <div class="col-8">
                                <input type="password" class="form-control textfields required" id="pass"
                                    placeholder="Enter password" name="pass">
                            </div>
                        </div>
                        <div class="col-12 text-center d-block" style="margin-top:10px;">
                            <button type="submit" id="Save" name="Save" class="btn btn-warning">Login</button>
                        </div>
                        <div class="col-12 text-center d-block mt-3">
                            <a href="login.php" style="text-decoration:none" class="text-white">Forgot Password!</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include_once('footer.php'); ?>