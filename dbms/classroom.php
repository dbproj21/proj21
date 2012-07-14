<?php include 'config/configure.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>DBMS PHP Index</title>
    <?php include 'layout/header.php'; ?>
  </head>

  <body>
    <?php include 'layout/topbar.php'; ?>
    <div class="container-fluid">
      <div class="row-fluid">
	
		<!--//Navigation panel -->
        <div class="span3">
          	<div class="well sidebar-nav">
		        <ul class="nav nav-list">
			
				<!--@Start ######### Navigation panel editor place ########## -->
				
		          <li class="nav-header">Menu</li>
		          <li><a href="#">Register</a></li>
		          <li><a href="courseopen.php">Course openning</a></li>
		          <li><a href="#">Course plan</a></li>
		          <li class="active"><a href="classroom.php">Class room</a></li>
		          <li class="nav-header">System</li>
		          <li><a href="#">Administrator</a></li>
		          <li><a href="#">Report</a></li>
		          <li><a href="#">Logs</a></li>
		
				<!--@End ######### Navigation panel editor place ########## -->
		
		        </ul>
		      </div><!--/.well -->
        </div><!--/span-->

        <div class="span9">

		  	<!--//Advertisement panel -->
		  	<div class="hero-unit">
			
			<!--@Start ######### Body content editor place ########## -->
            
			<h3>Class room</h3>
		    <p>
		    	<table class="table">
				 <thead>
		          <tr>
		            <th>No.</th>
		            <th>Class Name</th>
		            <th>Room</th>
		            <th>Trainer</th>
		          </tr>
		        </thead>
		        <tbody>
		          <tr>
		            <td>1</td>
		            <td>Class A</td>
		            <td>Room A</td>
		            <td>A</td>
		          </tr>
		          <tr>
		            <td>2</td>
		            <td>Class B</td>
		            <td>Room B</td>
		            <td>B</td>
		          </tr>
		        </tbody>
		      </table>
		    </p>

          	<!--@End ######### Body content editor place ########## -->

			</div>

		  <?php include 'layout/advertise.php'; ?>
        </div><!--/span-->
      </div><!--/row-->
      <hr>
      <footer>
        <p>
			<?php include 'layout/footer.php'; ?>
		</p>
      </footer>
    </div><!--/.fluid-container-->
    <?php include 'layout/javascript.php'; ?>
  </body>
</html>
