@props(['news'])
<x-post-card-featured :post="$news[0]" />
@if($news->count()>1)
<div class="lg:grid lg:grid-cols-1">
    @foreach($news->skip(1) as $post)
    <x-post-card :post="$post" class="grid-span-1" />
    @endforeach
</div>
@endif