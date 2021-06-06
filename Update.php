<!DOCTYPE html>

<html>
    <head>
        <style>
            .center{
                margin: auto;
                width: 40%;
                padding: 25px;
                margin-top: 30px;
            }
            
            div{
                width: 100%;
                border-radius: 5px;
                background: #E8ECFE;
                padding: 20px;
            }
            
            input[type=number],input[type=password],input[type=email],input[type=text]{
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }
            
            input[type=date],select{
                width: 50%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }
            
            input[type=submit]{
                width: 100%;
                color: white;
                padding: 14px 12px;
                margin: 8px 0;
                border: none;
                border-radius: 4px;
                background-color: #4CAF50;
                cursor: pointer;
            }
            
            input[type=submit]:hover {
                background-color: #45a049;
            }
            
            h1{
                color: 626be9f3;
                padding-left: 20%;
            }
        </style>
        <title>Registration Form</title>
    </head>
    <body>
        <?php
        $id = filter_input(INPUT_GET, "updateid");
        $con = mysqli_connect("localhost", "Ronik", "RonikMG6952", "internship");
        
        //Select Query for Update
        $suq = mysqli_query($con, "select * from registration where id=$id") or die("Error : " + mysqli_error($con));
        $data= mysqli_fetch_array($suq);
        
        if($_POST){
            $name = filter_input(INPUT_POST, "name");
            $email = filter_input(INPUT_POST, "email");
            $pwd = filter_input(INPUT_POST, "pwd");
            $m_no = filter_input(INPUT_POST, "m_no");
            $c_name = filter_input(INPUT_POST, "c_name");
            $dob = filter_input(INPUT_POST, "dob");
            $gen = filter_input(INPUT_POST, "gen");
            $sub = filter_input(INPUT_POST, "sub");
            $type = filter_input(INPUT_POST, "type");
            $pin = filter_input(INPUT_POST, "pin");
            
            //Update Query
            $uq = mysqli_query($con, "update registration set name = '$name', email = '$email', password = '$pwd', mobile_no = $m_no ,college = '$c_name' ,dob = '$dob' ,gender = '$gen' ,subject = '$sub' ,type = '$type' ,pincode = $pin where id= $id") or die("Error : " + mysqli_error($con));
        
            if($uq){
                echo "<script>alert('Data Updated Successfully');window.location='Display.php'</script>";
            }
        }
        ?>
        
        <div class="center">
            <h1>Update Registration Form</h1>
            <form method="post" >
                
                <label for="name">Name<font color=red>*</font></label>
                <input id="name" name="name" type="text" placeholder="Enter the Name" required="required" value="<?php echo $data['name']; ?>" />
                
                <label for="email">Email<font color=red>*</font></label>
                <input id="email" name="email" type="email" placeholder="Enter the E-Mail" required="required" value="<?php echo $data['email']; ?>" />
                
                <label for="pwd">Password<font color=red>*</font></label>
                <input id="pwd" name="pwd" type="password" placeholder="Enter the Password" required="required" value="<?php echo $data['password']; ?>" />
                
                <label for="m_no">Mobile No.<font color=red>*</font></label>
                <input id="m_no" name="m_no" type="number" minlength="10" maxlength="10" placeholder="Enter the Mobile No." required="required" value="<?php echo $data['mobile_no']; ?>" />
                
                <label for="c_name">College Name<font color=red>*</font></label>
                <input id="c_name" name="c_name" type="text" placeholder="Enter the College Name" required="required"  value="<?php echo $data['college']; ?>"/>
                
                <label for="dob">Date of Birth<font color=red>*</font></label>
                <br /><input id="dob" name="dob" type="date" placeholder="Enter the Date of Birth" required="required"  value="<?php echo $data['dob']; ?>"/><br />
                
                <label for="gen">Gender<font color=red>*</font></label><br />
                <select id="gen" name="gen">
                    <option value="Male" <?php if( $data['gender']=="Male" ){echo "selected='selected'";} ?> >Male</option>
                    <option value="Female" <?php if( $data['gender']=="Female" ){echo "selected='selected'";} ?>>Female</option>
                </select><br />
                
                <label for="sub">Subject<font color=red>*</font></label><br />
                <select id="sub" name="sub">
                    <option value="PHP" <?php if( $data['subject']=="PHP" ){echo "selected='selected'";} ?> >PHP</option>
                    <option value="Python with dJango" <?php if( $data['subject']=="Python with dJango" ){echo "selected='selected'";} ?> >Python with dJango</option>
                    <option value="Node js" <?php if( $data['subject']=="Node js" ){echo "selected='selected'";} ?> >Node JS</option>
                    <option value="Java" <?php if( $data['subject']=="Java" ){echo "selected='selected'";} ?> >Java</option>
                </select><br />
                
                <label for="off_on">Offline / Online <font color=red>*</font></label><br />
                <select id="off_on" name="type">
                    <option value="Online" <?php if( $data['type']=="Online" ){echo "selected='selected'";} ?> >Online</option>
                    <option value="Offline" <?php if( $data['type']=="Offline" ){echo "selected='selected'";} ?> >Offline</option>
                </select><br />
                
                <label for="pin">Pincode</label>
                <input id="pin" name="pin" type="number" maxlength="6" minlength="6" placeholder="Enter the Pin Code" value="<?php echo $data['pincode']; ?>" />
                
                <input type="submit" value="UPDATE"/>
            </form>
        </div>
    </body>
</html>



