<?php?>

<!-- START HTML FORM -->
 <form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post" class="orderOnline">

<div class="cater">
    <label>
        Name:<br /><input type="text" name="Name" required="required" placeholder="First Name (required)" title="Name is required" tabindex="10" size="44" autofocus /><br />
    </label>
    <!-- Add padding -->

    <label>
        Email:</label><br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" /><br /> 
    
    <!-- Add padding -->
    <label>
        Phone:<br /><input type="phone" name="Phone"  placeholder="Phone" tabindex="20" size="22" /><br /> 
    </label>
    <label>
        Company Name:<br />
        <textarea name="Company" cols="40" rows="1"  placeholder="Company Name (optional)"></textarea><br /> 
    </label>

    <div class="event">
        <label for="event">Event Date:</label>
        <input type="date"  name="event">
      </div>
       <br>
<!-- Delivery/Pickup -->
<span>Delivery or Pickup</span><br>


<div class="card">
    <div class="container">
      <h4>Delivery</h4>
      <p>Order delivery to your office or home!</p>
      <label class="text">
        Enter Full Address:<br><input type="address" name="Address"  placeholder="Address" tabindex="20" size="22" /><br /> 
    </label>
    </div>
  </div>

  <div class="card2">
    <div class="container">
      <h4>Pickup</h4>
      <p>Pickup from one of our bakeries or office</p>
    <select>
        <option value="">Choose One</option>
        <option value="office">South Park Office</option>
        <option value="ct">Columbia Tower</option>
        <option value="pp">Pike Place</option>
        <option value="cq">Century Square</option>
      </select>
    </div>
  </div>
<br>
<div class="amt">
<label>
    How many piroshky would you like?
    </label><br /><input type="text" name="Name" tabindex="10" size="44" autofocus /><br />
</div>
<span>Want smaller portions? We also make mini piroshky!</span> <br> <br>
<label>
    Additional Comments:</label><br /><textarea name="Comments" cols="44" rows="4" placeholder="Please be sure to let us know of any alergies or dietary restrictions and we'll do our best to accomodate you." tabindex="60"></textarea>


<div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div>
<div>
    
</div>
<input type="submit" value="submit" />
</div>
</form>

   