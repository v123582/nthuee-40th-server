@extends('clients/layouts/_app')

@section('content')

    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">相片集錦</h1>
                            <p></p>
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#page-breadcrumb-->
    <section id="recent-projects" class="recent-projects">
        <div class="container">
            <div class="row">
                <h1 class="title text-center wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 300ms; animation-name: fadeInDown;">Recent Projects</h1>
                <p class="text-center padding-bottom wow fadeInDown animated" data-wow-duration="400ms" data-wow-delay="400ms" style="visibility: visible; animation-duration: 400ms; animation-delay: 400ms; animation-name: fadeInDown;">最新照片 </p>

                @foreach($files as $file)
                <div class="col-sm-3 col-xs-6 wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeIn;">
                    <div class="portfolio-wrapper">
                        <div class="portfolio-single">
                            <div class="portfolio-thumb">
                                <img src="{{$file->url}}" class="img-responsive" alt="">
                            </div>
                            <div class="portfolio-view">
                                <ul class="nav nav-pills">
                                    <li><a href="{{$file->url}}" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="portfolio-info">
                            <h2>{{$file->created_at}}</h2>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection

@section('script')

    <script type="text/javascript">
        jQuery(function($) {

            'use strict';

            console.log('===== Photos Html =====');

        });
    </script>
@endsection
