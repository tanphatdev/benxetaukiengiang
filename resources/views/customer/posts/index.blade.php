@extends('layouts.customer')

@section('style')
    <link href="{{ asset('/css/customer/posts/posts-style.css') }}" rel="stylesheet">
@endsession

@section('content')
    <div class="wrap">
        <header class="container page-header">
            <h1 class="page-title">Danh sách tin tức</h1>
        </header>
        <main id="main" class="site-main">
            <div id="primary" class="content-area flex-grid grid cols-3 square-aspect-ratio">
                @foreach($posts as $post)
                    <article id="post-19316" class="flex-box default post-19316 post type-post status-publish format-standard has-post-thumbnail hentry category-toplist">
                        <div class="post-thumbnail">
                            <a href="/posts/{{ $post->id }}">
                                <img class="attachment-carrino-square-image size-carrino-square-image wp-post-image"
                                    src="{{ $post->image }}"
                                    alt="{{ $post->title }}"
                                />
                            </a>
                        </div>

                        <header class="entry-header">
                            <h3 class="entry-title">
                                <a href="/posts/{{ $post->id }}" rel="bookmark">
                                    {{ $post->title }}
                                </a>
                            </h3>
                            <div class="entry-meta after-title has-avatar">
                                <ul>
                                    <li class="entry-date">
                                        <time>{{ $post->created_at->format('d M Y') }}</time>
                                    </li>
                                </ul>
                            </div>
                        </header>
                        <div class="entry-content">
                            <p>
                                {{ Str::limit($post->sub_content, 165, '...') }}
                            </p>
                        </div>
                    </article>
                @endforeach
            </div>
        </main>
    </div>
@endsection