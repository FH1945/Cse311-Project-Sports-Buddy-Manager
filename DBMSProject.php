
<!DOCTYPE html>
<html>
<head>
<title> Sports Person Finder @ NSU </title>
<link rel="stylesheet" type="text/css" href="CSS/Design.css">
<link rel="icon" href="picture/logo.png">
</head>
<body>
  <div class="main">
      <div class="login_bar">
        <div class="logo"><img src="picture/logo.png"></div>



    <div class="login">
      <form action="login.php" method="POST">
        <table>
      <tr>
            <td>
               <h3>Username/ID :</h3>
            </td>
            <td>
              <input type="number" name="username" placeholder="Username" required>
            </td>
        </tr>
        <tr>
            <td>
               <h3>Password :</h3>
            </td>
            <td>
              <input type="Password" name="password" placeholder="Password" required>
            </td>
          </tr>
          <tr>
            <td><input id="login_btn" type="submit" name="login" value="Log In"></td>
 
          </tr>
          </table>
          </form>
    </div>
  </div>
    <div class="regist">
        <form action="register.php" method="POST">
          
          <table>
         
          <tr>
            <td>
               <h3>Name :</h3>
            </td>
            <td>
              <input type="text" name="name" placeholder="Name" required>
            </td>
          </tr>
         
          <tr>
            <td>
               <h3>NSU ID :</h3>
            </td>
            <td>
              <input type="number" name="nsuid" placeholder="NSU ID NO" required>
            </td>
          </tr>
 
          <tr>
            <td>
               <h3>Email :</h3>
            </td>
            <td>
              <input type="email" name="email" placeholder="Email Address" required>
            </td>
          </tr>
 
          <tr>
            <td>
                <h3>Gender :</h3>
            </td>
            <td>
              <select name="gender">
                <option selected hidden value=" ">Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </td>
          </tr>
 
          <tr>
            <td>
              <h3>Department :</h3>
            </td>
            <td>
              <select name="Department">
                <option selected hidden value=" ">Dept</option>
                <option value="Arch">ARCH</option>
                <option value="BBA">BBA</option>
                <option value="DBM">DBM</option>
                <option value="DMP">DMP</option>
                <option value="DPH">DPH</option>
                <option value="ECE">ECE</option>
                <option value="ENV">ENV</option>
                <option value="LAW">LAW</option>
                <option value="ENG">ENG</option>
                <option value="Pharma">Pharma</option>
              </select>
 
              <select name="Semester">
                <option selected hidden value=" ">Semester</option>
                <option value="161">161</option>
                <option value="162">162</option>
                <option value="163">163</option>
                <option value="171">171</option>
                <option value="172">172</option>
                <option value="173">173</option>
                <option value="181">181</option>
                <option value="182">182</option>
                <option value="183">183</option>
                <option value="191">191</option>
                <option value="192">192</option>
                <option value="193">193</option>
                <option value="201">201</option>
                <option value="202">202</option>
               
              </select>
 
            </td>
          </tr>
 
          <tr>
            <td>
               <h3>Password :</h3>
            </td>
            <td>
              <input type="password" name="password" placeholder="set Password" required>
            </td>
          </tr>
 
          <tr>
            <td><input type="submit" id="register_btn" name="submit" value="Register"></td>
          </tr>
         
        </table>
        
      </form>
 
    </div>
   </div>
</body>
</html>