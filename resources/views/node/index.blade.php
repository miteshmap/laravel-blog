@extends('layout.main')

@section('content')
    <!-- Example row of columns -->
    <div class="row">
        @foreach($nodes as $node)
            <div class="col-md-4">
                <h2>{{ $node->title }}</h2>
                <p>{{ $node->body }}</p>
                <p><a class="btn btn-secondary" href="/node/{{ $node->id }}" role="button">View details &raquo;</a></p>
            </div>
        @endforeach
    </div>
@endsection
