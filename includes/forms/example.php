<form id="demo-form" data-parsley-validate>
  <div class="first">
    <label for="firstname">Firstname:</label>
    <input type="text" name="firstname" required data-parsley-range="[4, 20]" data-parsley-group="block1" />

    <label for="lastname">Lastname:</label>
    <input type="text" name="lastname" data-parsley-range="[4, 20]" data-parsley-group="block1" />
  </div>
  <hr></hr>
  <div class="second">
    <label for="fullname">Fullname:</label>
    <input type="text" name="fullname" data-parsley-range="[8, 40]" data-parsley-group="block2" />
  </div>

  <div class="invalid-form-error-message"></div>
  <input type="submit" class="btn btn-default validate" />
</form>