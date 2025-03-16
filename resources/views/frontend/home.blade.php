<x-frontend-layout>
    <div class="relative py-2">
        <div class="diagonal-box absolute z-10 bg-white ">
            <div class="diagonal-text relative">
                <div class="bg-white block text-xl mr-[10px] font-bold px-2 py-1">ताजा</div>
                <div class="bg-primary text-white block text-xl ml-[35px] font-bold px-2 py-1">खबर</div>
            </div>
        </div>

        <marquee behavior="scroll" direction="left" class="py-2 text-gray-800 relative z-1">
            @foreach ($latest_articles as $articles)
            <i class="fa-solid fa-bullhorn"></i><a href="{{ route('article', $articles->id) }}" class="pr-5 text-xl font-semibold hover:text-red-600 transition duration-300">
                    {{ $articles->title }}
                </a>
            @endforeach
        </marquee>
    </div>

    <section>
        <div class="container py-8">
            <div class="grid md:grid-cols-12 gap-8">
                <div class="md:col-span-8">
                    <a href="{{route('article',$latest_article->id)}}">
                        <img class="w-full object-cover" src="{{ asset($latest_article->image) }}"
                            alt="{{ $latest_article->title }}">
                        <h1 class="text-2xl font-bold py-3">
                            {{ $latest_article->title }}
                        </h1>
                        <div class="limited-text w-full description">
                            {!! $latest_article->description !!}
                        </div>
                    </a>
                </div>
                <div class="md:col-span-4">
                    <div>
                        <h1 class="text-3xl bg-light-primary py-2 px-5 border-l-[6px] border-[var(--primary)] primary">
                            ट्रेन्डिङ</h1>
                        @foreach ($trending_articles as $article)
                            <x-article-card :article="$article"/>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container py-10 space-y-10">
            @foreach ($categories as $category)
                @if (count($category->articles) > 0)
                    <div>
                        <div>
                            <h1 class="text-2xl">{{ $category->nep_title }}</h1>
                            <img class="h-[12px]" src="frontend/img/line.png" alt="{{ $category->nep_title }}">
                        </div>
                        <div class="grid grid-cols-4 gap-3">
                            @foreach ($category->articles as $index => $article)
                                @if ($index == 0)
                                    <a href="{{ route('article', $article->id) }}" class="col-span-1 row-span-2">
                                        <div class="overflow-hidden rounded-lg shadow-md hover:shadow-xl mt-2">
                                            <div class="w-full">
                                                <img src="{{ asset($article->image) }}" alt="{{ $article->title }}">
                                            </div>
                                            <div class="p-4">
                                                <h1 class="limited-text">{{ $article->title }}</h1>
                                                {{-- <small>{{ nepalidate($article->created_at) }}</small> --}}
                                            </div>
                                        </div>
                                    </a>
                                @else
                                    <div class="col-span-1 row-span-1">
                                        <x-article-card :article="$article" :index="$index"/>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </section>
</x-frontend-layout>
