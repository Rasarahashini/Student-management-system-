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
            <p class="coursetopic">Add Course</p>
            <div class="formline66"></div>
            <div class="saveform4">
                <form method="POST" action="service/course_records/savecourse.php">
                    <?php include './service/course_records/coursesearchbyid.php' ?>
                    <table class="tbfour">
                        <tr> <td> Course ID </td> </tr>
                        <tr> <td> <input type="number" placeholder="Enter Course ID" name="id" required="true" value="<?php echo $id; ?>"</td></tr>
                        <tr> <td> Course Name</td> </tr>
                        <tr> <td> <select name="name" class="courseselector" required="true"  value="<?php echo $name; ?>">
                                    <option value="Computer Science">Computer Science</option>
                                    <option value="Computer System Development">Computer System Development</option>
                                    <option value="Network engineeing">Network engineeing</option>
                                    <option value="Software engineeing">Software engineeing</option>
                                    <option value="Architecture">Architecture</option>                                    
                                    <option value="Languages">Languages</option>
                                    <option value="Mathematics">Mathematics</option>
                                    <option value="Accounting">Accounting</option>                              
                                    <option value="Business Law">Business Law</option>
                                    <option value="Business studies">Business studies</option>
                                    <option value="Nursing">Nursing</option>
                                    <option value="Pharmacy">Pharmacy</option>
                                    <option value="Visual Culuture">Visual Culuture</option>
                                </select> </td> </tr>
                        <tr> <td> Program ID </td> </tr>
                        <tr> <td> <input type="number" placeholder="Programs ID" name="programs_id" value="<?php echo $programs_id; ?>"</td> </tr>
                        <tr> <input type ="submit" name="Save" value="Save" class="s_one3" /> </tr>
                        <tr> <input type ="submit" name="Save" value="Save" class="s_one3" /> </tr>
                        <tr> <input type ="submit"  value="Update" class="newupdate3" /> </tr>
                    </table>
                </form>
            </div>

            <p class="topic4">Course Records</p>
            <div class="coursedetails"> 
                <div class="formline4"></div>
                <br>
                <form method="GET" action="course.php">
                    <div class="top3">
                        <input type="text" name="SearchID" placeholder="Search here....">
                    </div>
                    <br>
                    <?php include './service/course_records/searchcourse.php' ?>
                </form>
            </div>
        </div>
    </body>
</html>

