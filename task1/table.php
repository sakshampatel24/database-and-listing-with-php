<?php
    include "connection.php";
    $query = "SELECT * FROM data";
    $execute = $connection->query($query);

    $record = array();

    if ($execute->num_rows > 0) {
        while ($row = $execute->fetch_assoc()) {
            $record[] = $row;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Include Bootstrap CSS link in your HTML file -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
 /* Styling for table */
table {
    width: 100%;
    border-collapse: collapse;
    border: 1px solid #dddddd;
}

th {
    border: 1px solid #4f7db0;
    padding: 8px;
    text-align: left;
    background-color: whitesmoke;
}

td {
    border: 1px solid #4f7db0;
    padding: 8px;
}

tr:nth-child(odd) {
    background-color: wheat;
}

tr:hover {
    background-color: skyblue;
}

    </style>
<body>
    <div class="container">
        <div class="row">
            <table id="example" class="display">
                <thead>
                    <tr class="trow">
                        <th class="">ID</th>
                        <th class="">First_Name</th>
                        <th class="">Last_Name</th>
                        <th class="">Hand_Antiseptic</th>
                        <th class="">Symptoms</th>
                        <th class="">Temperature</th>
                        <th class="">Contact</th>
                        <th class="">Additional_Notes</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                    <?php if (!empty($record)): ?>
                        <?php foreach ($record as $value) : ?>
                            <tr>
                                <td><?php echo $value['id']; ?></td>
                                <td><?php echo $value['First_Name']; ?></td>
                                <td><?php echo $value['Last_Name']; ?></td>
                                <td><?php echo $value['Hand_Antiseptic']; ?></td>
                                <td><?php echo $value['Symptoms']; ?></td>
                                <td><?php echo $value['Temperature']; ?></td>
                                <td><?php echo $value['Contact']; ?></td>
                                <td><?php echo $value['Additional_Notes']; ?></td>
                                <td>
                                    <a class="btn btn-info" href="edit.php?id=<?php echo $value['id']; ?>">Edit</a>
                                    <a class="btn btn-danger" href="delete.php?id=<?php echo $value['id']; ?>" onclick="return confirm('Are you sure you want to delete this record?')">Delete</a>
                                    <!-- <a class="btn btn-info" href="datapost.php?id=<?php echo $value['id']; ?>">New</a> -->
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="10" style="text-align: center;">No Records Found</td>
                        </tr>
                    <?php endif; ?>
            </table>
        </div>
    </div>
</body>
</html>
