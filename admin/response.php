<?php
$titlle = 'Responceses';
include_once '../includes/header.php';
include_once '../includes/dbh.inc.php';

if(isset($_SESSION["userfname"]))
{
?>

<!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"> -->
<div class="container p-5">
<div class="row">
	<!-- BEGIN INBOX -->
	<div class="bg-white rounded shadow">
		<div class="grid email">
			<div class="grid-body">
				<div class="row">					
					<!-- BEGIN INBOX CONTENT -->
					<div class="">						
						<div class="table-responsive">
							<table class="table table-hover">
								<tbody>
                                    <?php 
                                         $sql = "SELECT * FROM users ORDER BY id DESC";
                                         $result = mysqli_query($conn, $sql);
                 
                                         if (mysqli_num_rows($result) > 0){
                                             while ($row = mysqli_fetch_assoc($result)){
                                                if($row['statust'] == 0){
                                                    ?>                        
                                                    <tr style="cursor: pointer;" data-href='<?php echo "datasheet.php?id=$row[id]" ?>'>
                                                        <td><b><?php echo $row['fname']?></b></td>
                                                        <td><b><?php echo $row['contact']?></b></td>
                                                        <td><b><?php echo $row['rolle']?></b></td>
                                                        <td><b><?php echo (date("Y-m-d",$row['t']))?></b></td>
                                                    </tr>
                                                <?php   
                                                }
                                                else{
                                                    ?>
                                                    <tr style="cursor: pointer;" data-href='<?php echo "datasheet.php?id=$row[id]" ?>'>
                                                        <td><?php echo $row['fname']?></td>
                                                        <td><?php echo $row['contact']?></td>
                                                        <td><?php echo $row['rolle']?></td>
                                                        <td><?php echo (date("Y-m-d",$row['t']))?></td>
                                                    </tr>
                                                <?php
                                                }
                                            }
                                        }           
                                    ?>
							    </tbody>
                            </table>
						</div>						
					</div>
					<!-- END INBOX CONTENT -->
				</div>
			</div>
		</div>
	</div>
	<!-- END INBOX -->
</div>
</div>

<script>
    document.addEventListener('DOMContentLoaded',() =>{
        const rows = document.querySelectorAll("tr[data-href]");
        // console.log(rows);
        rows.forEach(row =>{
            row.addEventListener('click', () =>{
                window.location.href = row.dataset.href;
            });
        });
    });
</script>

<?php
}
else{
    header('Location:login.php');
    exit();
}

include_once '../includes/footer.php';
?>