<?php
$titlle = 'Data Sheet';
include_once '../includes/header.php';
include_once '../includes/dbh.inc.php';

if($_SERVER['REQUEST_METHOD'] == 'GET'){

    $id = $_GET["id"];
    $sql = "SELECT * FROM users WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if(!$row){
        header("Location: login.php?error=stmtfailed");
        exit;
    }
    $sql = "UPDATE users 
            SET statust = 1 
            WHERE id = '$id'";
    mysqli_query($conn, $sql);
}
if(isset($_SESSION["userfname"]))
{
?>
<div class="container p-5">
<div class="row">
<div class="bg-white rounded shadow">
<div class="table-responsive">
<table class="table">
	<tbody>
        <tr>
            <td>Name </td>
            <td><?php echo $row['fname']?></td>
        </tr>
        <tr>
            <td>Contact </td>
            <td><?php echo $row['contact']?></td>
        </tr>
        <tr>
            <td>Instagram </td>
            <td><?php echo $row['insta']?></td>
        </tr>
        <tr>
            <td>Facebook </td>
            <td><?php echo $row['fb']?></td>
        </tr>
        <tr>
            <td>Role </td>
            <td><?php echo $row['rolle']?></td>
        </tr>
        <tr>
            <td>Time </td>
            <td><?php echo $row['t']?></td>
        </tr>
        <tr>
            <td>Q1 </td>
            <td><?php echo $row['q1']?></td>
        </tr>
        <tr>
            <td>Q2 </td>
            <td><?php echo $row['q2']?></td>
        </tr>
        <tr>
            <td>Q3 </td>
            <td><?php echo $row['q3']?></td>
        </tr>
        <tr>
            <td>Q4 </td>
            <td><?php echo $row['q4']?></td>
        </tr>
        <tr>
            <td>Q5 </td>
            <td><?php echo $row['q5']?></td>
        </tr>
        <tr>
            <td>Q6 </td>
            <td><?php echo $row['q6']?></td>
        </tr>
        <tr>
            <td>Q7 </td>
            <td><?php echo $row['q7']?></td>
        </tr>
        <tr>
            <td>Q8 </td>
            <td><?php echo $row['q8']?></td>
        </tr>
        <tr>
            <td>වෙනත් </td>
            <td><?php echo $row['other']?></td>
        </tr>

    </tbody>
</table>
</div>
</div>
</div>
</div>


<?php
}
else{
    header('Location:login.php');
    exit();
}

include_once '../includes/footer.php';
?>