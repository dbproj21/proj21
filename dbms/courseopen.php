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
		          <li class="active"><a href="courseopen.php">Course openning</a></li>
		          <li><a href="#">Course plan</a></li>
		          <li><a href="classroom.php">Class room</a></li>
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
            
			<h3>Course Opening</h3>
		    <p>
            	<table class="table">
				 <thead>
		          <tr>
		            <th>No.</th>
		            <th>Course Name</th>
		            <th>Start date</th>
		            <th>End date</th>
		            <th>Time</th>
		            <th>Trainer</th>
		            <th>Seat</th>
		            <th>Left</th>
		          </tr>
		        </thead>
		        <tbody>
		          <tr>
		            <td>1</td>
		            <td>Math</td>
		            <td>1/7/2012</td>
		            <td>31/7/2012</td>
		            <td>13:00-17:00</td>
		            <td>A</td>
					<td>30</td>
					<td>3</td>
		          </tr>
		          <tr>
		            <td>2</td>
		            <td>Eng</td>
		            <td>15/7/2012</td>
		            <td>15/8/2012</td>
		            <td>10:00-12:00</td>
		            <td>B</td>
					<td>30</td>
					<td>10</td>
		          </tr>
		          <tr>
		            <td>3</td>
		            <td>Physics</td>
		            <td>1/8/2012</td>
		            <td>20/8/2012</td>
		            <td>09:00-12:00</td>
		            <td>C</td>
					<td>20</td>
					<td>5</td>
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
