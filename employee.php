<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AMS - Attendance Management System</title>
  <link rel="stylesheet" href="assets/css/employee.css">
</head>
<body>
  <div class="wrapper">
    <div class="sidebar">
      <div class="logo">
        <h1>AMS</h1>
      </div>
      <ul>
      <li><a href="./time-att-mng.php">Dashboard</a></li>
        <li><a href="./employee.php">Employee</a></li>
        <li><a href="./subject.php">Subject</a></li>
        <li><a href="./manager.php">Manager</a></li>
        <li><a href="./logout.php">Logout</a>
      </li>
      </ul>
    </div>
    <div class="main">
      <div class="header1">
        <div class="header">
          <h2>Date: 2022/02/21</h2>
        </div>
      </div>
      <div class="form-container">
        <form>
            <h3>Update a employee</h3>
            <label for="roll-no">Roll no.</label>
            <input type="text" id="roll-no" name="roll-no" placeholder="Enter roll no.">

            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Enter name">

            <label for="semester">Semester</label>
            <input type="number" id="semester" name="semester" placeholder="Enter semester">

            <label for="section">Section</label>
            <input type="text" id="section" name="section" placeholder="Enter section">

            <input type="submit" value="Add">
        </form>
  </div>
</div>
</div>
  <script src="script.js"></script>
</body>
</html>