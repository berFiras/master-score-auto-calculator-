<?php echo form_open('users/login'); ?>
<style>
.inputIcone{
	 position: relative;
}
 .input-group-addon{
	 position:absolute;
	 top:18px;
	 right:10px;
	 text-align:center;
	 transform: translateY(-50%);
 }
</style>
<div class="row">
   <h1 class="text-center"><?php echo $title; ?></h1>
</div>
<?php
        if (isset($error)) {
    ?>
    <div class="alert alert-danger" role="alert">
    <?= $error ?>
    </div>
    <?php
        }
    ?>
    
<div class="row">
   <div class="col-md-4">
      <div class="form-group">
         <label for="cin">N° C.I.N :</label>
		 <div class="inputIcone">
		 <input type="text" class="form-control" placeholder="" id="cin" name="cin" /> &nbsp;
         <span class="input-group-addon">
              <i class="far fa-user"></i>
         </span>
		 </div>
         
      </div>
   </div>
</div>
<div class="row">
   <div class="col-md-4">
      <div class="form-group">
         <label for="date">Date de naissance:</label>
         <div class='input-group date' id='datetimepicker1'>
            <input type='date' class="form-control" name='date' /> &nbsp;
            <span class="input-group-addon">
            <span class="glyphicon glyphicon-calendar">
            <i class="far fa-2x fa-calendar-alt"></i>
            </span>
            </span>
         </div>
      </div>
   </div>
</div>
<div class="row">
<div class="col-md-4">
      <div class="form-group">
   <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
</div>
    </div>
    </div>
<?php echo form_close(); ?>