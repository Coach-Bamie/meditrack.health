<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Prescriptions | MeDiTrack</title>
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

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 10px;
    }

    th, td {
      padding: 12px;
      border: 1px solid #ccc;
      text-align: left;
    }

    th {
      background-color: #a5d6a7;
      color: #1b5e20;
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
    <h1>Your Prescriptions</h1>
    <div class="card">
      <table>
        <tr>
          <th>Date</th>
          <th>Doctor</th>
          <th>Medications</th>
          <th>Notes</th>
        </tr>
        <tr>
          <td>2024-12-10</td>
          <td>Dr. Grace Akintola</td>
          <td>Paracetamol, Amoxicillin</td>
          <td>Take after meals, 5 days</td>
        </tr>
        <tr>
          <td>2024-11-22</td>
          <td>Dr. Samuel Obi</td>
          <td>Ibuprofen</td>
          <td>Use only when pain starts</td>
        </tr>
         <tr>
          <td>2024-11-22</td>
          <td>Dr. Salmah Abdul</td>
          <td>Aspirin</td>
          <td>Use 3 times daily</td>
        </tr>
      </table>
    </div>
  </div>
  
</body>
</html>
