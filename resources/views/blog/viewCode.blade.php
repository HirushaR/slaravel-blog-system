<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>

    <!-- include summernote css/js -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>



</head>
<body>
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>Test Summernote</h4>
        </div>
        <div class="panel-body">
            <table class="table table-striped">
                <thead>
                   <tr>
                       <th>Title</th>
                       <th>Action</th>

                   </tr>
                </thead>
                <tbody>
                @foreach($data as $key =>$d)
                    <tr>
                        <td> {!!$d->title!!}</td>
                        {{--<td> {!!str_limit($d->title,200)!!}</td>--}}
                        <td>
                            <a href="{{url('readInfo',array($d->id))}}">View</a> |
                            <a href="{{url('deleteInfo',array($d->id))}}" >Delet</a> |
                            <a href="{{url('editInfo',array($d->id))}}">Edit</a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
