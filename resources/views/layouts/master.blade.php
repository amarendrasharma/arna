<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <nav class="">
            <ul class="nav  justify-content-center bg-light py-3 list-unstyled">
                <span  class="nav-item nav-link" >  {{ menu('Tour') }}</span>
                <span  class="nav-item nav-link">  {{ menu('About') }}</span>
                <span  class="nav-item nav-link" > {{ menu('test') }}</span>
            </ul>
    </nav>
    <div class="py-3">
        <div class="container">
            <div>
                <h3> {{$posts[4]->title}} </h3>
				<img src="{{ Voyager::image( $posts[4]->image ) }}" style="width:100%">
               <p>  {!! $posts[4]->body !!}  </p>  
            </div>
        </div>
    </div>
</body>
</html>