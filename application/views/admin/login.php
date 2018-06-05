<?php ?>

<div id="breadcrumb">
  <div class="container">
    <div class="breadcrumb">
      <li><a href="index.html">Home</a></li>
      <li>Logins</li>
    </div>
  </div>
</div>

<div class="container login">
  <h4 class="text-center"> Login</h4>

  <div class="container">
    <form class="form-group" action="register" method="post">
      <div class="col-md-6 col-md-offset-3">
        <input class="form-control loginInputs" type="text" name="fname"  placeholder="First Name">
      </div>
      <div class="col-md-6 col-md-offset-3">
        <input class="form-control loginInputs" type="text" name="lname" placeholder="Last Name">
      </div>
      <div class="col-md-6 col-md-offset-3">
        <input class="form-control loginInputs" type="password" name="password" placeholder="Password">
      </div>
      <div class="col-md-6 col-md-offset-3">
        <input class="form-control loginInputs" type="password" name="pConfirm" placeholder="Confirm Password">
      </div>
      <div class="text-center">
        <input class="form-control loginInputs btn btn-success" type="submit" name="register" value="Register">
      </div>
    </form>
  </div>
</div>
