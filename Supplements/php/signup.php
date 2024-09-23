<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="./style/signup.css">
  <style>
    body {
      font-family: 'Montserrat', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f0f0f0;
    }

    header {
      background-color: #2c3e50;
      color: #ecf0f1;
      padding: 10px;
      text-align: center;
    }

    nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo {
      display: block;
      width: 100px;
      margin-right: auto;
    }

    .navbar {
      list-style: none;
      display: flex;
      gap: 20px;
      margin: 0;
      padding: 0;
    }

    .navbar a {
      text-decoration: none;
      color: #ecf0f1;
    }

    .icons {
      display: flex;
      gap: 10px;
    }

    .icons i {
      font-size: 24px;
      color: #ecf0f1;
      cursor: pointer;
    }

    main {
      padding: 20px;
    }

    h2 {
      color: #2c3e50;
    }

    ul {
      list-style: none;
      padding: 0;
    }

    li {
      margin-bottom: 10px;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 10px;
      max-width: 400px;
      margin: auto;
    }

    label {
      font-weight: bold;
    }

    textarea,
    select,
    button {
      padding: 10px;
      font-size: 16px;
    }

    button {
      background-color: #2c3e50;
      color: #ecf0f1;
      border: none;
      cursor: pointer;
    }

    button:hover {
      background-color: #34495e;
    }

    .login-container {
      margin-top: 100px;
    }

    .login-input {
      padding: 10px;
      font-size: 16px;
    }

    .login-btn,
    .signup-btn {
      background-color: #2c3e50;
      color: #ecf0f1;
      border: none;
      cursor: pointer;
      padding: 10px;
      font-size: 16px;
    }

    .login-btn:hover,
    .signup-btn:hover {
      background-color: #34495e;
    }

    #toast {
      display: none;
      background-color: #e74c3c;
      color: #fff;
      padding: 10px;
      text-align: center;
      margin-top: 20px;
    }

    body {
      font-family: 'Montserrat', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f0f0f0;
    }

    header {
      background-color: #2c3e50;
      color: #ecf0f1;
      padding: 20px;
      text-align: center;
    }

    h1 {
      margin: 0;
    }

    main {
      padding: 20px;
    }

    .login-container {
      max-width: 400px;
      margin: auto;
      margin-top: 50px;
    }

    h2 {
      color: #2c3e50;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .login-input {
      padding: 10px;
      font-size: 16px;
    }

    .btn {
      padding: 10px;
      font-size: 16px;
      border: none;
      cursor: pointer;
    }

    .login-btn {
      background-color: #2c3e50;
      color: #ecf0f1;
    }

    .signup-btn {
      background-color: #3498db;
      color: #fff;
    }

    .btn:hover {
      background-color: #34495e;
    }

    #toast {
      display: none;
      background-color: #e74c3c;
      color: #fff;
      padding: 10px;
      text-align: center;
      margin-top: 20px;
    }

    footer {
      padding: 20px;
      background-color: #2c3e50;
      color: #ecf0f1;
      text-align: center;
    }
  </style>
</head>

<body>
  <header>
    <h1>GYM SUPPLEMENTS</h1>
  </header>

  <main>
    <div class="signup-container">
      <h2>Sign Up</h2>
      <form id="signupForm" action="signupNext.php" method="POST">
        <input class="signup-input" type="text" id="firstName" placeholder="First Name" name="firstName" ; required />
        <input class="signup-input" type="text" id="lastName" placeholder="Last Name" name="lastName" ; required />
        <input class="signup-input" type="tel" id="phoneNumber" placeholder="Phone Number" pattern="[0-9]+" name="phoneNumber" ; required />
        <input class="signup-input" type="email" id="email" placeholder="Email" name="email" ; required />
        <!-- <input class="signup-input" type="text" id="signupPassword" placeholder="User Name" name="userName" ; required /> -->
        <input class="signup-input" type="password" id="signupPassword" placeholder="Password" name="password" ; required />
        <input class="signup-input" type="number" id="cid" placeholder="ID" name="cid" ; required />

        <input class="btn signup-btn" name="signup" type="submit" value="Sign Up" />
      </form>
    </div>
  </main>

  <footer>
    <p>&copy; 2023 GYM SUPPLEMENTS. All rights reserved.</p>
  </footer>

  <script>
    function signup(event) {
      event.preventDefault();
      const firstName = document.getElementById("firstName").value;
      const lastName = document.getElementById("lastName").value;
      const phoneNumber = document.getElementById("phoneNumber").value;
      const email = document.getElementById("email").value;
      const password = document.getElementById("signupPassword").value;
      const cid = document.getElementById("cid").value;

      // Add your signup logic here
      // For example, you can send the data to a server or perform client-side validation

      // After successful signup, redirect to the index file
      // window.location.href = "index.php";
    }
  </script>
</body>

</html>