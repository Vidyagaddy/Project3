  <h2>
	<h3> Create a new attraction </h3>
 <form method="post" action="admin.php">
      <input type="text" name="name" placeholder="Attraction Name"/>
      <label>Select State</label>
			<select name="state">
				<option value="AL">Alabama</option>
				<option value="AK">Alaska</option>
				<option value="AZ">Arizona</option>
				<option value="AR">Arkansas</option>
				<option value="CA">California</option>
				<option value="CO">Colorado</option>
				<option value="CT">Connecticut</option>
				<option value="DE">Delaware</option>
				<option value="FL">Florida</option>
				<option value="GA">Georgia</option>
				<option value="HI">Hawaii</option>
				<option value="ID">Idaho</option>
				<option value="IL">Illinois</option>
				<option value="IN">Indiana</option>
				<option value="IA">Iowa</option>
				<option value="KS">Kansas</option>
				<option value="KY">Kentucky</option>
				<option value="LA">Louisiana</option>
				<option value="ME">Maine</option>
				<option value="MD">Maryland</option>
				<option value="MA">Massachusetts</option>
				<option value="MI">Michigan</option>
				<option value="MN">Minnesota</option>
				<option value="MS">Mississippi</option>
				<option value="MO">Missouri</option>
				<option value="MT">Montana</option>
				<option value="NE">Nebraska</option>
				<option value="NV">Nevada</option>
				<option value="NH">New Hampshire</option>
				<option value="NJ">New Jersey</option>
				<option value="NM">New Mexico</option>
				<option value="NY">New York</option>
				<option value="NC">North Carolina</option>
				<option value="ND">North Dakota</option>
				<option value="OH">Ohio</option>
				<option value="OK">Oklahoma</option>
				<option value="OR">Oregon</option>
				<option value="PA">Pennsylvania</option>
				<option value="RI">Rhode Island</option>
				<option value="SC">South Carolina</option>
				<option value="SD">South Dakota</option>
				<option value="TN">Tennessee</option>
				<option value="TX">Texas</option>
				<option value="UT">Utah</option>
				<option value="VT">Vermont</option>
				<option value="VA">Virginia</option>
				<option value="WA">Washington</option>
				<option value="WV">West Virginia</option>
				<option value="WI">Wisconsin</option>
				<option value="WY">Wyoming</option>
			</select>
      <br><br>
       <textarea name="description" rows="5" cols="40" placeholder = 'Your description goes here'></textarea><br/>
       <input type="file" name = "image" accept="image/*">
     <input type="hidden" value="done" name="op">
     <input type="submit" value="Send">
   </form>
   <?php if(isset($_POST['op'])){
        echo 'Attraction Successfully Added to Database';
	}?>
   
    <h3> Remove Attraction from Site </h3>
        <span class="floatRight">
        <form method="post" action="admin.php">
      <input type="text" name="name" placeholder="Attraction Name"/>
     <br>
     <input type="hidden" value="done" name="op2">
     <input type="submit" value="Remove Attraction">
   </form>
	</span>
	<?php if(isset($_POST['op2'])){
        echo 'Attraction Successfully Removed';
	}?>
