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
            <p class="programstopic">Add Programs</p>
            <div class="formline1"></div>
            <div class="saveform3">
                <form method="POST" action="service/programs_records/saveprograms.php">
                    <?php include './service/programs_records/programssearchbyid.php' ?>
                    <table class="tbthree">
                        <tr> <td> Program ID </td> </tr>
                        <tr> <td> <input type="number" placeholder="Enter Program ID" name="id" required="true" value="<?php echo $id; ?>"</td></tr>
                        <tr> <td> Program Title</td> </tr>
                        <tr> <td> <select name="title" class="programselector" required="true"  value="<?php echo $title; ?>">
                                    <option value="Bachelor of Laws">Bachelor of Laws</option>
                                    <option value="Bachelor of Management Studies">Bachelor of Management Studies</option>
                                    <option value="Bachelor of Medical Laboratory Sciences">Bachelor of Medical Laboratory Sciences </option>
                                    <option value="Bachelor of Pharmacy">Bachelor of Pharmacy </option>
                                    <option value="Bachelor of Science">Bachelor of Science</option>
                                    <option value="Bachelor of Science Honours in Nursing">Bachelor of Science in Nursing</option>
                                    <option value="Bachelor of Software Engineering s">Bachelor of Software Engineering </option>
                                    <option value="Bachelor of Network Engineering">Bachelor of Network Engineering </option>
                                    <option value="Bachelor of Designing">Bachelor of Designing</option>
                                    <option value="HND in Computing">HND in Computing</option>
                                    <option value="HND in Management">HND in Management</option>
                                    <option value="Diploma in English">Diploma in English</option>
                                    <option value="Diploma in Information Technology">Diploma in Information Technology</option>
                                    <option value="Certificate in English">Certificate in English</option>
                                    <option value="Certificate in Information Technology">Certificate in Information Technology</option>
                                </select> </td> </tr>
                        <tr> <td> Program Level </td> </tr>
                        <tr> <td> <input type="text" placeholder="Level" name="level" value="<?php echo $level; ?>"</td> </tr>
                        <tr> <td> Duration</td> </tr>
                        <tr> <td> <input type="text" placeholder="Duration" name="duration" value="<?php echo $duration; ?>"</td> </tr>
                        <tr> <td> Faculty ID</td> </tr>
                        <tr> <td> <input type="number" placeholder="Faculty ID" name="faculty_id" value="<?php echo $faculty_id; ?>"</td> </tr>
                        <tr> <input type ="submit" name="Save" value="Save" class="s_one2" /> </tr>
                        <tr> <input type ="submit"  value="Update" class="newupdate2" /> </tr>
                    </table>
                </form>
            </div>

            <p class="topic3">Program Records</p>
            <div class="prodetails"> 
                <div class="formline3"></div>
                <br>
                <form method="GET" action="programs.php">
                    <div class="top2">
                        <input type="text" name="SearchID" placeholder="Search here....">
                    </div>
                    <br>
                    <?php include './service/programs_records/searchprograms.php' ?>
                </form>
            </div>
        </div>
    </body>
</html>
