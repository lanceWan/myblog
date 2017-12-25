@extends('layouts.blog')
@section('content')
    <!-- AUTHOR NAME -->
    <section id="slider" class="p-t-150 p-b-100" style="background-image:url(images/pattern11.png);">
        <div class="blog-author-title p-t-60">
            iwanli's Blog
        </div>
    </section>
    <!-- end: AUTHOR NAME -->
    <!-- Content -->
    <section id="page-content" class="sidebar-right">
        <div class="container">
            <div class="row">
                <!-- post content -->
                <div class="content col-md-9">

                    <!-- Blog -->
                    <div id="blog">

                        <!-- Post item-->
                        @if($articles->isNotEmpty())
                        @foreach($articles as $v)
                        <div class="post-item">
                            <div class="post-item-wrap">
                                <div class="post-image">
                                    {{-- <a href="#">
                                        <img alt="" src="images/12.jpg">
                                    </a> --}}
                                    <span class="post-meta-category"><a href="">Lifestyle</a></span>
                                </div>
                                <div class="post-item-description">
                                    <span class="post-meta-date"><i class="fa fa-calendar-o"></i>{{$v->created_at}}</span>
                                    <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>
                                    <h2><a href="#">{{$v->title}}</a></h2>
                                    <p>{{$v->content}}</p>

                                    <a href="article.html" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>

                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                        <!-- end: Post item-->

                    </div>
                    <!-- end: Blog -->
                    <!-- Pagination -->
                    {{$articles->links('pagination::blog')}}
                    <!-- end: Pagination -->

                </div>
                <!-- end: post content -->

                <!-- Sidebar-->
                <div class="sidebar col-md-3">

                        <!--Tabs with Posts-->
                        <div class="widget ">
                            <h4 class="widget-title">Recent Posts</h4>
                            <div class="post-thumbnail-list">
                                <div class="post-thumbnail-entry">
                                    <img alt="" src="images/12.jpg">
                                    <div class="post-thumbnail-content">
                                        <a href="#">Suspendisse consectetur fringilla luctus</a>
                                        <span class="post-date"><i class="fa fa-clock-o"></i> 6m ago</span>
                                        <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                                    </div>
                                </div>
                                <div class="post-thumbnail-entry">
                                    <img alt="" src="images/12.jpg">
                                    <div class="post-thumbnail-content">
                                        <a href="#">Consectetur adipiscing elit</a>
                                        <span class="post-date"><i class="fa fa-clock-o"></i> 24h ago</span>
                                        <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                    </div>
                                </div>
                                <div class="post-thumbnail-entry">
                                    <img alt="" src="images/12.jpg">
                                    <div class="post-thumbnail-content">
                                        <a href="#">Lorem ipsum dolor sit amet</a>
                                        <span class="post-date"><i class="fa fa-clock-o"></i> 11h ago</span>
                                        <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End: Tabs with Posts-->

                        <!--widget tags -->
                        <div class="widget  widget-tags">
                            <h4 class="widget-title">Tags</h4>
                            <div class="tags">
                                <a href="#">Design</a>
                                <a href="#">Portfolio</a>
                                <a href="#">Digital</a>
                                <a href="#">Branding</a>
                                <a href="#">HTML</a>
                                <a href="#">Clean</a>
                                <a href="#">Peace</a>
                                <a href="#">Love</a>
                                <a href="#">CSS3</a>
                                <a href="#">jQuery</a>
                            </div>
                        </div>
                        <!--end: widget tags -->

                        <!--widget newsletter-->
                        <div class="widget  widget-newsletter">
                            <form class="widget-subscribe-form form-inline" action="include/subscribe-form.php" role="form" method="post">
                                <h4 class="widget-title">Newsletter</h4>
                                <small>Stay informed on our latest news!</small>
                                <div class="input-group">
                                    <input type="email" aria-required="true" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
                                    <span class="input-group-btn">
              <button type="submit" id="widget-subscribe-submit-button" class="btn btn-default"><i class="fa fa-paper-plane"></i></button>
              </span> </div>
                            </form>
                             
                        </div>
                        <!--end: widget newsletter-->
                </div>
                <!-- end: Sidebar-->
            </div>
        </div>
    </section>
    <!-- end: Content -->
@endsection
