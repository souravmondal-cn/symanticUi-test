<!DOCTYPE html>
<html>
    <head>
        <title>Form Validation with jQuery</title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <link href="bower_components/Semantic-UI/dist/semantic.css" rel="stylesheet" type="text/css"/>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body id="grid">
        <div class="container">
            <div class="ui inverted menu">
              <a class="active item">
                <i class="home icon"></i> Home
              </a>
              <a class="item">
                <i class="mail icon"></i> Messages
              </a>
              <a class="item">
                <i class="user icon"></i> Friends
              </a>
            </div>
            <div class="ui grid">
                <div class="row">
                    <div class="five wide column">
                        <h1>User Registration</h1>
                        <form action="#" method="get" id="myform" class="ui form">
                            <div class="field">
                                <div class="ui labeled input">
                                    <div class="ui label">
                                        Username
                                    </div>
                                    <input type="text" placeholder="username" name="username" id="username"/>
                                </div>
                            </div>
                            <div class="field">
                                <div class="ui labeled input">
                                    <div class="ui label">
                                        Email @
                                    </div>
                                    <input type="email" name="useremail" id="useremail" placeholder="email address"/>
                                </div>
                            </div>
                            <div class="field">
                                <label>Biography</label>
                                <textarea name="biodata" id="biodata"></textarea>
                            </div>
                            <input type="submit" value="Create" class="ui button"/>
                        </form>
                    </div>
                    <div class="eleven wide column">
                        <div class="ui divided list">
                            <div class="item">
                                <i class="map marker icon"></i>
                                <div class="content">
                                    <a class="header">Krowlewskie Jadlo</a>
                                    <div class="description">An excellent polish restaurant, quick delivery and hearty, filling meals.</div>
                                </div>
                            </div>
                            <div class="item">
                                <i class="map marker icon"></i>
                                <div class="content">
                                    <a class="header">Xian Famous Foods</a>
                                    <div class="description">A taste of Shaanxi's delicious culinary traditions, with delights like spicy cold noodles and lamb burgers.</div>
                                </div>
                            </div>
                            <div class="item">
                                <i class="map marker icon"></i>
                                <div class="content">
                                    <a class="header">Sapporo Haru</a>
                                    <div class="description">Greenpoint's best choice for quick and delicious sushi.</div>
                                </div>
                            </div>
                            <div class="item">
                                <i class="map marker icon"></i>
                                <div class="content">
                                    <a class="header">Enid's</a>
                                    <div class="description">At night a bar, during the day a delicious brunch spot.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ui modal" id="alertMessage">
            <i class="close icon"></i>
            <div class="content">
                <div class="description">
                    <h2>Validation Failed</h2>
                </div>
            </div>
        </div>
        <script src="http://code.jquery.com/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="bower_components/Semantic-UI/dist/semantic.min.js" type="text/javascript"></script>
        <script src="validate.js" type="text/javascript"></script>
    </body>
</html>
