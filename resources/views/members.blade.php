@extends('app')
@section('title', 'Bu jamoa azolari sahifasi')
@section('content')
    <h1>Hello from Members</h1>
<ul>
    @forelse ($members as $member)

    <li>{{ $member }}</li>
    @empty
        Hech qanday jamoa azosi mavjud emas
    @endforelse

</ul>


@endsection
