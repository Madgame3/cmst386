<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Stephen Harrington - WebDesign - CMST386 - Exercise 4</title>
  <meta name="description" content="The program will assist the cashier by calculating the value of chips based on their
  quantity. You observe that the general sequence of events at the cashier window:
  1. Ask customers for receipts for all chips purchased and sum is calculated.
  2. If the customer is a U.S. Citizenthey need to enter Social Security Number.
  3. Customer submits all chips to cash out. Chips are counted and the total sum is
  calculated based on the following values:
  • Black = $5
  • Blue = $20
  • Red = $50
  • Green = $100
  • Purple = $500
  • Gold = $1000
  3. If the customer wins they a 10% withholding tax will be applied to winnings only
  and subtracted from the total value of chips cashed out.
  4. The form results will be the receipt for the transaction and printed.
  ">
  <meta name="keywords" content="HTML5, CSS3, CMST386, Stephen Harrington, About Me">
  <link rel="stylesheet" href="../exercise1/styles.css" media="screen" title="no title">
  <script type="text/javascript" src="./scripts/receipts.js"></script>
  <script type="text/javascript" src="./scripts/ssn.js"></script>
  <script type="text/javascript" src="./scripts/subtotal.js"></script>
  <script type="text/javascript" src="./scripts/total.js"></script>
</head>
<body>
<header>
  <p><img id="logo" src="images/spharrington.png" alt="Logo of SPHarrington" /></p>
</header>
<nav>
  <ul>
  <li><a href="../index.html">Home</a></li>
  <li class="dropdown">
    <a href="#" class="dropbtn">Exercise 1</a>
    <div class="dropdown-content">
      <a href="../exercise1/index.html">Index</a>
      <a href="../exercise1/gallery.html">Gallery</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="#" class="dropbtn">Exercise 2</a>
    <div class="dropdown-content">
      <a href="../exercise2/index.html">Index</a>
      <a href="../exercise2/contact.html">Contact</a>
    </div>
  </li>
  <li class="dropdown">
      <a href="#" class="dropbtn">Exercise 3</a>
      <div class="dropdown-content">
        <a href="../exercise3/temperatures.html">Temperatures</a>
        <a href="../exercise3/temperatures0.html">Temperatures - B</a>
        <a href="../exercise3/flowchart.html">Flowchart</a>
      </div>
    </li>
    <li class="dropdown">
      <a href="#" class="dropbtn">Exercise 4</a>
      <div class="dropdown-content">
        <a href="../exercise4/casino.html">Casino</a>
        <a href="../exercise4/casino_php.html">Casino With PHP</a>
        <a href="../exercise4/casino_payouts.php">Casino Payouts with PHP</a>
      </div>
    </li>
</ul>
</nav>
<article>
  <?php
      require "connect.php";
      //form variables
      $fname = htmlspecialchars($_POST['fname']);
      $lname = htmlspecialchars($_POST['lname']);
      $winnings = htmlspecialchars($_POST['winnings']);

      $sql = "INSERT INTO casino (fname, lname, winnings) VALUES ('$fname', '$lname', '$winnings')";
      if ($conn->query($sql) === TRUE) {
          echo "<h1>New record created successfully</h1>";
          echo "<table class='oki_table'>
          <tr>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Winnings</th>
          </tr>";
          echo "<tr>";
          echo "<td>" . $fname . "</td>";
          echo "<td>" . $lname . "</td>";
          echo "<td>" . $winnings . "</td>";
          echo "</tr>";
          echo "</table>";
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error . $sql->error;
      }
      mysqli_close($conn);
  ?>
</article>
</body>
</html>
