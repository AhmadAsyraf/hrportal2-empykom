 
<?php include('header.php') ?>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .login-container h2 {
            margin-bottom: 20px;
            text-align: center;
        }
        .login-container table {
            width: 100%;
        }
        .login-container table tr {
            margin-bottom: 10px;
        }
        .login-container table tr:last-child {
            margin-bottom: 0;
        }
        .login-container table tr td {
            padding: 10px;
        }
        .login-container table tr td input[type="text"],
        .login-container table tr td input[type="password"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }
        .login-container table tr td input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .login-container table tr td input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
 
    
  
  <section class="section dashboard">
    <div class="row">
    <div class="login-container">
        <h2>Admin Login</h2>
        <form action="../control/login_admin.php" method="post">
            <table>
                <tr>
                    <td><label for="username">Username:</label></td>
                    <td><input type="text" id="ua_username" name="username" required></td>
                </tr>
                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" id="password" name="password" required></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Login"></td>
                </tr>
            </table>
        </form>
    </div>
    </div>
  </section>
 
 