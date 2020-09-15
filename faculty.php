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
            <p class="facultytopic">Add Faculty</p>
            <div class="formline"></div>
            <div class="saveform2">
                <form method="POST" action="service/faculty_records/savefaculty.php">
                    <?php include './service/faculty_records/facultysearchbyid.php' ?>
                    <table class="tbtwo">
                        <tr> <td> Faculty ID </td> </tr>
                        <tr> <td> <input type="number" placeholder="Enter Faculty ID" name="id" required="true" value="<?php echo $id; ?>"</td></tr>
                        <tr> <td> Faculty name</td> </tr>
                        <tr> <td> <select name="name" class="facultyselector" required="true"  value="<?php echo $name; ?>">
                                    <option value="Information Technology Faculty">Information Technology Faculty</option>
                                    <option value="Science Faculty">Science Faculty</option>
                                    <option value="Art Faculty">Art Faculty</option>
                                    <option value="Business Faculty">Business Faculty</option>
                                    <option value="Managaement Faculty">Managaement Faculty</option>
                                    <option value="Hospitality Faculty">Hospitality Faculty</option>
                                </select> </td> </tr>
                        <tr> <td> Dean </td> </tr>
                        <tr> <td> <input type="text" placeholder="Dean" name="dean" value="<?php echo $dean; ?>"</td> </tr>
                        <tr> <td> Building number</td> </tr>
                        <tr> <td> <input type="text" placeholder="Building number" name="building" value="<?php echo $building; ?>"</td> </tr>
                        <tr> <input type ="submit" name="Save" value="Save" class="s_one1" /> </tr>
                        <tr> <input type ="submit"  value="Update" class="newupdate1" /> </tr>
                    </table>
                </form>
            </div>

            <p class="topic2">Faculty Records</p>
            <div class="facdetails"> 
                <div class="formline2"></div>
                <br>
                <form method="GET" action="faculty.php">
                    <div class="top1">
                        <input type="text" name="SearchID" placeholder="Search here....">
                    </div>
                    <br>
                    <?php include './service/faculty_records/searchfaculty.php' ?>
                </form>
            </div>
        </div>
    </body>
</html>
