<?php 
    $title = 'Success';
    require_once 'includes/header.php'; 
?>


    <h1 class="text-center text-success">You Have Been Registered</h1>

    <!-- get-->
    <!--
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?php echo $_GET['firstname']. " " .$_GET['lastname'];?></h5>
                <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $_GET['speciality'];?></h6>
                <p class="card-text">
                    Date of Birth : <?php echo $_GET['dob'];?>
                </p>
                <p class="card-text">
                    Email : <?php echo $_GET['email'];?>
                </p>
                <p class="card-text">
                    Contact Number : <?php echo $_GET['phone'];?>
                </p>
            </div>
        </div>
    
    -->

    <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?php echo $_POST['firstname']. " " .$_POST['lastname'];?></h5>
                <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $_POST['speciality'];?></h6>
                <p class="card-text">
                    Date of Birth : <?php echo $_POST['dob'];?>
                </p>
                <p class="card-text">
                    Email : <?php echo $_POST['email'];?>
                </p>
                <p class="card-text">
                    Contact Number : <?php echo $_POST['phone'];?>
                </p>
            </div>
        </div>

        <!--04:53 asszem 23 vagy 24ik vidi-->


<br />
<br />
<br />
<br />
<br />
<br />
<br />

<?php require_once 'includes/footer.php'; ?>
