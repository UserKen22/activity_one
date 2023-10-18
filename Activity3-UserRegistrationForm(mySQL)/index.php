<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>User Registration</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      flex-direction: column;

    }

    /* Style the form container */
    #registrationForm {
      background-color: transparent;
      border: 2px solid #ccc;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 400px;
      text-align: center;
      z-index: 1;
    }

    h2 {
      font-size: 28px;
      color: #fff;
      z-index: 1;
    }

    /* Style form elements */
    input[type="text"],
    input[type="email"],
    input[type="password"] {
      background-color: transparent;
      color: #fff;
      width: 365px;
      padding: 15px;
      margin: 10px 0;
      border: 1px solid #fff;
      border-radius: 5px;
      display: block;
    }

    /* Style the Register button */
    button[type="submit"] {
      background-color: transparent;
      color: white;
      padding: 15px 30px;
      border: 2px solid #fff;
      border-radius: 5px;
      cursor: pointer;
    }

    button[type="submit"]:hover {
      background-color: #3ded97;
    }

    .video-container {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
      height: 100%;
    }

    .video-bg {
      position: absolute;
      right: 0;
      bottom: 0;
      z-index: 0;
    }

    @media (min-aspect-ratio: 16/9) {
      .video-bg {
        width: 100%;
        height: auto;
      }
    }

    @media (max-aspect-ratio: 16/9) {
      .video-bg {
        width: auto;
        height: 100%;
      }
    }
  </style>

</head>

<body>

  <div class="video-container">
    <video autoplay loop muted plays-inline class="video-bg">
      <source src="./src/vid-bg2.mp4" type="video/mp4" />
    </video>
  </div>

  <div class="container">
    <h2>User Registration</h2>
    <form id="registrationForm" action="register.php" method="post">
      <input type="text" name="full_name" placeholder="Full Name" required />
      <input type="text" name="username" placeholder="Username" required />
      <input type="email" name="email" placeholder="Email" required />
      <input type="password" name="password" placeholder="Password" required />
      <button type="submit">Register</button>
    </form>
  </div>
</body>

</html>