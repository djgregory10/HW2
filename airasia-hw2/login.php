<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - AirAsia Rewards Redemption System</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <header class="site-header">
    <h1>AirAsia Rewards Redemption System</h1>
  </header>

  <main>
    <div class="login-wrap panel">
      <img src="images/gift-card.svg" alt="AirAsia rewards gift card">
      <h2>Login</h2>
      <form action="card-list.php" method="get">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" autocomplete="username">

        <label for="password">Password</label>
        <input type="password" id="password" name="password" autocomplete="current-password">

        <button type="submit">Login</button>
      </form>
    </div>
  </main>
</body>
</html>
