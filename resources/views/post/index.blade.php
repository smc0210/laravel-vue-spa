@extends('layouts.postapp')

@section('content')
    <header>
        <h1>Index</h1>
    </header>

    <main>
        <div class="col">
            @if ($posts)
                <ul class="list-none">
                    @foreach( $posts as $post)
                        <li><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></li>
                    @endforeach
                </ul>
            @endif
        </div>

        <div class="col">
            <div class="form-group">
                <a href="/posts/create" class="btn btn-primary">포스트 등록</a>
            </div>
        </div>
    </main>

@endsection


@section('script')
    <script>
        function goCreate() {

        }
    </script>
@endsection
