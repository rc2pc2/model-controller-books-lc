@extends('layouts.app')

@section('main-content')
    <h1>
        Books
    </h1>

    <ul>
        @forelse ($books as $book)
            <li>
                {{ $book->title }} -  {{ $book->author }} - {{ $book->isbn }}
            </li>
        @empty
            <li>
                <p>
                    There are no available books at the moment.
                </p>
            </li>
        @endforelse

    </ul>
@endsection
