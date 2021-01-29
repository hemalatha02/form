<!DOCTYPE html>
<html>
<?php
if (isset($_POST['formbutton'])) {
 $NAME = $_POST["name"];
 $dob=$_POST["dateofbirth"];
 $EMAIL = $_POST["email"];
 $contact=$_POST["contact"];
 
 echo "Name : ". $NAME .'<br>';
 echo "Date of birth :".$dob.'<br>';
 echo "Email : ". $EMAIL .'<br>';
 echo "Mobile Number:".$contact.'<br>';
 $phoneNumber = $_POST['contact'];

if(!empty($phoneNumber)) 
{
    if(preg_match('/^\d{10}$/',$phoneNumber))
    {
      $phoneNumber = '0' . $phoneNumber;
      $phoneNumber = '1' . $phoneNumber;
      $phoneNumber = '2' . $phoneNumber;
      $phoneNumber = '3' . $phoneNumber;
      $phoneNumber = '4' . $phoneNumber;
      $phoneNumber = '5' . $phoneNumber;
      $phoneNumber = '6' . $phoneNumber;
      $phoneNumber = '7' . $phoneNumber;
      $phoneNumber = '8' . $phoneNumber;
      $phoneNumber = '9' . $phoneNumber;

    }
    else 
    {
      echo 'Phone number invalid !';
    }
}
else 
{
  echo 'You must provid a phone number !';
}
 } else {
 	echo "Submit Form to see result here";
 }
?>
</html>
