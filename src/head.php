<!DOCTYPE HTML>
<html xmlns:og="https://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml" itemscope itemtype="https://schema.org/Organization">
<head prefix="og: https://ogp.me/ns# fb: https://ogp.me/ns/fb# <?=$this->client->fb_canvas_name?>: https://ogp.me/ns/fb/<?=$this->client->fb_canvas_name?>#">
<link href="https://<?=$this->client->slug?>.<?=BASEDOMAIN?>rss" rel="alternate" type="application/rss+xml" title="<?=$this->client->name?> Career Center" />
<link rel="Shortcut Icon" href="https://<?=$this->client->slug?>.<?=BASEDOMAIN?>images/<?=$this->client->slug?>/favicon.ico" />
<link rel="stylesheet" type="text/css" href="//<?=$this->client->slug?>.<?=BASEDOMAIN?>css/jquery-ui-1.8.17.custom.css" />
<link rel="stylesheet" href="//<?=$this->client->slug?>.<?=BASEDOMAIN?>css/<?=$this->client->slug?>/style.css" type="text/css" />
<meta charset="utf-8">
<!-- Iphone -->
<!-- apple iphone meta tag -->
<!--<meta name="apple-mobile-web-app-capable" content="true" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
-->
<!-- must be 320 x 460 px in portrait -->
<link rel="apple-touch-icon-precomposed" href="https://<?=$this->client->slug?>.<?=BASEDOMAIN?>images/<?=$this->client->slug?>/iphone.png"/> 
<link rel="apple-touch-icon" href="https://<?=$this->client->slug?>.<?=BASEDOMAIN?>images/<?=$this->client->slug?>/iphone.png"/>  
<link rel="apple-touch-startup-image" href="https://<?=$this->client->slug?>.<?=BASEDOMAIN?>images/<?=$this->client->slug?>/splash.png" />  
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<meta name="apple-mobile-web-app-capable" content="yes" />  
<meta name="apple-mobile-web-app-status-bar-style" content="default" /> 
<!-- End Iphone -->
<meta name="HandheldFriendly" content="true" />
<meta name="MobileOptimized" content="500" />
<meta name="Viewport" content="width=500" />
<?php if(isset($this->job)): ?>
<meta property="fb:app_id"      content="<?=$this->client->fb_app_id?>" /> 
<meta property="og:type"        content="<?=$this->client->slug?>careers:job" /> 
<meta property="og:url"         content="https://<?=$this->client->slug?>.<?=BASEDOMAIN?>job/<?=$this->job->id?>/<?=urlencode($this->job->title)?>/" /> 
<meta property="og:title"       content="<?=$this->job->title?>" /> 
<meta property="og:description" content="<?=substr(strip_tags($this->job->description),0,500)?>..." /> 
<meta property="og:image"       content="https://<?=$this->client->slug?>.<?=BASEDOMAIN?>images/<?=$this->client->slug?>/logo.png" />
<meta property="fb:admins" content="1147728265,1132516578"/>
<meta name="description" content="<?=substr(strip_tags($this->job->description),0,500)?>..." />
<!-- google plus one-->
<meta itemprop="name" content="<?=$this->job->title?>">
<meta itemprop="description" content="<?=substr(strip_tags($this->job->description),0,500)?>..">
<?php 
	$part = explode(' ',$this->job->title);
	$keywords = implode(', ', $part);
?>
<meta name="keywords" content="<?=$keywords?>, <?=$this->client->name?>, Career, Jobs" />
<?php else: ?>
<meta name="description" content="<?=$this->client->name?> Career Center. We help you find your dream jobs" />
<meta name="keywords" content="<?=$this->client->name?>, Career, Jobs" />
<!-- google plus one-->
<meta itemprop="name" content="<?=$this->client->name?> Career Center">
<meta itemprop="description" content="<?=$this->client->name?> Career Center. We help you find your dream jobs">
<?php endif; ?>
<title><?=$this->client->name?> Career Center</title>
<!-- Pulled from https://code.google.com/p/html5shiv/ -->
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="//<?=$this->client->slug?>.<?=BASEDOMAIN?>js/jquery-ui-1.8.17.custom.min.js" type="text/javascript"></script>
<script src="//raw.github.com/ehynds/jquery-ui-multiselect-widget/1.13/src/jquery.multiselect.js" type="text/javascript"></script>

<?php if($this->fb->is_app_install()): ?>
<?php
$ip = $_SERVER['REMOTE_ADDR'];
if($ip == '75.146.43.77'){
}
?>

<?php endif; ?>
<script type="text/javascript">
var cid = <?=$this->client->id?>;
var cname = '<?=$this->client->name?>';
var jid = <?= isset($this->job->id) ? $this->job->id : 0; ?>;
var slug = '<?=$this->client->slug?>';
var first_time = <?=$first_time?>;
var session_id = 10;
var BASEDOMAIN = '<?=BASEDOMAIN?>';
<?php if(isset($_SESSION['user_id'])){ ?>
var user_id = '<?=$_SESSION['user_id']?>';
<?php } ?>
</script>
<script src="//<?=$this->client->slug?>.<?=BASEDOMAIN?>/js/main.js" type="text/javascript"></script>
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "ur-fafddc1a-9313-aab9-846a-41c58808375"});</script>
</head>
<body>
	<div id="fb-root"></div>
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId: '<?=$this->client->fb_app_id?>',
          cookie: true,
          xfbml: true,
          oauth: true
        });
		FB.Canvas.setAutoResize();
      };
      (function() {
        var e = document.createElement('script'); e.async = true;
        e.src = document.location.protocol +
          '//connect.facebook.net/en_US/all.js';
        document.getElementById('fb-root').appendChild(e);
      }());
    </script>