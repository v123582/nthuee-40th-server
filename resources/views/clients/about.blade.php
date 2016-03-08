@extends('clients/layouts/_app')

@section('content')

    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title" id='titleheaderTitle'></h1>
                            <p></p>
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#page-breadcrumb-->
 
    <section id="company-information" class="padding wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeIn;">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="images/aboutus/1.png" class="img-responsive" alt="">
                </div>
                <div class="col-sm-6">
                    <h1 class="margin-bottom" id='contentheaderTitle'></h1>
                    <p id='contentheaderContent'></p>
                </div>
            </div>
        </div>
    </section>
    <!--/#about-company-->


@endsection



@section('script')

    <script type="text/javascript">
        jQuery(function($) {
            
            'use strict';

            console.log('===== Basic Html =====');
            var url = 'api/basic';
            $.getJSON(url, function (basic) {
                var basic = basic;
                $('#titleheaderTitle').html(basic.headerTitle);
                $('#contentheaderTitle').html(basic.headerTitle);
                $('#contentheaderContent').html(basic.headerContent);

            });
        });
    </script>
@endsection


 


   