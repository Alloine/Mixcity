<?php include('partials/header.php') ?>
   
     
     <form class="form-horizontal col-lg-12">

<div class="row">
<fieldset>
    
<!-- Form Name -->
<legend>Form Name</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Text Input</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Password Input</label>
  <div class="col-md-4">
    <input id="passwordinput" name="passwordinput" type="password" placeholder="placeholder" class="form-control input-md">
    <span class="help-block">help</span>
  </div>
</div>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="searchinput">Search Input</label>
  <div class="col-md-4">
    <input id="searchinput" name="searchinput" type="search" placeholder="placeholder" class="form-control input-md">
    <p class="help-block">help</p>
  </div>
</div>

<!-- Appended Input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="appendedtext">Appended Text</label>
  <div class="col-md-4">
    <div class="input-group">
      <input id="appendedtext" name="appendedtext" class="form-control" placeholder="placeholder" type="text">
      <span class="input-group-addon">append</span>
    </div>
    <p class="help-block">help</p>
  </div>
</div>
<!-- Appended checkbox -->
<div class="form-group">
  <label class="col-md-4 control-label" for="appendedcheckbox">Appended Checkbox</label>
  <div class="col-md-4">
    <div class="input-group">
      <input id="appendedcheckbox" name="appendedcheckbox" class="form-control" type="text" placeholder="placeholder">
          <span class="input-group-addon">     
          <input type="checkbox">     
      </span>
    </div>
    <p class="help-block">help</p>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Inline Radios</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
      1
    </label> 
    <label class="radio-inline" for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="2">
      2
    </label> 
    <label class="radio-inline" for="radios-2">
      <input type="radio" name="radios" id="radios-2" value="3">
      3
    </label> 
    <label class="radio-inline" for="radios-3">
      <input type="radio" name="radios" id="radios-3" value="4">
      4
    </label>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Select Basic</label>
  <div class="col-md-4">
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option value="1">Option one</option>
      <option value="2">Option two</option>
    </select>
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">File Button</label>
  <div class="col-md-4">
    <input id="filebutton" name="filebutton" class="input-file" type="file">
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton">Single Button</label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Button</button>
  </div>
</div>

</fieldset>
</div>
</form>


<?php include('partials/footer.php') ?>