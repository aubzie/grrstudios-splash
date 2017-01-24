<?php
    //header('Location: http://grrstudios.com/pillow-zombies');
    //exit;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Pillow Zombies, tower defense, TD, grrstudios">
    <meta name="description" content="Pillow Zombies is a micro-management tower defense game for the PC. Coming soon 2017.">
    <title>Pillow Zombies - Grr Studios</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="http://pillowzombies.com/favicon.ico">

    <meta property="og:title" content="Pillow Zombies">
    <meta property="og:type" content="Blog">
    <meta property="og:image" content="http://pillowzombies.com/T_C_pillowzombies.png">
    <meta property="og:url" content="http://pillowzombies.com">
    <meta property="og:description" content="Pillow Zombies is a micro-management tower defense game for the PC. Coming soon 2017.">
    
    <meta name="twitter:card" content="summary">
    <meta name="twitter:url" content="http://pillowzombies.com">
    <meta name="twitter:title" content="Pillow Zombies - Grr Studios">
    <meta name="twitter:description" content="Pillow Zombies is a micro-management tower defense game for the PC. Coming soon 2017.">
    <meta name="twitter:image" content="http://pillowzombies.com/T_C_pillowzombies.png">
    
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4 text-center">
                <img src="img/PZ_title.png" alt="Pillow Zombies TD" id="pz-logo">
            </div>
            <div class="col-sm-8">
                <div id="content">

                    <div id="pz-video" class="text-center">
                        <div class="embed-container">
                            <iframe src="https://player.vimeo.com/video/198649860" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                        </div>
                    </div>

                    <div id="grr-email" class="text-center">
                        <strong>EMAIL US:</strong> <a href="mailto: info@grrstudios.com">info@grrstudios.com</a>
                    </div>


                    <p class="follow-txt text-center">Follow us for updates!</p>
 
                    
                    <div id="social" class="text-center">
                        <a href="https://www.instagram.com/grrstudios" target="_blank"><img src="img/icon_instagram.png" alt="Instagram"></a>
                        <a href="https://www.twitter.com/GrrStudios" target="_blank"><img src="img/icon_twitter.png" alt="Twitter"></a>
                        <a href="https://www.facebook.com/pillowzombies/" target="_blank"><img src="img/icon_facebook.png" alt="Facebook"></a>
                    </div>


                    <div id="contact-form">
@if ($success)
                        <p id="email-success" class="text-center">Thank you! Your form has been submitted.</p>

@else
                        <form class="form-horizontal" method="post">
                            {{ csrf_field() }}
                            <div class="form-group{{ ($errors->has('fullname')) ? ' has-error' : '' }}">
                                <label class="col-sm-3 col-sm-offset-1 control-label" for="fullname">Name *</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Your full name" value="{{ old('fullname') }}" aria-describedby="errorBlockFullname">
@if ($errors->has('fullname'))
                                    <span id="errorBlockFullname" class="help-block">{{ $errors->first('fullname') }}</span>
@endif
                                </div>
                            </div>

                            <div class="form-group{{ ($errors->has('email')) ? ' has-error' : '' }}">
                                <label class="col-sm-3 col-sm-offset-1 control-label" for="email">Email *</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="youremail@domain.com" value="{{ old('email') }}">
@if ($errors->has('email'))
                                    <span id="errorBlockEmail" class="help-block">{{ $errors->first('email') }}</span>
@endif
                                </div>
                            </div>

                            <div class="form-group{{ ($errors->has('comments')) ? ' has-error' : '' }}">
                                <label class="col-sm-3 col-sm-offset-1 control-label" for="comments">Comments *</label>
                                <div class="col-sm-7">
                                    <textarea class="form-control" id="comments" name="comments" rows="5" placeholder="Ask us anything!" aria-describedby="errorBlockComments">{{ old('comments') }}</textarea>
@if ($errors->has('comments'))
                                    <span id="errorBlockComments" class="help-block">{{ $errors->first('comments') }}</span>
@endif
                                </div>
                            </div>

                            <div class="form-group{{ ($errors->has('g-recaptcha-response')) ? ' has-error' : '' }}">
                                <label class="col-sm-3 col-sm-offset-1 control-label">reCAPTCHA *</label>
                                <div class="col-sm-7">
                                    <div class="g-recaptcha" data-sitekey="6LeN4RIUAAAAAEsHpUdJFqXrRuX2P4fsHCQLYCKk"></div>
@if ($errors->has('g-recaptcha-response'))
                                    <span id="errorBlockRecaptcha" class="help-block">{{ $errors->first('g-recaptcha-response') }}</span>
@endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-4 col-sm-7">
                                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                </div>
                            </div>
                        </form>
@endif
                    </div>
                   
                    <div class="text-center">
                        <a href="http://www.grrstudios.com" target="_blank" id="grr-logo"><img src="img/logo_grr.png" alt="Grr Studios"></a>
                        <div id="rights">All Rights Reserved 2017</div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-90753652-1', 'auto');
        ga('send', 'pageview');
    </script>
</body>
</html>