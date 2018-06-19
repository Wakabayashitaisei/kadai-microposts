<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Microposts</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
       
            @include('commons.navbar')
        
                <div class="container">
                    <div class="alert alert-info" role="alert">
                            今日は、<b>
                                <?php 
                                    $timestamp = time() ;
                                    echo date( "Y/m/d" , $timestamp ) ;
                                ?>
                            </b>です。
                    	        <?php
                    	            function rand_message() {
                                    	$message = array("一日頑張りましょう！", "適度に休憩しましょう。", "一つ一つこなしていきましょう！", "いっぱい投稿しましょう。", "いいことあるさ。","いい夢見ろよ。","おなかすいたね。","目が痛い。");
                                    	return $message[array_rand($message)];
                                    }
                     
                                    echo rand_message();
                    	        ?>
                	</div>
                </div>
     <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
            @include('commons.error_messages')

            @yield('content')
        </div>
    </div>
    </body>
</html>