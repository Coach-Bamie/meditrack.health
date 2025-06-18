<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Prescriptions | MeDiTrack</title>
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

    label {
      display: block; margin-top: 10px; font-weight: bold;
    }

    input, select, textarea {
      width: 100%; padding: 10px; margin-top: 5px;
      border: 1px solid #ccc; border-radius: 5px;
    }

    button {
      background: #1b5e20; color: white; padding: 10px 20px;
      border: none; border-radius: 5px; margin-top: 15px;
      cursor: pointer;
    }

    button:hover { background-color: #388e3c; }
  </style>
</head>
<body>

  <?php 
  include("docside.php");
  ?>

  <div class="main">
    <h1>Write Prescription</h1>
    <div class="card">
      <form>
        <label for="patient">Select Patient</label>
        <select id="patient" name="patient">
          <option>Mary Johnson</option>
          <option>David King</option>
          <option>Fatima Yusuf</option>
        </select>

        <label for="diagnosis">Diagnosis</label>
        <textarea id="diagnosis" name="diagnosis" rows="3"></textarea>

        <label for="prescription">Prescription</label>
        <textarea id="prescription" name="prescription" rows="3"></textarea>

        <button type="submit">Submit Prescription</button>
      </form>
    </div>
  </div>

</body>
</html>
<script>
  function toggleSidebar() {
      document.getElementById("sidebar").classList.toggle("active");
    }
</script>
