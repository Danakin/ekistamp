@extends('partials.app')

@section('content')
<section class="container mx-auto">
    <h2>
        Stamp <span class="font-bold">{{ $stamp->name_eng }}</span> for {{$prefecture->romaji }}, {{$city->romaji }},
        {{ $station->romaji }} Station</span>
    </h2>
    <h2>
        <ruby>{{$prefecture->kanji }}<rt>{{$prefecture->kana }}</rt></ruby>,
        <ruby>{{$city->kanji }}<rt>{{$city->kana }}</rt></ruby>,
        <ruby>{{ $station->kanji }}<rt>{{ $station->kana }}</rt></ruby>駅の<span
            class="font-bold">{{ $stamp->name_jap }}</span>のスタンプ
    </h2>
    @if(!$stamp->approved)
    <h2 class="text-red-500 font-bold">Waiting for approval</h2>
    @endif
    <article>
        <img src="{{ Storage::url($stamp->image) }}" alt="Stamp {{ $stamp->name_eng }}">
        <livewire:own-stamp :stamp="$stamp"></livewire:own-stamp>
    </article>

    <div class="flex flex-col">
        <h2 class="font-bold">Comments</h2>
        <div class="text-right mb-6">
            <a class="px-4 py-2 bg-ekigreen text-white rounded-md"
                href="{{ route('comments.create', ['stamps', $stamp]) }}">New
                Comment</a>
        </div>
        @include('comments.index', ['comments' => $stamp->comments()->orderBy('created_at', 'desc')->get()])
    </div>
</section>
@endsection