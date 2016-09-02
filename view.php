<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>View Dump</title>
        <?php require_once 'inc/cssjs.php'; ?>
    </head>
    <body>
        <?php
        require_once 'inc/navbar.php';
        ?>
        <div class="pane">
            <div class="container first-container">
                <div class="row">
                    <div class="col-xs-12">
                        <?php
                        require_once 'inc/connection.php';
                        if (!$conn) {
                             die ('<div class="alert alert-danger" role="alert">'.mysqli_connect_error().'</div>') ;
                        } else {
                            if (isset($_GET['id'])) {
                                $id = mysqli_real_escape_string($conn, $_GET['id']);
                                if (is_numeric($id)) {
                                    $sql = "SELECT * FROM pastes WHERE id=" . $id;
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        // output data of each row
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                            <div class="col-xs-12 dumps-list-item">
                                                <div class="col-xs-12 dumps-list-item-title">
                                                    <h4>
                                                        <?php echo htmlspecialchars($row['title']); ?>
                                                    </h4>
                                                </div>
                                                <div class="clearfix">&nbsp;</div>
                                                <div class="col-xs-12">
                                                    <?php echo htmlspecialchars($row['content']); ?>       
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- inrupy -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-0605139645921868"
     data-ad-slot="8253182131"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

                                            </div>  

                                            <?php
                                        }
                                    } else {
                                        ?>
                                        <div class="col-xs-12">
                                            No Pastes Found
                                        </div>
                                        <?php
                                    }
                                }
                            }
                        }
                        ?>
                    </div>

                </div>
            </div>
        </div>
        <?php require_once 'inc/footer.php'; ?>
    </body>
</html>