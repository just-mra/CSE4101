<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
</head>
<style>
    button{
        width:60px;
    }
    table{
        width: 100%;
        border: 1px solid black;
        border-radius: 8px;
        border-collapse: collapse;
    }
    

    th{
        background-color: #04AA6D;
        color: white;
        font-weight: bold;
        padding: 8px;
        font-size: 18px;
    }
    td{
        padding: 0px 10px;
    }
    section{
        overflow-x: auto;
        width: 94%;
        margin: 3%;
    }
    tr:nth-child(even) {background-color: #f2f2f2;}
    .ice_cream{
        overflow-y: auto;
    }
    a{
        text-decoration: none;
        font-weight: bold;
        color: green;
        
    }
</style>
<body>
<section>
    <button><a href="./index.php">Create</a></button>
</section>

<section>
            <?php
                include('database_connect.php');
                
                $sql = "SELECT * FROM Person_Information";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo "<table>
                    <tr>
                        <th>Name</th>
                        <th>Dept.</th>
                        <th>Roll</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Ice Cream Flavour</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>";
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["fname"]." ". $row["lname"] ."</td>";
                        echo "<td>".$row["dept"]."</td>";
                        echo "<td>".$row["roll"]."</td>";
                        echo "<td>".$row["gender"]."</td>";
                        echo "<td>".$row["email"]."</td>";
                        echo "<td>".$row["phone"]."</td>";
                        echo "<td class=\"ice_cream\"><ol>";
                        $str = explode (' ', $row["flavour"]);
                        //$len = count($str);
                        foreach ($str as $s){ 
                            echo "<li>". $s ."</li>"; 
                        }
                        echo "</ol></td>";
                        echo "<td>".$row["address"].", ". $row["district"]."</td>";
                        echo "<td style=\"width: 150px\">
                        <button>Update</button>
                        <button>Delete</button>
                        
                        </td>";
                        echo "</tr>";
                        
                    }
                    echo "</table>";
                } else {
                    echo "0 results";
                }

                $conn->close();
            ?>
            
</section>

</body>
</html>

