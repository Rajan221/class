<html>
    <head>
        <title>Contact form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-8">
                       <div class="row">
                            <div class="col-6"><h5>Contacts</h5></div>
                            
                        </div>
                        <hr/>
                        <?php
                        include("db/connect.php");
                        $query= "SELECT * FROM data";

                        $result = mysqli_query($con, $query);

                        ?>

                        <table class="table" border=1>
                            <thead>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Address</th>
                                <th>Course</th>
                                <th>Action</th>
                            </thead>
                            <?php while($row=mysqli_fetch_assoc($result)){ ?>
                                <tr>
                                    <td><?php echo $row['username'] ?></td>
                                    <td><?php echo $row['email'] ?></td>
                                    <td><?php echo $row['contact'] ?></td>
                                    <td><?php echo $row['address'] ?></td>
                                    <td><?php echo $row['course_enroll'] ?></td>
                                    <td>
                                        <a href="delete.php?id=<?php echo $row['sn']; ?>">Delete</a>|
                                        <a href="#">Update</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </table>

                        <div class="col-2">
                                <a href="form.php" class="btn btn-primary mb-3" style="float:right;">Add Contact</a>
                        </div>
                            <?php
                                if(isset($_GET['msg'])){
                                    echo "<script>alert('".$_GET['msg']."')</script>";
                                }
                            ?>
                        </div>
                </div>
            </div>  
    </body>
    <script src="https://kit.fontawesome.com/a74baea4b2.js" crossorigin="anonymous"></script>
</html>
`