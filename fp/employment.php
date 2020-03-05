<?php include "includes/header.php"?>


</section>
<!-- End left col -->
<!-- Change Image -->
<img src="images/assorted_piroshkies.jpg" alt="assorted piroshkies" >

<!-- Start right col -->
<aside>
<form action="">
<label for="fullname">Full Name</label>
<input type="text" name="fullname" placeholder="First and Last Name">
<br>
<label for="phone">Phone</label>
<input type="text" name="phone" placeholder="000-000-0000">
<br>
<label for="email">Email</label>
<input type="text" name="email" placeholder="xxxx@gmail.com">
<br>
<label for="contact">Preferred Contact Method</label>
    <select id="contact" name="contact">
    <option value=""></option>
      <option value="phone">Phone</option>
      <option value="email">Email</option>
      <option value="text">Text</option>
    </select>
    <br>
    <label for="contact">Preferred Time of Day</label>
    <select id="time" name="time">
    <option ></option>
      <option value="morn">Morning</option>
      <option value="aft">Afternoon</option>
      <option value="eve">Evening</option>
    </select>
    <br>
    <p>Are you 18 or over?</p>
  <input type="radio" id="yes" name="18" value="yes">
  <label for="yes">Yes</label><br>
  <input type="radio" id="no" name="18" value="no">
  <label for="no">No</label><br>
  <br>  
  <p>Unfortunately at this time we can only consider candidates 18 and over. We hope that you keep us in mind for your career endeavors.</p>
</form>
</aside>

<?php include "includes/footer.php"?>