@extends('office')

@section('activeNav')
    <li><a href="{{route('office')}}"><i class="icon-home"></i><span class="muted">Товары</span></a></li>
    <li><a href="{{route('myreviews')}}"><i class="icon-signal"></i> <span class="muted">Отзывы</span></a></li>
    <li class="active" id="active"><a href="{{route('mysettings')}}"><i class="icon-lock"></i> <span class="muted">Настройки</span></a></li>
@endsection

@section('officeContent')
    
    <div class="container">
        <div class="row">
            <h1>This is my settings page</h1>
        </div>
    </div>

@endsection