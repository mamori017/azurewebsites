<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="mamori017" name="Keywords" />
    <meta content="mamori017" name="Description" />
    <meta content="mamori017" name="Author" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>mamori017.azurewebsites.net</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon" /> 
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="css/style.css" rel="stylesheet"/>
</head>
<body>
    <div class="jumbotron">
        <img src="images/logo.png" class="center-block img-responsive"/>
    </div>
    <?php
        require('common/common.php');
        $conn = connect(); 
        if( !$conn ) {
            print "Connection error.<br />";
            die( print_r( sqlsrv_errors(), true));
        }
    ?>        
    <div class="container">
        <div class="col-md-12 text-right">
            <iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fmamori017.azurewebsites.net%2F&layout=button&size=large&mobile_iframe=true&width=75&height=28&appId" width="75" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
            <a href="https://twitter.com/share" class="twitter-share-button" data-size="large" data-url="http://mamori017.azurewebsites.net/" data-text="Test tweet" data-size="default" data-hashtags="mamori017dev">Tweet</a>
        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-xs-4">
                    <h4>Repository</h4>
                    <?php getData($conn,0); ?>
                </div>

                <div class="col-xs-4">
                    <h4>Schedule</h4>
                    <?php getData($conn,1); ?>
                </div>

                <div class="col-xs-4">
                    <h4>Social</h4>
                    <?php getData($conn,2); ?>
                </div>

                <div class="col-xs-4">
                    <h4>XaaS</h4>
                    <?php getData($conn,3); ?>
                </div>

                <div class="col-xs-4">
                    <h4>Etc</h4>
                    <?php getData($conn,4); ?>
                </div>
            </div>
        </div>
        <?php $conn = null; ?>
        <div class="col-md-4">
            <h4>GitHub</h4>
            <div class="github-card" data-user="mamori017"></div>
            <script src="http://cdn.jsdelivr.net/github-cards/latest/widget.js"></script>
        </div>

        <div class="col-md-4">
            <h4>Timeline</h4>
            <p>
               <a data-height="300"class="twitter-timeline" href="https://twitter.com/mamori017">Tweets by mamori017</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
            </p>
        </div>
    </div>
    <footer class="text-center">
        <p>&copy; 2017 mamori017</p>
    </footer>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>
</html>
