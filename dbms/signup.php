<?php include 'config/configure.php'; ?>
<?php include 'controller/signup_controller.php'; ?>
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
		          <li class="active"><a href="register.php">Register</a></li>
		          <li class><a href="courseopen.php">Course openning</a></li>
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
            
			<h3>ข้อมูลส่วนตัว</h3>
		    <p>
            	<form class="form-horizontal" method="post">
			    	<fieldset>
			
					<div class="control-group">
			            <label class="control-label" >คำนำหน้าชื่อ*</label>
			            <div class="controls">
							<select name="title" id="title" class="input-small">
				          		<option value="ดช">ดช</option>
				          		<option value="ดญ">ดญ</option>
					      		<option value="นาย">นาย</option>
					      		<option value="นางสาว">นางสาว</option>
					      	</select>
			            </div>
			          </div>
			
			          <div class="control-group">
			            <label class="control-label" for="firstname">ชื่อ*</label>
			            <div class="controls">
			              <input type="text" class="input-large" id="firstname" name="firstname">
			            </div>
			          </div>
			
			          <div class="control-group">
			            <label class="control-label" for="lastname">นามสกุล*</label>
			            <div class="controls">
			              <input type="text" class="input-large" id="lastname" name="lastname">
			            </div>
			          </div>
			
					<div class="control-group">
			            <label class="control-label" for="id_code">เลขประจำตัวประชาชน*</label>
			            <div class="controls">
			              <input type="text" class="input-large" id="id_code" name="id_code">
			            </div>
			          </div>
			
					<div class="control-group">
			            <label class="control-label" for="birthdate">วันเกิด*</label>
			            <div class="controls">
						  <div class="input-prepend">
						    <span class="add-on"><i class="icon-calendar"></i></span>
							<input class="input-large birthdate" id="inputIcon" type="text" id="birthdate" name="birthdate">
						  </div>
			            </div>
			          </div>
			         
			        <div class="control-group">
			            <label class="control-label" for="address">ที่อยู่*</label>
			            <div class="controls">
						  <textarea class="input-xlarge" id="textarea" rows="3" id="address" name="address"></textarea>
			            </div>
			          </div>
			
					<div class="control-group">
			            <label class="control-label" for="province">จังหวัด*</label>
			            <div class="controls">
			              <input type="text" class="input-large" id="province" name="province">
			            </div>
			          </div>
			
					<div class="control-group">
			            <label class="control-label" for="phone_no">เบอร์โทรศัพท์*</label>
			            <div class="controls">
			              <input type="text" class="input-large" id="phone_no" name="phone_no">
			            </div>
			          </div>
			
					<div class="control-group">
			            <label class="control-label" for="email">อีเมล์*</label>
			            <div class="controls">
						  <div class="input-prepend">
						    <span class="add-on"><i class="icon-envelope"></i></span>
							<input class="input-xlarge" id="inputIcon" type="text" id="email" name="email">
						  </div>
			            </div>
			          </div>
			
					<div class="control-group">
			            <label class="control-label" for="institute_name">ชื่อสถาบันการศึกษา</label>
			            <div class="controls">
			              <input type="text" class="input-xlarge" id="institute_name" name="institute_name">
			            </div>
			          </div>
			
					<div class="control-group">
			            <label class="control-label">ระดับการศึกษา</label>
			            <div class="controls">
			              	<select name="edu_level" id="edu_level" class="input-medium">
					          <option value="มัธยมปลาย">มัธยมปลาย</option>
					          <option value="ปริญญาตรี">ปริญญาตรี</option>
						      <option value="อื่นๆ">อื่นๆ</option>
						    </select>
			            </div>
			          </div>
			
			        <div class="control-group">
			            <label class="control-label" for="gpa">เกรดเฉลี่ย</label>
			            <div class="controls">
			              <input type="text" class="input-small" id="gpa" name="gpa">
			            </div>
			          </div>
			
			        <div class="control-group">
			            <label class="control-label" for="">สาขาวิชาที่ต้องการศึกษาต่อในคณะพาณิชศาสตร์และการบัญชี</label>
			            <div class="controls">
			              	<select name="cbs_id" id="cbs_id" class="input-large">
							<?php //--> selection list of CBS Department
								if ( isset($deptlist) ) { 
									foreach ($deptlist as $key => $value) {
							?>
					          			<option value="<?=$key?>"><?=$value?></option>
							<?php 
									}
								} 
							?>
						    </select>
			            </div>
			          </div>
			
			         <div class="control-group">
			            <label class="control-label" for="">วิชาที่ต้องการลงทะเบียนเรียน</label>
			            <div class="controls">
							<select name="course_id" id="course_id" class="input-large">
							<?php //--> selection list of course
								if ( isset($courselist) ) { 
									foreach ($courselist as $key => $value) {
							?>
					          			<option value="<?=$key?>"><?=$value?></option>
							<?php 
									}
								} 
							?>
						    </select>
			            </div>
			          </div>
			
			          <div class="form-actions">
			            <button type="submit" class="btn btn-primary">Submit</button> &nbsp;&nbsp;
			            <button type="reset" class="btn btn-primary">Cancel</button>
			          </div>
			
			        </fieldset>
			      </form>

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
	<script>
		$(function() {
			$(".birthdate").datepicker({ dateFormat: "dd-MM-yy"
										, changeYear: true
										, changeMonth: true
										, yearRange: "1970:2000" });
		});
	</script>
  </body>
</html>
