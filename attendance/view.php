<?php 
    $title = 'View Record';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';
    

    if(!isset($_GET['id'])){
        include 'includes/errormessage.php';
    }else{
        $id = $_GET['id'];
        $result = $crud->getAttendeeDetails($id);
    

?>


    </br>
    </br>
    </br>

<div class="card" style="width: 30rem;">
            <div class="card-body">
                <h5 class="card-title"><?php echo $result['firstname']. " " .$result['lastname'];?></h5>
                <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $result['name'];?></h6>
                <p class="card-text">
                    Date of Birth : <?php echo $result['dateofbirth'];?>
                </p>
                <p class="card-text">
                    Email : <?php echo $result['emailadress'];?>
                </p>
                <p class="card-text">
                    Contact Number : <?php echo $result['contactnumber'];?>
                </p>
            </div>
        </div>

        <br>
        <br>

        <a href="viewrecords.php" class="btn btn-info">Back to List</a>
        <a href="edit.php?id=<?php echo $result['attendee_id']; ?>" class="btn btn-warning">Edit</a>
        <a onclick="return confirm('Are you sure?');" href="delete.php?id=<?php echo $result['attendee_id']; ?>" class="btn btn-danger">Delete</a>


<?php } ?>

<?php require_once 'includes/footer.php'; ?>