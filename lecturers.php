<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php include './pages/import.html'; ?></head>

    <body id="main-body" >
        <div class="menu">
            <img src="img/image.jpg" width="20px"height="10px" class="logo"/> 
            <div class="menu1"></div>
            <?php include './pages/menu.html'; ?>
            <br>
        </div>   
        <?php
        $msg = "";
        if (isset($_GET['msg'])) {
            if ($_GET['msg'] == "Logout") {
                echo $msg = "<p class='newp' >Logout</P>";
            }
        }
        ?> 
        <div class="Content">
            <div>
                <form  method="post" action="service/logout.php">
                    <input type="submit" value="Logout" class="buttonlogout"/>  
                </form>
            </div>
            <p class="lecturertopic">Add Lecturer</p>
            <div class="formline9"></div>
            <div class="saveform6">
                <form method="POST" action="service/lecturers_records/savelecturers.php">
                    <?php include './service/lecturers_records/lecturerssearchbyid.php' ?>
                    <table class="tbsix">
                        <tr> <td> Lecturer ID </td> </tr>
                        <tr> <td> <input type="number" placeholder="Enter Lecturer ID" name="id" required="true" value="<?php echo $id; ?>"</td></tr>
                        <tr> <td> Lecturer Name</td> </tr>
                        <tr> <td> <input type="text" placeholder="Enter Lecturer Name" name="name" value="<?php echo $name; ?>"</td> </tr>
                        <tr> <td> Position</td> </tr>
                        <tr> <td> <input type="text" placeholder="Position" name="position" value="<?php echo $position; ?>"</td> </tr>
                        <tr> <td> Office Room</td> </tr>
                        <tr> <td> <input type="text" placeholder="Office Room" name="office_room" value="<?php echo $office_room; ?>"</td> </tr>
                        <tr> <input type ="submit" name="Save" value="Save" class="s_one5" /> </tr>
                        <tr> <td> Course ID</td> </tr>
                        <tr> <td> <input type="number" placeholder="Course ID" name="course_id" value="<?php echo $course_id; ?>"</td> </tr>
                        <tr> <input type ="submit" name="Save" value="Save" class="s_one5" /> </tr>
                        <tr> <input type ="submit"  value="Update" class="newupdate5" /> </tr>
                    </table>
                </form>
            </div>

            <p class="topic10">Lecturer Records</p>
            <div class="lecdetails"> 
                <div class="formline6"></div>
                <br>
                <form method="GET" action="lecturers.php">
                    <div class="top5">
                        <input type="text" name="SearchID" placeholder="Search here....">
                    </div>
                    <br>
                    <?php include './service/lecturers_records/searchlecturers.php' ?>
                </form>
            </div>
        </div>
    </body>
</html>

