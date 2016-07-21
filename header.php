<!DOCTYPE html>
<html>

<head>
    <title>THE MATTHEW</title>
    <!-- BOOTSTRAP STUFF -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!-- MY STUFF -->
    <link href='https://fonts.googleapis.com/css?family=Exo' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php global $active_menu; ?>
    <nav class="navbar navbar-inverse navbar-fixed-top" id="header-nav">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">THE MATTHEW2</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">

            
                <ul class="nav navbar-nav">
                    <li class="<?php if($active_menu == 'index') echo "active"; ?>"><a href="index.php">Home</a>
                    </li>
                    <li class="<?php if($active_menu == 'about') echo "active"; ?>"><a href="#about">About</a>
                    </li>
                    <li class="<?php if($active_menu == 'contact') echo "active"; ?>"><a href="contact.php">Contact</a>
                    </li>
                    <li class="<?php if($active_menu == 'blog') echo "active"; ?>"><a href="blog.php">Blog</a>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>