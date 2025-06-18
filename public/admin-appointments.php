<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Manage Appointments | MeDiTrack</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #e8f5e9;
      display: flex;
      flex-direction: row;
    }

    .header {
      position: fixed;
      top: 0;
      left: 220px;
      right: 0;
      height: 60px;
      background-color: #2e7d32;
      color: white;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 20px;
      z-index: 900;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    .header h1 {
      margin: 0;
      font-size: 20px;
      color: white;
    }

    .sidebar {
      width: 220px;
      background-color: #1b5e20;
      color: white;
      height: 100vh;
      padding: 20px;
      position: fixed;
      top: 0;
      left: 0;
      transition: transform 0.3s ease;
      z-index: 1000;
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
      margin-left: 220px;
      padding: 90px 30px 30px; /* top padding adjusted for header */
      transition: margin-left 0.3s ease;
    }

    h1.page-title {
      color: #1b5e20;
      margin-bottom: 20px;
      text-align: right;
    }

    button {
      background-color: #1b5e20;
      color: white;
      border: none;
      border-radius: 5px;
      padding: 8px 15px;
      cursor: pointer;
      margin-bottom: 15px;
    }

    button:hover {
      background-color: #388e3c;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background: white;
      border-radius: 8px;
      box-shadow: 0 0 5px rgba(0,0,0,0.1);
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

    .actions button {
      margin-right: 5px;
      background-color: #4caf50;
      color: white;
      border: none;
      border-radius: 4px;
      padding: 6px 10px;
      cursor: pointer;
    }

    .actions button.cancel {
      background-color: #e53935;
    }

    .button-container {
      display: flex;
      justify-content: flex-end;
      margin-bottom: 15px;
    }

    .menu-btn {
      display: none;
      position: fixed;
      top: 15px;
      left: 15px;
      z-index: 1100;
      background: #1b5e20;
      color: white;
      border: none;
      font-size: 24px;
      padding: 5px 10px;
      cursor: pointer;
    }

    .sidebar .close-btn {
      display: none;
      text-align: right;
      font-size: 22px;
      cursor: pointer;
    }

    @media (max-width: 768px) {
      .sidebar {
        transform: translateX(-100%);
      }

      .sidebar.active {
        transform: translateX(0);
      }

      .main {
        margin-left: 0;
        padding: 80px 20px 20px;
        width: 100%;
      }

      .header {
        left: 0;
      }

      .menu-btn {
        display: block;
      }

      .sidebar .close-btn {
        display: block;
        margin-bottom: 20px;
      }
    }
  </style>
</head>
<body>

  <?php 
  include("adminside.php");
  ?>

  <div class="main">
    <h1 class="page-title">Manage Appointments</h1>
    <div class="button-container">
      <button id="add-appointment-btn">Schedule New Appointment</button>
    </div>
    <table>
      <thead>
        <tr>
          <th>Appointment ID</th>
          <th>Patient Name</th>
          <th>Doctor Name</th>
          <th>Date</th>
          <th>Time</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody id="appointment-tbody">
        <tr>
          <td>201</td>
          <td>Chinedu Okafor</td>
          <td>Dr. Grace Akintola</td>
          <td>2025-06-01</td>
          <td>10:00 AM</td>
          <td>Confirmed</td>
          <td class="actions">
            <button>Edit</button>
            <button class="cancel">Cancel</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <script>
    function toggleSidebar() {
      document.getElementById("sidebar").classList.toggle("active");
    }

    const addBtn = document.getElementById("add-appointment-btn");
    const tbody = document.getElementById("appointment-tbody");

    addBtn.addEventListener("click", () => {
      const patient = prompt("Enter Patient Name:");
      if (!patient) return alert("Patient Name is required.");

      const doctor = prompt("Enter Doctor Name:");
      if (!doctor) return alert("Doctor Name is required.");

      const date = prompt("Enter Appointment Date (YYYY-MM-DD):");
      if (!date) return alert("Date is required.");

      const time = prompt("Enter Appointment Time (e.g. 10:00 AM):");
      if (!time) return alert("Time is required.");

      const status = prompt("Enter Status (Confirmed / Pending):", "Pending");
      if (!status) return alert("Status is required.");

      const ids = Array.from(tbody.querySelectorAll("tr td:first-child")).map(td => parseInt(td.innerText));
      const newId = ids.length ? Math.max(...ids) + 1 : 201;

      const newRow = document.createElement("tr");
      newRow.innerHTML = `
        <td>${newId}</td>
        <td>${patient}</td>
        <td>${doctor}</td>
        <td>${date}</td>
        <td>${time}</td>
        <td>${status}</td>
        <td class="actions">
          <button>Edit</button>
          <button class="cancel">Cancel</button>
        </td>
      `;

      tbody.appendChild(newRow);
      attachRowHandlers(newRow);
    });

    function editRow(button) {
      const row = button.closest("tr");
      const patientCell = row.cells[1];
      const doctorCell = row.cells[2];
      const dateCell = row.cells[3];
      const timeCell = row.cells[4];
      const statusCell = row.cells[5];

      const newPatient = prompt("Edit Patient Name:", patientCell.innerText);
      if (newPatient) patientCell.innerText = newPatient;

      const newDoctor = prompt("Edit Doctor Name:", doctorCell.innerText);
      if (newDoctor) doctorCell.innerText = newDoctor;

      const newDate = prompt("Edit Date (YYYY-MM-DD):", dateCell.innerText);
      if (newDate) dateCell.innerText = newDate;

      const newTime = prompt("Edit Time:", timeCell.innerText);
      if (newTime) timeCell.innerText = newTime;

      const newStatus = prompt("Edit Status (Confirmed / Pending):", statusCell.innerText);
      if (newStatus) statusCell.innerText = newStatus;
    }

    function cancelRow(button) {
      if (confirm("Are you sure you want to cancel this appointment?")) {
        const row = button.closest("tr");
        row.remove();
      }
    }

    function attachRowHandlers(row) {
      const editBtn = row.querySelector("button:not(.cancel)");
      const cancelBtn = row.querySelector("button.cancel");
      editBtn.onclick = () => editRow(editBtn);
      cancelBtn.onclick = () => cancelRow(cancelBtn);
    }

    document.querySelectorAll("#appointment-tbody tr").forEach(row => {
      attachRowHandlers(row);
    });
  </script>

</body>
</html>
