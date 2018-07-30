 @extends('office')

@section('activeNav')
    <li><a href="{{route('mysettings')}}"><span class="muted">Настройки</span></a></li>
    <li><a href="{{route('office')}}"><span class="muted">Товары</span></a></li>
    <li class="active"><a href="{{route('myreviews')}}"><span class="muted">Отзывы</span></a></li>
@endsection

@section('officeContent')

<div class="col-sm-8 col-sm-offset-2 bg-light">
<form action="{{route('addPhoto')}}" class="dropzone" id="my-awesome-dropzone" method="POST"> <!-- enctype="multipart/form-data"> -->
    {{ csrf_field() }}
    <div class="container">
        <br>
        <label for="image"><h3>&nbsp;Фото</h3></label><br> 
        <span class="muted">Перетащите файлы в прямоуголник или нажмите на него для выбора файлов</span><br> 
        <div class="bg6" id="image" style="margin-top: 4px; border: 1px solid rgba(0,0,0,.15); border-radius: .25rem">
        
            <div class="fallback">
                <input name="file" type="file" multiple required />
            </div>
        
        </div>
        <button class="btn btn-lg btn-success">Добавить товар</button>
        <!-- <input type="button" class="btn btn-lg btn-success" value="Добавить товар" onclick="submitForms()" /> -->
    </div>
</form>
</div>
@endsection