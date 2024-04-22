<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Trial Form</title>
  
  <link rel="stylesheet" href="form.css">
</head>
<body>
  <div class="container" id="signup">
  <h1 class="form-title">Registration Form</h1>

  <form method="post" action="connect.php">
    
    <div class="First-Name">
      <label for="fName">First Name</label>
      <input type="text" name="firstName" id="fName" placeholder="First Name" required>
    </div>

    <div class="Email">
      <Label for="Email">Email</Label>
      <input type="email" name="email" id="email" placeholder="Email" required>
    </div>

    <div class="Subject">
      <label for="Subject">Subject</label>
      <input type="text" name="Subject" id="Subject" placeholder="Subject">
    </div>

    <div class="Country">
      <label for="Country">Country:</label>
      <select id="select" name="select">
        <option value="None">None</option>
        <option value="None">None</option>
        <option value="None">None</option>
      </select>
    </div>

    <div class="Comment">
      <label for="Comment">Comment:</label>
      <input type="text" id="textBox" name="textBox" style="height: 100px;">
    </div>

    <div class="Gender">
      <label for="Gender">Gender:</label>
      <input type="radio" id="male" name="gender" value="male">
      <lable for="male">M</lable>
      <input type="radio" id="female" name="gender"  value="female">
      <label for="female">F</label>
    </div>

    <div class="Education">
      <label for="Level">Highest Degree Level</label>
      <input type="checkbox" id="postDoc" name="level" value="postDoc">
      <label for="postDoc">Post-Doc</label><br>
      <input type="checkbox" id="phd" name="level" value="phd">
      <label for="phd">Ph.D</label><br>
      <input type="checkbox" id="master" name="level" value="master">
      <label for="phd">Master/MS.c</label><br>      
      <input type="checkbox" id="licence" name="level" value="licence">
      <label for="phd">Licence/BSc</label><br>
      <input type="checkbox" id="bacc" name="level" value="bacc">
      <label for="phd">Bacc/AL-GCE</label><br>
    </div>

    <div class="Buttons">
      <input type="reset">
      <input type="submit">
    </div>
  </form>


  </div>
</body>
</html>