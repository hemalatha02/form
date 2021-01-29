<!DOCTYPE html>
<html>
<head><title>REGISTRATION FORM</title>
	<style> 
	input[type=submit] {
  background-color: #066a75;
  color: white;
  padding: 10px 25px;
  cursor: pointer;
  font-size:20px;
  box-shadow: 6px 6px black ;
}
span{
	color:red;
}
</style>
</head>
<script >
        var minAge = 18;
        function _calcAge() {
            var date = new Date(document.getElementById("date").value);
            var today = new Date();

            var timeDiff = Math.abs(today.getTime() - date.getTime());
            var age1 = Math.ceil(timeDiff / (1000 * 3600 * 24)) / 365;
            return age1;
        }
        function _setAge() {

            var age = _calcAge();
            if (age < minAge) {
                alert("You are not allowed into the site. The minimum age is 18!");
            } else

                alert("Welcome to my Site");
            window.open(sample2.php, _self);

        }
</script>
<body>
  <div style="background-color:#066a75;color:white; font-size:19px; height: 450px;width: 45%; margin-left: 350px;">
	<br><br><center><h3>REGISTRATION FORM</h3></center>

<form style="margin-left:17%;"  action="store.php" method="post"  >

 <span>*</span>Name: <input style="margin-left:80px;" type="text" name="name" required ><br><br>

 <span>*</span>Birth date:<input style="margin-left: 53px;" type="date" id="date" name="dateofbirth" required><br><br>

 <span>*</span>E-mail: <input style="margin-left: 73px;" type="email" name="email" required ><br><br>

 <span>*</span>Phone Number:<input style="margin-left: 15px;" type="tel" pattern="[0-9]{10}" name="contact" required><br><br><br>

 <input style="margin-left: 120px; " name="formbutton" type="submit" onclick="_setAge();">

</form>
</div>
</body>
</html>
