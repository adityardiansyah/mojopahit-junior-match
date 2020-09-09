@section('title')
    {{ $meta_title }}
@endsection
<div>
    <!--Page Title-->
    <section class="page-banner" style="background-image:url({{asset('images/headerpage.jpg')}});">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>{{ $title }}</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html"><i class="la la-home"></i>Home</a></li>
                    <li><a href="#">Blog</a></li>
                    <li>{{ $title }}</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side / Our Blog-->
                <div class="content-side col-xl-9 col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-detail">
                        <!-- News Block -->
                        <div class="news-block">
                            <div class="inner-box">
                                <div class="image-box wow fadeIn">
                                    <figure class="image"><img src="{{ asset('storage/'.$image) }}" alt=""></figure>
                                </div>
                                <div class="lower-content">
                                    <ul class="post-info-top">
                                        <li><span class="material-icons">event</span> {{ GlobalHelper::tgl_indo($published_at) }}</li>
                                        <li><span class="material-icons">person</span> {{ $user_id }}</li>
                                        <li><span class="material-icons">local_offer</span> {{ $category_id }}</li>
                                        <li><span class="material-icons">textsms</span> Comment: 2</li>
                                    </ul>

                                    <h3>{{ $title }}</h3>
                                    {!! $description !!}
                                </div>

                                <!-- Other Options -->
                                <div class="post-share-options clearfix">
                                    {{-- <div class="pull-left">
                                        <p>Tags : </p>
                                        <ul class="tags">
                                            <li><a href="#">Solutions</a>,</li>
                                            <li><a href="#">Technology</a>,</li>
                                            <li><a href="#">Maketing</a>,</li>
                                        </ul>                               
                                    </div> --}}

                                    {{-- <div class="social-links pull-right">
                                        <p><strong>0</strong> Shares</p>
                                        <ul class="social-icon">
                                            <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fab fa-skype"></span></a></li>
                                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                            <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                            </div>
                        </div>

                         <!-- Author Box -->
                        {{-- <div class="author-box">
                            <div class="inner-box">
                                <div class="info-box">
                                    <div class="thumb"><img src="images/resource/author-img.html" alt=""></div>
                                    <h3 class="name">Randy Valdez</h3>
                                    <span class="designation">About the author</span>
                                </div>
                                <p>Vestibulum eget erat scelerisque, fringilla urna et, efficitur erat. Proin facilisis, diam ac ultricies tincidunt, ante urna sollicitudin felis, et vehicula metus tortor sit amet elit. In rhoncus diam rutrum purus ultricies dignissim.</p>
                            </div>
                        </div> --}}

                        <!-- Post Controll -->
                        <div class="post-controll">
                            <div class="inner clearfix">
                                <a href="#" class="theme-btn btn-style-one"><span class="la la-angle-left"></span> Previous</a>
                                <a href="#" class="theme-btn btn-style-one pull-right">Next <span class="la la-angle-right"></span></a>
                            </div>
                        </div>

                        <!--Comment Form-->
                        <div class="comment-form">
                            <div class="group-title"><h4>Leave a Reply</h4></div>

                            <form method="post" action="">
                                <div class="row clearfix">
                                    
                                    <div class="col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="Your Comment *"></textarea>
                                    </div>

                                    <div class="col-md-6 col-sm-12 form-group">
                                        <input type="text" name="username" placeholder="Your Name *" required="">
                                    </div>
                                    
                                    <div class="col-md-6 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Your Email *" required="">
                                    </div>

                                    <div class="col-md-12 col-sm-12 form-group">
                                        <input type="text" name="username" placeholder="Website" required="">
                                    </div>
                                    
                                    <div class="col-md-12 col-sm-12 form-group">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form">Post Comment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <br><br>
                        <!-- Comments Area -->
                        <div class="comments-area">
                            <div class="group-title"><h4>2 Response</h4></div>
                            <div class="comment-box">
                                <div class="comment">
                                    <div class="author-thumb"><img src="images/resource/thumb-3.html" alt=""></div> 
                                    <div class="comment-info">
                                        <h4 class="name">Randy Valdez</h4>
                                        <div class="time">March 16, 2019 at 10:05 am</div>
                                    </div>
                                    <div class="text">Vestibulum eget erat scelerisque, fringilla urna et, efficitur erat.</div>
                                    <a href="#" class="reply-btn"><span class="fa fa-angle-right"></span> Reply</a>
                                </div>
                            </div>

                            <div class="comment-box reply-comment">
                                <div class="comment">
                                    <div class="author-thumb"><img src="images/resource/thumb-4.jpg" alt=""></div> 
                                    <div class="comment-info">
                                        <h5 class="name">Lauren Kelly</h5>
                                        <div class="time">March 16, 2019 at 15:05 pm</div>
                                    </div>
                                    <div class="text">Phasellus vestibulum auctor commodo. Vivamus libero urna, rhoncus a libero sed, tincidunt imperdiet quam. Morbi at tempor sem.</div>
                                    <a href="#" class="reply-btn"><span class="fa fa-angle-right"></span> Reply</a>
                                </div>
                            </div>
                        </div>

                        
                    </div>
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar">
                        <!-- Search -->
                        <div class="sidebar-widget search-box">
                            <form method="post" action="http://t.commonsupport.xyz/industar/contact.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Search ..." required>
                                    <button type="submit"><span class="icon flaticon-search-5"></span></button>
                                </div>
                            </form>
                        </div>
                        
                        <!-- Category Widget -->
                        <div class="sidebar-widget categories">
                            <div class="sec-title wow fadeInUp" data-wow-delay="200ms" style="margin-bottom:32px;">
                                <span class="title" style="margin:0;">Categories</span>
                            </div>
                            <div class="widget-content">
                                <!-- Blog Category -->
                                <ul class="blog-categories">
                                    @foreach ($category_all as $item)
                                        <li><a href="{{ url('category/'.$item->slug) }}">{{ $item->name }} <span>({{ $item->total }})</span></a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        
                        <!-- Post Widget -->
                        <div class="sidebar-widget popular-posts">
                            <div class="sec-title wow fadeInUp" data-wow-delay="200ms" style="margin-bottom:32px;">
                                <span class="title" style="margin:0;">Recent News</span>
                            </div>
                            <div class="widget-content">
                                @foreach ($post_category as $item)
                                    <article class="post">
                                        <div class="post-inner">
                                            <figure class="post-thumb"><a href="{{ url('artikel/'.$item->slug) }}"><img src="{{ asset('storage/'.$item->image) }}" alt=""></a></figure>
                                            <div class="text"><a href="{{ url('artikel/'.$item->slug) }}">{{ $item->title }}</a></div>
                                            <div class="post-info">{{ GlobalHelper::tgl_indo($item->published_at)}}</div>
                                        </div>
                                    </article>
                                @endforeach
                            </div>
                        </div>
                        <div class="sidebar-widget categories">
                            <div class="sec-title wow fadeInUp" data-wow-delay="200ms" style="margin-bottom:32px;">
                                <span class="title" style="margin:0;">Info Update</span>
                            </div>
                            <div class="widget-content">
                                <!-- Blog Category -->
                                <img src="{{ asset('images/poster.png')}}" class="img-fluid wow fadeInUp" data-wow-delay="300ms" alt="">
                                <br><br>
                                <iframe src="https://www.youtube.com/embed/juoCHaHmxJA?feature=oembed&start&end&wmode=opaque&loop=0&controls=1&mute=0&rel=0&modestbranding=0" class="img-fluid video wow fadeInUp" data-wow-delay="400ms" frameborder="0"></iframe>
                            </div>
                        </div>
                        <!-- Tags Widget -->
                        {{-- <div class="sidebar-widget contact-widget">
                            <h4 class="sidebar-title">Get in Touch</h4>
                            <div class="widget-content">
                                <ul class="contact-list">
                                    <li><i class="material-icons">phone</i> <a href="tel:001-845-28386">(001)-845-28386</a></li>
                                    <li><i class="material-icons">email</i> <a href="mailto:contact@industar.com">contact@industar.com</a></li>
                                    <li><i class="material-icons">place</i> 344 Victory Blvd, Staten Island,<br> NY 10301</li>
                                    <li><i class="material-icons">access_time</i>
                                        Mon - Fri: 8am - 6pm <br> Sat - Sun: 9am - 3pm
                                    </li>
                                </ul>
                            </div>
                        </div> --}}

                        <!-- Tags Widget -->
                        {{-- <div class="sidebar-widget popular-tags">
                            <h4 class="sidebar-title">Tag Cloud</h4>
                            <div class="widget-content">
                                <a href="#">Solutions</a>
                                <a href="#">Mechanical</a>
                                <a href="#">Tax</a>
                                <a href="#">Strategic</a>
                                <a href="#">Maketing</a>
                                <a href="#">Stock</a>
                                <a href="#">Technology</a>
                                <a href="#">Management</a>
                            </div>
                        </div> --}}
                                         
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Page Container -->
</div>