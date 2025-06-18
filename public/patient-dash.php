


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Patient Dashboard | MeDiTrack</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #e8f5e9;
      display: flex;
    }

    .sidebar {
      width: 220px;
      background-color: #1b5e20;
      color: white;
      height: 100vh;
      padding: 20px;
    }

    .sidebar h2 {
      text-align: center;
      margin-bottom: 30px;
    }

    .sidebar a {
      display: block;
      padding: 10px;
      margin-bottom: 10px;
      color: white;
      text-decoration: none;
      border-radius: 4px;
    }

    .sidebar a:hover {
      background-color: #388e3c;
    }

    .main {
      flex: 1;
      padding: 30px;
    }

    h1 {
      color: #1b5e20;
    }

    .card {
      background-color: white;
      padding: 25px;
      border-radius: 8px;
      box-shadow: 0 0 5px rgba(0,0,0,0.1);
      margin-top: 20px;
    }

    .card p {
      margin: 0;
    }
  </style>
</head>
<body>

  <div class="sidebar">
    <h2>MeDiTrack</h2>
    <a href="patient-dash.php">Dashboard</a>
    <a href="patient-book.php">Book Appointment</a>
    <a href="patient-prescriptions.php">Prescriptions</a>
    <a href="logout.php">Logout</a>
  </div>

  <div class="main">
    <h1>Welcome, Patient</h1>
    <div class="card">
      <h2>Your Health Portal</h2>
      <p>Use the sidebar to manage your appointments and view prescriptions.</p>
    </div>
  </div>

</body>
</html>