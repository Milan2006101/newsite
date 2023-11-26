
<?php 
    $title = 'Edit Record';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';

    $results = $crud->getSpecialties();
    
    if(!isset($_GET['id'])){
        include 'includes/errormessage.php';
        header("Location: viewrecords.php");
    }
    else{
        $id = $_GET['id'];
        $attendee = $crud->getAttendeeDetails($id);
    

?>




    <h1 class="text-center">Edit Record</h1>


        <!--keresztnev-->

    <form method="post" action="editpost.php">
        <input type="hidden" name="id" value="<?php echo $attendee['attendee_id']?>"/>
        <div class="mb-3">
            <label for="firstname" class="form-label">First Name</label>
            <input type="text" class="form-control" value=<?php echo $attendee['firstname']?> id="firstname" name="firstname" >
        </div>

        <!--csaladnev-->

        <div class="mb-3">
            <label for="lastname" class="form-label">Last Name</label>
            <input type="text" class="form-control" value=<?php echo $attendee['lastname']?> id="lastname" name="lastname" >
        </div>

        <!--Szuletési datum-->

        <div class="mb-3">
            <label for="dob">Date of Birth</label>
            <input type="text" class="form-control" value=<?php echo $attendee['dateofbirth']?> id="dob" name="dob">
        </div>

        <!--Speciality-->

        <div class="mb-3">
            <label for="speciality">Area of Experties</label>
            <select class="form-control" id="speciality" name="speciality">
                <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
                    <option selected value="<?php echo $r['specialty_id'] ?>" <?php if($r['specialty_id'] == $attendee['specialty_id']) echo 'selected' ?>>
                        <?php echo $r['name']; ?>
                    </option>
                <?php }?>
            </select>
        </div>

        <!--Gmail-->

        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control"value=<?php echo $attendee['emailadress']?> id="email" aria-describedby="phoneHelp" name="email">
            <div id="phoneHelp" class="form-text">We'll never share your phone number with anyone else.</div>
        </div>

        <!--Telószám-->

        <div class="mb-3">
            <label for="phone" class="form-label">Contact Number</label>
            <input type="text" value=<?php echo $attendee['contactnumber']?> id="phone" aria-describedby="emailHelp" name="phone">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        
        <div class="d-grid gap-2">
            <a href="viewrecords.php" class="btn btn-info">Back to List</a>
            <button class="btn btn-success" name="submit" type="submit">Save Changes</button>
        </div>
    </form>

<?php  }  ?>


<?php require_once 'includes/footer.php'; ?>
