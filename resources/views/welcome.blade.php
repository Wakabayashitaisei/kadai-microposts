@extends('layouts.app')

@section('content')
<style type="text/css">
    .label {
        font-size: 25px;
        height:25px;
        margin-bottom:100px;
    }
    


.form-group {
            float: left;
            position: relative left;
            position: fixed; left:10px;
            width:325px;
            border: dashed 2px white;
            margin-left:150px;
                }
                
.form-group textarea {
            resize: vertical;
            height:200px;
            }

.clearfix::after {
    content:'';
    display:block;
    clear:both;
}

.tweet{
    margin-top:20px;
}




   

 </style>
    @if (Auth::check())
        <div class="row">
            
                <aside class="col-md-4">
                <div id="textbox">
                    <div class='clearfix'>
                    @if (Auth::id() == $user->id) <!-- Auth::user()->id wo Auth::id() ni kaetayo -->
                          {!! Form::open(['route' => 'microposts.store']) !!}
                              <div class="form-group">
                                  {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '2']) !!}
                                  {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
                              </div>
                          {!! Form::close() !!}
                    @endif
                    </div>
                </div>
                    
                </aside>
                
                    <div class="col-md-8">
                        
                        <span class="label label-info">みんなの投稿</span>
                        
                        <section class="tweet">
                        @if (count($microposts) > 0)
                            @include('microposts.microposts', ['microposts' => $microposts])
                        @endif
                        </section>
                    </div>
                </div>
            @else
                <body>
                    <link href="css/background.css" rel="stylesheet" type="text/css">
                            <div class="text-center">
                                <h1>Welcome to the Microposts</h1>
                
                                    {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
                            </div>
                        </div>
        
                </body> 
            @endif
            
@endsection
