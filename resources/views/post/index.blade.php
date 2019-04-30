@extends('layouts.postapp')

@section('content')
    <header>
        <h1>Index</h1>
    </header>

    <main>
        <div class="form-group">
            <a href="/posts/create" class="btn btn-primary">포스트 등록</a>
        </div>
    </main>

@endsection


@section('script')
    <script>
        function goCreate() {

        }
    </script>
@endsection
