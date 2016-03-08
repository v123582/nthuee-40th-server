@extends('clients/layouts/_app')

@section('content')

   <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">最新消息</h1>
                            <p></p>
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#page-breadcrumb-->
     
    <section id="" class="padding wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeIn;">
        <div class="container">
            <div class="row">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <button type="button" class="btn btn-xs btn-primary panel-time">Primary</button>
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" class="collapsed">
                                    臺大電機系70週年慶官方網站上線!
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body">
                                網址: http://70th.ee.ntu.edu.tw
                            </div>
                        </div>
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

            console.log('===== News Html =====');
            var url = 'api/news';
            $.getJSON(url, function (news) {
                var allNews = news;
                var panel = $('.panel-default').first().clone();
                $('#accordion').empty();
                allNews.forEach(function (news, index, allNews) {
                    panel.find('a').prop('href', '#'+index)
                    panel.find('.collapsed').html(news.title);
                    panel.find('.panel-collapse').prop('id', index)
                    panel.find('.panel-time').html(news['updated_at'].substring(0,10)); 
                    panel.find('.panel-body').html(news.content); 
                    $('#accordion').append(panel);
                    panel = $('.panel-default').first().clone();
                });

            });

        });
    </script>


@endsection

 
