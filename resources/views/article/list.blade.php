<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="INSPIRO" />
    <meta name="description" content="Themeforest Template Polo">
    <!-- Document title -->
    <title>博客首页</title>

    <link href="{{asset('css/polo.css')}}" rel="stylesheet">
    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
    </head>

<body>
    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <header id="header" class="header-transparent">
            <div id="header-wrap">
                <div class="container">
                    <!--Logo-->
                    <div id="logo">
                        <a href="index.html" class="logo" data-dark-logo="images/logo-dark.png">
                            <img src="images/logo.png" alt="Polo Logo">
                        </a>
                    </div>
                    <!--End: Logo-->

                    <!--Top Search Form-->
                    <div id="top-search">
                        <form action="search-results-page.html" method="get">
                            <input type="text" name="q" class="form-control" value="" placeholder="Start typing & press  &quot;Enter&quot;">
                        </form>
                    </div>
                    <!--end: Top Search Form-->

                    <!--Header Extras-->
                    <div class="header-extras">
                        <ul>
                            <li>
                                <!--top search-->
                                <a id="top-search-trigger" href="#" class="toggle-item">
                                    <i class="fa fa-search"></i>
                                    <i class="fa fa-close"></i>
                                </a>
                                <!--end: top search-->
                            </li>
                            <li>
                                <!--top search-->
                                <a id="top-search-trigger" href="#" class="toggle-item">
                                    <i class="fa fa-user"></i>
                                </a>
                                <!--end: top search-->
                            </li>
                        </ul>
                    </div>
                    <!--end: Header Extras-->

                    <!--Navigation Resposnive Trigger-->
                    <div id="mainMenu-trigger">
                        <button class="lines-button x"> <span class="lines"></span> </button>
                    </div>
                    <!--end: Navigation Resposnive Trigger-->

                    <!--Navigation-->
                    <div id="mainMenu" class="light">
                        <div class="container">
                            <nav>
                                <ul>
                                    <li><a href="#">首页</a></li>
                                    <li><a href="#">文章</a></li>
                                    <li><a href="#">分类</a></li>
                                    <li><a href="#">我的</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--end: Navigation-->
                </div>
            </div>
        </header>
        <!-- end: Header -->
        
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
                        {{$articles->links()}}
                        <!-- Pagination -->
                        <div class="pagination pagination-simple">
                            <ul>
                                <li>
                                    <a href="#" aria-label="Previous"> <span aria-hidden="true"><i class="fa fa-angle-left"></i></span> </a>
                                </li>
                                <li><a href="#">1</a> </li>
                                <li><a href="#">2</a> </li>
                                <li class="active"><a href="#">3</a> </li>
                                <li><a href="#">4</a> </li>
                                <li><a href="#">5</a> </li>
                                <li>
                                    <a href="#" aria-label="Next"> <span aria-hidden="true"><i class="fa fa-angle-right"></i></span> </a>
                                </li>
                            </ul>
                        </div>
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

    <!-- Footer -->
        <footer id="footer" class="footer-light">
            <div class="copyright-content">
                <div class="container">
                    <div class="copyright-text text-center">&copy; 2017 晚黎. All Rights Reserved.<a href="http://blog.iwanli.me" target="_blank">IWANLI</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end: Footer -->

    </div>
    <!-- end: Wrapper -->

    <!-- Go to top button -->
    <a id="goToTop"><i class="fa fa-angle-up top-icon"></i><i class="fa fa-angle-up"></i></a>
    <!--Plugins-->
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>

    <!--Template functions-->
    <script src="{{asset('js/functions.min.js')}}"></script>

</body>

</html>
