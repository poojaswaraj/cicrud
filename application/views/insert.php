<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CURD Operation using CodeIgniter  </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo link_tag('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css'); ?>
    <script src="<?php echo base_url('https://code.jquery.com/jquery-1.11.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js'); ?>"></script>
</head>
<body>
 
<div class="container">   
<div class="row">
<div class="col-md-12">
<h3>Insert Record |  CRUD Operations using CodeIgniter</h3>
<hr />
</div>  
</div>
	
<?php echo form_open('',['name'=>'insertdata','autocomplete'=>'off']);?>
<div class="row">
<div class="col-md-4"><b>First Name</b>
<?php echo form_input(['name'=>'firstname','class'=>'form-control','value'=>set_value('firstname')]);?>
<?php echo form_error('firstname',"<div style='color:red'>","</div>");?>
</div>
<div class="col-md-4"><b>Last Name</b>
<?php echo form_input(['name'=>'lastname','class'=>'form-control','value'=>set_value('lastname')]);?>
<?php echo form_error('lastname',"<div style='color:red'>","</div>");?>

</div>
</div> 
<div class="row">
<div class="col-md-4"><b>Email id</b>
<?php echo form_input(['name'=>'emailid','class'=>'form-control','value'=>set_value('emailid')]);?>	
<?php echo form_error('emailid',"<div style='color:red'>","</div>");?>	
</div>
<div class="col-md-4"><b>Contactno</b>
<?php echo form_input(['name'=>'contactno','class'=>'form-control','value'=>set_value('contactno')]);?>
<?php echo form_error('contactno',"<div style='color:red'>","</div>");?>	
</div>
</div>  
<div class="row">
<div class="col-md-8"><b>Address</b>
<?php echo form_textarea(['name'=>'address','class'=>'form-control','value'=>set_value('address')]);?>
<?php echo form_error('address',"<div style='color:red'>","</div>");?>
</div>
</div>  

<div class="row" style="margin-top:1%">
<div class="col-md-8">
<?php echo form_submit(['name'=>'insert','value'=>'Submit']);?>	
</div>
</div>  
  
<?php echo form_close();?>       

<?php 
         echo $this->session->flashdata('email_sent'); 
         echo form_open('insert/send_mail'); 
      ?> 
		
      <input type = "email" name = "email" required /> 
      <input type = "submit" value = "SEND MAIL"> 
		
      <?php 
         echo form_close(); 
      ?> 
</div>
</div>
</body>
</html>