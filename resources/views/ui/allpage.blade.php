@extends('layouts.master') @section('body')

@if(!empty($page_datass))

    @foreach($page_datass as $page)
     <!-- #main-header -->
     <div id="et-main-area">
                <div id="main-content">
                    <article id="post-33" class="post-33 page type-page status-publish has-post-thumbnail hentry">
                        <div class="entry-content">
                            <div class="et-l et-l--post">
                                <div class="et_builder_inner_content et_pb_gutters3">
                                    <div class="et_pb_section  et_pb_fullwidth_section et_section_regular">
                                        <div class="et_pb_module et_pb_fullwidth_slider_0 trigger-btn et_pb_slider et_pb_slider_no_arrows et_pb_slider_no_pagination">
                                            <div class="et_pb_slides">
                                                <div class="et_pb_slide et_pb_slide_0 et_pb_bg_layout_dark et_pb_media_alignment_center et_pb_slider_with_overlay et-pb-active-slide" data-slide-id="et_pb_slide_0" style="background-image: url(/storage/homepage/{{$page->image}});">
                                                    <div class="et_pb_slide_overlay_container"></div>
                                                    <div class="et_pb_container clearfix">
                                                        <div class="et_pb_slider_container_inner">
                                                            <div class="et_pb_slide_description">
                                                                <h2 class="et_pb_slide_title">{{ $page->heading }}</h2>
                                                                <div class="et_pb_slide_content">
                                                                    <p>Advance Detective Agency is an expert Detective Agency in Post Matrimonial Investigations cases. We are in the investigation field for as long as the decade.</p>
                                                                </div>
                                                                <div class="et_pb_button_wrapper"><a class="et_pb_button et_pb_more_button" href="#" data-icon="&#x24;">Click Here</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
<style>
    .et_pb_section_0.et_pb_section {
    padding-top: 50px;
    padding-right: 0px;
    padding-bottom: 50px;
    padding-left: 6px;
    background-color: #f3f5f9 !important;
}
</style>

                                    <div class="et_pb_section et_pb_section_1 et_pb_with_background et_section_regular et_pb_section_0" >
                                        <div class="et_pb_row et_pb_row_0">
                                            <div class="et_pb_column et_pb_column_4_4 et_pb_column_0 et_pb_css_mix_blend_mode_passthrough et-last-child">
                                                <div class="et_pb_module et_pb_text et_pb_text_0 et_pb_text_align_justified et_pb_bg_layout_light">
                                                    <div class="et_pb_text_inner">
                                                        <!-- <h1 class="entry-title main_title" style="text-align: justify;">POST MATRIMONIAL INVESTIGATIONS</h1> -->
                                                        <div class="entry-content" style="text-align: justify;">
                                                            <p style="text-align: justify;">
                                                                <span style="font-weight: 400;">
                                                                  {!! $page->content !!}
                                                                </span>
                                                            </p>
                                                            <p>&nbsp;</p>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </article>
                </div>

                <span class="et_pb_scroll_top et-pb-icon"></span>
        
    @endforeach
   
@endif

@endsection