<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add User</title>
  </head>
  <body>
    <h2>Add User</h2>
    <form autocomplete="off" action="" method="post">
      <label for="">Name</label>
      <input type="text" id="name" value=""> <br>
      <label for="">Email</label>
      <input type="text" id="email" value=""> <br>
      <label for="">Gender</label>
      <select class="" id="gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select> <br>
      <button type="button" onclick="submitData('insert');">Insert</button>
    </form>
    <br>
    <a href="index.php">Go To Index</a>
    <?php require 'script.php'; ?>
  </body>
</html>
