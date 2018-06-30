<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!--script type="text/javascript">
function Confirmoff(forms){
alert("Server has been shut down!"); 
form.submit();
}
function Confirmon(form){
alert("Server has been started!"); 
form.submit();
}
function backup(forms){
alert("Backing up!"); 
form.submit();
}
</script-->
<title>Website-SERVER-BOOTER</title>
<link rel="icon" href="png/website.png" type="image/x-icon" />
<body style="background-color:black;">
<center>
<h1><font color="white">Welcome to Website Server-Boot Manager</font></h1>
 <img src="png/website.png" width="600" height="300"> 
<h3><font color="white">Kindly use this panel to work on your web-server</font></h3>
<h5><font color="white">Note: Kindly remember that you are not permitted by your<br>Host to modify this panel at all</font></h5>
<h5><font color="white">Other wise we will be sorry to remove your Host permanently</font></h5>
<br><br>
<table align="left">
  <tr>
    <td><input type="image" src="png/start.png" width="10" height="10"><font color="white"> Start Website</td>
  </tr>
  <tr>
  <td><input type="image" src="png/db.png" width="10" height="10"><font color="white"> Database</td>
  </tr>
  <tr>
  <td><input type="image" src="png/backup.png" width="10" height="10"><font color="white"> Backup Website</td>
  </tr>
  <tr>
  <td><input type="image" src="png/reset.png" width="10" height="10"><font color="white"> Re-Install website ( scratch )</td>
  </tr>
  <tr>
  <td><input type="image" src="png/delete.png" width="10" height="10"><font color="white"> Delete Website</td>
  </tr>
  <tr>
  <td><input type="image" src="png/installbackup.png" width="10" height="10"><font color="white"> Install website from backup</td>
  </tr>
  <tr>
  <td><input type="image" src="png/deletebackup.png" width="10" height="10"><font color="white"> Delete backup</td>
  </tr>
</table>
<input type="image" src="png/start.png" width="100" height="100" class="btn btn-outline-success btn-lg" onclick="location='includeweb';" />
&nbsp;&nbsp;&nbsp;&nbsp;
<input type="image" src="png/db.png" width="100" height="100" class="btn btn-outline-danger btn-lg" onclick="location='http://wno-host.ddns.net:90/phpmyadmin/'; Confirmoff(this.forms); " />
&nbsp;&nbsp;&nbsp;&nbsp;
<input type="image" src="png/backup.png" width="100" height="100" class="btn btn-outline-warning btn-lg" onclick="location='backup.php';" />
<br><br>
<input type="image" src="png/reset.png" width="100" height="100" class="btn btn-outline-info btn-lg" onclick="location='extract.php';" />
&nbsp;&nbsp;&nbsp;&nbsp;
<input type="image" src="png/delete.png" width="100" height="100" class="btn btn-outline-light btn-lg" onclick="location='delete.php';" />
&nbsp;&nbsp;&nbsp;&nbsp;
<input type="image" src="png/installbackup.png" width="100" height="100" class="btn btn-outline-secondary btn-lg" onclick="location='installbackup.php';" />
&nbsp;&nbsp;&nbsp;&nbsp;
<input type="image" src="png/deletebackup.png" width="100" height="100" class="btn btn-outline-dark btn-lg" onclick="location='deletebackup.php';" />
<br><br>
<footer>
<h5><font color="white">Copyright © WebNet Official-Hosting. All Rights Reserved</font></h5>
<h5><font color="white">Design by WebNet Official.com</font></h5>
</footer>
</center>