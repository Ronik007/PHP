<head>
    <style>
        th{
            border: 1px solid tomato;
            background-color: lightgreen;
        }
        td{
            border: 1px solid tomato;
        }
        table{
            border: 1px solid tomato;
            width: 30%;
            border-collapse: collapse;
        }
        tr{
            text-align: center;
        }
        tr:hover{
            background-color: #f5f5ff;
        }
    </style>
    <title>Display_Record</title>
</head>

<?php

$con = mysqli_connect("localhost", "Ronik", "RonikMG6952", "internship");

$que = mysqli_query($con, "select * from user where is_Deleted=0") or die("<br />Error : " + mysqli_error($con));

echo "<table>";
echo "<tr>";
echo "<th>Sr. No.</th>";
echo "<th>Name</th>";
echo "<th>Gender</th>";
echo "<th>Mobile</th>";
echo "<th>Action</th>";
echo "</tr>";

$i=0;
//fetch all data from Database Table
while ( $data = mysqli_fetch_array($que) ){
    $i++;
    echo "<tr>";
    echo "<td>$i</td>";
    echo "<td>$data[user_name]</td>";
    echo "<td>$data[user_gender]</td>";
    echo "<td>$data[user_mobile]</td>";
    echo "<td><a href='Delete.php?deleteid={$data['user_id']}'><button>Delete</button></a> <a href='Update.php?updateid={$data['user_id']}'><button>Update</button></a></td>";
    echo "<tr>";
}
echo "</table>";

echo "<br /><a href='Insert_Form.html'><button>Add Data</button></a>";

?>