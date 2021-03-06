@extends('partials.app')

@section('content')
<section class="divide-green-100 divide-y-2 container mx-auto">
    @can('create', 'App\Models\Comment')
    <form action="{{ route('comments.store', [$model, $id]) }}" method="POST" class="flex flex-col">
        @csrf
        <x-input-text name="title" value="{{ old('title') }}">
            Title
        </x-input-text>
        <x-input-textarea name="description" value="{{ old('description') }}">
            Description
        </x-input-textarea>
        <div class="flex justify-end">
            <button type="submit" class="bg-ekigreen hover:bg-green-700 px-4 py-2 text-white">Post Comment</button>
        </div>
    </form>
    @else
    You are not allowed to add comments.
    @endcan
</section>
@endsection