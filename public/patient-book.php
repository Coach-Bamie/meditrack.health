<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Book Appointment | MeDiTrack</title>
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

    label {
      display: block;
      margin-top: 15px;
      font-weight: bold;
    }

    input, select, textarea {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    button {
      margin-top: 20px;
      background-color: #1b5e20;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background-color: #388e3c;
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
    <h1>Book Appointment</h1>
    <div class="card">
      <form action="patient-dash.html">
        <label for="doctor">Select Doctor</label>
        <select id="doctor" name="doctor">
          <option>Dr. Grace Akintola</option>
          <option>Dr. Samuel Obi</option>
          <option>Dr. Fatima Musa</option>
        </select>

        <label for="date">Appointment Date</label>
        <input type="date" id="date" name="date">

        <label for="time">Appointment Time</label>
        <input type="time" id="time" name="time">

        <label for="reason">Reason / Symptoms</label>
        <textarea id="reason" name="reason" rows="4"></textarea>

        <button type="submit">Submit Appointment</button>
      </form>
    </div>
  </div>

</body>
</html>
