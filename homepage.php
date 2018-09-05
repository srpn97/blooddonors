<html>
<title> Homepage </title>
<head> <h1> Blood Donors Application</h1></head>
<form action="full.php" method="post">
<input type="submit" value="Click here to get the full list of blood donors">
</form>
<form action=search.php method="post">
<p>Search criteria:</p>
<select name="criteria" size="3">
  <option value="type">Blood Type</option>
  <option value="email">Email</option>
  <option value="mobile">Mobile</option>
 </select>
 <input type="text" name="searchp">
<input type="submit" value="Click here to search for donors">
</form>
</body>
</html>

