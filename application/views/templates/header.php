<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="description" content="Financial Brains - Best CFA, CMA Courses in Egypt">
     <meta name="author" content="">
     <title>Financial Brains CP</title>
     <link href="<?=base_url() ?>/css/bootstrap.min.css" rel="stylesheet">
     <link href="<?=base_url() ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link href="<?=base_url() ?>/css/style.css" rel="stylesheet" type="text/css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <!--[if lt IE 9]> <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js">
    </script> <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">FinancialBrains ControlPanel</a>
    </div>
          <div class="collapse navbar-collapse topnav" id="myNavbar">
            <ul class="nav navbar-nav">
              <?foreach ($ArrURL as $url) {?>
                <li><a href="<?=base_url() . $url['Link']?>"><?=$url['Name']?></a></li>
              <?}?>
            </ul>
          </div>
        </nav>
