@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Katrina Phonasa | Ninja Dev</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .head {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            ::-webkit-input-placeholder {
                text-align: center;
            }

            :-moz-placeholder { /* Firefox 18- */
                text-align: center;
            }

            ::-moz-placeholder {  /* Firefox 19+ */
                text-align: center;
            }

            :-ms-input-placeholder {
                text-align: center;
            }

           .col-form-label {
               font-weight: 6000;
           }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <!--Page Title-->
                <div class="title m-b-md">
                    Welcome to the Roast
                </div>

                <!-- Display Top 5 Comments -->
                @if (count($welcome) > 0)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Most Recent Roasts
                        </div>

                        <div class="panel-body">
                            <table class="table table-striped task-table">

                                <!-- Table Headings -->
                                <thead>
                                <th>Comment</th>
                                <th>&nbsp;</th>
                                </thead>

                                <!-- Table Body -->
                                <tbody>
                                @foreach ($welcome as $comment)
                                    <tr>
                                        <!-- Task Name -->
                                        <td class="table-text">
                                            <div>{{ $comment->authorComment }}</div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif

                <!-- Comment Entry Form -->
                <div class="head">
                    Hit Me With Your Best Shot!

                    <form method="post" action="/" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="authorName" class="col-sm-3 col-form-label">Author Name</label>
                            <div class="col-sm-9">
                                <input name="authorName" type="text" class="form-control" id="authorName" placeholder="Name Thy Self!">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="authorEmail" class="col-sm-3 col-form-label">Author Email</label>
                            <div class="col-sm-9">
                                <input name="authorEmail" type="email" class="form-control" id="authorEmail" placeholder="Don't Let Your Dreams Become Memes">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="authorComment" class="col-sm-3 col-form-label">Comment</label>
                            <div class="col-sm-9">
                                <input name="authorComment" type="text" class="form-control" id="authorComment" placeholder="Roast Me!">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-sm-3 col-sm-9">
                                <button type="submit" class="btn btn-primary">Save Forever</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
@endsection
