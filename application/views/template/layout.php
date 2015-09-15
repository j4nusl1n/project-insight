<!doctype html>
<html class="no-js" lang="<?php echo $lang; ?>">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $site_title; ?></title>
  <meta name="description" content="<?php echo $site_description; ?>" />
  <meta name="keywords" content="<?php echo $site_keywords; ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="/home/assets/images/shortcuticon.ico" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- 最新編譯和最佳化的 CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <!-- 選擇性佈景主題 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
  <?php echo $meta_tag; ?>
  <?php echo $styles; ?>
  <!-- JS -->
  <?php echo $scripts_header; ?>
  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <!-- 最新編譯和最佳化的 JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <!-- AngularJS -->
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.2/angular.min.js"></script>
  <!-- justfont -->
  <script src="//s3-ap-northeast-1.amazonaws.com/justfont-user-script/jf-35440.js"></script>
  <!-- Self-defined JavaScript -->
  <script type="text/javascript" src="/lanpa/assets/javascript/index.js"></script>
  <script type="text/javascript" src="/lanpa/assets/javascript/myPlugin.js"></script>
  <script src="/lanpa/assets/javascript/underscore-min.js"></script>
</head>
<body>
  <div class="header">
    <nav class="navbar navbar-inverse navbar-static-top">
     <div class="navbar-header">
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#top-bar-collapse">
         <span class="sr-only">Toggle Nav</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </button>
       <a class="navbar-brand" href="/lanpa"><span class="fa fa-home fa-inverse"></span></a>
     </div>
     <div class="collapse navbar-collapse" id="top-bar-collapse">
       <ul class="nav navbar-nav">
        <li><a href="/lanpa/insight/channels"><span class="fa fa-user fa-inverse"></span> 實況主</a></li>
        <li><a href="/lanpa/insight/games"><span class="fa fa-gamepad fa-inverse"></span> 遊戲</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right" style="right:5%;">
        <form class="navbar-form navbar-left" role="search" action="/lanpa/search/result" target="_self" method="POST">
          <input type="text" class="form-control" name="searchStr" placeholder="找遊戲/找實況主">
          <button type="submit" class="btn btn-primary" value="submit">搜尋</button>
        </form>
        <li><a href="" class="dropdown-toggle" data-toggle="dropdown">關於我<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="https://github.com/j4nusl1n" target="_blank"><span class="fa fa-github"></span> GitHub</a></li>
            <li><a href="#" data-toggle="modal" data-target="#mail-me"><span class="fa fa-envelope-o"></span> Email</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</div>
<div class="btn btn-info" id="scroll-top">
  <i class="fa fa-arrow-up"></i> Top
</div>
<div id="mail-me" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content"><div class="modal-body">尚未布置</div>
      <!--<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="text-align:center">Mail to me</h4>
      </div>
      <div class="modal-body">
        <form action="#" method="post" role="form">
          <div class="form-group">
            <label for="sender_email">Your Email Address</label>
            <input type="email" class="form-control" id="sender_email" name="sender_email" placeholder="example@example.com"/>
          </div>
          <div class="form-group">
            <label for="sender_name">Your Name</label>
            <input type="text" class="form-control" id="sender_name" name="sender_name" placeholder="Anonymous"/>
          </div>
          <div class="form-group">
            <label for="mail_content">Content</label>
            <textarea class="form-control" id="mail_content" name="mail_content" placeholder="Say something! :D"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <div class="text-center">
            <button type="submit" class="btn btn-primary" id="mail_submit" >Send!</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </form>
      -->
    </div>
  </div>
</div>
<div id="content">
  <?php echo $content; ?>
</div>
<?php echo $scripts_footer; ?>
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
  function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
e=o.createElement(i);r=o.getElementsByTagName(i)[0];
e.src='//www.google-analytics.com/analytics.js';
r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>
</body>
</html>
