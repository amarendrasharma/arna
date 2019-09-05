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
                <form action="{{route('contact.store')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Name </label>
                        <input type="text" class="form-control" name="name">
                    </div>

                    <div class="form-group">
                            <label>Contact </label>
                            <input type="tel" class="form-control" name="contact" >
                    </div>

                    <div class="form-group">
                        <label>Message </label>
                        <textarea name="query" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Address </label>
                        <input type="text" class="form-control" name="address">
                    </div>
                    <button class="btn btn-success" type="submit">Send Your Query</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>