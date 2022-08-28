<?php
    require_once('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <h1>Exercise Report</h1>
        </div>
        <div class="data">
            <form action="i.php" method="post">
                <select name="Type" id="">
                    <option value="">Select</option>
                    <option value="">Customer</option>
                    <option value="">Trainer</option>
                </select>
                <input type="submit" name="submit" class="submit"/>
                <table border="1" class= "table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Day</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            //$fname = $_POST['First_name'];
                            //$date = $_POST['created_at'];
                            //$day = $_POST['day'];
                            $qry="select user_master.First_name,attendance.created_at,attendance.day from user_master inner join attendance where user_master.idUser_master = attendance.idUser_master";
                            $result = $conn->query($qry);?>
                            
                            <?php while($row = $result->fetch_assoc())
                            {?>
                            <tr>
                                <td><?php echo $fname = $row['First_name'];?></td>
                                <td><?php echo  $date = $row['created_at'];?></td>
                                <td><?php echo  $day = $row['day'];?></td>
                            </tr>
                            <?php }?>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</body>
</html>