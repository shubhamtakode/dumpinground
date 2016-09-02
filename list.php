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
        <title>List all Dumps</title>
        <?php require_once 'inc/cssjs.php'; ?>
    </head>
    <body>
        <?php require_once 'inc/navbar.php'; ?>
        <div class="pane">
            <div class="container first-container">
                <?php
                $page = 0;
                if (isset($_GET['page'])) {
                    if (is_numeric($_GET['page'])) {
                        $page = $_GET['page'];
                    }
                }
                ?>
                <div class="row">

                    <!-- Pagination -->
                    <div class="col-xs-12">
                        <nav>
                            <ul class="pager">
                                <li class="previous"><a href="<?php echo $_BASE_PATH; ?>list.php/?page=<?php
                                    if ($page == 0) {
                                        echo $page;
                                    } else {
                                        echo ($page - 2);
                                    }
                                    ?>"><span aria-hidden="true">&larr;</span> Older</a></li>
                                <li class="next"><a href="<?php echo $_BASE_PATH; ?>list.php/?page=<?php echo ($page + 2); ?>">Newer <span aria-hidden="true">&rarr;</span></a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Pagination -->

                    <div class="col-xs-12">
                        <?php
                        require_once 'inc/connection.php';
                        if (!$conn) {
                             die ('<div class="alert alert-danger" role="alert">'.mysqli_connect_error().'</div>') ;
                        } else {
                            $sql = "SELECT id,title,SUBSTR(content,1,500) as content FROM pastes LIMIT " . $page . ",2";
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
                                        <div class="col-xs-12">
                                            <?php echo htmlspecialchars($row['content']); ?>
                                        </div>
                                        <div class="col-xs-12"><a href="<?php echo $_BASE_PATH ?>view.php?id=<?php echo $row['id'] ?>"><button class="btn btn-default pull-right">View More</button></a></div>
                                    </div>
                                    <div class="col-xs-12"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- inrupy -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-0605139645921868"
     data-ad-slot="8253182131"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>


                                    <?php
                                }
                            } else {
                                ?>
                        <div class="clearfix">&nbsp;</div>
                                <div class="col-xs-12">
                                    No Dumps Found
                                </div>
                        <div class="clearfix">&nbsp;</div>
                                <?php
                            }
                        }
                        ?>
                    </div>

                    <!-- Pagination -->
                    <div class="col-xs-12">
                        <nav>
                            <ul class="pager">
                                <li class="previous"><a href="<?php echo $_BASE_PATH; ?>list.php/?page=<?php
                                    if ($page == 0) {
                                        echo $page;
                                    } else {
                                        echo ($page - 2);
                                    }
                                    ?>"><span aria-hidden="true">&larr;</span> Older</a></li>
                                <li class="next"><a href="<?php echo $_BASE_PATH; ?>list.php/?page=<?php echo ($page + 2); ?>">Newer <span aria-hidden="true">&rarr;</span></a></li>
                            </ul>
                        </nav>
                    </div>

                    <!-- Pagination -->

                </div>
            </div>
        </div>
        <?php require_once 'inc/footer.php'; ?>
    </body>
</html>