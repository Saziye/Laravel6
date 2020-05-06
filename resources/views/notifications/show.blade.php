@extends('layouts.app')

@section('content')
<div class="container">
    <ul>
        @forelse ($notifications as $notification)
            <li>
                {{-- {{$notification -> type}} --}}
                @if ($notification->type === 'App\Notifications\PAymentReceived')
                    We have received a payment of {{$notification->data['amount']}} from you.
                @endif
            </li>
        @empty
            <li>You have npt unread notifications at this time.</li>
        @endforelse
        
    </ul>
</div>
@endsection
