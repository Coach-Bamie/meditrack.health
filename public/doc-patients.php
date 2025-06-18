<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Patient Records | MeDiTrack</title>
  <style>
    body { display: flex; font-family: Arial, sans-serif; background: #e8f5e9; margin: 0; }

    .sidebar {
      width: 220px; background-color: #1b5e20;
      color: white; height: 100vh; padding: 20px;
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

    .btn {
      padding: 5px 10px; background: #1b5e20;
      color: white; border: none; border-radius: 4px;
      cursor: pointer;
    }

    .btn:hover { background-color: #388e3c; }
  </style>
</head>
<body>

  <?php 
  include("docside.php");
  ?>

  <div class="main">
    <h1>Patient Records</h1>
    <div class="card">
      <table>
        <tr>
          <th>Name</th>
          <th>Age</th>
          <th>Last Visit</th>
          <th>Action</th>
        </tr>
        <tr>
          <td>Mary Johnson</td>
          <td>34</td>
          <td>2024-12-10</td>
          <td><button class="btn">View</button></td>
        </tr>
        <tr>
          <td>David King</td>
          <td>46</td>
          <td>2024-12-08</td>
          <td><button class="btn">View</button></td>
        </tr>
        <tr>
          <td>Fatima Yusuf</td>
          <td>29</td>
          <td>2024-12-02</td>
          <td><button class="btn">View</button></td>
        </tr>
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
