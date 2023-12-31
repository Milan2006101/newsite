<?php 
    $title = 'View Records';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';
    $result = $crud->getAttendees();
?>

<br>
<br>
<br>

    <table class="table table-dark table-striped">
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Specialty</th>
            <th>Actions</th>
        </tr>
        <tr>
            <td>1</td>
            <td>nev</td>
            <td>nev</td>
            <td>Database Admin</td>    
        </tr>
        <?php
        while($r = $result->fetch(PDO::FETCH_ASSOC))
        {
                ?>
                <tr>
                    <td><?php echo $r['attendee_id']; ?></td>
                    <td><?php echo $r['firstname']; ?></td>
                    <td><?php echo $r['lastname']; ?></td>
                    <td><?php echo $r['name'] ;?></td>
                    <td>
                        <a href="view.php?id=<?php echo $r['attendee_id']; ?>" class="btn btn-primary">View</a>
                        <a href="edit.php?id=<?php echo $r['attendee_id']; ?>" class="btn btn-warning">Edit</a>
                        <a onclick="return confirm('Are you sure?');" href="delete.php?id=<?php echo $r['attendee_id']; ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php
        }
            ?>
        
        
    </table>




<?php require_once 'includes/footer.php'; ?>