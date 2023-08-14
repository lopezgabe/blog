<x-layout>
    @include('_posts-header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($posts->count())

            <x-post-featured-card :post="$posts[0]"></x-post-featured-card>

            @if ($posts->count() > 1)
                <x-posts-grid :posts="$posts"></x-posts-grid>
            @endif

        @else
            <p class="text-center">No posts yet. Please check back later.</p>
        @endif

    </main>


</x-layout>