@extends('layouts.general')

@section('content')
<section class="container bg-white p-4 rounded shadow-sm mb-4">
    <h1 class="fw-bold">Gemini AI</h1>

    <div class="mb-4">
        <form method="POST" action="{{ route('history_chat.store') }}">
            @csrf
            <div class="mb-3">
                <textarea class="form-control fs-5" id="gemini" rows="3" placeholder="Enter your message here" name="message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100">Send</button>
        </form>
    </div>

    @if( session('response') )
    <hr>
    <div>
        <h2 class="fw-bold">Answer</h2>
        <p class="fs-5">
            {!! Str::markdown(session('response')) !!}
        </p>
    </div>
    @endif

</section>

<section class="container bg-white p-4 rounded shadow-sm">
    <h2 class="fw-bold">History Chat</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Send chat</th>
                <th scope="col">Get chat</th>
            </tr>
        </thead>
        <tbody>
            @isset($history_chat)
            @foreach($history_chat as $chat)
            <tr>
                <td>{{ $chat->send_chat }}</td>
                <td>{{ $chat->get_chat }}</td>
            </tr>
            @endforeach
            @endisset
        </tbody>
    </table>
</section>
@endsection