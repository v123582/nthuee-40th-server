@extends('clients/layouts/_app')

@section('content')

    <section id="home-slider">
        <div class="container">
            <div class="main-slider animate-in">
                <div class="slide-text">
                    <a href='/about.html'><h1 id='headerTitle'></h1></a>
                    <p id='headerDescription'></p>
                </div>
                <img src="images/home/slider/slide1/house.png" class="img-responsive slider-house" alt="slider image">
                <img src="images/home/slider/slide1/circle1.png" class="slider-circle1" alt="slider image">
                <img src="images/home/slider/slide1/circle2.png" class="slider-circle2" alt="slider image">
                <img src="images/home/slider/slide1/cloud1.png" class="slider-cloud1" alt="slider image">
                <img src="images/home/slider/slide1/cloud2.png" class="slider-cloud2" alt="slider image">
                <img src="images/home/slider/slide1/cloud3.png" class="slider-cloud3" alt="slider image">
                <img src="images/home/slider/slide1/sun.png" class="slider-sun" alt="slider image">
                <img src="images/home/cycle.png" class="slider-cycle" alt="">
            </div>
        </div>        
    </section>
  
    <section id="" class="padding wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeIn;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 activities">
                    <div class="col-sm-10 col-sm-offset-1 text-center">
                        <h1 class="margin-bottom">系列活動</h1>
                        <table class="table table-striped"> 
                            <tbody> 
                            <tr> 
                                <th scope="row"></th> 
                                <td></td> 
                                <td></td> 
                            </tr> 
                            </tbody> 
                        </table>   
                        <a href="activities.html" class="btn btn-common">更多系列活動</a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 news">
                    <div class="col-sm-10 col-sm-offset-1 text-center">
                        <h1 class="margin-bottom">最新消息</h1>
                        <table class="table table-striped"> 
                            <tbody> 
                                <tr> 
                                    <td></td> 
                                </tr> 
                            </tbody> 
                        </table>   
                        <a href="news.html" class="btn btn-common">更多最新消息</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#services-->
 
    <section id="action" class="responsive">
            <div class="vertical-center">
                 <div class="container">
                    <div class="row">
                        <div class="action take-tour">
                            <div class="col-sm-7 wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 300ms; animation-name: fadeInLeft;">
<!--                                 <h1 class="title">Triangle Corporate Template</h1>
                                <p>A responsive, retina-ready &amp; wide multipurpose template.</p> -->
                            </div>
                            <div class="col-sm-5 text-center wow fadeInRight animated" data-wow-duration="500ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 300ms; animation-name: fadeInRight;">
                                <div class="tour-button">
                                    <a href="#" class="btn btn-common">回到頂部</a>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section id="" class="padding wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeIn;">
        <div class="container">
            <div class="row">
                    <div class="col-sm-4 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 300ms; animation-name: fadeInUp;">
                        <div class="feature-inner">
                            <div class="icon-wrapper">
                                <i class="fa fa-2x fa-envelope-o"></i>
                            </div>
                            <a href='/state1.html'><h2 id='state1Title'></h2></a>
                            <p id='state1Description'></p>
                        </div>
                    </div>
                    <div class="col-sm-4 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 600ms; animation-name: fadeInUp;">
                        <div class="feature-inner">
                            <div class="icon-wrapper">
                                <i class="fa fa-2x fa-heart-o"></i>
                            </div>
                            <a href='/state2.html'><h2 id='state2Title'></h2></a>
                            <p id='state2Description'></p>
                        </div>
                    </div>
                    <div class="col-sm-4 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 900ms; animation-name: fadeInUp;">
                        <div class="feature-inner">
                            <div class="icon-wrapper">
                                <i class="fa fa-2x fa-star-o"></i>
                            </div>
                            <a href='/state3.html'><h2 id='state3Title'></h2></a>
                            <p id='state3Description'></p>
                        </div>
                    </div>
                    
            </div>
        </div> 
    </section>



@endsection


@section('script')

    <script type="text/javascript">
        jQuery(function($) {
            
            'use strict';

            console.log('===== Basic Html =====');
            var url = 'api/basic';
            $.getJSON(url, function (basic) {
                var basic = basic;
                $('#headerTitle').html(basic.headerTitle);
                $('#headerDescription').html(basic.headerDescription);
                $('#state1Title').html(basic.state1Title);
                $('#state1Description').html(basic.state1Description);
                $('#state2Title').html(basic.state2Title);
                $('#state2Description').html(basic.state2Description);
                $('#state3Title').html(basic.state3Title);
                $('#state3Description').html(basic.state3Description);

            });

            var url = 'api/activities';
            $.getJSON(url, function (activities) {
                var activities = activities.slice(0, 3);
                var panel = $('.activities tr').first().clone();
                $('.activities tr').empty();
                activities.forEach(function (activity, index, activities) {
                    panel.find('th:eq(0)').html(activity.topic);
                    panel.find('td:eq(0)').html(activity.title);
                    panel.find('td:eq(1)').html(activity.time+' '+activity.location);
                    $('.activities tbody').append(panel);
                    panel = $('.activities tr:eq(1)').clone();
                });
            });


            var url = 'api/news';
            $.getJSON(url, function (news) {
                var allNews = news.slice(-3);
                var panel = $('.news tr').first().clone();
                $('.news tr').empty();
                allNews.forEach(function (news, index, allNews) {
                    panel.find('td:eq(0)').html(news.title);
                    $('.news tbody').append(panel);
                    panel = $('.news tr:eq(1)').first().clone();
                });
            });


        });
    </script>


@endsection

