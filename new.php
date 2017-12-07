

<div id="your-story" class="form-area col-md-10 col-md-offset-1">
  <h1>Add Your Story</h1>
<form method="POST" action="/create.php">



  <div class="form-group story_name">
    <label for="story_name">Name<span class="required"> (required)</span></label>
    <input class="form-control" type="text" name="name" id="story_name" value="" placeholder="Name" />
  </div>

  <div class="checkbox">
    <label>
      <input type="checkbox" id="anonymousCheckbox" name="anonymous" value="1"> Anonymous
    </label>
  </div>


    <div class="form-group story_state">
      <label for="story_state">State<span class="required"> (required)</span></label>

      <select name="state" id="story_state" value="" class="form-control">
        <option value=""></option>
      	<option value="AL">Alabama</option>
      	<option value="AK">Alaska</option>
      	<option value="AZ">Arizona</option>
      	<option value="AR">Arkansas</option>
      	<option value="CA">California</option>
      	<option value="CO">Colorado</option>
      	<option value="CT">Connecticut</option>
      	<option value="DE">Delaware</option>
      	<option value="DC">District Of Columbia</option>
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

    </div>


      <div class="form-group story_age">
        <label for="story_age">Age <span class="required"> (required)</span></label>
        <select name="age" id="story_age" value="" class="form-control">
          <option value=""></option>
          <option value="Middle School">Middle School</option>
          <option value="High School">High School</option>
          <option value="College">College</option>
          <option value="Career">Career</option>
          <option value="Other">Other</option>
        </select>
      </div>

  <div class="form-group">
    <label for="story_email">Email</label>
    <input class="form-control" name="email" id="story_email" placeholder="Email"></input>
    <p class="email-noto">*Your email is NOT included in your story. It is used for contacting purposes if we run into an issue with your submission. </p>
  </div>




  <div class="form-group">
    <label for="story-story">Story<span class="required"> (required)</span></label>
    <textarea class="form-control" name="story" id="story_story" placeholder="Your Story"></textarea>
    <p class="email-noto">Please refrain from using proper nouns (names of people, companies, etc.) for legal reasons.</p>
  </div>



    <div class="form-group approved_field">
      <label for="story_email">approved</label>
      <input class="form-control" name="approved" id="story_approval" value="false"></input>
    </div>




  <button onClick="return checkform()" class="btn btn-primary">Submit Story</button>
</form>
</div>
