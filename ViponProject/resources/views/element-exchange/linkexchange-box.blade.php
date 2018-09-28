<div class="col-lg-6 box-linkexchange">
    <div class="box-title">
        <a href="{{$data->storehomepage}}"><strong>{{ $data->storename }}</strong></a>
    </div>
    <div class="box-desc">
        <div class="limit">{!! html_entity_decode($data->description) !!}</div>
    </div>
    <div class="box-link">
        <a href="{{$data->storehomepage}}">{{$data->storehomepage}}</a>
    </div>
</div>