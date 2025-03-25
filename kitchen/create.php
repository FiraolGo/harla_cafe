<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 10%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h3>Add New Users</h3>

<div>

<form action="/action_page.php">
<label for="country">Group</label>
    <select id="country" name="country">
      <option value="waiter">Waiter</option>
      <option value="cashier">Cashier</option>
      <option value="kitchen">kitchen</option>
    </select>
 
    <label for="fname">First Name</label>

    <input type="text" id="fname" name="firstname" placeholder="Your name..">
    <label for="lname">Last Name</label>

    <label for="username">username</label>
    <input type="text" id="username" name="username" placeholder="username..">

    <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="email..">

    <label for="password">password</label>
    <input type="text" id="password" name="Password" placeholder="Password..">

    <label for="Confirm">Comfirm Password</label>
    <input type="text" id="Confirm" name="Confirm" placeholder="Confirm Password..">

    <label for="phone">Phone</label>
    <input type="text" id="phone" name="phone" placeholder="Enter Phone..">


    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
    <p>Gender:</p>
  <input type="radio" id="male" name="fav_language" value="HTML">
  <label for="html">Male</label>
  <input type="radio" id="female" name="fav_language" value="CSS">
<label for="html">Female</label><br>

    
  
    <input type="submit" value="Submit">
    

  </form>
</div>

</body>
</html>