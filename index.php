<?php
// memanggil file config.php
require 'config.php';
?>
<html>
<head>
	<title>Cara Menggunakan Datatables</title>
	<link rel="stylesheet" type="text/css" href="assets/css/jquery.dataTables.css">
</head>

<body>
	<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Start Date</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Start Date</th>
            </tr>
        </tfoot>
        <tbody>
        <?php
        $sql = "SELECT * FROM karyawan";
        $query = $db->query($sql);

        while ($row = $query->fetch_assoc()) :?>
        	<tr>
        		<td><?php echo $row['first_name'];?></td>
        		<td><?php echo $row['last_name'];?></td>
        		<td><?php echo $row['position'];?></td>
        		<td><?php echo $row['office'];?></td>
        		<td><?php echo $row['start_date'];?></td>
        	</tr>
        <?php endwhile;?>
        </tbody>
    </table>
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.dataTables.min.js"></script>

	<script>
    $(document).ready(function() {
	   $('#example').DataTable();
	} );
	</script>

</body>
</html>