@extends('mygoods')
@section('addgood')
<link href="http://cdn-na.infragistics.com/igniteui/2017.2/latest/css/themes/infragistics/infragistics.theme.css" rel="stylesheet" />
<link href="http://cdn-na.infragistics.com/igniteui/2017.2/latest/css/structure/infragistics.css" rel="stylesheet" />

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><b>Добавить новый товар</b></h4>
        <button class="btn btn-warning btn-lg" data-dismiss="modal"><b><h3>&times;</h3></b></button>
      </div>
      <!-- MODAL BODY MODAL BODY -->

      <div class="modal-body bg-light" style="heigth: 200%">

        <!-- Whom to add -->
        <div data-bind="if: page() == 'whom'">
            <!-- Find contributors -->
            <form action="{{route('addgood')}}" class="form" method="POST"> <!-- enctype="multipart/form-data"> -->
                {{ csrf_field() }}
                <div class="container">
                    <div class="form-group">
                        <label for="title"><h3>&nbsp;Название товара</h3></label>
                        <input name="title" type="text" id="title" class="form-control" required>
                    </div><hr>
                    <div class="btn-group hierarchy-select" data-resize="auto" id="example-one">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <span class="selected-label pull-left">&nbsp;</span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu open">
                            <div class="hs-searchbox">
                                <input type="text" class="form-control" id="category[]" autocomplete="off">
                            </div>
                            <ul class="dropdown-menu inner" role="menu">
                                <li data-value="" data-level="1" data-default-selected="">
                                    <a href="#">Категория</a>
                                </li>
                                 <?php

                                    $options = App\Category::get();
                                    
                                    foreach ($options as $option){
                                        ?><li data-value="{{$option->id}}" data-level="{{$option->data_level}}"><a href="#">{{$option->title}}</a></li><?php
                                    }
                                
                                ?>
                            </ul>
                        </div>
                        <input class="hidden hidden-field" name="category" readonly="readonly" aria-hidden="true" type="text" required />
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="description"><h3>&nbsp;Описание товара</h3></label>
                        <textarea name="description" class="form-control" rows="8" id="description" class="form-control" required></textarea>
                    </div><hr>

                    <div class="form-group">
                        <label for="price"><h3>&nbsp;Цена</h3></label>
                        <input name="price" type="text" id="price" class="form-control" required>
                    </div><hr>
                    
                    <button class="btn btn-lg btn-success">Добавить товар</button>
                </div>
            </form>
        </div>
        <div data-bind="if:page() === &quot;invite&quot;"></div><!-- end invite user page -->
    </div>
    </div>
  </div>
</div>
@endsection

@section('script')
    <script src="{{asset('hierarchy-select/hierarchy-select.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example-one').hierarchySelect({
                width: 200
            });
        });
    </script>
@endsection