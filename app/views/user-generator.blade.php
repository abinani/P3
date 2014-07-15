@extends('_master')

@section('content')
  <div class="jumbotron">
        <h1>Random User Generator!</h1>
  </div>

      <form role="form" method="POST" action="user-generator">
        <div class="form-group form-inline">
          <h3>
            <span class="label label-default" for="numberOfUsers">Number of Users</span>
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
          <p>
            <div class="checkbox ">
              <label>
                <input type="checkbox" name="needs_birthdate"> Include Birthdate
              </label>
            </div>
          </p>
          <p>
            <div class="checkbox ">
              <label>
                <input type="checkbox" name="needs_profile"> Include Profile
              </label>
            </div>
          </p>
           </div>
        <button type="submit" class="btn btn-default" value="click" name="get_user">Generate Users!</button>
      </form>  
@stop

@section('footer')
@if ( isset($users) && count($users) > 0)
    <div id="user-modal" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="user-dismiss">&times;</button>
                    <h4 class="modal-title">Random users</h4>
                </div>
                <div class="modal-body">
                @foreach ($users as $user)
                    <dl>
                      <dt>{{ $user['name'] }}</dt>
                        @if (array_key_exists('bday', $user))
                          <dd>{{ $user['bday'] }}</dd>
                        @endif 
                        @if (array_key_exists('profile', $user))
                          <dd><em>{{ $user['profile'] }}</em></dd>
                        @endif 
                    </dl>
                    </br>
                @endforeach
                </div>
            </div>
        </div> 
    </div>

    <script type="text/javascript">
    $(window).load(function(){
        $('#user-modal').modal({show:true, keyboard: true});
    });
    </script>
@endif
@stop
