@extends('layouts.customer')

@section('style')
    <link rel="stylesheet" href="https://limody.vn/wp-content/cache/min/1/cae8ee19ea48bd7d65cf38036fd5c545.css" media="all" data-minify="1" />
    <link href="{{ asset('/css/customer/posts/posts-style.css') }}" rel="stylesheet">

    <style type="text/css">
        .heateor_sss_button_instagram span.heateor_sss_svg,
        a.heateor_sss_instagram span.heateor_sss_svg {
            background: radial-gradient(circle at 30% 107%, #fdf497 0, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285aeb 90%)
        }

        .heateor_sss_horizontal_sharing .heateor_sss_svg,
        .heateor_sss_standard_follow_icons_container .heateor_sss_svg {
            color: #fff;
            border-width: 0px;
            border-style: solid;
            border-color: transparent;
        }

        .heateor_sss_horizontal_sharing .heateorSssTCBackground {
            color: #666;
        }

        .heateor_sss_horizontal_sharing span.heateor_sss_svg:hover,
        .heateor_sss_standard_follow_icons_container span.heateor_sss_svg:hover {
            border-color: transparent;
        }

        .heateor_sss_vertical_sharing span.heateor_sss_svg,
        .heateor_sss_floating_follow_icons_container span.heateor_sss_svg {
            color: #fff;
            border-width: 0px;
            border-style: solid;
            border-color: transparent;
        }

        .heateor_sss_vertical_sharing .heateorSssTCBackground {
            color: #666;
        }

        .heateor_sss_vertical_sharing span.heateor_sss_svg:hover,
        .heateor_sss_floating_follow_icons_container span.heateor_sss_svg:hover {
            border-color: transparent;
        }

        div.heateor_sss_horizontal_sharing .heateor_sss_square_count {
            float: right;
            margin: 0 8px;
            line-height: 60px;
        }

        @media screen and (max-width:783px) {
            .heateor_sss_vertical_sharing {
                display: none !important
            }
        }

        div.heateor_sss_sharing_title {
            text-align: center
        }

        div.heateor_sss_sharing_ul {
            width: 100%;
            text-align: center;
        }

        div.heateor_sss_horizontal_sharing div.heateor_sss_sharing_ul a {
            float: none !important;
            display: inline-block;
        }
    </style>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <style id='global-styles-inline-css' type='text/css'>
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--color--theme-color-one: #6c5b7b;
            --wp--preset--color--theme-color-two: #f67280;
            --wp--preset--color--theme-color-three: #f8b195;
            --wp--preset--color--theme-color-four: #c06c84;
            --wp--preset--color--very-dark-grey: #2e2f33;
            --wp--preset--color--dark-grey: #45464b;
            --wp--preset--color--medium-grey: #94979e;
            --wp--preset--color--light-grey: #D3D3D3;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
            --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
            --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
            --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
            --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
            --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
            --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
            --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        body .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <style id='ez-toc-inline-css' type='text/css'>
        div#ez-toc-container p.ez-toc-title {
            font-size: 120%;
        }

        div#ez-toc-container p.ez-toc-title {
            font-weight: 500;
        }

        div#ez-toc-container ul li {
            font-size: 95%;
        }

        div#ez-toc-container nav ul ul li ul li {
            font-size: 90% !important;
        }

        div#ez-toc-container {
            background: #fff;
            border: 1px solid #dd9933;
        }

        div#ez-toc-container p.ez-toc-title {
            color: #dd3333;
        }

        div#ez-toc-container ul.ez-toc-list a {
            color: #000cf9;
        }

        div#ez-toc-container ul.ez-toc-list a:hover {
            color: #81d742;
        }

        div#ez-toc-container ul.ez-toc-list a:visited {
            color: #000000;
        }

        .ez-toc-container-direction {
            direction: ltr;
        }

        .ez-toc-counter ul {
            counter-reset: item;
        }

        .ez-toc-counter nav ul li a::before {
            content: counters(item, ".", decimal) ". ";
            display: inline-block;
            counter-increment: item;
            flex-grow: 0;
            flex-shrink: 0;
            margin-right: .2em;
            float: left;
        }

        .ez-toc-widget-direction {
            direction: ltr;
        }

        .ez-toc-widget-container ul {
            counter-reset: item;
        }

        .ez-toc-widget-container nav ul li a::before {
            content: counters(item, ".", decimal) ". ";
            display: inline-block;
            counter-increment: item;
            flex-grow: 0;
            flex-shrink: 0;
            margin-right: .2em;
            float: left;
        }
    </style>
    <style id='rocket-lazyload-inline-css' type='text/css'>
        .rll-youtube-player {
            position: relative;
            padding-bottom: 56.23%;
            height: 0;
            overflow: hidden;
            max-width: 100%;
        }

        .rll-youtube-player:focus-within {
            outline: 2px solid currentColor;
            outline-offset: 5px;
        }

        .rll-youtube-player iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 100;
            background: 0 0
        }

        .rll-youtube-player img {
            bottom: 0;
            display: block;
            left: 0;
            margin: auto;
            max-width: 100%;
            width: 100%;
            position: absolute;
            right: 0;
            top: 0;
            border: none;
            height: auto;
            -webkit-transition: .4s all;
            -moz-transition: .4s all;
            transition: .4s all
        }

        .rll-youtube-player img:hover {
            -webkit-filter: brightness(75%)
        }

        .rll-youtube-player .play {
            height: 100%;
            width: 100%;
            left: 0;
            top: 0;
            position: absolute;
            background: url(https://limody.vn/wp-content/plugins/wp-rocket/assets/img/youtube.png) no-repeat center;
            background-color: transparent !important;
            cursor: pointer;
            border: none;
        }
    </style>
    <style>
        :root {
            --theme-color-1: #1e73be;
            --theme-color-2: #dd3333;
            --link-color: #1e73be;
            --primary-nav-link-color: #000000;
            --primary-nav-submenu-link-color: #000000;
            --primary-nav-sidebar-link-color: #000000;
            --single-entry-font-color: #000000;
        }
    </style>
    <style>
        .ai-viewports {
            --ai: 1;
        }

        .ai-viewport-3 {
            display: none !important;
        }

        .ai-viewport-2 {
            display: none !important;
        }

        .ai-viewport-1 {
            display: inherit !important;
        }

        .ai-viewport-0 {
            display: none !important;
        }

        @media (min-width: 768px) and (max-width: 979px) {
            .ai-viewport-1 {
                display: none !important;
            }

            .ai-viewport-2 {
                display: inherit !important;
            }
        }

        @media (max-width: 767px) {
            .ai-viewport-1 {
                display: none !important;
            }

            .ai-viewport-3 {
                display: inherit !important;
            }
        }
    </style>
    <noscript>
        <style id="rocket-lazyload-nojs-css">
            .rll-youtube-player,
            [data-lazy-src] {
                display: none !important;
            }
        </style>
    </noscript>

    <style>
        figure > img {
            width: 100%;
            height: auto;
        }
    </style>
@endsection

@section('content')
    <body class="post-template-default single single-post postid-19316 single-format-standard wp-custom-logo has-related-posts">
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v22.0&appId=703015955502488"></script>
        <div class="wrap">
            <main id="main" class="site-main">
                <div id="primary" class="content-area flex-grid the-post square-aspect-ratio">
                    <article id="post-19316"
                        class="flex-box single-post default post-19316 post type-post status-publish format-standard has-post-thumbnail hentry category-toplist">
                        <!-- .post-thumbnail -->
                        <div class="post-thumbnail">
                            <img
                                src="{{ $post->image }}"
                                class="attachment-carrino-single-square-image size-carrino-single-square-image wp-post-image"
                                alt="Danh sách lộ trình các tuyến xe bus đi từ bến xe Yên Nghĩa chi tiết A-Z" />
                        </div>

                        <!-- .entry-header -->
                        <header class="entry-header">
                            <h1 class="entry-title">
                                <span>{{ $post->title }}</span>
                            </h1>
                            <div class="entry-meta after-title has-avatar">
                                <ul style="position: relative;">
                                    <li class="entry-date">
                                        <time datetime="2024-07-29">29 Tháng Bảy, 2024</time>
                                    </li>
                                </ul>
                            </div>
                        </header>

                        <!-- .entry-content -->
                        <div class="entry-content">
                            {!! $post->content !!}
                            <div class='heateor_sss_sharing_title' style="font-weight:bold">Share bài viết nếu thấy hữu ích
                            </div>
                            <div class="heateor_sss_sharing_ul">
                                <a class="heateor_sss_facebook" href="#" title="Facebook" rel="nofollow noopener"
                                    target="_blank"
                                    style="font-size:32px!important;box-shadow:none;display:inline-block;vertical-align:middle">
                                    <span class="heateor_sss_svg"
                                        style="background-color:#3c589a;width:60px;height:60px;border-radius:999px;display:inline-block;opacity:1;float:left;font-size:32px;box-shadow:none;display:inline-block;font-size:16px;padding:0 4px;vertical-align:middle;background-repeat:repeat;overflow:hidden;padding:0;cursor:pointer;box-sizing:content-box">
                                        <svg style="display:block;border-radius:999px;" focusable="false" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
                                            viewBox="-5 -5 42 42">
                                            <path
                                                d="M17.78 27.5V17.008h3.522l.527-4.09h-4.05v-2.61c0-1.182.33-1.99 2.023-1.99h2.166V4.66c-.375-.05-1.66-.16-3.155-.16-3.123 0-5.26 1.905-5.26 5.405v3.016h-3.53v4.09h3.53V27.5h4.223z"
                                                fill="#fff"></path>
                                        </svg>
                                    </span>
                                    <span class="heateor_sss_square_count heateor_sss_facebook_count">&nbsp;</span>
                                </a>
                                <a class="heateor_sss_button_twitter" href="#" title="Twitter" rel="nofollow noopener"
                                    target="_blank"
                                    style="font-size:32px!important;box-shadow:none;display:inline-block;vertical-align:middle">
                                    <span class="heateor_sss_svg heateor_sss_s__default heateor_sss_s_twitter"
                                        style="background-color:#55acee;width:60px;height:60px;border-radius:999px;display:inline-block;opacity:1;float:left;font-size:32px;box-shadow:none;display:inline-block;font-size:16px;padding:0 4px;vertical-align:middle;background-repeat:repeat;overflow:hidden;padding:0;cursor:pointer;box-sizing:content-box">
                                        <svg style="display:block;border-radius:999px;" focusable="false" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
                                            viewBox="-4 -4 39 39">
                                            <path
                                                d="M28 8.557a9.913 9.913 0 0 1-2.828.775 4.93 4.93 0 0 0 2.166-2.725 9.738 9.738 0 0 1-3.13 1.194 4.92 4.92 0 0 0-3.593-1.55 4.924 4.924 0 0 0-4.794 6.049c-4.09-.21-7.72-2.17-10.15-5.15a4.942 4.942 0 0 0-.665 2.477c0 1.71.87 3.214 2.19 4.1a4.968 4.968 0 0 1-2.23-.616v.06c0 2.39 1.7 4.38 3.952 4.83-.414.115-.85.174-1.297.174-.318 0-.626-.03-.928-.086a4.935 4.935 0 0 0 4.6 3.42 9.893 9.893 0 0 1-6.114 2.107c-.398 0-.79-.023-1.175-.068a13.953 13.953 0 0 0 7.55 2.213c9.056 0 14.01-7.507 14.01-14.013 0-.213-.005-.426-.015-.637.96-.695 1.795-1.56 2.455-2.55z"
                                                fill="#fff"></path>
                                        </svg>
                                    </span>
                                    <span class="heateor_sss_square_count heateor_sss_twitter_count">&nbsp;</span>
                                </a>
                                <a class="heateor_sss_button_linkedin" href="#" title="Linkedin" rel="nofollow noopener"
                                    target="_blank"
                                    style="font-size:32px!important;box-shadow:none;display:inline-block;vertical-align:middle">
                                    <span class="heateor_sss_svg heateor_sss_s__default heateor_sss_s_linkedin"
                                        style="background-color:#0077b5;width:60px;height:60px;border-radius:999px;display:inline-block;opacity:1;float:left;font-size:32px;box-shadow:none;display:inline-block;font-size:16px;padding:0 4px;vertical-align:middle;background-repeat:repeat;overflow:hidden;padding:0;cursor:pointer;box-sizing:content-box">
                                        <svg style="display:block;border-radius:999px;" focusable="false" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
                                            viewBox="0 0 32 32">
                                            <path
                                                d="M6.227 12.61h4.19v13.48h-4.19V12.61zm2.095-6.7a2.43 2.43 0 0 1 0 4.86c-1.344 0-2.428-1.09-2.428-2.43s1.084-2.43 2.428-2.43m4.72 6.7h4.02v1.84h.058c.56-1.058 1.927-2.176 3.965-2.176 4.238 0 5.02 2.792 5.02 6.42v7.395h-4.183v-6.56c0-1.564-.03-3.574-2.178-3.574-2.18 0-2.514 1.7-2.514 3.46v6.668h-4.187V12.61z"
                                                fill="#fff"></path>
                                        </svg>
                                    </span>
                                    <span class="heateor_sss_square_count heateor_sss_linkedin_count">&nbsp;</span>
                                </a>
                                <a class="heateor_sss_button_pinterest" href="#"
                                    onclick="event.preventDefault();javascript:void( (function() {var e=document.createElement('script' );e.setAttribute('type','text/javascript' );e.setAttribute('charset','UTF-8' );e.setAttribute('src','//assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)})());"
                                    title="Pinterest" rel="nofollow noopener"
                                    style="font-size:32px!important;box-shadow:none;display:inline-block;vertical-align:middle">
                                    <span class="heateor_sss_svg heateor_sss_s__default heateor_sss_s_pinterest"
                                        style="background-color:#cc2329;width:60px;height:60px;border-radius:999px;display:inline-block;opacity:1;float:left;font-size:32px;box-shadow:none;display:inline-block;font-size:16px;padding:0 4px;vertical-align:middle;background-repeat:repeat;overflow:hidden;padding:0;cursor:pointer;box-sizing:content-box">
                                        <svg style="display:block;border-radius:999px;" focusable="false" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
                                            viewBox="-2 -2 35 35">
                                            <path fill="#fff"
                                                d="M16.539 4.5c-6.277 0-9.442 4.5-9.442 8.253 0 2.272.86 4.293 2.705 5.046.303.125.574.005.662-.33.061-.231.205-.816.27-1.06.088-.331.053-.447-.191-.736-.532-.627-.873-1.439-.873-2.591 0-3.338 2.498-6.327 6.505-6.327 3.548 0 5.497 2.168 5.497 5.062 0 3.81-1.686 7.025-4.188 7.025-1.382 0-2.416-1.142-2.085-2.545.397-1.674 1.166-3.48 1.166-4.689 0-1.081-.581-1.983-1.782-1.983-1.413 0-2.548 1.462-2.548 3.419 0 1.247.421 2.091.421 2.091l-1.699 7.199c-.505 2.137-.076 4.755-.039 5.019.021.158.223.196.314.077.13-.17 1.813-2.247 2.384-4.324.162-.587.929-3.631.929-3.631.46.876 1.801 1.646 3.227 1.646 4.247 0 7.128-3.871 7.128-9.053.003-3.918-3.317-7.568-8.361-7.568z" />
                                        </svg>
                                    </span>
                                    <span class="heateor_sss_square_count heateor_sss_pinterest_count">&nbsp;</span>
                                </a>
                                <a class="heateor_sss_button_facebook_messenger" href="#"
                                    style="font-size:32px!important;box-shadow:none;display:inline-block;vertical-align:middle">
                                    <span class="heateor_sss_svg heateor_sss_s__default heateor_sss_s_facebook_messenger"
                                        style="background-color:#0084ff;width:60px;height:60px;border-radius:999px;display:inline-block;opacity:1;float:left;font-size:32px;box-shadow:none;display:inline-block;font-size:16px;padding:0 4px;vertical-align:middle;background-repeat:repeat;overflow:hidden;padding:0;cursor:pointer;box-sizing:content-box">
                                        <svg style="display:block;border-radius:999px;" focusable="false" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
                                            viewBox="-2 -2 36 36">
                                            <path fill="#fff"
                                                d="M16 5C9.986 5 5.11 9.56 5.11 15.182c0 3.2 1.58 6.054 4.046 7.92V27l3.716-2.06c.99.276 2.04.425 3.128.425 6.014 0 10.89-4.56 10.89-10.183S22.013 5 16 5zm1.147 13.655L14.33 15.73l-5.423 3 5.946-6.31 2.816 2.925 5.42-3-5.946 6.31z" />
                                        </svg>
                                    </span>
                                    <span
                                        class="heateor_sss_square_count heateor_sss_Facebook_Messenger_count">&nbsp;</span>
                                </a>
                            </div>
                        </div>
                    </article>
                    <div class="fb-comments" data-href="benxetaukiengiang.vn/posts/{{ $post->id }}" data-width="100%" data-numposts="5"></div>
                </div>
            </main>
        </div>
    </body>
@endsection