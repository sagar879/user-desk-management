<?php
            include "connection.php";
            $del = $_REQUEST['id'];
            echo " $del";
            $sql = " DELETE FROM persons WHERE id = '$del' ";
            $result = mysqli_query($con, $sql);
            if ($result) {
                echo "<pre>";
                print_r($result);
            } else {
                echo " " . mysqli_error($con, $result);
            }
            header("Location: list.php");
?>