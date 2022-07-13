<?php include 'Partials/header.php'?>

<div class="container">
    <h2>Register</h2>

    <hr>
    <form action="" method="post">
        <div class="form-group">
            <label for="exampleInputFirstName1">First name</label>
            <input type="text" class="form-control" id="exampleInputFirstName1" placeholder="First name">
        </div>
        <div class="form-group">
            <label for="exampleInputLastName1">Last name</label>
            <input type="text" class="form-control" id="exampleInputLastName1" placeholder="Last name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>

<?php include 'Partials/footer.php'?>