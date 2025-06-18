<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Appointments | MeDiTrack</title>
  <style>
    body { display: flex; font-family: Arial, sans-serif; background: #e8f5e9; margin: 0; }

    .sidebar {
      width: 220px;
      background-color: #1b5e20;
      color: white;
      height: 100vh;
      padding: 20px;
    }

    .sidebar h2 { text-align: center; margin-bottom: 30px; }
    .sidebar a {
      display: block; padding: 10px; margin-bottom: 10px;
      color: white; text-decoration: none; border-radius: 4px;
    }
    .sidebar a:hover { background-color: #388e3c; }

    .main {
      flex: 1; padding: 20px;
    }

    .main h1 {
      margin-bottom: 20px; color: #1b5e20;
    }

    .card {
      background: white; padding: 20px;
      border-radius: 8px; margin-bottom: 15px;
      box-shadow: 0 0 5px rgba(0,0,0,0.1);
    }

    table {
      width: 100%; border-collapse: collapse;
    }

    th, td {
      padding: 12px; border: 1px solid #ccc; text-align: left;
    }

    th {
      background-color: #a5d6a7; color: #1b5e20;
    }
  </style>
</head>
<?php 
  include("docside.php");
  ?>

  <div class="main">
    <h1>My Appointments</h1>
    <div class="card">
      <table>
        <tr>
          <th>Time</th>
          <th>Patient Name</th>
          <th>Reason</th>
          <th>Status</th>
        </tr>
        <tr>
          <td>09:00 AM</td>
          <td>Mary Johnson</td>
          <td>Flu Symptoms</td>
          <td>Pending</td>
        </tr>
        <tr>
          <td>10:00 AM</td>
          <td>David King</td>
          <td>Follow-up Check</td>
          <td>Completed</td>
        </tr>
        <!-- Add more rows here -->
      </table>
    </div>
  </div>
</body>
</html>
<script>
  function toggleSidebar() {
      document.getElementById("sidebar").classList.toggle("active");
    }
</script>

<!--<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>My Appointments | MeDiTrack</title>
  <style>
    body { display: flex; font-family: Arial, sans-serif; background: #e8f5e9; margin: 0; }
    .sidebar { width: 220px; background-color: #1b5e20; color: white; height: 100vh; padding: 20px; }
    .sidebar h2 { text-align: center; margin-bottom: 30px; }
    .sidebar a {
      display: block; padding: 10px; margin-bottom: 10px;
      color: white; text-decoration: none; border-radius: 4px;
    }
    .sidebar a:hover { background-color: #388e3c; }
    .main { flex: 1; padding: 20px; }
    .main h1 { margin-bottom: 20px; color: #1b5e20; }
    .card {
      background: white; padding: 20px;
      border-radius: 8px; margin-bottom: 15px;
      box-shadow: 0 0 5px rgba(0,0,0,0.1);
    }
    table { width: 100%; border-collapse: collapse; }
    th, td { padding: 12px; border: 1px solid #ccc; text-align: left; }
    th { background-color: #a5d6a7; color: #1b5e20; }
  </style>
</head>
<body>
  <div class="sidebar">
    <h2>MeDiTrack</h2>
    <a href="docdash.html">Dashboard</a>
    <a href="doc-appointments.html">My Appointments</a>
    <a href="doc-patients.html">Patient Records</a>
    <a href="doc-prescriptions.html">Prescriptions</a>
    <a href="doc-logout.html">Logout</a>
  </div>

  <div class="main">
    <h1>My Appointments</h1>
    <div class="card">
      <table>
        <thead>
          <tr>
            <th>Time</th>
            <th>Patient Name</th>
            <th>Reason</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody id="appointments-tbody">
          <!-- Appointments loaded here --
        </tbody>
      </table>
    </div>
  </div>

  <script>
    // Load appointments from localStorage
    const appointments = JSON.parse(localStorage.getItem("appointments")) || [];

    const tbody = document.getElementById("appointments-tbody");

    // For demo, show all appointments; in real, filter by doctor
    appointments.forEach(app => {
      const tr = document.createElement("tr");

      tr.innerHTML = `
        <td>${app.time}</td>
        <td>${app.patient}</td>
        <td>${app.reason || "N/A"}</td>
        <td>${app.status}</td>
      `;

      tbody.appendChild(tr);
    });
  </script>
</body>
</html>
-->

