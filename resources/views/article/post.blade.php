    @extends('layouts.blog')
    @section('content')
        <!-- AUTHOR NAME -->
        <section id="slider" class="p-t-150 p-b-100" style="background-image:url(/images/pattern11.png);">
            <div class="blog-author-title p-t-60" style="font-size: 48px;line-height: 48px;">
                {{$article->title}}
            </div>
        </section>
        <!-- end: AUTHOR NAME -->

        <!-- Content -->
        <section id="page-content" class="sidebar-right">
            <div class="container">
                <div class="row">
                    <!-- content -->
                    <div class="content col-md-9">
                        <!-- Blog -->
                        <div id="blog" class="single-post">
                            <!-- Post single item-->
                            <div class="post-item">
                                <div class="post-item-wrap">
                                    <div class="post-item-description">
                                        <div class="post-meta">

                                            <span class="post-meta-date"><i class="fa fa-calendar-o"></i>{{$article->created_at}}</span>
                                            <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>
                                            <span class="post-meta-category"><a href=""><i class="fa fa-tag"></i>Lifestyle, Magazine</a></span>
                                            <div class="post-meta-share">
                                                <a class="btn btn-xs btn-slide btn-facebook" href="#">
                                                    <i class="fa fa-facebook"></i>
                                                    <span>Facebook</span>
                                                </a>
                                                <a class="btn btn-xs btn-slide btn-twitter" href="#" data-width="100">
                                                    <i class="fa fa-twitter"></i>
                                                    <span>Twitter</span>
                                                </a>
                                                <a class="btn btn-xs btn-slide btn-instagram" href="#" data-width="118">
                                                    <i class="fa fa-instagram"></i>
                                                    <span>Instagram</span>
                                                </a>
                                                <a class="btn btn-xs btn-slide btn-googleplus" href="mailto:#" data-width="80">
                                                    <i class="fa fa-envelope"></i>
                                                    <span>Mail</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-image">
                                            <a href="#">
                                                <img alt="" src="/images/12.jpg">
                                            </a>
                                        </div>

                                        {!! $article->content !!}

                                    </div>
                                    <div class="post-tags">
                                        <a href="#">Life</a>
                                        <a href="#">Sport</a>
                                        <a href="#">Tech</a>
                                        <a href="#">Travel</a>
                                    </div>
                                    <!-- Comments -->
                                    <div class="comments" id="comments">
                                        <div class="comment_number">
                                            Comments <span>(2)</span>
                                        </div>
                                        <div class="comment-list">
                                            <!-- Comment -->
                                            <div class="comment" id="comment-1">
                                                <div class="image"><img alt="" src="/images/author.jpg" class="avatar"></div>
                                                <div class="text">
                                                    <h5 class="name">John Doe</h5>
                                                    <span class="comment_date">Posted at 15:32h, 06 December</span>
                                                    <a class="comment-reply-link" href="#">Reply</a>
                                                    <div class="text_holder">
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                    </div>
                                                </div>
                                                <!-- Comment -->
                                                <div class="comment" id="comment-1-1">
                                                    <div class="image"><img alt="" src="/images/author.jpg" class="avatar"></div>
                                                    <div class="text">
                                                        <h5 class="name">John Doe</h5>
                                                        <span class="comment_date">Posted at 15:32h, 06 December</span>
                                                        <a class="comment-reply-link" href="#">Reply</a>
                                                        <div class="text_holder">
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end: Comment -->
                                                <!-- Comment -->
                                                <div class="comment" id="comment-1-2">
                                                    <div class="image"><img alt="" src="/images/author.jpg" class="avatar"></div>
                                                    <div class="text">
                                                        <h5 class="name">John Doe</h5>
                                                        <span class="comment_date">Posted at 15:32h, 06 December</span>
                                                        <a class="comment-reply-link" href="#">Reply</a>
                                                        <div class="text_holder">
                                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end: Comment -->
                                            </div>
                                            <!-- end: Comment -->
                                            <!-- Comment -->
                                            <div class="comment" id="comment-2">
                                                <div class="image"><img alt="" src="/images/author.jpg" class="avatar"></div>
                                                <div class="text">
                                                    <h5 class="name">John Doe</h5>
                                                    <span class="comment_date">Posted at 15:32h, 06 December</span>
                                                    <a class="comment-reply-link" href="#">Reply</a>
                                                    <div class="text_holder">
                                                        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end: Comment -->
                                        </div>
                                    </div>
                                    <!-- end: Comments -->
                                    <div class="respond-form" id="respond">
                                        <div class="respond-comment">Leave a <span>Comment</span></div>
                                        <form class="form-gray-fields">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control required" name="comment" rows="9" placeholder="Enter comment" id="comment" aria-required="true"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group text-center">
                                                        <button class="btn" type="submit">发表评论</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="hr-title hr-long center"><abbr><a href="">登录</a></abbr> </div>
                                </div>
                            </div>
                            <!-- end: Post single item-->
                        </div>

                    </div>
                    <!-- end: content -->

                    <!-- Sidebar-->
                    <div class="sidebar col-md-3">
                        <!--widget newsletter-->
                        <div class="widget  widget-newsletter">

                            <form id="widget-search-form-sidebar" action="search-results-page.html" method="get" class="form-inline">
                                <div class="input-group">
                                    <input type="text" aria-required="true" name="q" class="form-control widget-search-form" placeholder="Search for pages...">
                                    <span class="input-group-btn">
              <button type="submit" id="widget-widget-search-form-button" class="btn btn-default"><i class="fa fa-search"></i></button>
              </span> </div>
                            </form>
                        </div>
                        <!--end: widget newsletter-->

                        <!--Tabs with Posts-->
                        <div class="widget">
                            <div id="tabs-01" class="tabs simple">
                                <ul class="tabs-navigation">
                                    <li class="active"><a href="#tab1">Popular</a> </li>
                                    <li class=""><a href="#tab2">Featured</a> </li>
                                    <li class=""><a href="#tab3">Recent</a> </li>
                                </ul>
                                <div class="tabs-content">
                                    <div class="tab-pane active" id="tab1">
                                        <div class="post-thumbnail-list">
                                            <div class="post-thumbnail-entry">
                                                <img alt="" src="/images/12.jpg">
                                                <div class="post-thumbnail-content">
                                                    <a href="#">Suspendisse consectetur fringilla luctus</a>
                                                    <span class="post-date"><i class="fa fa-clock-o"></i> 6m ago</span>
                                                    <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                                                </div>
                                            </div>
                                            <div class="post-thumbnail-entry">
                                                <img alt="" src="/images/12.jpg">
                                                <div class="post-thumbnail-content">
                                                    <a href="#">Consectetur adipiscing elit</a>
                                                    <span class="post-date"><i class="fa fa-clock-o"></i> 24h ago</span>
                                                    <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                                </div>
                                            </div>
                                            <div class="post-thumbnail-entry">
                                                <img alt="" src="/images/12.jpg">
                                                <div class="post-thumbnail-content">
                                                    <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
                                                    <span class="post-date"><i class="fa fa-clock-o"></i> 11h ago</span>
                                                    <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab2">
                                        <div class="post-thumbnail-list">
                                            <div class="post-thumbnail-entry">
                                                <img alt="" src="/images/12.jpg">
                                                <div class="post-thumbnail-content">
                                                    <a href="#">Consectetur adipiscing elit</a>
                                                    <span class="post-date"><i class="fa fa-clock-o"></i> 24h ago</span>
                                                    <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                                </div>
                                            </div>
                                            <div class="post-thumbnail-entry">
                                                <img alt="" src="/images/12.jpg">
                                                <div class="post-thumbnail-content">
                                                    <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
                                                    <span class="post-date"><i class="fa fa-clock-o"></i> 11h ago</span>
                                                    <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                                </div>
                                            </div>
                                            <div class="post-thumbnail-entry">
                                                <img alt="" src="/images/12.jpg">
                                                <div class="post-thumbnail-content">
                                                    <a href="#">Fringilla luctus Lorem ipsum dolor sit amet</a>
                                                    <span class="post-date"><i class="fa fa-clock-o"></i> 11h ago</span>
                                                    <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab3">
                                        <div class="post-thumbnail-list">
                                            <div class="post-thumbnail-entry">
                                                <img alt="" src="/images/12.jpg">
                                                <div class="post-thumbnail-content">
                                                    <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
                                                    <span class="post-date"><i class="fa fa-clock-o"></i> 11h ago</span>
                                                    <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                                </div>
                                            </div>
                                            <div class="post-thumbnail-entry">
                                                <img alt="" src="/images/12.jpg">
                                                <div class="post-thumbnail-content">
                                                    <a href="#">Fringilla luctus Lorem ipsum dolor sit amet</a>
                                                    <span class="post-date"><i class="fa fa-clock-o"></i> 11h ago</span>
                                                    <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                                </div>
                                            </div>
                                            <div class="post-thumbnail-entry">
                                                <img alt="" src="/images/12.jpg">
                                                <div class="post-thumbnail-content">
                                                    <a href="#">Consectetur adipiscing elit</a>
                                                    <span class="post-date"><i class="fa fa-clock-o"></i> 24h ago</span>
                                                    <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                                </div>
                                            </div>
                                        </div>
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
                    </div>
                    <!-- end: sidebar-->
                </div>
            </div>
        </section>
        <!-- end: Content -->
    @endsection
