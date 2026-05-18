<!DOCTYPE html>
<html>
<body>

<form action="/action_page.php">
  <label for="fname">name:</label><br>
  <input type="text" id="fname" name="fname" value="TmrExma"><br>
  <label for="phone">Enter a phone number:</label><br>
  <input type="tel" id="phone" name="phone" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required><br><br>
  <input type="submit" value="Submit">
</form> 

</body>
</html>