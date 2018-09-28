@extends('app')

@section('before-header')
    @include('elements.submitCodeForm')
@endsection
@section('content_main')
    <div class="container">
        <div class="main">
            <h1>Link Exchanges</h1>
            @if(!empty($linkexchange))
                <div class="top-text">
                    @foreach ($linkexchange as $key => $dt)
                        {!! html_entity_decode($dt->description) !!}
                    @endforeach
                </div>
            @else

            @endif
            @if(!empty($element))
                <div class="row box" style="padding-bottom: 30px;padding-top: 10px">
                    @foreach ($element as $key => $data)
                        @include('element-exchange.linkexchange-box')
                    @endforeach
                </div>
            @else

            @endif
        </div>
    </div>
@endsection
