<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo $title ?></title>
    <meta name="og:image"  content="<?php echo $favicon ?>" />
    <meta name="description" content="<?php echo $description ?>" />
    <meta name="theme-color" content="<?php echo $themecolor ?>" />
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <header style="background-image: url(&quot;assets/img/Group%2048.svg&quot;);width: 100%;height: 100%;padding-bottom: 7rem;">
        <nav class="navbar navbar-light navbar-expand-lg navigation-clean" style="z-index: 100;">
            <div class="container"><a class="navbar-brand navbar-title" href="#"><?php echo $name ?></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1" style="z-index: 2;">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                        <?php foreach ($Navbar as $r2): ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo $r2["Link"] ?>"><?php echo $r2["Name"] ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container mg-2">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="header-h1"><?php echo $headerTitle ?></h1>
                    <h1 class="header-desc"><?php echo $headerDesc ?><br></h1>
                </div>
                <div class="col-md-6" style="text-align: center;margin: auto;"><img class="side-img" src="<?php echo $icon ?>"></div>
            </div>
        </div>
    </header>
    <div class="container mg-3">
        <div class="row">
            <div class="col-md-12">
                <h1 class="heading-first"><?php echo $sectionOneTitle ?></h1>
                <h1 class="heading-bottom"><?php echo $sectionOneSlogan ?></h1>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 2rem;">
        <div class="row">
            <?php foreach ($Features as $r2): ?>
            <div class="col-md-4" style="margin-bottom: 30px;">
                <div class="card feature-card">
                    <div class="card-body" style="text-align: center;padding: 30px;"><img class="feature-img" src="<?php echo $r2["Icon"] ?>">
                        <h4 class="card-title feature-title"><?php echo $r2["Title"] ?></h4>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="container mg-3">
        <div class="row">
            <div class="col-md-12">
                <h1 class="heading-first"><?php echo $sectionTwoTitle ?></h1>
                <h1 class="heading-bottom"><?php echo $sectionTwoSlogan ?></h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="text-align: center;">
                <button class="btn btn-primary cat-buton BTN" type="button" data-category-target="*">All</button>
                <button class="btn btn-primary cat-buton BTN" type="button" data-category-target="One">One</button>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 3rem;">
        <div class="row">
            <?php foreach ($Products as $r2): ?>
            <div class="col-md-4" data-category="<?php echo $r2["Category"] ?>">
                <div class="card product-card">
                    <div class="card-header"><img class="product-img" src="<?php echo $r2["Image"] ?>"></div>
                    <div class="card-body">
                        <h4 class="card-title product-name"><?php echo $r2["Title"] ?></h4>
                        <p class="card-text product-desc"><?php echo $r2["Description"] ?><br></p><button class="btn btn-primary purchas-ebtn" type="button" data-sellix-product="<?php echo $r2["SellixID"] ?>">Purchase</button>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.sellix.io/static/js/embed.js"></script>
</body>

</html>