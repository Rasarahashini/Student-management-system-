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
            <p class="commtopic">Add Committee</p>
            <div class="formline10"></div>
            <div class="saveform7">
                <form method="POST" action="service/committee_records/savecommittee.php">
                    <?php include './service/committee_records/commiteesearchbyid.php' ?>
                    <table class="tbseven">
                        <tr> <td> Committee ID </td> </tr>
                        <tr> <td> <input type="number" placeholder="Enter Committee ID" name="id" required="true" value="<?php echo $id; ?>"</td></tr>
                        <tr> <td> Committee Name</td> </tr>
                        <tr> <td> <input type="text" placeholder="Enter Committee Name" name="name" value="<?php echo $name; ?>"</td> </tr>
                        <tr> <td> Faculty ID</td> </tr>
                        <tr> <td> <input type="number" placeholder="Enter Faculty ID" name="faculty_id" value="<?php echo $faculty_id; ?>"</td> </tr>
                        <tr> <td> Lecturer ID </td> </tr>
                        <tr> <td> <input type="number" placeholder="Lecturer ID" name="lecturers_id" value="<?php echo $lecturers_id; ?>"</td> </tr>
                        <tr> <input type ="submit" name="Save" value="Save" class="s_one7" /> </tr>
                        <tr> <input type ="submit"  value="Update" class="newupdate7" /> </tr>
                    </table>
                </form>
            </div>

            <p class="topic11">Committee Records</p>
            <div class="comdetails"> 
                <div class="formline88"></div>
                <br>
                <form method="GET" action="committees.php">
                    <div class="top5">
                        <input type="text" name="SearchID" placeholder="Search here....">
                    </div>
                    <br>
                    <?php include './service/committee_records/searchcommittee.php' ?>
                </form>
            </div>
        </div>
    </body>
</html>

