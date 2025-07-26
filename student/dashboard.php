<?php
session_start();
if (!isset($_SESSION['student'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Dashboard</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <header>
    <h1>Student Dashboard</h1>
    <nav>
  <ul>
    <li><a href="dashboard.php" class="active">Dashboard</a></li>
    <li><a href="menu.php">Meal Menu</a></li>
    <li><a href="logout.php">Logout</a></li>
  </ul>
</nav>
  </header>

  <main class="content">
    <p>Welcome, <?php echo $_SESSION['student']; ?>!</p>
    <p>Today's Menu:</p>
    <ul>
      <li>Breakfast: Poha + Tea</li>
      <li>Lunch: Roti, Rice, Dal, Mix Veg</li>
      <li>Dinner: Paneer Curry, Rice, Roti, Salad</li>
    </ul>
    <p><strong>Note:</strong> Future features will include submitting feedback, viewing your meal record, etc.</p>
  </main>
</body>
</html>