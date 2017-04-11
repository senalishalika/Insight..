<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Main page</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="<?php echo base_url();?>assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
    <style>
tr{
    height:50px;


}
input[type=text],input[type=date]{
    background-color:   rgb(240,248,255);
}
</style>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Insight</a>
            </div>

            <div class="header-right">

              <a href="#" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
                <a href="#" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
                <a href="#" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>


            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="<?php echo base_url();?>assets/img/profile.jpg" class="img-thumbnail" />

                            <div class="inner-text">
                                
                            <br />
                                
                            </div>
                        </div>

                    </li>


                   <li>
                        <a href="#"><i class="fa fa-desktop "></i>Cources <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            
                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-yelp "></i>Staff<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="add1.php"><i class="fa fa-coffee"></i>Add Staff Members</a>
                            </li>
                             <li>
                                <a href="searchMember.php"><i class="fa fa-flash "></i>Search Staff Members</a>
                            </li>
                             
                           </ul>
                    <li>
                        <a href="table.html"><i class="fa fa-flash "></i>Students </a>
                        
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-bicycle "></i>Forms <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                           
                             <li>
                     <a href="#"><i class="fa fa-sitemap "></i>Reports<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="staff_report.php"><i class="fa fa-bicycle "></i>Staff reports</a>
                            </li>           
                            
                           
                        </ul>
                    </li>
                    

            </div>

        </nav>
                  <!-- Part which I have imlemented -->

             <div id="page-wrapper" style="background-color: black;">
            <div id="page-inner" style="background-color: #4B0082;" >
             <div class="contain-fluid" style="font-family:arial; border: 1px solid DarkGray; border-radius:5px; margin-left:5%; margin-top:10px; width:90%; align:center; padding:10px; background-color:white; height:60px;">
		<h1 style="margin-top:-5px" align="center">Update Employee Details</h1>
	</div>
	

<div class="contain-fluid" style="font-family:arial; border: 1px solid DarkGray; border-radius:5px; margin-left:5%; margin-top:10px; width:90%; align:center; padding:10px; background-color:white;">
<?php echo form_open('Insight_controller/updateEmp' ) ?>
	<div style="color:#4B0082; height:500px;" >
	<table width="80%" >
        <?php
        foreach($result as $r):?>
<tr><td style="width:20%">Employee ID</td><td  width="50%" ><input class="form-control"   type="text" name="id" value=<?php echo $r->ID;?>></td></tr>
<tr><td>NIC</td><td><input class="form-control" type="text"  name="nic"  value=<?php echo $r->NIC;?>></td></tr>
<tr><td>Name</td><td><input class="form-control" type="text"  name="name" value=<?php echo $r->name;?>></td></tr>
<tr><td>Gender</td><td><input class="form-control" type="text"  name="gender" value=<?php echo $r->gender;?>></td></tr>
<tr><td>Birth Day</td><td><input class="form-control" type="date"  name="bday" value=<?php echo $r->birthDay;?>></td></tr>
<tr><td>Tel No</td><td><input class="form-control" type="text"  name="tel" value=<?php echo $r->telNo;?>></td></tr>
<tr><td>Address</td><td><input class="form-control"  type="text"   name="address" value=<?php echo $r->address;?>></td></tr>
<tr><td>Joined Date</td><td><input class="form-control"  type="date"  name="date" value=<?php echo $r->joined_date;?>></td></tr>
<tr><td>Salary</td><td><input  class="form-control" type="text"  name="salary" value=<?php echo $r->salary;?>></td></tr>
<?php
endforeach; ?>
</table>
<input  class="btn btn-default btn-lg"  type="submit" value="Update" name="update" style="width:200px; background-color:#000080; color:white; margin-left:42% ">


<?php echo form_close() ?>
</form>
</div>
</div>


		

</div>
</div>

	

       
      

</body>
</html>





		
		

	
</body>
</html>