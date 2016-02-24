<?php
$host = 'localhost';
$root = 'root';
$password = '';
$db = 'db_oprec';

$cek = mysql_connect($host, $root, $password);
$conn = mysql_select_db($db, $cek);
error_reporting(0);
if($conn){
}else{
 echo "Connection failed!";
}
?>

<html lang="en">
    <head>
        <title>Form | Open Reqruitment</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="css/sticky-footer.css" rel="stylesheet">
        <script src="js/jquery-1.11.2.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/ie-emulation-modes-warning.js"></script>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Century+Gothic">
	<style>
      body {
        font-family: 'Century Gothic', serif;
        font-size: 12px;
      }
    </style>
    </head>
	<body>
	<!--Header Title Form-->
	<h1 align="Center">Form Open Reqruitment</h1>
	<br>
	<span class="well glyphicon glyphicon-user" align="center" style="background-color: #E60000; color: #fff;margin-top: -20px;margin-left: 20px;" >
    Self Identity
    </span>
    <div class="jumbotron" style="margin-top: -40px">
        <form method="POST" class="form-horizontal" role="form" enctype="multipart/form-data" action="print.php">
            
			<!--number-->
            <div class="form-group">
                <label class="control-label col-sm-2" for="text">Number</label>
                <div class="col-sm-10">
                    <input name="number" id="number" pattern="[0-9]{2,}"type="text" class="form-control" placeholder="Number" maxlength="15"required autofocus title="Number max 15 char">
                </div>
            </div>
            <!--name-->
            <div class="form-group">
                <label class="control-label col-sm-2" for="text">Name</label>
                <div class="col-sm-10"> 
                    <input class="form-control" name="name" id="name" pattern=".{3,}" required autofocus placeholder="Name"title="Full Name">
                </div>
            </div>
            <!--nickname-->
            <div class="form-group">
                <label class="control-label col-sm-2" for="text">Nickname</label>
                <div class="col-sm-10"> 
                    <input name="nickname" id="nickname" type="text" class="form-control" placeholder="Nickname" maxlength="30" required autofocus>
                </div>
            </div>
            <!--religion-->
			<div class="form-group">
                <label class="control-label col-sm-2" for="text">Religion</label>
                <div class="col-sm-10"> 
                    <div class="col-sm-4">
                        <select id="religion" name="religion" class="form-control">
  <option value="Christian">Christian</option>
  <option value="Catholic">Catholic</option>
  <option value="Moslem">Moslem</option>
  <option value="Hindu">Hindu</option>
  <option value="Buddha">Buddha</option>
  <option value="Others">Others</option>
						</select>
                    </div>
                </div>
            </div>
			<!--gender-->
			<div class="form-group">
                <label class="control-label col-sm-2" for="text">Gender</label>
                <div class="col-sm-10"> 
                    <div class="col-sm-4">
                        <select id="gender" name="gender" class="form-control">
  <option value="Male">Male</option>
  <option value="Female">Female</option>
						</select>
                    </div>
                </div>
            </div>
            <!--date of birth-->
            <div class="form-group">
                <label class="control-label col-sm-2" for="text">Place, Date of Birth</label>
                <div class="col-sm-10">
				    <div class="col-sm-5">
                        <input name="place" id="place" type="text" class="form-control" placeholder="Place" maxlength="30"required autofocus>
                    </div>
				<div class="col-sm-5"> 
                    <script src="./js/jquery-1.11.2.js"></script>
                    <script src="./js/zebra_datepicker.js"></script>
                    <link rel="stylesheet" href="./css/date/default.css" />
                    <script>
                        $(document).ready(function () {
                            $('#date').Zebra_DatePicker({
                                format: 'Y-F-d',
                                months: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                                days: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
                                days_abbr: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday']
                            });
                        });
                    </script>
                    <input type="date"  name="date" id="date" >
                </div>
				</div>
            </div>
            <!--university-faculty-->
            <div class="form-group">
                <label class="control-label col-sm-2" for="text">University - Faculty/Year</label>
                <div class="col-sm-10"> 
                    <div class="col-sm-4">
                        <select id="university" name="university" class="form-control">
  <option value="University1">University 1</option>
  <option value="University2">University 2</option>
  <option value="University3">University 3</option>
						</select>
                    </div>
                    <div class="col-sm-4">
                        <input name="faculty" type="text" class="form-control" placeholder="faculty" maxlength="30"required autofocus>
                    </div>
					<div class="col-sm-2">
                        <select id="year" name="year" class="form-control">
  <option value="2012">2012</option>
  <option value="2013">2013</option>
  <option value="2014">2014</option>
  <option value="2015">2015</option>
  <option value="2016">2016</option>
						</select>
                    </div>
                </div>
            </div>
            <!--address-->
            <div class="form-group">
                <label class="control-label col-sm-2" for="text">Address</label>
                <div class="col-sm-10">
                    <textarea name="address" id="address" class="form-control" rows="5" maxlength="255" placeholder="Address"></textarea>
                </div>
            </div>
            <!--phone-->
            <div class="form-group">
                <label class="control-label col-sm-2" for="text">Phone Number</label>
                <div class="col-sm-10"> 
                    <input name="phone" id="phone" pattern="[0-9]{11,}" type="text" class="form-control" placeholder="Phone Number" maxlength="13" required autofocus>
                </div>
            </div>
			<!--email-->
            <div class="form-group">
                <label class="control-label col-sm-2" for="text">Email</label>
                <div class="col-sm-10">
                    <input name="email" type="email" class="form-control" placeholder="Email" maxlength="30"required autofocus>
                </div>
            </div>
			<!--twitter-->
            <div class="form-group">
                <label class="control-label col-sm-2" for="text">Twitter @</label>
                <div class="col-sm-10">
                    <input name="twitter" id="twitter" type="text" class="form-control" placeholder="Username Twitter" maxlength="30"required autofocus>
                </div>
            </div>
	<span class="well glyphicon glyphicon-user" align="center" style="background-color: #E60000; color: #fff;margin-top: -20px;margin-left: 20px;" >
    Self Choice
    </span>
            <!--choice-->
            <div class="form-group">
                <label class="control-label col-sm-2" for="text">Choice</label>
                <div class="col-sm-10"> 
                    <div class="col-sm-4">
                        <select id="choice" name="choice" class="form-control">
  <option value="Choice1">Choice 1</option>
  <option value="Choice2">Choice 2</option>
  <option value="Choice3">Choice 3</option>
						</select>
                    </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <textarea name="reason" id="reason" class="form-control" rows="5" maxlength="255" placeholder="The Reason of Choice" required></textarea>
                </div>
            </div>
                </div>
            </div>
            <div class="form-group"> 
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label><input type="checkbox" required>I Agree.</label>
                    </div>
                </div>
            </div>
            <div class="form-group"> 
                <div class="col-sm-offset-2 col-sm-10">
                    <button name="daftar" value="daftar" type="submit" class="btn btn-default btn-primary">Submit</button>
					NB: Download Will Start Automaticaly.
                </div>
            </div>
	</div>
    </form>
	    <div class="container">
    	<div class="row">
        	<div align=center>Copyright &copy; Yoshua CHrist Ehan H | 
            <a rel="nofollow" href="mailto:yoshua.ceh@gmail.com">YOSH</a>
			<br></br>
			</div>
        </div>
        </div>
	</body>
	</html>
	
