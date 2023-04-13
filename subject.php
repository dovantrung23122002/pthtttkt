<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AMS - Attendance Management System</title>
  <link rel="stylesheet" href="./assets/css/subject.css">
  <style>
    /* Add custom styles here */
    .form-container, .table-container {
      display: inline-block;
      vertical-align: top;
    }
  </style>
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
        <li><a href="./logout.php">Logout</a></li>
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
          <h3>Add a Subject</h3>
          <label for="subject-id">Subject ID</label>
          <input type="text" id="subject-id" name="subject-id" placeholder="Enter subject ID">
          <label for="subject-name">Subject Name</label>
      <input type="text" id="subject-name" name="subject-name" placeholder="Enter subject name">

      <label for="semester">Semester</label>
      <input type="number" id="semester" name="semester" placeholder="Enter semester">

      <input type="submit" value="Add">
    </form>
  </div>
  <div class="table-container">
    <table>
      <thead>
        <tr>
          <th>Subject ID</th>
          <th>Subject</th>
          <th>Semester</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Person 1</td>
          <td>OOP</td>
          <td>2</td>
          <td class="red"></td>
          <td class="green"></td>
        </tr>
        <tr>
          <td>Person 1</td>
          <td>HCI</td>
          <td>2</td>
          <td class="red"></td>
          <td class="green"></td>
        </tr>
        <tr>
          <td>Person 1</td>
          <td>Database</td>
          <td>2</td>
          <td class="red"></td>
          <td class="green"></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
</div>
  <script src="script.js"></script>
</body>
</html>