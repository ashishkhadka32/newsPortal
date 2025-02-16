<x-frontend-layout>
    <section>
        <div class="container py-10">
            <div class="grid md:grid-cols-12 gap-6">
                <div class="md:col-span-8 space-y-5">
                    <div>
                        <small class="text-md">
                            <i class="fa-regular fa-calendar-days"></i> प्रकाशित
                            मितिः{{ nepalidate($article->created_at) }} | <i class="fa-regular fa-newspaper"></i>
                            {{ $article->views }} पटक पढिएको
                        </small>
                        <h1 class="text-xl mt-4">{{$article->title}}</h1>
                        <img class="mt-3 w-full h-[50vh] object-cover" src="{{asset($article->image)}}" alt="{{$article->title}}">
                        <div class="description mt-2">
                            {!! $article->description !!}
                        </div>
                    </div>
                </div>
                <div class="md:col-span-4">

                </div>
            </div>
        </div>
    </section>
</x-frontend-layout>
