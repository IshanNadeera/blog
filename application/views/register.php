<?php include 'Partials/header.php'?>

<div class="container">
    <h2>Register</h2>

    <hr>

    <?php echo validation_errors(); ?>
    <?php echo form_open('Register/RegisterUser'); ?>
        <div class="form-group">
            <label for="exampleInputFirstName1">First name</label>
            <input type="text" class="form-control" id="exampleInputFirstName1" placeholder="First name" name="fname">
        </div>
        <div class="form-group">
            <label for="exampleInputLastName1">Last name</label>
            <input type="text" class="form-control" id="exampleInputLastName1" placeholder="Last name" name="lname">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword2">Confirm Password</label>
            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Confirm Password" name="confirmpassword">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </div>
<?php echo form_close(); ?>

<?php include 'Partials/footer.php'?>