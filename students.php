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
            <p class="studenttopic">Add Student</p>
            <div class="formline7"></div>
            <div class="saveform5">
                <form method="POST" action="service/student_records/savestudents.php">
                    <?php include './service/student_records/studentsearchbyid.php' ?>
                    <table class="tbfive">
                        <tr> <td> Student ID </td> </tr>
                        <tr> <td> <input type="number" placeholder="Enter Student ID" name="id" required="true" value="<?php echo $id; ?>"</td></tr>
                        <tr> <td> Student Name</td> </tr>
                        <tr> <td> <input type="text" placeholder="Enter Student Name" name="name" value="<?php echo $name; ?>"</td> </tr>
                        <tr> <td> Birthday</td> </tr>
                        <tr> <td> <input type="date"  name="birthday" value="<?php echo $birthday; ?>"</td> </tr>
                        <tr> <td> Enrolled Year</td> </tr>
                        <tr> <td> <input type="numbers" placeholder="Enter entrolled year" name="enrolled_year" value="<?php echo $enrolled_year; ?>"</td> </tr>
                        <tr> <td> Course ID </td> </tr>
                        <tr> <td> <input type="number" placeholder="Course ID" name="course_id" value="<?php echo $course_id; ?>"</td> </tr>
                        <tr> <input type ="submit" name="Save" value="Save" class="s_one4" /> </tr>
                        <tr> <input type ="submit"  value="Update" class="newupdate4" /> </tr>
                    </table>
                </form>
            </div>

            <p class="topic5">Student Records</p>
            <div class="studentdetails"> 
                <div class="formline5"></div>
                <br>
                <form method="GET" action="students.php">
                    <div class="top4">
                        <input type="text" name="SearchID" placeholder="Search here....">
                    </div>
                    <br>
                    <?php include './service/student_records/searchstudents.php' ?>
                </form>
            </div>
        </div>
    </body>
</html>

