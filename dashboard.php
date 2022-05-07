<!DOCTYPE html>
<head>
<title>Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  * {
  box-sizing: border-box;
  background-color: lightblue;

}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}



/*body {
  font-family: Arial, Helvetica, sans-serif;
  
  opacity: 1;
}
.logo img{
	position: sticky;
  margin-left: 30px;
  margin-top: 2px;
  float: left;
  width: 200px;
  height: auto;
}
.dash{
width: 300px;
height: auto;
float: left;
display: inline-block;
}
span.box {
	box-sizing: border-box;
	border-style: dotted;
	width: 100%;
  margin-left: 50px;
	height: auto;
	border-radius: 20px;

	float:left; 
	margin-top: 25px;
	background-color: grey;
}


.header {
  background-color: #ffff00;
  padding: 0px;
  text-align: center;
  font-size: 10px;
}
select {
        width: 150px;
        margin: 5px;
    }
input {
	width: 150px;
        margin: 5px;
}

.footer {
  background-color: #f1f1f1;
  padding: 0;
  text-align: center;
}
*/

</style>
</head>
<body>
  



<div class="row">
  <div class="column" style="background-color:#aaa;">
    <div class="logo">
        <img src="C:\xampp\htdocs\dbmsproject\logo.png">
    </div>
  </div>
  <div class="column" style="background-color:#bbb;">
    <h2>Column 2</h2>
    <p>Some text..</p>
  </div>
  <div class="column" style="background-color:#ccc;">
  <div class="box">
  <div class="header">
  <h2>Simple Search</h2>
  </div>

  <div class="row" >
  
  	<tr>
            <td>
              <b>Sports :</b>
            </td>
            <td>
              <select name="sports">
                <option selected hidden value=" ">Sports</option>
                <option value="CRICKET">CRICKET</option>
                <option value="FOOTBALL">FOOTBALL</option>
                <option value="BASKETBALL">BASKETBALL</option>
                <option value="BADMINTON">BADMINTON</option>
                <option value="CHESS">CHESS</option>
                <option value="BILLIARD">BILLIARD</option>
                <option value="TABLE TENNIS">TABLE TENNIS</option>
                <option value="CAROM">CAROM</option>
              </select>
 
              
 
            </td>

           
          </tr>
          <br>

          <tr>
            <td>
              <b>Times :</b>
            </td>
            <td>
              <select name="Times" >
                <option selected hidden value=" ">Times</option>
                <option value="09:00:00">09:00:00</option>
                <option value="10:00:00">10:00:00</option>
                <option value="11:00:00">11:00:00</option>
                <option value="12:00:00">12:00:00</option>
                <option value="13:00:00">13:00:00</option>
                <option value="14:00:00">14:00:00</option>
                <option value="15:00:00">15:00:00</option>
                <option value="16:00:00">16:00:00</option>
                <option value="17:00:00">17:00:00</option>
              </select>
 
              
 
            </td>

           
          </tr>
          <br>
          <tr>
            <td>
              <b>Dates   :</b>
            </td>
            <td>
              <input type="date" id="myDate" value="Date">
 
              
 
            </td>

           
          </tr>
          





</div>
<div class="footer">
  <p> <input type="submit" name="search">Search Buddies</p>

</div>
</div>
</div>
</div>


</body>
</html>