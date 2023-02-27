<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php PDO</title>
</head>
<body >
    


<?php
        $dsn = 'mysql:host=localhost;port=3306;dbname=NGO_MIS;';
        $user = 'root';
        $password = '';

        try {
            $pdo = new PDO($dsn, $user, $password);
            echo "Database Connected with mysql";
        } catch (PDOException $e) {
            echo 'Connection failed with mysql: ' . $e->getMessage();
        }
 ?>
<hr>
<?php
        $dsn = 'pgsql:host=localhost;port=5432;dbname=ngo_mis';
        $user = 'richard';
        $password = 'rich@123';
        try {
            $pdo = new PDO($dsn, $user, $password);
            echo "PGSQL Database Connected";

	$insert = "INSERT INTO ngo(ngoid,name,physicaladdress,phone,email,url,createdby,createdat,updatedby,updatedat) VALUES (2,'RICH INDUSTRY','KANOMBE','078876564','ric@gmail.com','www.rich.com','Admin',NOW(),'Admin',NOW())";

        $pdo ->query($insert);
?>
<div>
    <h3>List of NGos</h3>

    <br>
    <table border='1' style="border-collapse: collapse;">
                <tr style="background: skyblue">
                    <th>ID</th>
                    <th>NAme</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>URL</th>
                    <th>CretedBy</th>
                    <th>CreatedAt</th>
                    <th>updatedBy</th>
                    <th>updatedAt</th>
                </tr>

</div>

<?php
	$sql = "SELECT * FROM ngo";
            foreach($pdo->query($sql) as $row){

?>
		<tr  style="font-size: 12px">
                        <td><?php echo $row['ngoid'];  ?></td>
                        <td><?php echo $row['name'];  ?></td>
                        <td><?php echo $row['physicaladdress'];  ?></td>
                        <td><?php echo $row['phone'];  ?></td>
                        <td><?php echo $row['email'];  ?></td>
                        <td><?php echo $row['url'];  ?></td>
                        <td><?php echo $row['createdby'];  ?></td>
                        <td><?php echo $row['createdat'];  ?></td>
                        <td><?php echo $row['updatedby'];  ?></td>
                        <td><?php echo $row['updatedat'];  ?></td>
                    </tr>
<?php } ?>

</table>
<?php 
        } catch (PDOException $e) {
            echo 'Connection failed with postgress: ' . $e->getMessage();
        }
 ?>






</body>
</html>

