<?php
if (!function_exists("hallwn_my_styles_method"))
{
    function hallwn_my_styles_method()
    {
         $hallwn_theme_version = wp_get_theme()->get( 'Version' );
        wp_enqueue_style('hallwn-custom-style', get_template_directory_uri() . '/assets/css/inline.css', null, $hallwn_theme_version);
        $heading_color = esc_attr(get_theme_mod('hallwn_heading_color', '#292929'));
        $header_background_color = esc_attr(get_theme_mod("header_bg_color", "#FFFFFF"));
        $footer_background_color = esc_attr(get_theme_mod("footer_bg_color", "#FFFFFF"));
        $hallwn_paragraph_color = esc_attr(get_theme_mod('hallwn_paragraph_color', '#292929'));
        $hallwn_span_color = esc_attr(get_theme_mod('hallwn_span_color', '#292929'));
        $hallwn_a_color = esc_attr(get_theme_mod('hallwn_a_color', '#292929'));
        $text_white = "#FFFFFF";
        $a_fsize = esc_attr(get_theme_mod('a_fsize', '14'));
        $theme_color = esc_attr(get_theme_mod('hallwn_theme_color', '#292929'));
        $heading_four_fsize = esc_attr(get_theme_mod('heading_four_fsize', '20'));
        $heading_three_fsize = esc_attr(get_theme_mod('heading_three_fsize', '24'));
        $heading_two_fsize = esc_attr(get_theme_mod('heading_two_fsize', '36'));
        $heading_one_fsize = esc_attr(get_theme_mod('heading_one_fsize', '36'));
        $align_center = "center";
        $btn_secondary_border_color = esc_attr(get_theme_mod('hllwn_btn_secondary_border_color', '#292929'));
        $btn_border_radius = esc_attr(get_theme_mod('btn_slider_setting', '30px'));
        $padding = esc_attr(get_theme_mod('padding_setting', '15px 40px'));
        $secondary_btn_background = esc_attr(get_theme_mod('hllwn_btn_secondary_bg', '#292929'));
        $secondary_btn_text_color = esc_attr(get_theme_mod('hllwn_btn_secondary_color', '#ffffff'));
        $secondary_btn_background_hover = esc_attr(get_theme_mod('hllwn_btn_secondary_hover_bg', '#FFFFFF'));
        $btn_hover_text_color = esc_attr(get_theme_mod('hllwn_btn_secondary_hover_color', '#000'));
        $site_background = get_background_color();
        $site_background_image = esc_url(get_theme_mod('background_image'));
        $header_background_image = esc_url(get_theme_mod('header_image'));
        $header_text_color =  esc_attr(get_theme_mod('header_textcolor')); 
        
        $custom_css = "
                body{
                 background-color: {$site_background} !important;
                }
                body.theme-background{
                    background-image: url('$site_background_image}');
                }
                header{
                    background-color:{$header_background_color};
                    background-image: url({$header_background_image});
                }
                .hero-nav ul li a{
                 color: #{$header_text_color} !important;
                }
                }
                p{
                 color: {$hallwn_paragraph_color};
                }
                
                .primary-btn.subscribe-btn{
                 background: {$secondary_btn_background} !important;
                 border-radius: {$btn_border_radius}px !important;
                 border: 2px solid {$btn_secondary_border_color} !important;
                 color: {$secondary_btn_text_color};
                }
                .primary-btn.subscribe-btn:hover{
                 background: {$secondary_btn_background_hover} !important;
                 color: {$btn_hover_text_color};
                }
                .card-inner.post-widget{
                    padding-left: 20px;
                }
                .card-inner.single-page{
                    background:#FFFFFF!important;
                }
                .home-footer{
                 background: $footer_background_color !important;

                }
                .footer-bottom .paragraph-style span.span-style{
                 color: {$theme_color} !important;
                }
                
                .fa-comment-dots:before{
                    color:{$theme_color};
                }
                .paragraph-style{
                 color:{$hallwn_paragraph_color};
                }
                .icons-color, a.icon-bg.sidebar-icon i{
                 color:{$theme_color};
                }
                .owl-theme .owl-nav button{
                 background:{$theme_color} !important;
                }
                .profile-title{
                  color:{$heading_color};
                  text-align:{$align_center} !important;
                  font-size:{$heading_four_fsize}px;
                  padding-top:20px;
                }
                .tabcontent.subscription-offer{
                    display:none;
                }
                .card-sp-profile {
                 border-radius: 12px;
                 border: none;
                 height: max-content;
                }
                .more-post-btn{
                    outline: 2px solid  {$btn_secondary_border_color};
                    font-size:16px;
                    border-radius: {$btn_border_radius}px !important;
                    padding: {$padding};
                    background: {$secondary_btn_background};
                }
                .more-post-btn:hover{
                    background: {$secondary_btn_background_hover};
                }
                
                .mini-card h4 {
                    margin-top: 0px;    
                }
                .post-author{
                 justify-content:start;
                }
                #blog .card{
                    position:relative;
                }
                .default-img{
                    width:100%;
                    border-radius:10px;
                } 
                .large-card.wide-img-post.white-bg{
                  border-radius: 10px;
                }
                .primary-btn.post-category, .primary-btn.post-category a, .recent-post button.primary-btn{
                 background-color: {$theme_color} !important;
                 color:#ffffff !important;
                }
                .home-blog .large-card .card-inner{
                    background: {$site_background} !important;
                }
                h4.post-title.heading-four a{
                color:{$heading_color} !important;
                padding:0 0 25px 0 !important; 
                }
                .large-card .post-author > div .icon-bg{
                 color:{$theme_color} !important;
                }
                .social-share .tags .primary-btn{
                    margin-left:2px;
                }
                .gallery-post{
                    backgorund-color: {$site_background} !important;
                }
                button.primary-btn.mb-15{
                background-color:{$theme_color} !important;
                }
                .comment-btn i{
                 color:{$theme_color} !important;
                }
                .post-footer{
                    margin-top:20px;
                }
                .blog-comment .heading h3{
                 color: {$heading_color} !important;
                }
                h2.heading-two-typography{
                color:{$heading_color} ;
                font-size:{$heading_two_fsize}px;
                }
                .section-title.search-page{
                    display:unset;
                }
                .container.home-blog.not-found {
                        height: 100ch;
                        display: grid;
                        place-items: center;
                }
                .section-heading.tag-page{
                    text-align:left; 
                    width:100%; 
                    padding: 30px 0;
                }
                .posts-cards{
                  padding-top: 20px !important;  
                }
                .paragraph-style.post-pagination{
                    padding:20px 0;
                    font-weight:600;
                    text-align:center;
                }
                .grid-cards.page-page , .author-page .grid-cards{
                  display:unset;
                }
                .home-blog .page-page .large-card .card-inner{
                    border-radius:10px !important;
                    background: {$site_background} !important;
                }
                .page-page h4.post-title.heading-four a{
                    text-align: center !important; 
                    color: {$heading_color} !important;
                    font-size: {$heading_two_fsize}px !important;
                    padding:30px 0 !important;
                }
                
                .home-blog .page-page .post-author{
                    justify-content:left !important;
                }
                .author-page .large-card.wide-img-post{
                    border-radius: 10px !important;
                    background: #{$site_background} !important;
                }
                .author-page .author-gravatar-img{
                    text-align: center !important; 
                    padding:20px 0 !important;
                    border-radius:50px !important;
                }
                .author-page .post-author{
                    justify-content: center;
                    text-align:center;
                }
                .post-author.author-name {
                    display: unset;
                      }
                      .post-author.author-name .author{
                        display: unset;
                          }
                .author-page .post-author .author{
                    text-align:center;
                }
                .author-page .author-description{
                    padding: 18px 0;
                    text-align:center;
                    color: {$hallwn_paragraph_color};
                }
                .author-page .gallery-post{
                   background: {$site_background} !important;
                }
                .author-page #lifeStyle{
                    padding-top: 15px;
                }
                .author-page #lifeStyle .gallery-cards{
                    padding-top:10px;
                }
                .author-page #lifeStyle .gallery-content .primary-btn{
                    left: 35%;
                }
               .author-page .author-pagination{
                text-align:center !important; 
                margin-top: 40px !important;
                }
                .page-archive .posts div.section-heading{
                 text-align:left;
                 width:100%;
                 padding: 30px 0;
                }
                .page-archive .posts div.post-cards{
                 padding-top: 20px;
                }
                .four-zero-four .grid-cards{
                 display:unset;
                }
                .four-zero-four .grid-cards div.large-card{
                 border-radius:10px !important;
                }
                .four-zero-four .grid-cards div.large-card h4.post-title{
                    text-align: center !important;
                    padding-top:50px !important;
                    padding-bottom:15px !important;
                    color: {$theme_color} !important;
                }
                .card-inner .post-title a{
                    color: {$heading_color};
                    font-size: {$heading_four_fsize}px;
                }
                .quote-author-2 .paragraph-style{
                    text-align:center !important;
                }
                .mini-card .card-inner h4.post-title{
                    padding:10px 0;
                }
                .authors.comment-list{
                    margin-top: 30px;
                }
                img.avatar.avatar-80.photo{
                    border-radius:50px;
                }
                .span-style.autor-single-span{
                    color:#000000;
                }
                
                 .comment-form .comment-btn{
                  width:auto !important;
                 }
                 .content-elementor{
                     min-height:100vh;
                 }
                 .post-title.carousel-title a{
                     color: {$text_white} ;
                 }
                 .post-title.carousel-title a:hover{
                     color: {$text_white} ;
                 }
                 .span-style.carousel-meta, .span-style.carousel-meta a{
                     color: {$text_white} ;
                 }
                 .span-style.carousel-meta, .span-style.carousel-meta a:hover{
                     color:  {$text_white} ;
                 }
                 .card.img-overlay.youtube{
                     height:30% !important;
                 }
                 .post-excerpt p{
                    text-align:left;
                    padding-top: 10px;
                 }
                 .post-heading.content-heading span{
                     font-family: 'Inter', Sans-serif !important;
                     font-size: 24px;
                 }
                 .search-text{
                     font-size:20px;
                 }
                 .author-post-title{
                    font-size: 20px;
                }
                .light-purple-bg{
                background: #fcf7ff;
                }
                p.post-excerpt.mb-10{
                   color: {$hallwn_paragraph_color};
                   overflow:hidden;
                }
                .paragraph-style.post-pagination {
                    font-family: 'Mulish';
                }
                .content-heading.post-heading.footer span::after{
                    background:#ffffff !important;
                }
                li.page_item.page-item-2 a{
                    color:#404040;
                    font-size:16px;
                }
                ul.menu li a{
                    color:#404040;
                    font-size:16px;
                }
                .content-list ul li a {
                 color: #292929 !important;
                }
                .content-box4.footer-gallery.footer.pt-10 ul li a{
                    line-height:2.5;
                }
                .content-box4.footer-gallery.footer.pt-10{
                    padding-top:0;
                }
                .popup-gallery h2, .popup-gallery {
                 font-size: 16px;
                }
                h1.post-title.single-title.pb-25{
                    font-size: {$heading_one_fsize}px;
                    color:{$heading_color};
                }
                h3.post-heading.mb-30 span, h3.h3-typography.text-right{
                    font-size: {$heading_three_fsize}px;
                    color:{$heading_color} !important;
                }
                h5{
                    font-size:{$heading_four_fsize}px;
                    color:{$heading_color};
                }
                .post-contents, .post-excerpt.mb-25.paragraph-style, .profile-about.mt-15.mb-20, .logged-in-as, .blogger-details p, .paragraph-404, .paragraph-search{
                   color:{$hallwn_paragraph_color};
                }
                .posts.container span, .home-demo.bg-gray span{
                    color:{$hallwn_span_color};
                }
                .post-footer a, .author a, .logged-in-as a, .top-categories a , a.comment-btn span, .profile-card a.comment-btn.pl-20.pr-20 span{
                    color:{$hallwn_a_color};
                }
                
                 .top-categories a, #side-bar, .tags .tags-btn a, .tags .tags-btn a:hover{
                   color:{$hallwn_a_color} !important; 
                }
                .recent-post .post-column a, #side-bar .popular-post.card.mb-30 a, .heading-two-typography.heading-404, .heading-six-404, .heading-six-search-page, .post-title.heading-four{
                    color:{$heading_color} !important;
                }
                  #commentform p.logged-in-as a, #author a, #category a{
                     color:{$hallwn_a_color} !important; 
                }
                .post-contents img{
                    width: 100%;
                }
                div#single-page{
                    background:#FFFFFF !important;
                    border-radius:10px;
                }
                
                }
                ";
        wp_add_inline_style('hallwn-custom-style', $custom_css);
    }
    add_action('wp_enqueue_scripts', 'hallwn_my_styles_method');
}

