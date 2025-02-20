<x-frontend-layout>
    <section>
        <div class="container py-10">
            <div class="grid md:grid-cols-12 gap-6">
                <div class="md:col-span-8 space-y-5">
                 @foreach ($articles as $article)
                 <div class="grid grid-cols-3 gap-6 items-center border rounded-md overflow-hidden">
                    <div class="col-span-1">
                        <img class="w-full h-[200px] object-cover" src="{{asset($article->image)}}" alt="{{$article->title}}">
                    </div>
                    <div class="col-span-2">
                        <h1 class="text-2xl py-4">{{$article->title}}</h1>
                                <div class="limited-text">
                                    {!! $article->description !!}
                                </div>
                                <small>{{nepalidate($article->created_at)}} | {{$article->views}} पटक पढिएको</small>
                                <a href="{{route('article',$article->id)}}">Read more..</a>
                    </div>
                </div>
                 @endforeach
                 {{$articles->links()}}
                </div>
                <div class="md:col-span-4">
                    @foreach ($advertises as $advertise)
                    <img src="{{asset($advertise->image)}}" alt="">

                    @endforeach
                </div>
            </div>
        </div>
    </section>
</x-frontend-layout>
