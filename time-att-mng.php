<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AMS - Attendance Management System</title>
  <link rel="stylesheet" href="assets/css/time-att-mng.css">
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
      <div class="report">
        <h3>Report</h3>
        <table>
          <thead>
            <tr>
              <th>Name</th>
              <th>Section</th>
              <th>Semester</th>
              <th>Attendance count</th>
              <th>Avg</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>John Doe</td>
              <td>SE-A</td>
              <td>Fall 2022</td>
              <td>10</td>
              <td>80%</td>
            </tr>
            <tr>
              <td>Jane Smith</td>
              <td>SE-B</td>
              <td>Fall 2022</td>
              <td>8</td>
              <td>64%</td>
            </tr>
            <tr>
              <td>Michael Johnson</td>
              <td>SE-A</td>
              <td>Fall 2022</td>
              <td>12</td>
              <td>96%</td>
            </tr>
            <tr>
              <td>Sara Lee</td>
              <td>SE-C</td>
              <td>Fall 2022</td>
              <td>9</td>
              <td>72%</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <script src="script.js"></script>
</body>
</html>
