<fieldset>
<!-- Multiple Checkboxes -->
<div class="form-group">
  <label class="col-md-4 control-label" for="volunteer-lan">Languages: which languages are you fluent, i.e. speaking, writing, AND reading?</label>
  <div class="col-md-8">

  <div class="checkbox">
    <label for="volunteer-lan-0">
      <input type="checkbox" name="volunteer-lan" id="volunteer-lan-0" value="">
      Dari
    </label>
  </div>

  <div class="checkbox">
    <label for="volunteer-lan-1">
      <input type="checkbox" name="volunteer-lan" id="volunteer-lan-1" value="">
      Pashto
    </label>
  </div>

  <div class="checkbox">
    <label for="volunteer-lan-2">
      <input type="checkbox" name="volunteer-lan" id="volunteer-lan-2" value="">
      English
    </label>
  </div>

<div class="form-group">
  <label class="col-md-4 control-label" for="volunteer_lan">Others</label> 
  <div class="col-md-6">
  <input id="volunteer_lan" name="volunteer_lan" data-parsley-required="false" type="text" placeholder="Other languages" data-parsley-trigger="blur" class="form-control input-md">
  </div>
</div>

  </div>
</div>


<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="volunteer-contribut">How do you think you can contribute to Startup Afghanistan?</label>
  <div class="col-md-8">                     
    <textarea class="form-control" id="volunteer-contribut" rows="6" name="volunteer-contribut" data-parsley-maxlength="100" data-parsley-trigger="keyup"></textarea>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="volunteer_entre">What are your entrepreneurial endeavors/ background?</label>
  <div class="col-md-8">                     
    <textarea class="form-control" rows="6" id="volunteer_entre" name="volunteer_entre" data-parsley-maxlength="100" data-parsley-trigger="keyup"></textarea>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="volunteer_up">In 2 sentences, what gets you up in the morning? </label>
  <div class="col-md-8">                     
    <textarea class="form-control" rows="6" id="volunteer_up" name="volunteer_up" data-parsley-maxlength="100" data-parsley-trigger="keyup"></textarea>
  </div>
</div>




</fieldset><br/>
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <input type="submit"id="submit" name="submit" class="btn btn-success validate" onclick="javascript: checkMyForm(document.myform);">
  </div>
</div>