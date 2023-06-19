<!DOCTYPE html>
<html>
<head>
  <title>Phone Store - Contact Us</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <h1>Contact Us</h1>
  <form action="process.php" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br>
    <label for="message">Message:</label>
    <textarea id="message" name="message" required></textarea>
    <br>
    <input type="submit" value="Send Message">
  </form>
</body>
</html>
