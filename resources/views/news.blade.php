@extends('components.layout')

@section('news')
<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        Latest <span class="text-blue-500">Laravel From Scratch</span> News
    </h1>

    <p class="text-sm mt-14">
        Another year. Another update. We're refreshing the popular Laravel series with new content.
        I'm going to keep you guys up to speed with what's going on!
    </p>

    <x-_posts-header :categories="$categories" />
</header>

<main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-4">
    @if($news->count())

    <x-post-card-grid :news="$news" class="col-span-2" />
    @else
    <p class="text-center">No posts yet</p>
    @endif
    <div class="lg:grid lg:grid-cols-3">



    </div>
</main>
@endsection