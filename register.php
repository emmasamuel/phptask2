

<?php  
include_once('libray/header.php')
?>

<H3>REGISTRATION</H3>




<form action="processregister.php" method="post">

<p>
<label for="">First Name</label>
<input type="text" name="first_name" placeholder="First Name">
</p>

<p>
<label for="">Last Name</label>
<input type="text" name="last_name" placeholder="Last Name">
</p>


<p>
<label for="">Email</label>
<input type="text" name="email" placeholder="Email Address">
</p>

<p>
<label for="">Password</label>
<input type="text" name="password" placeholder="Password">
</p>


<p>
<label for="">Gender</label>
<select name="gender" id="">
<option value="">Female</option>
<option value="">Male</option>

</select>
</p>


<hr/>

<p>
<label for="">Designation</label>
<select name="designation" id="">
<option value="">Medical Team (MT)</option>
<option value="">Patients</option>

</select>
</p>

<p>
<label for="">Department</label>
<input type="text" name="department" placeholder="Department">
</p>



<p>
<button type="submit">Register</button>
</p>


</form>




<?php  
include_once('libray/footer.php')
?>

