<?php
session_start();
include 'connect.php';

?>

<table id="myTable" class="table table-hover table-bordered" >					
    <thead>
        <tr>
            <th>Complaint ID</th>
            <th>Subject</th>									
            <th>Problem</th>
            <th>Status</th>								         
            <th>Option</th>
        </tr>

    </thead>
    <tbody>
        <tr>
        <?php
            
        $sessionid = $_SESSION['UserIDmo'];
        $query_data = mysqli_query($conn, "SELECT * FROM complaints where complaineeid = '$sessionid' ");

            while($row = mysqli_fetch_assoc($query_data)) {
                //fetch the rows for me please.
                $id = $row['id'];
                $subject = $row['subject'];
                $problem = $row['problem'];
                $status = $row['status'];
                           
                 $active = "Solved";
                if($row['status'] == $active) {
                $status = '<label class="label label-success">Solved</label>';
               } else {
                $status = '<label class="label label-danger">Unsolved</label>'; 
               }

                
                
   
                
            ?>
            <td><?php echo $id; ?></td>
            <td><?php echo $subject; ?></td>
            <td><?php echo $problem; ?></td>
            <td><?php echo $status; ?></td>
            <td>
                <a href="../UserDesign/complaintsreply.php?id=<?php echo $id; ?>">
                <button id="view" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="View Complaint">
                <span class="glyphicon glyphicon-comment"></span></button>
                </a>
                </td>
        </tr>
            <?php
            }
            
        ?>
    </tbody>
</table>
<script>
$(document).ready(function(){
    $('#myTable').DataTable();
    $()
    
});
</script>