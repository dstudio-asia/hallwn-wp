<?php
if (!function_exists("hallwn_my_rtl_styles_method"))
{
    function hallwn_my_rtl_styles_method()
    {
        $hallwn_theme_version = wp_get_theme()->get( 'Version' );
        wp_enqueue_style('hallwn-custom-rtl-style', get_template_directory_uri() . '/assets/css/inline-rtl.css', null, $hallwn_theme_version);
        $theme_color = esc_attr(get_theme_mod('hallwn_theme_color', '#ED1753'));

        $custom_rtl_css = "
        .card-inner.post-widget{
            padding-right: 20px;
        }
        .profile-title{
         
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
        h4.post-title.heading-four{
        padding:0 0 25px 0 !important; 
        }
        .social-share .tags .primary-btn{
            margin-right:2px;
        }
        button.primary-btn.mb-15{
        right:30%;
        
        }
        .post-footer{
            margin-top:20px;
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
            text-align:right; 
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
        
        .page-page h4.post-title.heading-four{
            text-align: right !important; 
            padding:30px 0 !important;
        }
        .home-blog .page-page .post-author{
            justify-content: start !important;
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
            padding: 18px 18px;
            text-align:center;
        
        }
        
        .author-page #lifeStyle{
            padding-top: 15px;
        }
        .author-page #lifeStyle .gallery-cards{
            padding-top:10px;
        }
        .author-page #lifeStyle .gallery-content .primary-btn{
            right: 35%;
        }
        .author-page .author-pagination{
        text-align:center !important; 
        margin-top: 40px !important;
        }
        .page-archive .posts div.section-heading{
         text-align:right;
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
         
        }
        
        .quote-author-2 .paragraph-style{
            text-align:center !important;
        }
        .mini-card .card-inner h4.post-title{
            padding:10px 0;
        }
        .card-inner.single-page{
            background:#FFFFFF!important;
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
         .card.img-overlay.youtube{
             height:30% !important;
         }
         .post-excerpt p{
            text-align:right;
            padding-top: 10px;
         }
         .post-heading.content-heading span{
         font-family: 'Inter', Sans-serif !important;
         font-size: 24px;
         }
         .search-text{
             font-size:20px;
         }
         h2.heading-two-typography{
             text-align: right;
         }
         .light-purple-bg{
            background: #fcf7ff;
          }
          .fa-comment-dots:before{
             color:{$theme_color};
           }
           .h3-typography.text-right{
               text-align:right !important;
           }
           .paragraph-style.post-pagination {
             font-family: 'Mulish';
            }
            
            .footer-bottom .paragraph-style span.span-style{
                 color: {$theme_color} !important;
            }
            .fa-comment-dots:before{
                    color:{$theme_color};
            }
            .icons-color{
                 color:{$theme_color};
            }
            .owl-theme .owl-nav button{
                 background:{$theme_color} !important;
            }
            .primary-btn.post-category{
                 background-color: {$theme_color} !important;
            }
            .large-card .post-author > div .icon-bg{
                 color:{$theme_color} !important;
            }
            button.primary-btn.mb-15{
                background-color:{$theme_color} !important;
            }
            .comment-btn i{
                 color:{$theme_color} !important;
            }
            h2.heading-two-typography{
                color:{$theme_color} !important;
            }
            .four-zero-four .grid-cards div.large-card h4.post-title{
                color: {$theme_color} !important;
            }
            .content-heading.post-heading.footer span::after{
                   background:#ffffff !important;
            }
            li.page_item.page-item-2 a{
                    color:#676767;
                    font-size:16px;
            }
            ul.menu li a{
                color:#676767;
                font-size:16px;
            }
            .popup-gallery {
                 padding-top: 17px;
            }
            ";
        wp_add_inline_style('hallwn-custom-rtl-style', $custom_rtl_css);
    }
    add_action('wp_enqueue_scripts', 'hallwn_my_rtl_styles_method');
}