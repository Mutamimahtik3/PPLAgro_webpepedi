<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PEPEDI - Chat</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container app">
  <div class="row app-one">
    <div class="col-sm-4 side">
      <div class="side-one">
        <div class="row heading">
          <div class="col-sm-3 col-xs-3 heading-avatar">
            <div class="heading-avatar-icon">
              <img src="https://bootdey.com/img/Content/avatar/avatar1.png">
            </div>
          </div>
          <div class="col-sm-1 col-xs-1  heading-dot  pull-right">
            <i class="fa fa-ellipsis-v fa-2x pull-right" aria-hidden="true"></i>
          </div>
          <div class="mdh col-sm-2 col-xs-2 heading-compose  pull-right">
            <a href="{{route('chat')}}">
              <i class="fa fa-comments fa-2x pull-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>

        <div class="row searchBox">
          <div class="col-sm-12 searchBox-inner">
            <div class="form-group has-feedback">
              <input id="searchText" type="text" class="form-control" name="searchText" placeholder="Search">
              <span class="glyphicon glyphicon-search form-control-feedback"></span>
            </div>
          </div>
        </div>

        <div class="row sideBar">
          @php
          $chatList=array();
          @endphp

          @foreach($data as $data)
          <!-- {{$data}} -->
              @if(Auth::user()->id == $data->sender_id)
                  @if(!in_array($data->reciever_id, $chatList))
                      <div class="row sideBar-body">
                        <div class="col-sm-3 col-xs-3 sideBar-avatar">
                          <div class="avatar-icon">
                            <img src="https://bootdey.com/img/Content/avatar/avatar4.png">
                          </div>
                        </div>
                        <div class="col-sm-9 col-xs-9 sideBar-main">
                          <div class="row">
                            <div class="col-sm-8 col-xs-8 sideBar-name">
                                <span class="name-meta">
                                    @if(Auth::user()->id == $data->sender_id)
                                        {{$data->reciever->name}}
                                    @endif
                                </span>
                            </div>
                            <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                              <span class="time-meta pull-right">
                                {{date("d-m-Y", strtotime($data->created_at))}}
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                      @php
                      array_push($chatList,$data->reciever_id);
                      @endphp
                  @endif
              @endif          
          @endforeach
        </div>
      </div>
    </div>

    <div class="col-sm-8 conversation">
      <div class="row heading">
        <div class="col-sm-2 col-md-1 col-xs-3 heading-avatar">
          <div class="heading-avatar-icon">
            <img src="https://bootdey.com/img/Content/avatar/avatar6.png">
          </div>
        </div>
        <div class="col-sm-8 col-xs-7 heading-name">
          <a class="heading-name-meta">
            {{$user->name}}
          </a>
          <span class="heading-online">Online</span>
        </div>
        <div class="col-sm-1 col-xs-1  heading-dot pull-right">
          <i class="fa fa-ellipsis-v fa-2x  pull-right" aria-hidden="true"></i>
        </div>
      </div>

      <div class="row message" id="conversation">
        <br><br>
        <div class="row message-body">
        @foreach($chats as $res)
          @if(
            $res->sender_id == Auth::user()->id 
            && 
            $res->reciever_id == $user->id
          )
          <div class="row message-body">
              <div class="col-sm-12 message-main-sender">
                <div class="sender">
                  <div class="message-text">
                    {{$res->value}}
                  </div>
                  <span class="message-time pull-right">
                    Sun
                  </span>
                </div>
              </div>
          </div>
          @endif
          @if(
            $res->sender_id == $user->id 
            && 
            $res->reciever_id == Auth::user()->id
          )
          <div class="row message-body">
              <div class="col-sm-12 message-main-receiver">
                <div class="receiver">
                  <div class="message-text">
                    {{$res->value}}
                  </div>
                  <span class="message-time pull-right">
                    Sun
                  </span>
                </div>
              </div>
          </div>
          @endif
        @endforeach
        </div>

        <!--  -->
      </div>
      

      <div class="row reply">
        <form action="{{route('chat.send', ['id' => $user->id])}}" method="POST">
        @csrf
        @method('put')
            <div class="col-sm-11 col-xs-11 reply-main">
              <textarea class="form-control" rows="1" name="value"></textarea>
            </div>
            <button type="submit" class="col-sm-1 col-xs-1 reply-send" style="border: none;">
              <i class="fa fa-send fa-2x" aria-hidden="true"></i>
            </button>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>