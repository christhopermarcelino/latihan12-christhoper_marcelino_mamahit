@extends('layouts.general')

@section('content')
<section class="container">
    <h1 class="fw-bold">Gemini AI</h1>

    <div class="mb-4">
        <form method="POST" action="{{ url('gemini') }}">
            @csrf
            <div class="mb-3">
                <textarea class="form-control fs-5" id="gemini" rows="5" placeholder="Enter your message here" name="message"></textarea>
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
@endsection