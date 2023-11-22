
<?php 
    $title = 'Index';
    require_once 'includes/header.php'; 
?>




    <h1 class="text-center">Registration for IT Conference </h1>

    <form method="post" action="success.php">
        <div class="mb-3">
            <label for="firstname" class="form-label">First Name</label>
            <input type="text" class="form-control" id="firstname" name="firstname" >
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lastname" name="lastname" >
        </div>
        <div class="mb-3">
            <label for="dob">Date of Birth</label>
            <input type="text" class="form-control" id="dob" name="dob">
        </div>
        <div class="mb-3">
            <label for="speciality">Area of Experties</label>
            <select class="form-control" id="speciality" name="speciality">
                <option>Database Admin</option>
                <option>Software Developer</option>
                <option>Web Administrator</option>
                <option>Other</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="phoneHelp" name="email">
            <div id="phoneHelp" class="form-text">We'll never share your phone number with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Contact Number</label>
            <input type="text" id="phone" aria-describedby="emailHelp" name="phone">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        
        <div class="d-grid gap-2">
            <button class="btn btn-primary" name="submit" type="submit">Submit</button>
        </div>
    </form>

<br />
<br />
<br />
<br />
<br />
<br />
<br />

<?php require_once 'includes/footer.php'; ?>
