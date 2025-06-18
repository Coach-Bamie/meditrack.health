<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Manage Patients | MeDiTrack</title>
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
  </style>
</head>
<body>

  <div class="sidebar">
    <h2>MeDiTrack</h2>
    <a href="admin-dash.php">Dashboard</a>
    <a href="admin-doctors.php">Manage Doctors</a>
    <a href="admin-patients.php">Manage Patients</a>
    <a href="admin-appointments.php">Manage Appointments</a>
    <a href="admin-billing.php">Billing</a>
    <a href="logout.php">Logout</a>
  </div>

  <div class="main">
    <h1>Manage Patients</h1>
    <button onclick="addDoctor()">Add New Patient</button>
    
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Age</th>
          <th>Contact</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>101</td>
          <td>Chinedu Okafor</td>
          <td>29</td>
          <td>chinedu.okafor@bami.com</td>
          <td class="actions">
            <button>Edit</button>
            <button class="delete">Delete</button>
          </td>
        </tr>
        <tr>
          <td>102</td>
          <td>Aisha Bello</td>
          <td>34</td>
          <td>aisha.bello@bamie.com</td>
          <td class="actions">
            <button>Edit</button>
            <button class="delete">Delete</button>
          </td>
        </tr>
        <tr>
          <td>103</td>
          <td>Michael Johnson</td>
          <td>41</td>
          <td>michael.johnson@bamie.com</td>
          <td class="actions">
            <button>Edit</button>
            <button class="delete">Delete</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

<script>
  const addButton = document.querySelector("button");
  const table = document.querySelector("table tbody");

  // Add New Patient
  addButton.addEventListener("click", () => {
    const name = prompt("Enter Patient Name:");
    const age = prompt("Enter Age:");
    const contact = prompt("Enter Contact Email:");

    if (name && age && contact) {
      const newRow = document.createElement("tr");
      // Generate new ID by adding 1 to the highest current ID
      const ids = Array.from(table.querySelectorAll("tr td:first-child")).map(td => parseInt(td.innerText));
      const newId = ids.length ? Math.max(...ids) + 1 : 101;

      newRow.innerHTML = `
        <td>${newId}</td>
        <td>${name}</td>
        <td>${age}</td>
        <td>${contact}</td>
        <td class="actions">
          <button onclick="editRow(this)">Edit</button>
          <button class="delete" onclick="deleteRow(this)">Delete</button>
        </td>
      `;
      table.appendChild(newRow);
    }
  });

  // Edit Patient Row
  function editRow(button) {
    const row = button.closest("tr");
    const nameCell = row.cells[1];
    const ageCell = row.cells[2];
    const contactCell = row.cells[3];

    const newName = prompt("Edit Patient Name:", nameCell.innerText);
    if (newName) nameCell.innerText = newName;

    const newAge = prompt("Edit Age:", ageCell.innerText);
    if (newAge) ageCell.innerText = newAge;

    const newContact = prompt("Edit Contact Email:", contactCell.innerText);
    if (newContact) contactCell.innerText = newContact;
  }

  // Delete Patient Row
  function deleteRow(button) {
    if (confirm("Are you sure you want to delete this patient?")) {
      const row = button.closest("tr");
      row.remove();
    }
  }

  // Attach edit/delete handlers for existing rows on page load
  document.querySelectorAll(".actions").forEach(cell => {
    const [editBtn, deleteBtn] = cell.querySelectorAll("button");
    editBtn.onclick = function() { editRow(editBtn); };
    deleteBtn.onclick = function() { deleteRow(deleteBtn); };
  });
</script>

</body>
</html>
