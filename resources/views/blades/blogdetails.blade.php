@extends('blades.master')
@section('content')

    <!-- Page Content -->
      <main class="page-content">

<!-- Blog Details Area -->
<div class="tm-section tm-blog-details-page tm-padding-section bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="tm-blog blogitem">
                    <div class="tm-blog-topside">
                        <div class="tm-blog-thumb">
                            <img src="{{asset('/images/' . $blog[0]->image)}}" alt="blog image">
                        </div>

                    </div>
                    <div class="tm-blog-content">
                        <h6 class="tm-blog-title"><a href="blog-details.html">{{$blog[0]->title}}</a></h6>
                        <ul class="tm-blog-meta">
                            <li><a href="#"><i class="ion-android-person"></i> <?php if($blog[0]->created_at != $blog[0]->updated_at){echo  date_format($blog[0]["updated_at"],'d M Y'); }else{ echo date_format($blog[0]["created_at"],'d M Y');}?></a></li>
                        </ul>
                        <p>{{$blog[0]->des}}</p>

                    </div>



                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="widgets widgets-sidebar">




                    <!-- Single Widget -->
                    <div class="single-widget widget-recentpost">
                        <h6 class="widget-title">Recent Blogs</h6>
                        <ul>

                         @foreach($recentblog as $b)
                            <li>
                                <a href="blog-details.html" class="widget-recentpost-image">
                                    <img src="{{asset('/images/' . $b->image)}}" alt="blog thumbnail">
                                </a>
                                <div class="widget-recentpost-content">
                                    <h6><a href="#blog-details.html">{{$b->title}}</a></h6>
                                    <span> <?php if($blog[0]->created_at != $blog[0]->updated_at){echo  date_format($blog[0]["updated_at"],'d M Y'); }else{ echo date_format($blog[0]["created_at"],'d M Y');}?></span>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!--// Single Widget -->



                </div>
            </div>
        </div>
    </div>
</div>
<!--// Blog Details Area   -->

</main>
<!--// Page Content -->
@stop
