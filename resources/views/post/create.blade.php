@extends('layouts.postapp')

@section('content')
    <header>
        <h1>Create</h1>
    </header>

    <main>
        <form action="/posts" method="POST">
            @csrf

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" value="">

                <label for="body">Body</label>
                <textarea name="body" class="form-control" id="body" rows="5"></textarea>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <button type="submit" class="btn btn-primary">submit</button>
        </form>

    </main>

@endsection


@section('script')
    <script>
        function goCreate() {

        }
    </script>
@endsection
