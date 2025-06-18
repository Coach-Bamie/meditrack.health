<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Manage Doctors | MeDiTrack</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
    * {
      margin: 0; padding: 0; box-sizing: border-box;
    }
    body {
      font-family: Arial, sans-serif;
      background-color: #e8f5e9;
      display: flex;
    }
    .menu-btn {
      display: none;
      position: fixed;
      top: 15px;
      left: 15px;
      background: #1b5e20;
      color: white;
      border: none;
      font-size: 24px;
      padding: 6px 12px;
      z-index: 1100;
      cursor: pointer;
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
      z-index: 1000;
      transition: transform 0.3s ease;
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
    .sidebar .close-btn {
      display: none;
      font-size: 22px;
      text-align: right;
      cursor: pointer;
      margin-bottom: 15px;
    }
    .main {
      flex: 1;
      margin-left: 220px;
      padding: 80px 30px 30px;
      transition: margin-left 0.3s ease;
    }
    h1 {
      color: #1b5e20;
      margin-bottom: 20px;
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
    .actions button.delete {
      background-color: #e53935;
    }
    @media (max-width: 768px) {
      .menu-btn {
        display: block;
      }
      .sidebar {
        transform: translateX(-100%);
      }
      .sidebar.active {
        transform: translateX(0);
      }
      .sidebar .close-btn {
        display: block;
      }
      .main {
        margin-left: 0;
        padding: 80px 20px 20px;
      }
    }
  </style>
</head>
<?php 
  include("adminside.php");
  ?>

  <div class="main">
    <h1>Manage Doctors</h1>
    <button onclick="addDoctor()">Add New Doctor</button>

    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Specialization</th>
          <th>Contact</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody id="doctorTable">
        <tr>
          <td>1</td>
          <td>Dr. Grace Akintola</td>
          <td>Cardiology</td>
          <td>grace.akintola@bam.com</td>
          <td class="actions">
            <button onclick="editRow(this)">Edit</button>
            <button class="delete" onclick="deleteRow(this)">Delete</button>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Dr. Samuel Obi</td>
          <td>Neurology</td>
          <td>samuel.obi@bam.com</td>
          <td class="actions">
            <button onclick="editRow(this)">Edit</button>
            <button class="delete" onclick="deleteRow(this)">Delete</button>
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Dr. Fatima Musa</td>
          <td>General Medicine</td>
          <td>fatima.musa@bam.com</td>
          <td class="actions">
            <button onclick="editRow(this)">Edit</button>
            <button class="delete" onclick="deleteRow(this)">Delete</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <script>
    function toggleSidebar() {
      document.getElementById("sidebar").classList.toggle("active");
    }

    function addDoctor() {
      const name = prompt("Enter Doctor Name:");
      const specialization = prompt("Enter Specialization:");
      const email = prompt("Enter Email:");

      if (name && specialization && email) {
        const table = document.getElementById("doctorTable");
        const newRow = document.createElement("tr");
        const rowCount = table.rows.length + 1;

        newRow.innerHTML = `
          <td>${rowCount}</td>
          <td>${name}</td>
          <td>${specialization}</td>
          <td>${email}</td>
          <td class="actions">
            <button onclick="editRow(this)">Edit</button>
            <button class="delete" onclick="deleteRow(this)">Delete</button>
          </td>
        `;
        table.appendChild(newRow);
      }
    }

    function editRow(button) {
      const row = button.closest("tr");
      const nameCell = row.cells[1];
      const specCell = row.cells[2];
      const emailCell = row.cells[3];

      const newName = prompt("Edit Name:", nameCell.innerText);
      if (newName) nameCell.innerText = newName;

      const newSpec = prompt("Edit Specialization:", specCell.innerText);
      if (newSpec) specCell.innerText = newSpec;

      const newEmail = prompt("Edit Email:", emailCell.innerText);
      if (newEmail) emailCell.innerText = newEmail;
    }

    function deleteRow(button) {
      if (confirm("Are you sure you want to delete this doctor?")) {
        const row = button.closest("tr");
        row.remove();

        const rows = document.querySelectorAll("#doctorTable tr");
        rows.forEach((r, i) => {
          r.cells[0].innerText = i + 1;
        });
      }
    }
  </script>

</body>
</html>
