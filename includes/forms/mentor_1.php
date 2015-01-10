<fieldset>
<!-- Form Name -->
<legend>Joining as a Mentor:</legend>
<div class="text-justify form-text">
<p>By becoming a Startup Afghanistan Mentor, you contribute not only to the development of startups, and the Afghan economy in general, but you can also create a unique revenue pool for yourself. 
Mentors are required to provide a session or two at a certain Startup Afghanistan mentorship program. </p>
<p>If you wish to become one of our mentors, please fill out our Mentor Registration Form. All mentors sign Startup Afghanistan Mentor Agreement. </p>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="mentor_name">Name <span class="text-danger">*</span></label>  
  <div class="col-md-6">
  <input id="mentor_name" name="mentor_name" data-parsley-required="true" type="text" placeholder="Your name" data-parsley-trigger="blur" class="form-control input-md">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="mentor">Job Title <span class="text-danger">*</span></label>  
  <div class="col-md-6">
  <input id="mentor" name="mentor" type="text" placeholder="Your job title" class="form-control input-md" required data-parsley-trigger="blur">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="mentor_org">Organization <span class="text-danger">*</span></label>  
  <div class="col-md-6">
  <input id="mentor_org" name="mentor_org" type="text" placeholder="Your organization name" class="form-control input-md" required="" data-parsley-trigger="blur">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="mentor_add">Address <span class="text-danger">*</span></label>  
  <div class="col-md-8">
  <input id="mentor_add" name="mentor_add" type="text" placeholder="Your complete address" class="form-control input-md" required="" data-parsley-trigger="blur">
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="mentor_country">Country<span class="text-danger"> *</span></label>
  <div class="col-md-6">
    <select id="mentor_country" name="mentor_country" class="form-control" data-parsley-trigger="blur" required>

      <?php require("countries.php"); ?>  <!-- countries name inserted -->

    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="mentor_zip">Zip code <span class="text-danger">*</span></label>  
  <div class="col-md-6">
  <input id="mentor_zip" name="mentor_zip" type="text" placeholder="country zip code" class="form-control input-md" required="">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="mentor_office">Office Phone <span class="text-danger">*</span></label>  
  <div class="col-md-6">
  <input id="mentor_office" name="mentor_office" type="text" placeholder="Your office phone number" class="form-control input-md" required="" data-parsley-trigger="blur">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="mentor_fax">Office Fax Number</label>  
  <div class="col-md-6">
  <input id="mentor_fax" name="mentor_fax" type="text" placeholder="Your office fax number" class="form-control input-md" required="" data-parsley-trigger="blur">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="mentor_mobile">Mobile number <span class="text-danger">*</span></label>  
  <div class="col-md-6">
  <input id="mentor_mobile" name="mentor_mobile" type="text" placeholder="Your mobile number" class="form-control input-md" required="" data-parsley-trigger="blur">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="mentor_email">E-mail <span class="text-danger">*</span></label>  
  <div class="col-md-8">
  <input id="mentor_email" name="mentor_email" type="email" placeholder="Your email address" class="form-control input-md" required="" data-parsley-trigger="blur">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="mentor_bio">Your Short Bio. (max. 60 words) <span class="text-danger">*</span></label>
  <div class="col-md-8">                     
    <textarea class="form-control" id="mentor_bio" rows="5" name="mentor_bio" data-parsley-minlength="20" data-parsley-maxlength="60" data-parsley-trigger="keyup" data-parsley-validation-threshold="10" data-parsley-minlength-message = "You need to enter at least a 20 caracters long bio.."></textarea>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="mentor_desc">Provide a brief description about yourself</label>
  <div class="col-md-8">                     
    <textarea class="form-control" id="mentor_desc" rows="6" name="mentor_desc" data-parsley-maxlength="100" data-parsley-trigger="keyup"></textarea>
  </div>
</div>

<!-- Multiple Checkboxes -->
<div class="form-group">
  <label class="col-md-4 control-label" for="mentor_cont_type">Preferred Type of Contact</label>
  <div class="col-md-8">
  <div class="checkbox">
    <label for="mentor_cont_type-0">
      <input type="checkbox" name="mentor_cont_type" id="mentor_cont_type-0" value="">
      Forum Discussion
    </label>
  </div>
  <div class="checkbox">
    <label for="mentor_cont_type-1">
      <input type="checkbox" name="mentor_cont_type" id="mentor_cont_type-1" value="">
      Only One-To-One Meetings with Incubatee
    </label>
  </div>
  <div class="checkbox">
    <label for="mentor_cont_type-2">
      <input type="checkbox" name="mentor_cont_type" id="mentor_cont_type-2" value="">
      Skype
    </label>
  </div>
  </div>
</div>

<!-- Multiple Checkboxes -->
<div class="form-group">
  <label class="col-md-4 control-label" for="mentor_part_level">Level of Mentoring You Want to Participate In</label>
  <div class="col-md-8">
  <div class="checkbox">
    <label for="mentor_part_level-0">
      <input type="checkbox" name="mentor_part_level" id="mentor_part_level-0" value="">
      Technical Skills Transfer
    </label>
  </div>
  <div class="checkbox">
    <label for="mentor_part_level-1">
      <input type="checkbox" name="mentor_part_level" id="mentor_part_level-1" value="">
      Business Development
    </label>
  </div>
  <div class="checkbox">
    <label for="mentor_part_level-2">
      <input type="checkbox" name="mentor_part_level" id="mentor_part_level-2" value="">
      Personal Development
    </label>
  </div>
  <div class="checkbox">
    <label for="mentor_part_level-3">
      <input type="checkbox" name="mentor_part_level" id="mentor_part_level-3" value="">
      Coaching
    </label>
  </div>
  <div class="checkbox">
    <label for="mentor_part_level-4">
      <input type="checkbox" name="mentor_part_level" id="mentor_part_level-4" value="">
      Other
    </label>
  </div>
  </div>
</div>
<p class="form-text">What is the nature of the assistance you can provide? Mark all appropriate box(es) in the sections below</p>
<!-- Multiple Checkboxes -->
<div class="form-group">
  <label class="col-md-4 control-label" for="mentor_fin_acc">Finance &amp; Accounting</label>
  <div class="col-md-8">
  <div class="checkbox">
    <label for="mentor_fin_acc-0">
      <input type="checkbox" name="mentor_fin_acc" id="mentor_fin_acc-0" value="">
      Bookkeeping
    </label>
  </div>
  <div class="checkbox">
    <label for="mentor_fin_acc-1">
      <input type="checkbox" name="mentor_fin_acc" id="mentor_fin_acc-1" value="">
      Understand Financial Statements
    </label>
  </div>
  <div class="checkbox">
    <label for="mentor_fin_acc-2">
      <input type="checkbox" name="mentor_fin_acc" id="mentor_fin_acc-2" value="">
      Insurance
    </label>
  </div>
  <div class="checkbox">
    <label for="mentor_fin_acc-3">
      <input type="checkbox" name="mentor_fin_acc" id="mentor_fin_acc-3" value="">
      Investments
    </label>
  </div>
  <div class="checkbox">
    <label for="mentor_fin_acc-4">
      <input type="checkbox" name="mentor_fin_acc" id="mentor_fin_acc-4" value="">
      Financial Statutory Requirements
    </label>
  </div>
  <div class="checkbox">
    <label for="mentor_fin_acc-5">
      <input type="checkbox" name="mentor_fin_acc" id="mentor_fin_acc-5" value="">
      Other
    </label>
  </div>
  </div>
</div>

</fieldset>