<?php include ('./connect.php') ?>
<!DOCTYPE html>
<html>
<head>
<style>
/* The container */
.container {
  top: 0;
  display: block;
  position: relative;
  padding-left: 30px;
  margin-bottom: -15px;
  cursor: pointer;
  font-size: 18px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  border: solid black 1px;
  position: absolute;
  top: 0;
  left: 0;
  height: 20px;
  width: 20px;
  background-color: lightseagreen;
}

/* On mouse-over, add a grey background color 
.container:hover input ~ .checkmark {
  
}*/

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;

}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.container .checkmark:after {
  left: 5px;
  top: 2px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}

/*grid*/
.grid-container {
  position: sticky;
  width: 100%;
  background-color: transparent;
  display: grid;
  grid-template-columns: auto auto auto auto auto;
  gap: 8px;

}

.grid-container > div {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: left;
}

/*button*/
.button {
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #2196F3;
  color: black;
  font-size: 14px;
  padding: 3px 6px;
  border: solid black 1px;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}

.button1 {
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: lightgray;
  color: black;
  font-size: 14px;
  padding: 3px 6px;
  border: solid black 1px;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}

/*form*/
input[type=text], select {
  width: 200px;
  height: 10px;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid black;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=datetime-local], select {
  width: 200px;
  height: 10px;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid black;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  font-size: 12pt;
  font-style: oblique;
  width: 10%;
  background-color: #4CAF50;
  color: white;
  padding: 10px 10px;
  margin: 10px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  position: center;
  background-color: #45a049;
}

div {
  border-radius: 10px;
  background-color: transparent;
  padding: 1px;
  width: 100%;
}
.btn {
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: lightseagreen;
  color: black;
  font-size: 16px;
  padding: 5px 10px;
  border: solid black 1px;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
body{
    background: url("../checklist/backwall.jpg") no-repeat center fixed;
    background-size: cover;
}
</style>
</head>
<body>
<center><h1>Compliance and Regulation Checklists</h1></center>
&ensp;&ensp;&ensp;&ensp;
<button class="button" onclick="check()">Check All</button> &nbsp;
<button class="button1" onclick="uncheck()">Uncheck All</button>
<div class="grid-container">
  <div>
  <label class="container">
  <input type="checkbox" id="myCheck">
  <h5>Comply safety regulations </h5>
  <span class="checkmark"></span>

</label>
Implement safety measures to prevent accidents and comply with all safety regulations.
</div>

  <div><label class="container">
  <input type="checkbox" id="myCheck1">
  <h5>Protect intellectual property </h5>
  <span class="checkmark"></span>
</label>
Protect company intellectual property through patents, trademarks, and copyrights to prevent infringement and maintain exclusivity.
</div>

<div><label class="container">
  <input type="checkbox" id="myCheck2">
  <h5>Comply import/export laws </h5>
  <span class="checkmark"></span>
</label>
Comply with import and export regulations to prevent legal issues and ensure smooth international trade.
</div>

<div><label class="container">
  <input type="checkbox" id="myCheck3">
  <h5>Implement anti-bribery measures </h5>
  <span class="checkmark"></span>
</label>
Implement anti-bribery measures to prevent bribery and comply with anti-bribery regulations.
</div>

<div><label class="container">
  <input type="checkbox" id="myCheck4">
  <h5>Verify quality control </h5>
  <span class="checkmark"></span>
</label>
Implement quality control measures to ensure consistent product quality and compliance with industry standards.
</div>

<div><label class="container">
  <input type="checkbox" id="myCheck5">
  <h5>Ensure proper labeling </h5>
  <span class="checkmark"></span>
</label>
Properly label all products to ensure accurate information and compliance with labeling regulations.
</div>

<div><label class="container">
  <input type="checkbox" id="myCheck6">
  <h5>Follow environmental regulation</h5>
  <span class="checkmark"></span>
</label>
Comply with environmental regulations to prevent pollution and minimize the company's impact on the environment.
</div>

<div><label class="container">
  <input type="checkbox" id="myCheck7">
  <h5>Implement security measures </h5>
  <span class="checkmark"></span>
</label>
Protect the company's assets, information, and employees with security measures.
</div>

<div><label class="container">
  <input type="checkbox" id="myCheck8">
  <h5>Obtain necessary licenses/permits </h5>
  <span class="checkmark"></span>
</label>
Obtain and maintain all required licenses and permits to operate legally.</div>

<div><label class="container">
  <input type="checkbox" id="myCheck9">
  <h5>Maintain confidentiality </h5>
  <span class="checkmark"></span>
</label>
Protect sensitive information and maintain confidentiality to comply with legal and ethical obligations.</div>
</div>
</body>
<script>
function check() {
  document.getElementById("myCheck").checked = true;
  document.getElementById("myCheck1").checked = true;
  document.getElementById("myCheck2").checked = true;
  document.getElementById("myCheck3").checked = true;
  document.getElementById("myCheck4").checked = true;
  document.getElementById("myCheck5").checked = true;
  document.getElementById("myCheck6").checked = true;
  document.getElementById("myCheck7").checked = true;
  document.getElementById("myCheck8").checked = true;
  document.getElementById("myCheck9").checked = true;
}

function uncheck() {
  document.getElementById("myCheck").checked = false;
  document.getElementById("myCheck1").checked = false;
  document.getElementById("myCheck2").checked = false;
  document.getElementById("myCheck3").checked = false;
  document.getElementById("myCheck4").checked = false;
  document.getElementById("myCheck5").checked = false;
  document.getElementById("myCheck6").checked = false;
  document.getElementById("myCheck7").checked = false;
  document.getElementById("myCheck8").checked = false;
  document.getElementById("myCheck9").checked = false;
}

</script>
<br>
<center>
<div><form action="./chkinfo.php" method="POST">
  <label for="fname">Full name: </label> &ensp;&ensp;&nbsp;
  <input type="text" id="fname" name="fullname" required><br>
  <label for="mname">Module name: </label>
  <input type="text" id="mname" name="modulename" required><br>
  <!-- <label for="status">Status: </label> &ensp;&ensp;&ensp;&ensp;&ensp;&nbsp; -->
  <input type="hidden" id="stat" name="xstat" value="Complied" readonly><br><br>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
  &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
  <button type="submit" class="btn btn-dark" name="register">Submit</button>

  </div> 
</center>
</form>
</html>
