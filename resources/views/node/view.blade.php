@extends('layout.main')

@section('content')
    <div class="starter-template">
        <h1>{{ $node->title }}</h1>
        <p class="lead">{{ $node->body }}</p>
    </div>

    <div class="container">
        <div class="card">
            <h3 class="card-header">Comments</h3>
            <div class="card-block">
                <ul class="list-unstyled">
                    @foreach ($node->comments as $comment)
                        <li class="media">
                            <div class="media-body bd-callout bd-callout-warning">
                                {{ $comment->body }}
                            </div>
                        </li>
                    @endforeach
                </ul>

                <div class="card">
                    <h3 class="card-header">Add a Comment</h3>
                    <div class="card-block">
                        @include('layout.error')

                        <form method="POST" action="/node/{{$node->id}}/comment">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <textarea name="body" id="body" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
