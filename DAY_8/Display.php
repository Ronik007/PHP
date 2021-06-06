<html>
    <head>
        <title>Display Record</title>
        <style>
            .center{
                margin: auto;
                width:90%;
                padding: 20px;
                margin-top: 30px; 
            }
            .center1{
                margin-top: 50%;
                padding-left: 47%;
            }
            .button {
                background-color: #4CAF50; /* Green */
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                cursor: pointer;
            }
            .button1{
                background-color: #008CBA; /* Blue */
                color: white;
                padding: 8px 8px;
                text-align: center;
                display: inline-block;
                cursor: pointer;
            }
            .button2{
                background-color: #f44336; /* Red */
                color: white;
                padding: 8px 8px;
                text-align: center;
                display: inline-block;
                cursor: pointer;
            }
            table{
                font-family : Arial, Helvetica, sans-serif; 
                border-collapse: collapse;
                width: 100%;
            }
            td,th{
                border: 1px solid white;
                padding: 4px;
                text-align: center;
            }
            tr:nth-child(even){background-color: #ddd;}
            tr:hover{background-color: lightgreen;}
            th{
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: center;
                background-color: #4CAF50;
                color: white;
            }
            div {
                align-items: center;   
                width: 100%;
                border-radius: 5px;
                background-color: #f2f2f2;
                padding: 20px;
            }
            h1{
                color: chocolate;
                padding-left: 40%;
            }
        </style>
    </head>
    
    <body>
        <div class="center">
            <h1>Registration Details</h1>
            <table>
                <colgroup>
                    <col span="1" style="width: 3%;">
                    <col span="1" style="width: 10%;">
                    <col span="1" style="width: 8%;">
                    <col span="1" style="width: 6%;">
                    <col span="1" style="width: 7%;">
                    <col span="1" style="width: 11%;">
                    <col span="1" style="width: 7%;">
                    <col span="1" style="width: 4%;">
                    <col span="1" style="width: 4%;">
                    <col span="1" style="width: 3%;">
                    <col span="1" style="width: 4%;">
                     <col span="1" style="width: 10%;">
                </colgroup>
                <tr>
                    <th>Sr. No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Mobile</th>
                    <th>College</th>
                    <th>DOB</th>
                    <th>Gender</th>
                    <th>Subject</th>
                    <th>Type</th>
                    <th>Pincode</th>
                    <th>Action</th>
                </tr>
                
                <?php
        
                $conn = mysqli_connect("localhost", "Ronik", "RonikMG6952", "internship");
        
                //Select(Display) Query
                $sq = mysqli_query($conn, "select * from registration where is_Deleted=0") or die("Error : " + mysqli_error($conn));
                
                $i=0;
                
                while ( $sdata = mysqli_fetch_array($sq) ){
                $i++;
                echo "<tr>";
                echo "<td>$i</td>";
                echo "<td>{$sdata['name']}</td>";
                echo "<td>{$sdata['email']}</td>";
                echo "<td>{$sdata['password']}</td>";
                echo "<td>{$sdata['mobile_no']}</td>";
                echo "<td>{$sdata['college']}</td>";
                echo "<td>{$sdata['dob']}</td>";
                echo "<td>{$sdata['gender']}</td>";
                echo "<td>{$sdata['subject']}</td>";
                echo "<td>{$sdata['type']}</td>";
                echo "<td>{$sdata['pincode']}</td>";
                echo "<td><a href='Update.php?updateid=$sdata[id]'><button class='button1'>Update</button></a> | <a href='Delete.php?deleteid=$sdata[id]'><button class='button2'>Delete</button></a></td>";
                echo "</tr>";    
                }
               
                ?>
            </table>
            <br />
            <a href="Registration_Form.html" class="center1"><button class="button">Add Data</button></a>
        </div>
        
    </body>
</html>



