<?php
include 'database.php';

//Create Select query
$query = "SELECT * FROM shouts ORDER BY id DESC";
$shouts = mysqli_query($conn, $query);
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SHOUT IT! Shoutbox </title>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading" id="accordion">
                            <span class="glyphicon glyphicon-comment"></span> SHOUT IT! Shoutbox
                            <div class="btn-group pull-right">
                                <a type="button" class="btn btn-default btn-xs" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    <span class="glyphicon glyphicon-chevron-down"></span>
                                </a>
                            </div>
                        </div>
                        <div class="panel-collapse collapse in" id="collapseOne">
                            <div class="panel-body">
                                <ul class="chat">
<?php while ($row = mysqli_fetch_assoc($shouts)): ?>
                                        <li class="left clearfix"><span class="chat-img pull-left">
                                                <img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />
                                            </span>
                                            <div class="chat-body clearfix">
                                                <div class="header">
                                                    <strong class="primary-font"><?php echo $row['user']; ?></strong> <small class="pull-right text-muted">
                                                        <span class="glyphicon glyphicon-time"></span><?php echo $row['time']; ?></small>
                                                </div>
                                                <p>
    <?php echo $row['message']; ?>
                                                </p>
                                            </div>
                                        </li>  
<?php endwhile; ?>

                                </ul>
                            </div>
                            <div class="panel-footer paddingbtm5">
<?php if (isset($_GET['error'])): ?>

                                    <div class="alert alert-warning alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <strong>Warning!</strong> <?php echo $_GET['error']; ?>
                                    </div>


<?php endif; ?>

                            <form method="post" action="process.php">
                                <div class = "row">
                                    <div class="input-group">
                                        <div class = "col-xs-12 col-md-12">
                                            <input id="btn-input" type="text" name="message" class="col-xs-12 col-md-8 form-control input-sm" placeholder="Type your message here..." />
                                        </div>
                                        
                                        <div class = "col-xs-12 col-md-6 margintop10">
                                            <input id="btn-input" type="text" name="user" class="col-xs-12 col-md-6 form-control input-sm" placeholder="Enter your name" />

                                        </div>
                                        <div class="col-xs-12 col-md-6 margintop10">
                                            <span class="input-group-btn">
                                                <button type="submit" name="submit" class="col-sm-12 btn btn-warning" id="btn-chat">
                                                    Shout it Out</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>   
                            </form>

                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>