<?php
//database conection  file
include('dbconnection.php');
//Code for deletion
if(isset($_GET['delid']))
{
$rid=intval($_GET['delid']);
$sql=mysqli_query($con,"delete from tblusers where ID=$rid");
echo "<script>alert('Yorum silindi');</script>"; 
echo "<script>window.location.href = '../home.php'</script>";     
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>Yorumlar</b></h2>
                    </div>
                       <div class="col-sm-7" align="right">
                        <a href="yorumlar/insert.php" class="btn btn-secondary"><i class="material-icons">&#xE147;</i> <span>Yorum Ekle</span></a>
                                        
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Ad</th>                       
                        <th>Soyad</th>
                        <th>Yorum</th>
                        <th>Oluşurulma Tarihi</th>
                        <th>Eylem</th>
                    </tr>
                </thead>
                <tbody>
                     <?php
$ret=mysqli_query($con,"select * from tblusers");
$cnt=1;
$row=mysqli_num_rows($ret);
if($row>0){
while ($row=mysqli_fetch_array($ret)) {

?>
<!--Fetch the Records -->
                    <tr>
                        <td><?php echo $cnt;?></td>
                        <td><?php  echo $row['FirstName'];?> <?php  echo $row['LastName'];?></td>
                        <td><?php  echo $row['Email'];?></td>                        
                        <td><?php  echo $row['Address'];?></td>
                        <td> <?php  echo $row['CreationDate'];?></td>
                        <td>
  <a href="yorumlar/read.php?viewid=<?php echo htmlentities ($row['ID']);?>" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                            <a href="yorumlar/edit.php?editid=<?php echo htmlentities ($row['ID']);?>" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="yorumlar/index.php?delid=<?php echo ($row['ID']);?>" class="delete" title="Delete" data-toggle="tooltip" onclick="return confirm('Silmek istediğinizden emin misiniz?');"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <?php 
$cnt=$cnt+1;
} } else {?>
<tr>
    <th style="text-align:center; color:red;" colspan="6">Kayıt Bulunamadı</th>
</tr>
<?php } ?>                 
                
                </tbody>
            </table>
       

</body>
</html>