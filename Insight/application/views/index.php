<!DOCTYPE html
 PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="<?php echo base_url();?>css/style1.css">


</head>
<body>

 <div class="login">
  <h2>WELCOME</h2>

     
      <?php echo validation_errors(); ?>  
      <?php echo form_open('Insight_controller/checkLogin'); ?>
        
          
    <fieldset>
      
    <input type="username" placeholder="Username" name="username" />
    <input type="password" placeholder="Password" name="password"/>
    
  </fieldset>
        
       
            <input type="submit" value="Sign in" name="signin"/>
        
             <div class="utilities">
    <a href="#">Forgot Password?</a>
 
 
  </div>
       
      
      </form>

    </div>
    


</body>
</html>










