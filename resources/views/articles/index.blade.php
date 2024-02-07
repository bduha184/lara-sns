<x-app>
    <x-slot name="title">
        記事一覧
    </x-slot>

    @include('nav')
    @foreach ($articles as $article)
        @include('articles.card')
    @endforeach
</x-app>
