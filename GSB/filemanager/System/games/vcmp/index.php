<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript">
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
</script>
<title>VCMP-SERVER-BOOTER</title>
<link rel="icon" href="png/vcmp.png" type="image/x-icon" />
<body style="background-color:black;">
<center>
<h1><font color="white">Welcome to VCMP Server-Boot Manager</font></h1>
 <img src="png/vcmp.png" width="600" height="300"> 
<h3><font color="white">Kindly use this panel to Start/Off your server</font></h3>
<h5><font color="white">Note: Kindly remember that you are not permitted by your<br>Host to modify this panel at all</font></h5>
<h5><font color="white">Other wise we will be sorry to remove your Host permanently</font></h5>
<br><br>
<table align="left">
  <tr>
    <td><input type="image" src="png/start.png" width="10" height="10"><font color="white"> Start Server</td>
  </tr>
  <tr>
  <td><input type="image" src="png/off.png" width="10" height="10"><font color="white"> Stop Server</td>
  </tr>
  <tr>
  <td><input type="image" src="png/restart.png" width="10" height="10"><font color="white"> Restart Server</td>
  </tr>
  <tr>
  <td><input type="image" src="png/backup.png" width="10" height="10"><font color="white"> Backup Server</td>
  </tr>
  <tr>
  <td><input type="image" src="png/logs.png" width="10" height="10"><font color="white"> Server Log</td>
  </tr>
  <tr>
  <td><input type="image" src="png/reset.png" width="10" height="10"><font color="white"> Install blank Server</td>
  </tr>
  <tr>
  <td><input type="image" src="png/delete.png" width="10" height="10"><font color="white"> Delete Server</td>
  </tr>
  <tr>
  <td><input type="image" src="png/installbackup.png" width="10" height="10"><font color="white"> Install Server from backup</td>
  </tr>
  <tr>
  <td><input type="image" src="png/deletebackup.png" width="10" height="10"><font color="white"> Delete Server Backup</td>
  </tr>
</table>
<input type="image" src="png/start.png" width="100" height="100" class="btn btn-outline-success btn-lg" onclick="location='includevc/server.php'; Confirmon(this.form); " />
&nbsp;&nbsp;&nbsp;&nbsp;
<input type="image" src="png/off.png" width="100" height="100" class="btn btn-outline-danger btn-lg" onclick="location='includevc/serveroff.php'; Confirmoff(this.forms); " />
&nbsp;&nbsp;&nbsp;&nbsp;
<input type="image" src="png/restart.png" width="100" height="100" class="btn btn-outline-primary btn-lg" onclick="location='includevc/restart.php'; Confirm(this.form); " />
&nbsp;&nbsp;&nbsp;&nbsp;
<input type="image" src="png/backup.png" width="100" height="100" class="btn btn-outline-warning btn-lg" onclick="location='backup.php'; backup(this.form); " />
&nbsp;&nbsp;&nbsp;&nbsp;
<input type="image" src="png/logs.png" width="100" height="100" class="btn btn-outline-danger btn-lg" onclick="location='includevc/ServerLog.php';" />
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