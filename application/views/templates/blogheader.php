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
    <script type="text/javascript" src='https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=h4pr0a5zaz8o7e7xhc65d21ast98zacoq6vrp6xsmeikrt81'></script>
    <script type="text/javascript">
    tinymce.init({
      selector: '#myTextarea',
      width: 1200,
      height: 500,
      plugins: [
        'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
        'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime nonbreaking',
        'save table contextmenu directionality emoticons template paste textcolor'
      ],
      content_css: 'css/style.css',
      toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview fullpage | forecolor backcolor emoticons'
    });
    </script>
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
              <?foreach ($url as $ArrURL) {?>
                <li><a href="<?=base_url() . $url['Link']?>"><?=$url['Name']?></a></li>
              <?}?>
            </ul>
          </div>
        </nav>
