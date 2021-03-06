<html>

<head>
  <title>Landing Page</title>
  <link rel="stylesheet" href="opportunitycss.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="formjs.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="nav">
    <input type="checkbox" id="nav-check">
    <div class="nav-header">
      <div class="nav-title">
        Prasad Vaskar
      </div>
    </div>
    <div class="nav-btn">
      <label for="nav-check">
        <span></span>
        <span></span>
        <span></span>
      </label>
    </div>

    <div class="nav-links">
      <a href="index.php" >Home</a>
      <a href="contactus.php" >Contact Us</a>
      <a href="hrlogin.php" >HR Login</a>
    </div>
  </div>
  <div id="hiring">
    <h1>We are Hiring...
      <?PHP
      if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
      }
      ?>
    </h1>
  </div>

  <button class="open-button" onclick="openForm()">Apply for a job


  </button>



  <div class="form-popup" id="myForm">
    <form action="post.php" class="form-container" method="POST">
      <h1>Fill Resume</h1>

      <label for="name"><b>Name</b></label>
      <input type="text" placeholder="Enter Full Name" name="name" id="name" required>

      <label for="email"><b>Email</b></label>
      <input type="email" placeholder="Enter email" name="email" id="email" required>

      <label for="education"><b>Education</b></label>
      <input type="text" placeholder="Enter Education" name="education" id="education" required>

      <label for="clg"><b>College</b></label>
      <input type="text" placeholder="Enter College Name" name="clg" id="clg" required>

      <label for="dob"><b>Date of Birth</b></label>
      <input type="date" placeholder="Date of Birth" name="dob" id="dob" required>

      <label for="mobilenumber"><b>Mobile Number</b></label>
      <input type="text" placeholder="Enter Mobile Number" name="mobilenumber" id="mobilenumber" maxlength="10" required>

      <label for="city"><b>City</b></label>
      <input type="text" placeholder="Enter City" name="city" id="city" required>

      <button type="submit" value="submit" class="btn">Register</button>
      <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
    </form>
  </div>


</body>

</html>