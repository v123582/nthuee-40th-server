    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 overflow">
                   <div class="social-icons pull-right">
                        <ul class="nav nav-pills">
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                            <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div> 
                </div>
             </div>
        </div>
        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="index.html">
                        <h1><img src="images/logo.png" alt="logo"></h1>
                    </a>
                    
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown active"><a href="index.html">Home</a></li>
                        <li><a href="#">風雲七十 <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="about.html" id='navheaderTitle'>緣起</a></li>
                                <li><a href="state1.html" id='navstate1Title'>沿革</a></li>
                                <li><a href="state2.html" id='navstate2Title'>大事記</a></li>
                                <li><a href="state3.html" id='navstate3Title'>台大電機系系友及師生傑出表現</a></li>
                            </ul>
                        </li>
                        <li><a href="news.html">最新消息</a></li>
                        <li><a href="activities.html">系列活動</a></li>
                    </ul>
                </div>
                <div class="search">
                    <form role="form">
                        <i class="fa fa-search"></i>
                        <div class="field-toggle">
                            <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <script type="text/javascript">
        jQuery(function($) {
            
            'use strict';

            console.log('===== Basic Html =====');
            var url = 'api/basic';
            $.getJSON(url, function (basic) {
                var basic = basic;
                $('#navheaderTitle').html(basic.headerTitle);
                $('#navstate1Title').html(basic.state1Title);
                $('#navstate2Title').html(basic.state2Title);
                $('#navstate3Title').html(basic.state3Title);

            });


        });
    </script>