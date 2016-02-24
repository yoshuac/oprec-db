<?php
$host = 'localhost';
$root = 'root';
$password = '';
$db = 'db_oprec';

$cek = mysql_connect($host, $root, $password);
$conn = mysql_select_db($db, $cek);
error_reporting(0);
if ($conn) {
    
} else {
    echo "Connection Failed!";
}

if (mysql_real_escape_string(filter_input(INPUT_POST, 'daftar')) !== "") {
    $number = addslashes(strip_tags(mysql_real_escape_string(filter_input(INPUT_POST, 'number'))));
    setcookie("number", $number, time() + 20);
    $name = addslashes(strip_tags(mysql_real_escape_string(filter_input(INPUT_POST, 'name'))));
    setcookie("name", $name, time() + 20);
	$nickname = addslashes(strip_tags(mysql_real_escape_string(filter_input(INPUT_POST, 'nickname'))));
    setcookie("nickname", $nickname, time() + 20);
	$religion = addslashes(strip_tags(mysql_real_escape_string(filter_input(INPUT_POST, 'religion'))));
    setcookie("religion", $religion, time() + 20);
	$gender = addslashes(strip_tags(mysql_real_escape_string(filter_input(INPUT_POST, 'gender'))));
    setcookie("gender", $gender, time() + 20);
	$place = addslashes(strip_tags(mysql_real_escape_string(filter_input(INPUT_POST, 'place'))));
    setcookie("place", $place, time() + 20);
	$date = addslashes(strip_tags(mysql_real_escape_string(filter_input(INPUT_POST, 'date'))));
    setcookie("date", $date, time() + 20);
	$university = addslashes(strip_tags(mysql_real_escape_string(filter_input(INPUT_POST, 'university'))));
    setcookie("university", $university, time() + 20);
	$faculty = addslashes(strip_tags(mysql_real_escape_string(filter_input(INPUT_POST, 'faculty'))));
    setcookie("faculty", $faculty, time() + 20);
	$year = addslashes(strip_tags(mysql_real_escape_string(filter_input(INPUT_POST, 'year'))));
    setcookie("year", $year, time() + 20);
	$address = addslashes(strip_tags(mysql_real_escape_string(filter_input(INPUT_POST, 'address'))));
    setcookie("address", $address, time() + 20);
	$phone = addslashes(strip_tags(mysql_real_escape_string(filter_input(INPUT_POST, 'phone'))));
    setcookie("phone", $phone, time() + 20);
	$email = addslashes(strip_tags(mysql_real_escape_string(filter_input(INPUT_POST, 'email'))));
    setcookie("email", $email, time() + 20);
	$twitter = addslashes(strip_tags(mysql_real_escape_string(filter_input(INPUT_POST, 'twitter'))));
    setcookie("twitter", $twitter, time() + 20);
	$choice = addslashes(strip_tags(mysql_real_escape_string(filter_input(INPUT_POST, 'choice'))));
    setcookie("choice", $choice, time() + 20);
	$reason = addslashes(strip_tags(mysql_real_escape_string(filter_input(INPUT_POST, 'reason'))));
    setcookie("reason", $reason, time() + 20);

    $cekNumber = mysql_query("SELECT * FROM daftar where number=" . $number . "") or die(mysql_error());
    if (mysql_num_rows($cekNumber)) {
        echo "<script>
			alert('Sorry, NIM already registered. Please Try Again.');
		</script>";
        echo "<script> document.location='index.php' </script>";
    } else {
        $query = "INSERT INTO daftar (number, name, nickname, religion, gender, place, date, university, faculty, year, address, phone, email, twitter, choice, reason) VALUES ('$number', '$name', '$nickname', '$religion', '$gender', '$place', '$date', '$university', '$faculty', '$year', '$address', '$phone', '$email', '$twitter', '$choice', '$reason');";
        $sql = mysql_query($query) or die(mysql_error());
        if ($sql) {
            echo "<script>
			alert('It's Done, Thank You!');
			</script>";
            echo "<script> document.location='page.php'; </script>";
        } else {
            echo "<script>alert('Registration Failed!');</script>";
            echo "<script> document.location='index.php'; </script>";
        }
    }
}
?>