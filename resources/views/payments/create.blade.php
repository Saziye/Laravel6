@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form method="POST" action="/payments">
                @csrf
                <button type="submit" class="btn btn-primary">
                    Make Payment
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
