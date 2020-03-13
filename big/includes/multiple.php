<?php?>

<!-- START HTML FORM -->
<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">

<h3 class = "headers">About You</h3>
<div>
    <label>
        Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" autofocus /><br />
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
        <textarea name="Company" cols="40" rows="1"  placeholder="Company Name"></textarea><br /> 
    </label>
    <label>
        Business Social Media:<br />
        <textarea name="Media" cols="40" rows="5"  placeholder="Social Media Handles"></textarea><br /> 
    </label>
    <label>
        Your Website:<br /><input type="text" name="Website"  placeholder="" tabindex="20" size="40" /><br /> 
    </label>
    
</div>
<h3 class = "headers">Project Details</h3>
<div>	
    <label>What does your company do?</label><br /><textarea name="Comments" cols="50" rows="8" placeholder="Please include a brief description of what services or products your company provides" tabindex="60"></textarea>

</div>
<div>
    <label>Who is your target audience?</label> <br />
        <textarea name="Comments" cols="50" rows="8" placeholder="What customers do you currently reach and who would you like to serve?" tabindex="60"></textarea>
    
<div>

<label>Type of Project</label>

<select id="project">
  <option value="new-web">Brand New Website</option>
  <option value="new-app">Brand New App</option>
  <option value="web-redesign">Website Redesign</option>
  <option value="app-redesign">App Redesign</option>
  <option value="new-both-redesign">New App and Website</option>
  <option value="both-redesign">Redesign for App and Website</option>
</select>

</div>

<div>
    <fieldset>
        <legend>What are your main goals for this website?</legend>
        <input type="checkbox" name="Goals[]" value="Money" tabindex="40" /> Monetization <br />
        <input type="checkbox" name="Goals[]" value="Brand" /> Brand Building <br />
        <input type="checkbox" name="Goals[]" value="Special Audience" /> Reach New Audience <br />
        <input type="checkbox" name="Goals[]" value="Customer" /> Customer Service <br />
        <input type="checkbox" name="Goals[]" value="Marketing" /> Marketing <br />
        <input type="checkbox" name="Goals[]" value="Other" /> Other <br />
    </fieldset>
    
    <br />
</div>
<div>
<label>Project Deadline</label>

<select class='deadline'>
  <option value=""></option>
  <option value="asap">As Soon As Possible</option>
  <option value="1">One Month</option>
  <option value="2">Two Months</option>
  <option value="3">Three Months or More</option>
  <option value="tbd">To Be Determined</option>
</select>
</div>
<br />
<label for="budget">Budget</label> <br />
<textarea name="budget" cols="25" rows="2"></textarea>

<h3 class = "headers">Development</h3>
<div>
    <label> What pages do you need?</label><br />
        <textarea name="Requirements" cols="50" rows="8" placeholder="What pages would you like? (e.g. About Page/ Blog Page/ Gallary Page)" tabindex="60"></textarea><br />
        <label> What features do you need?</label><br />
        <textarea name="Requirements" cols="50" rows="8" placeholder="What features would you like? (e.g. Chat feature/Search Bar/Contact Form)" tabindex="60"></textarea><br />
</div>
<h3 class = "headers">Design</h3>
<div>
<label for="">Do you have brand specifications?</label><br />
    <textarea name="brand"cols="50" rows="10" placeholder="(e.g. Logo, colors, fonts"></textarea> <br />

    <label for="">List 5 other websites that you like</label><br />
    <textarea name="Competitors"cols="50" rows="10" placeholder="Please list five websites with a brief explanation as to why they appeal to you."></textarea><br />

    <label for="">Do you have content complete?</label><br />
    <textarea name="content"cols="50" rows="5" placeholder="(e.g. Text for each page, images"></textarea>

</div>
<br />
<div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div>
<div>
    <input type="submit" value="submit" />
</div>
</form>