<?php
	if (mysql_real_escape_string(filter_input(INPUT_POST, 'daftar')) !== "") {
		$number = addslashes(strip_tags(mysql_real_escape_string(filter_input(INPUT_POST, 'number'))));
        $name = addslashes(strip_tags(mysql_real_escape_string(filter_input(INPUT_POST, 'name'))));
        $nickname = addslashes(strip_tags(mysql_real_escape_string(filter_input(INPUT_POST, 'nickname'))));
        $religion = addslashes(strip_tags(mysql_real_escape_string(filter_input(INPUT_POST, 'religion'))));
		$gender = addslashes(strip_tags(mysql_real_escape_string(filter_input(INPUT_POST, 'gender'))));
		$place = addslashes(strip_tags(mysql_real_escape_string(filter_input(INPUT_POST, 'place'))));
        $date = addslashes(strip_tags(mysql_real_escape_string(filter_input(INPUT_POST, 'date'))));
		$university = addslashes(strip_tags(mysql_real_escape_string(filter_input(INPUT_POST, 'university'))));
		$faculty = addslashes(strip_tags(mysql_real_escape_string(filter_input(INPUT_POST, 'faculty'))));
		$year = addslashes(strip_tags(mysql_real_escape_string(filter_input(INPUT_POST, 'year'))));
		$address = addslashes(strip_tags(mysql_real_escape_string(filter_input(INPUT_POST, 'address'))));
		$phone = addslashes(strip_tags(mysql_real_escape_string(filter_input(INPUT_POST, 'phone'))));
		$email = addslashes(strip_tags(mysql_real_escape_string(filter_input(INPUT_POST, 'email'))));
        $twitter = addslashes(strip_tags(mysql_real_escape_string(filter_input(INPUT_POST, 'twitter'))));
		$choice = addslashes(strip_tags(mysql_real_escape_string(filter_input(INPUT_POST, 'choice'))));
		$reason = addslashes(strip_tags(mysql_real_escape_string(filter_input(INPUT_POST, 'reason'))));

        $query = "INSERT INTO daftar (number, name, nickname, religion, gender, place, date, university, faculty, year, address, phone, email, twitter, choice, reason) VALUES ('$number', '$name', '$nickname', '$religion', '$gender', '$place', '$date', '$university', '$faculty', '$year', '$address', '$phone', '$email', '$twitter', '$choice', '$reason');";
            $sql = mysql_query($query) or die(mysql_error());
            if ($sql) {
                echo "<script>alert('Failed :(');</script>";
                echo "<script> document.location='index.php'; </script>";
            }
        }
?>