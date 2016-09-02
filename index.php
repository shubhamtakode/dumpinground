<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Create Dump</title>
        <?php require_once 'inc/cssjs.php'; ?>
    </head>
    <body>
        <?php require_once 'inc/navbar.php'; ?>
        <div class="pane">
            
        
        <div class="container first-container">
            <div class="col-xs-12 no-padding">
                <h4>Create your dump here</h4>
            </div>
            <div class="clearfix">&nbsp;</div>
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                require_once 'inc/connection.php';

// Check connection
                if (!$conn) {
                    die ('<div class="alert alert-danger" role="alert">'.mysqli_connect_error().'</div>') ;
                    
                } else {
                    $title = mysqli_real_escape_string($conn,$_POST['title']) ;
                    $content = mysqli_real_escape_string($conn,$_POST['content']);
                    $sql = "INSERT INTO pastes (title, content) VALUES ('" .$title  . "', '" . $content . "')";
                    if (mysqli_query($conn, $sql)) {
                        echo '<div class="alert alert-success" role="alert">Dump Created Successfully</div>';
                    } else {
                        echo '<div class="alert alert-danger" role="alert">'.mysqli_error($conn).'</div>' ;
                    }
                }
                mysqli_close($conn);
            }
            ?>
            <div class="row">
                <div class="col-xs-12 create-dump-tile">
                    <form method="POST">
                        <div class="input-group">
                            <span class="input-group-addon">Title</span>
                            <input type="text" name="title" class="form-control" required/>
                        </div>
                        <div class="clearfix">&nbsp;</div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea class="form-control" name="content" rows="13" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>

        </div>
            </div>
        <?php require_once 'inc/footer.php';?>
    </body>
</html>
