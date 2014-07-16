@extends('_master')

@section('content')

      <div class="jumbotron">
        <h1>Lorem Ipsum Generator!</h1>
      </div>

      <form role="form" method="POST" action="loremipsum-generator">
        <div class="form-group form-inline">
          <h3>
            <span class="label label-default" for="numberOfparas">Number of Paragraphs</span>
            <select class="form-control" name="how_many">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
            </select>
          </h3>
        </div>
        <button type="submit" class="btn btn-default" value="click" name="get_loremipsum">Generate!</button>
      </form>  
@stop

@section('footer')
@if ( isset($paras) && count($paras) > 0)
   @section('modal-body')
     {{implode('<p><br/>', $paras); }}
   @stop
   @include("_modalwindow", array("name" => "loremipsum", "title" => "Lorem Ipsum"))
@endif
@stop
