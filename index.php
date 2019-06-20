<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <meta http-equiv="refresh" content="2"> -->
    <title>A library of useful DM tools</title>

    <!-- BOOTSTRAP CSS FILE-->
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
    <!-- BOOTSTRAP JS FILE-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <?php 
    include('php/dbAccess.php');
    $dbh->setAttribute(PDO::ATTR_ORACLE_NULLS,PDO::NULL_TO_STRING);

    ?>
      <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <header class="sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand">DM Toolbox</a>
            <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="my-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">About <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="contact.php" tabindex="-1" aria-disabled="true">Add to the list</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-1 offset-11" id="backTop">
            <a href="#sidebar"><img src="octicons/package/build/svg/arrow-up.svg" alt=""></a>
            </div>
        </div>
        <div class="row mt-3">
            <section id="sidebar" class="col-lg-3 col-sm-12">
                <ol>
                    <li class="mt-3">
                        <a href="#map">Maps</a>
                    </li>
                    <li class="mt-3">
                        <a href="#item">Items</a>
                    </li>
                    <li class="mt-3">
                        <a href="#campaign"> Campaigns</a>
                    </li>
                    <li class="mt-3">
                        <a href="#music">Music</a>
                    </li>
                    <li class="mt-3">
                        <a href="#gameplay"> Gameplay</a>
                    </li>
                </ol>
            </section>
            <section class="col-lg-9 col-sm-12">
                <div class="row">
                    <section class="offset-lg-4 col-lg-8">
                        <p>
                            This website is a mean for me to gather and regroup all the tools I've used throughout my DM-ing times.
                            They include generators for names, dungeons, maps and encounters; campaigning tools; magic item lists as well as one shot campaigns.
                        </p>
                        
                        <?PHP
                        $getInfo = $dbh->prepare("SELECT * FROM `websites` WHERE category = 'map'");                    
                        $getInfo->execute();
                        echo '<h2 class="mt-4" id="map">Maps</h2>';
                        foreach ($getInfo as $key => $value) { 
                            echo '
                            <div class="card mt-3">
                                <div class="card-body">
                                    <h5 class="card-title">'.$value[1].' </h5>
                                    <p class="card-text">'.$value[2].'</p>
                                </div>
                                <div class="card-footer">
                                    <button type="button" class="btn btn-success"><a href="'.$value[3].'" target="_blank">Check it out</a></button>
                                </div>
                            </div>';
                        };
                        if(empty($value[1])){
                            echo '
                            <div class="card mt-3">
                                <div class="card-body">
                                    <h5 class="card-title text-secondary">There are no elements in this category </h5>
                                </div>
                            </div>';
                        }
                        $getInfo = $dbh->prepare("SELECT * FROM `websites` WHERE category = 'music'");
                        $getInfo->execute();
                        echo '<h2 class="mt-4" id="music">Music</h2>';
                        foreach ($getInfo as $key => $value) { 
                            echo '
                            <div class="card mt-3">
                                <div class="card-body">
                                    <h5 class="card-title">'.$value[1].' </h5>
                                    <p class="card-text">'.$value[2].'</p>
                                </div>
                                <div class="card-footer">
                                    <button type="button" class="btn btn-success"><a href="'.$value[3].'" target="_blank">Check it out</a></button>
                                </div>
                            </div>';
                        };
                        if(empty($value[1])){
                            echo '
                            <div class="card mt-3">
                                <div class="card-body">
                                    <h5 class="card-title text-secondary">There are no elements in this category </h5>
                                </div>
                            </div>';
                        }
                        $getInfo = $dbh->prepare("SELECT * FROM `websites` WHERE category = 'campaign'");
                        $getInfo->execute();
                        echo '<h2 class="mt-4" id="campaign">Campaign</h2>';
                        foreach ($getInfo as $key => $value) { 
                            echo '
                            <div class="card mt-3">
                                <div class="card-body">
                                    <h5 class="card-title">'.$value[1].' </h5>
                                    <p class="card-text">'.$value[2].'</p>
                                </div>
                                <div class="card-footer">
                                    <button type="button" class="btn btn-success"><a href="'.$value[3].'" target="_blank">Check it out</a></button>
                                </div>
                            </div>';
                        };
                        if(empty($value[1])){
                            echo '
                            <div class="card mt-3">
                                <div class="card-body">
                                    <h5 class="card-title text-secondary">There are no elements in this category </h5>
                                </div>
                            </div>';
                        }
                        $getInfo = $dbh->prepare("SELECT * FROM `websites` WHERE category = 'gameplay'");
                        $getInfo->execute();
                        echo '<h2 class="mt-4" id="gameplay">Gameplay</h2>';
                        foreach ($getInfo as $key => $value) { 
                            echo '
                            <div class="card mt-3">
                                <div class="card-body">
                                    <h5 class="card-title">'.$value[1].' </h5>
                                    <p class="card-text">'.$value[2].'</p>
                                </div>
                                <div class="card-footer">
                                    <button type="button" class="btn btn-success"><a href="'.$value[3].'" target="_blank">Check it out</a></button>
                                </div>
                            </div>';
                        };
                        if(empty($value[1])){
                            echo '
                            <div class="card mt-3">
                                <div class="card-body">
                                    <h5 class="card-title text-secondary">There are no elements in this category </h5>
                                </div>
                            </div>';
                        }
                        $getInfo = $dbh->prepare("SELECT * FROM `websites` WHERE category = 'item'");
                        $getInfo->execute();
                        echo '<h2 class="mt-4" id="item">Item</h2>';
                        foreach ($getInfo as $key => $value) { 
                            echo '
                            <div class="card mt-3">
                                <div class="card-body">
                                    <h5 class="card-title">'.$value[1].' </h5>
                                    <p class="card-text">'.$value[2].'</p>
                                </div>
                                <div class="card-footer">
                                    <button type="button" class="btn btn-success"><a href="'.$value[3].'" target="_blank">Check it out</a></button>
                                </div>
                            </div>';

                        };
                        if(empty($value[1])){
                            echo '
                            <div class="card mt-3">
                                <div class="card-body">
                                    <h5 class="card-title text-secondary">There are no elements in this category </h5>
                                </div>
                            </div>';
                        }
                        ?>
                    </section>
                </div>
            </section>
        </div>
    </div>
    <footer class="fixed-bottom">
 @cell
    </footer>
</body>
</html>