<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Billing | MeDiTrack</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #e8f5e9;
      display: flex;
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
      padding: 90px 30px 30px;
      transition: margin-left 0.3s ease;
    }

    h1.page-title {
      color: #1b5e20;
      margin-bottom: 20px;
      text-align: right;
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
      border: none;
      border-radius: 4px;
      padding: 6px 12px;
      cursor: pointer;
      color: white;
    }

    .actions button.delete {
      background-color: #e53935;
    }

    .actions button:hover {
      opacity: 0.85;
    }

    .actions button:disabled {
      background-color: #9e9e9e;
      cursor: default;
      opacity: 0.7;
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
    <h1 class="page-title">Billing Management</h1>

    <table>
      <thead>
        <tr>
          <th>Bill ID</th>
          <th>Patient Name</th>
          <th>Amount</th>
          <th>Date</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody id="billing-tbody">
        <tr>
          <td>301</td>
          <td>Chinedu Okafor</td>
          <td>N2000</td>
          <td>2025-05-15</td>
          <td>Paid</td>
          <td class="actions">
            <button disabled>Paid</button>
            <button class="delete">Delete</button>
          </td>
        </tr>
        <tr>
          <td>302</td>
          <td>Aisha Bello</td>
          <td>N3500</td>
          <td>2025-05-18</td>
          <td>Unpaid</td>
          <td class="actions">
            <button>Mark as Paid</button>
            <button class="delete">Delete</button>
          </td>
        </tr>
        <tr>
          <td>3030</td>
          <td>Michael Johnson</td>
          <td>N150</td>
          <td>2025-05-20</td>
          <td>Unpaid</td>
          <td class="actions">
            <button>Mark as Paid</button>
            <button class="delete">Delete</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <script>
    function toggleSidebar() {
      document.getElementById("sidebar").classList.toggle("active");
    }

    const tbody = document.getElementById("billing-tbody");

    tbody.addEventListener("click", (e) => {
      const target = e.target;

      if (target.tagName === "BUTTON" && target.textContent === "Mark as Paid") {
        const row = target.closest("tr");
        row.cells[4].textContent = "Paid";
        target.textContent = "Paid";
        target.disabled = true;
        target.style.backgroundColor = "#9e9e9e";
        target.style.cursor = "default";
      }

      if (target.classList.contains("delete")) {
        if (confirm("Are you sure you want to delete this bill?")) {
          const row = target.closest("tr");
          row.remove();
        }
      }
    });
  </script>

</body>
</html>
