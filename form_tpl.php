
<form action="add.php" method="POST" class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend><?php  ?></legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Task</label>  
  <div class="col-md-4">
  <input id="task" name="task" type="text" placeholder="Enter Task" class="form-control input-md">
  <span class="help-block">Enter the task in the box above.</span>  
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Note</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="note" name="note"></textarea>
  </div>
</div>
<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="datecompleted">Date Completed</label>
  <div class="col-md-4">                     
    <input type="date" class="form-control" id="datecompleted" name="datecompleted">
  </div>
</div>


<div class="form-group">
  <div class="col-md-8">
   <button id="submit" name="submit" class="btn btn-success">Add</button>
   
  </div>
</div>

</fieldset>
</form>
