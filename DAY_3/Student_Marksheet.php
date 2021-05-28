<html>
    <head>
        <title>Student_Marksheet</title>
        <style>
            .center{
                margin: auto;
                width: 60%;
                padding: 25px;
                margin-top: 30px;
            }

            table{
                font-family: Arial,Helvetica,sans-serif;
                border-collapse: collaps;
                width: 100%;
            }
            
            td,th{
                border: 2px solid #887469;
                padding: 8px;
                text-align: center;
            }

            .HighlightTableRow:hover{
                background-color:highlight;
                color: white;
            }
            
            .PassTableRow:hover{
                background-color: #B0F9B5;
                color: darkgreen;
                font-size: 18px;
            }
            
            .FailTableRow:hover{
                background-color: #FBCACA; 
                color: darkred; 
                font-size: 18px;
            }
            
            th {
                padding-top: 10px;
                padding-bottom: 10px;
                text-align: center;
                background-color: #4CAF50;
                color: white;
            }
            
            div {
                align-items: center;   
                width: 100%;
                border-radius: 5px;
                background-image: url('21557201.jpg');
                padding: 20px;
            }

            h1{
                padding-left: 35%;
                padding-bottom: 10px;
                color: #D2664E;
            }
        </style>
    </head>

    <body>
        <?php

        $name = filter_input(INPUT_POST,"name"); 
        $sem = filter_input(INPUT_POST,"sem");

        $maths = filter_input(INPUT_POST,"Maths");
        $chm = filter_input(INPUT_POST,"Chemistry");
        $phy = filter_input(INPUT_POST,"Physics");
        $eng = filter_input(INPUT_POST,"English");
        $comp = filter_input(INPUT_POST,"Computer");

        $mark = array($maths,$chm,$phy,$eng,$comp);
        
        $sub = array("Maths","Chemistry","Physics","English","Computer");
        
        $total = $maths + $chm + $phy + $eng + $comp;
        
        $pr = ($total/500)*100;
        ?>

        <div class="center">
            <h1>Student's Mark Sheet</h1>
            <table>
                <colgroup>
                    <col span="1" style="width: 36%;">
                    <col span="1" style="width: 32%;">
                    <col span="1" style="width: 32%;">
                </colgroup>
      
                <tr class="HighlightTableRow">
                    <td style="font-size: 20px;"><b>Name</b></td>
                    <td colspan="2" style="font-size: 20px;"><?php echo "$name" ?></td>
                </tr>
                
                <tr class="HighlightTableRow">
                    <td style="font-size: 20px;"><b>Semester</b></td>
                    <td colspan="2" style="font-size: 20px;"><?php echo "$sem" ?></td>
                </tr>
                
                <tr><td style="border: none;"></td></tr>
                <tr>
                    <th>Subject</th>
                    <th>Mark</th>
                    <th>Grade</th>
                </tr>
                
                <?php
                    for($i=0;$i<5;$i++)
                    {   
                        switch ($mark[$i])
                        {
                            case ($mark[$i]>=85):
                                echo "<tr class='PassTableRow'><td>$sub[$i]</td><td>$mark[$i]</td><td><b>AA</b></td></tr>";
                                break;
                            case ($mark[$i]>=75):
                                echo "<tr class='PassTableRow'><td>$sub[$i]</td><td>$mark[$i]</td><td><b>AB</b></td></tr>";
                                break;
                            case ($mark[$i]>=65):
                                echo "<tr class='PassTableRow'><td>$sub[$i]</td><td>$mark[$i]</td><td><b>BB</b></td></tr>";
                                break;
                            case ($mark[$i]>=55):
                                echo "<tr class='PassTableRow'><td>$sub[$i]</td><td>$mark[$i]</td><td><b>BC</b></td></tr>";
                                break;
                            case ($mark[$i]>=55):
                                echo "<tr class='PassTableRow'><td>$sub[$i]</td><td>$mark[$i]</td><td><b>CC</b></td></tr>";    
                            break;    
                            case ($mark[$i]>=45):
                                echo "<tr class='PassTableRow'><td>$sub[$i]</td><td>$mark[$i]</td><td><b>CD</b></td></tr>";    
                                break;    
                            case ($mark[$i]>=35):
                                echo "<tr class='PassTableRow'><td>$sub[$i]</td><td>$mark[$i]</td><td><b>DD</b></td></tr>";
                                break;
                            default :
                                echo "<tr class='FailTableRow'><td>$sub[$i]</td><td>$mark[$i]</td><td><b>FF</b></td></tr>";
                            }
                    }
                ?>
                <tr><td style="border: none;"></td></tr>
                <tr><td style="border: none;"></td></tr>
                <tr c>
                    <td style="background-color: #4CAF50; color: white; text-align: center; font-size: 20px;">Total</td>
                    <td style="font-size: 20px;"> <?php echo "$total" ?> </td>
                    <td style="font-size: 20px;"><?php echo "$pr"?>% </td>
                </tr>
                <tr><td style="border: none;"></td></tr>
                <tr><td style="border: none;"></td></tr>
            </table>
            
            <?php 
                
                for($i=0,$flag=0;$i<5;$i++)
                {
                    if($mark[$i]<35){
                        echo "<marquee scrollamount=12><font color='RED' size=5>Sorry! You have <b>not cleared</b> this exam.</font></marquee>";
                        $flag = 1;
                        break;
                    }
                }
                
                if($flag==0)
                    echo "<marquee scrollamount=12><font color='GREEN' size=5>Congratulation! You have <b>passed</b> this exam.</font></marquee>";
            ?>
        </div>
                
    </body>
</html>