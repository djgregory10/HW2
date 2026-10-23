<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Gift Card - AirAsia Rewards Redemption System</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <header class="site-header">
    <h1>AirAsia Rewards Redemption System</h1>
  </header>
  <nav class="top-nav" aria-label="Main navigation">
    <a href="card-list.php">Gift Cards</a>
    <a href="card-add.php">Add Gift Card</a>
    <a href="login.php">Log Out</a>
  </nav>

  <main>
    <div class="panel">
      <h2>Add Gift Card</h2>
      <form action="card-list.php" method="get">
        <label for="card-name">Card Name</label>
        <input type="text" id="card-name" name="card_name" required>

        <label for="card-type">Card Type</label>
        <select id="card-type" name="card_type" required>
          <option value="">Select a type</option>
          <option value="Retail">Retail</option>
          <option value="Dining">Dining</option>
          <option value="Travel">Travel</option>
          <option value="Entertainment">Entertainment</option>
        </select>

        <label for="card-value">Card Value ($)</label>
        <input type="number" id="card-value" name="card_value" min="0" step="0.01" required>

        <label for="points-required">Points Required</label>
        <input type="number" id="points-required" name="points_required" min="0" step="1" required>

        <div class="actions">
          <button type="submit">Add Gift Card</button>
          <a class="btn btn-secondary" href="card-list.php">Cancel</a>
        </div>
      </form>
    </div>
  </main>
</body>
</html>
