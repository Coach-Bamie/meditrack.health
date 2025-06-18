<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MeDiTrack - Hospital Management System</title>
  <style>
    body {
      background-color: #e8f5e9;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #e8f5e9;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 30px;
      border-bottom: 2px solid #c8e6c9;
      position: relative;
    }

    header h1 {
      color: #1b5e20;
      font-size: 28px;
      margin: 0;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 20px;
      margin: 0;
      padding: 0;
    }

    nav a {
      text-decoration: none;
      color: #1b5e20;
      font-weight: bold;
    }

    nav a:hover {
      color: #2e7d32;
    }

    .menu-toggle {
      display: none;
      font-size: 24px;
      background: none;
      border: none;
      color: #1b5e20;
      cursor: pointer;
    }

    .mobile-nav {
      display: none;
      position: absolute;
      top: 60px;
      right: 0;
      background-color: #e8f5e9;
      width: 100%;
      padding: 20px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .mobile-nav ul {
      flex-direction: column;
      align-items: flex-start;
      gap: 15px;
    }

    .close-nav {
      display: block;
      text-align: right;
      font-size: 20px;
      margin-bottom: 10px;
      cursor: pointer;
    }

    section {
      background-image: url('https://images.unsplash.com/photo-1581091870620-2f3b8c1d4e5a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80');
      background-size: cover;
      background-position: center;
      padding: 60px 30px;
      color: white;
      text-shadow: 1px 1px 3px rgba(0,0,0,0.6);
    }

    section div {
      max-width: 800px;
      background-color: rgba(27, 94, 32, 0.85);
      padding: 30px;
      border-radius: 20px;
    }

    section h2 {
      font-size: 32px;
      margin-bottom: 15px;
    }

    section p {
      font-size: 16px;
      line-height: 1.6;
    }

    .butt {
      display: inline-block;
      background-color: #f1f7f1;
      padding: 12px 24px;
      margin-top: 20px;
      margin-right: 10px;
      border-radius: 50px;
      text-decoration: none;
      color: rgb(27, 1, 1);
      font-weight: bold;
      transition: background-color 0.3s;
    }

    .butt:hover {
      background-color: #2e7d32;
      color: #e8f5e9;
    }

    footer {
      background-color: #d7ccc8;
      padding: 20px;
      text-align: center;
      font-size: 14px;
      color: #333;
    }

    /* Responsive */
    @media (max-width: 768px) {
      nav ul {
        display: none;
      }

      .menu-toggle {
        display: block;
      }

      .mobile-nav {
        display: none;
      }

      .mobile-nav.active {
        display: block;
      }

      .butt {
        display: inline-block;
        margin: 10px 0;
      }
    }
  </style>
</head>
<body>

  <header>
    <h1>MeDiTrack</h1>
    <button class="menu-toggle" onclick="toggleNav()">☰</button>
    <nav>
      <ul>
        <li><a href="public/contact.php" target="_blank">Contact</a></li>
        <li><a href="public/signup.php">Signup/Login</a></li>
      </ul>
    </nav>
    <div class="mobile-nav" id="mobileNav">
      <div class="close-nav" onclick="toggleNav()">✖</div>
      <ul>
        <li><a href="public/contact.php" target="_blank">Contact</a></li>
        <li><a href="public/signup.php">Signup/Login</a></li>
      </ul>
    </div>
  </header>

  <section>
    <div>
      <h2>Welcome to MeDiTrack</h2>
      <p>
        MeDiTrack is a modern, smart hospital management system designed to simplify appointment booking, patient tracking, doctor schedules, billing, prescriptions and more. Empower your clinic or hospital with technology that saves time and improves care.
      </p>
      
      <a href="public/signup.php" class="butt">Signup</a>
      <a href="public/login.php" class="butt">Login</a>
    </div>
  </section>

        <!-- <button onclick="window.print()">Print this page</button>-->
       

  <footer>
    Developed by Bamietech LTD
  </footer>

  <script>
  function printPage() {
           window.print();
       }
    function toggleNav() {
      const nav = document.getElementById('mobileNav');
      nav.classList.toggle('active');
    }
  </script>

</body>
</html>
