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
    @include('layouts.partials.navbar')
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Test Summernote</h4>
                </div>
                <div class="panel-body">
                    <form action="{{url('insert')}}" method="post">
                        {{{csrf_field()}}}
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea name="summernote" id="summernote" cols="30" rows="10" class="form-control"> </textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="send" id="send" value="Publish" class="btn btn-primary">
                            <input type="button" name="clear" id="clear" class="btn btn-danger pull-right" value="Clear">

                        </div>

                    </form>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#summernote').summernote({
                    height:'300px',
                    placeholder:'Content here...',
                    fontNames:['Arial',"Arial Black","khmer OS"],
                })

            })
            $('#clear').on('click',function () {
                $('#summernote').summernote('code',null)
            })
        </script>
    </body>
</html>
