@props(['article'])

<a href="">
    <div class="grid grid-cols-12 gap-4 items-center py-3 shadow-md rounded-md overflow-hidden hover:shadow-xl">
        <div class="col-span-4">
            <img src="{{ asset($article->image) }}" alt="">
        </div>
        <div class="col-span-8">
            <h1 class="limited-text">{{ $article->title }}</h1>
            <small>{{ nepalidate($article->created_at) }}</small>
        </div>
    </div>
</a>
