@extends('layouts.master') @section('body')

 <!-- #main-header -->
 <div id="et-main-area">
                <div id="main-content">
                    <div class="container">
                        <div id="content-area" class="clearfix">
                            <div id="left-area">
                                <article id="post-3259" class="et_pb_post post-3259 post type-post status-publish format-standard has-post-thumbnail hentry category-corporate-services tag-detective-agency tag-employee-investigation">
                                    <div class="et_post_meta_wrapper">
                                        <h1 class="entry-title">{{ $blog->Heading }}</h1>

                                        <!-- <p class="post-meta">
                                            by <span class="author vcard"><a href="index.htm" title="Posts by Advance Detective Agency" rel="author">Advance Detective Agency</a></span> | <span class="published">Feb 22, 2022</span> |
                                            <a href="category/corporate-services/index.htm" rel="category tag">CORPORATE SERVICES</a> |
                                            <span class="comments-number"><a href="5-benefits-of-conducting-a-workplace-investigation/index.htm#respond">0 comments</a></span>
                                        </p> -->
                                        <img
                                            src="/storage/homepage/{{$blog->image_two}}"
                                            alt="/storage/homepage/{{$blog->image_two}}"
                                            class=""
                                            width="1080"
                                            height="675"
                                            data-lazy-srcset="/storage/homepage/{{$blog->image_two}}"
                                            data-lazy-sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 1080px, 100vw"
                                            data-lazy-src="/storage/homepage/{{$blog->image_two}}"
                                            style="height:350px;"
                                        />
                                        <noscript>
                                            <img
                                                src="/storage/homepage/{{$blog->image}}"
                                                alt="5 Benefits Of Conducting A Workplace Investigation"
                                                class=""
                                                width="1080"
                                                height="675"
                                                srcset="
                                                /storage/homepage/{{$blog->image}}
                                                "
                                                sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 1080px, 100vw"
                                            />
                                        </noscript>
                                    </div>

                                    <div class="entry-content">
                                        <p>
                                           {!! $blog->content_two !!}
                                        </p>
                                  
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>

                <span class="et_pb_scroll_top et-pb-icon"></span>
@endsection                