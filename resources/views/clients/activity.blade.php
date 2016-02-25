@extends('clients/layouts/_app')

@section('content')
    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">活動介紹</h1>
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
                <div class="col-sm-12">
                    <div class="project-name overflow">
                        <h2 class="bold"></h2>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <ul id="tab2" class="nav nav-pills">
                                <li class="active"><a href="#tab2-item1" data-toggle="tab">活動介紹</a></li>
                                <li><a href="#tab2-item2" data-toggle="tab">活動詳情</a></li>
                                <li><a href="#tab2-item3" data-toggle="tab">其他</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="tab2-item1">
                                    
                                </div>
                                <div class="tab-pane fade" id="tab2-item2">

                                </div>
                                <div class="tab-pane fade" id="tab2-item3">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="note">

                    </div>
                    <div class="live-preview">
                        <a href="#" class="btn btn-common uppercase">點選報名</a>
                    </div>
                </div>
            </div>
        </div> 
    </section>

@endsection

 
@section('script')

    <script type="text/javascript">
        function $_GET(param) {
            var vars = {};
            window.location.href.replace( location.hash, '' ).replace( 
                /[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
                function( m, key, value ) { // callback
                    vars[key] = value !== undefined ? value : '';
                }
            );

            if ( param ) {
                return vars[param] ? vars[param] : null;    
            }
            return vars;
        }

        jQuery(function($) {
            
            'use strict';

            console.log('===== Activity Html =====');
            var url = 'api/activities';
            $.getJSON(url, function (activities) {
                var id = $_GET('id');
                var activity = activities.filter(function(a){ return a.id == id })[0];
                $('h2.bold').append('['+activity.topic+'] '+activity.title);
                $('#tab2-item1').append(activity.introduction);
                $('#tab2-item2').append(activity.content);
                $('#tab2-item3').append(activity.others);
                $('.btn.btn-common.uppercase').prop('href', activity.url);
                $('.note').append('時間:'+activity.time+'<br>地點:'+activity.location);

            });

        });
    </script>  
        
@endsection
