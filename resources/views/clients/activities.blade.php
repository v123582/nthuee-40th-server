@extends('clients/layouts/_app')

@section('content')

   <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">系列活動</h1>
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
                <table class="table table-striped"> 
                    <thead>
                        <tr>
                            <th>活動主題</th>
                            <th>活動說明</th> 
                            <th>活動時間/地點</th>  
                            <th></th>
                        </tr>
                    </thead>
                    <tbody> 
                    <tr> 
                        <th scope="row">論壇</th> 
                        <td>第一場：教育論壇</td> 
                        <td>2015.11.7(六) 上午 09:00~12:00  臺大博理館</td> 
                        <td><a href="activity.html">活動詳情</a></td> 
                    </tr> 
                    <tr> 
                        <th scope="row">系慶典禮暨成果展示</th> 
                        <td>系慶典禮/專題演講</td> 
                        <td>2015.11.28(六) 上午 臺大博理館</td> 
                        <td><a href="activity.html">活動詳情</a></td> 
                    </tr> 
                    </tbody> 
                </table>            
            </div>
        </div> 
    </section>
 

@endsection

@section('script')

    <script type="text/javascript">
        jQuery(function($) {
            
            'use strict';

            console.log('===== Activities Html =====');
            var url = 'api/activities';
            $.getJSON(url, function (activities) {
                var activities = activities;
                var panel = $('tr:eq(1)').first().clone();
                $('tbody').empty();
                activities.forEach(function (activity, index, activities) {
                    panel.find('th:eq(0)').html(activity.topic);
                    panel.find('td:eq(0)').html(activity.title);
                    panel.find('td:eq(1)').html(activity.time+' '+activity.location);
                    panel.find('td:eq(2) a').prop('href', 'activity.html?id='+activity.id);
                    $('tbody').append(panel);
                    panel = $('tr:eq(1)').clone();
                });
            });

        });
    </script>   

@endsection

