<!DOCTYPE html>
<html>
 <head>
 <title>BiDDING</title>
 <script type="text/javascript">
 function nameValidate()
 {
 let x = document.myform.username.value;
 if(x.length < 6)
 {
 window.alert("Name should be atleast 6 characters long");
 }
 else
 {
 for(let i=0; i<x.length; i++)
 {
 if(!((x[i]<='z' && x[i]>='a') || (x[i]<='Z' && x[i]>='A')))
 {
 window.alert("Name should contain only alphabets");
 break;
 }
 }
 }
 }
 function passValidate()
 {
 let x = document.myform.password.value;
 if(x.length < 6)
 {
 window.alert("password should be atleast 6 characters long");
 }
 }
 function mailValidate()
 {
 let x = document.myform.email.value;
 let atPos = x.indexOf("@");
 let dotPos = x.lastIndexOf(".");
 if(atPos<1 || dotPos+2 >= x.length || dotPos < atPos+2)
 {
 window.alert("Please enter a valid e-mail address");
 }
 }
 function phnoValidate()
 {
 let x = document.myform.phonenumber.value;
 if(x.length != 10)
 {
 window.alert("The length of mobile number shopuld be 10 only");
 }
 }
 </script>
 <style>
 .text{
 padding: 1%;
 width: 50%;
 margin-left: 1%;
 }
 textarea{
 padding: 1%;
 width: 50%;
 margin: 1%;
 }
 #logo{
 height: 80px;
 width: 80px;
 }
 #register
 {
 margin: 3%;
 padding: 5px 0px 5px 200px;
 text-align: left;
 }
 </style>
 </head>
 <body>
 <h1 style="text-align: center;">PRODUCT REGISTRATION</h1>
 <div id="register">
 <form name="myform" action="insertproduct.php" method="post">
 <label for="username">product Name :</label>
 <input class="text" type="text" id="username" name="pname" ><br><br>
 <label for="password">Produt type :</label>
 <input class="text" type="text" id="ptype" name="ptype" ><br><br>
 <label for="email">Starting Price :</label>
 <input class="text" type="text" id="price" name="price"><br><br>


 <div style="text-align: center;">
 <input style="padding: 1%;" type="submit" value="Submit">
 <input style="padding: 1%;" type="button" value="Reset">
 </div>
 </form>
 </div> 
 </body>
</html>