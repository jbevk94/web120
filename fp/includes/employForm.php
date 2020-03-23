<?php?>
<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post" >

  <h2>Tell us about yourself!</h2>
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

  <label>Which location are you interested in working at?</label>

<select class="shop">
   <option value=""></option>
  <option value="ct">Columbia Tower</option>
  <option value="cs">Century Square</option>
  <option value="sp">South Park</option>
  <option value="flex">Flexible</option>
</select>

<div class="sg-file-field">
			<div class="fileinput-button">
				<input type="file"
						class="browse"
						size="1"
						accept=".png,.gif,.jpg,.jpeg,.doc,.xls,.docx,.xlsx,.pdf,.txt,.mov,.mp3,.mp4"
				 />
      </div>
</div>
      <span>What is your availability?</span>
      <table id="available">
        <tr>
          <th></th>
          <th class="time">Mornings</th>
          <th class="time">Evenings</th>
          <th class="time">Not Available</th>
        </tr>
        <tr>
          <td>Monday</td>
          <td><input type="checkbox">
            <span class="checkmark"></span></td>
          <td><input type="checkbox">
            <span class="checkmark"></span></td>
            <td><input type="checkbox">
              <span class="checkmark"></span></td>
        </tr>
        <tr>
          <td>Tuesday</td>
          <td><input type="checkbox">
            <span class="checkmark"></span></td>
          <td><input type="checkbox">
            <span class="checkmark"></span></td>
            <td><input type="checkbox">
              <span class="checkmark"></span></td>
        </tr>
        <tr>
          <td>Wednesday</td>
          <td><input type="checkbox">
            <span class="checkmark"></span></td>
          <td><input type="checkbox">
            <span class="checkmark"></span></td>
            <td><input type="checkbox">
              <span class="checkmark"></span></td>
        </tr>
        <tr>
          <td>Thursday</td>
          <td><input type="checkbox">
            <span class="checkmark"></span></td>
          <td><input type="checkbox">
            <span class="checkmark"></span></td>
            <td><input type="checkbox">
              <span class="checkmark"></span></td>
        </tr>
        <tr>
          <td>Friday</td>
          <td><input type="checkbox">
            <span class="checkmark"></span></td>
          <td><input type="checkbox">
            <span class="checkmark"></span></td>
            <td><input type="checkbox">
              <span class="checkmark"></span></td>
        </tr>
</table>
</form>