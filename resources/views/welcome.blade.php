<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eloquent Relationship</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-center my-3">Eloquent Relationship</h2>
                        <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>title</th>
                                <th>comments</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($alldatas as $data)
                                
                            <tr>
                               
                                {{-- <td> {{$data->title}} </td>
                                <td> 
                                    <ul>
                                        @foreach ($data->comments as $comment)
                                            <li> {{$comment->message}} </li>
                                        @endforeach

                                    </ul>
                                </td> --}}
                                <td> {{$data->message}} </td>
                                <td> {{$data->post->title}} </td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                </div>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
{{-- https://www.youtube.com/watch?v=9TJ9dvNcYXw&list=PLjsp2uDzfb31PT8HokvVoll8wMtrJQ-bG&index=3 --}}