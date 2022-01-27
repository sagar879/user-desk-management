<?php
//  include "list.php";
include "connection.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task-one</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <table>
        <tr>
            <td class="raw1"><a href="index.php" target="_BLANK">HOME</a></td>
            <td class="raw1">about</td>
            <td class="raw1">contact</td>
            <td class="raw1">feedback</td>
            <td class="raw1">services</td>

        </tr>
        <tr>
            <td class="raw2" colspan="5">Task-one</td>
        </tr>
        <tr>
            <td class="sidebar">sidebar</td>
            <td colspan="4">
                <div class="displaytable">
                    <table>
                        <tr>
                            <td>id</td>
                            <td>last_name</td>
                            <td>first_name</td>
                            <td>gender</td>
                            <td>hobbies</td>
                            <td>mobile_no</td>
                            <td>e_mail</td>
                            <td>pasword</td>
                        </tr>
                        <?php
                        include "connection.php";
                        $results_per_page = 3;
                        $sql = "SELECT * FROM persons";
                        $result = mysqli_query($con, $sql);
                        $number_of_results = mysqli_num_rows($result);

                        $total_pages = ceil($number_of_results / $results_per_page);

                        if (!isset($_GET['pageno'])) {

                            $page = 1;
                        } else {

                            $page = $_GET['pageno'];
                        }
                        $offset = ($page - 1) * $results_per_page;
                        $sql1 = "SELECT * FROM persons LIMIT {$offset} , {$results_per_page} ";
                        $result = mysqli_query($con, $sql1);

                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['last_name']; ?></td>
                                <td><?php echo $row['first_name']; ?></td>
                                <td><?php echo $row['gender']; ?></td>
                                <td><?php echo $row['hobbies']; ?></td>
                                <td><?php echo $row['mobile_no']; ?></td>
                                <td><?php echo $row['e_mail']; ?></td>
                                <td><?php echo $row['pasword']; ?></td>
                                <td><a href="delete.php?id=<?php echo $row['id'] ?>"><button onclick=" return myfunction()">delete</button></a></td>
                                <td><a href="update.php?id=<?php echo $row['id'] ?>"><button>update</button></a></td>
                            </tr>

                        <?php
                        }

                        ?>

                    </table>
                    <?php

                    for ($page = 1; $page <= $total_pages; $page++) {
                        echo '<li> <a href = "list.php?pageno= ' . $page . '">' . $page . ' </a> </li>';
                    }
                    ?>


                </div>
            </td>
        </tr>
        <tr>
            <td colspan="5" class="footer">footer</td>
        </tr>
    </table>
    <script>
        function myfunction(){
            return confirm("are you sure want to dlt this record");
            }
            
    </script>

    <body>

</html>