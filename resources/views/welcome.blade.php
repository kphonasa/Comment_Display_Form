@extends('layouts.app')

@section('content')

        <!-- Success message flag -->
        @if(session('message'))
            <div class="alert alert-success mt-3 flex-center ">
                {{session('message')}}
            </div>
        @endif

        <!-- Main Container -->
        <div class="flex-center position-ref full-height">
            <div class="content">

                <!--Page Title-->
                <div class="title m-b-md">
                    Welcome to the Roast
                </div>

                <!-- Display Top 5 Comments -->
                <div class="panel panel-default">

                    <!-- Table Heading -->
                    <div class="panel-heading head">
                        Most Recent Roasts
                    </div>

                        <!-- Table Content -->
                        <div class="panel-body">
                            <table class="table content" id="tableComment">

                                <!-- Column Headings -->
                                <thead>
                                <th>Roaster</th>
                                <th>Comment</th>
                                <th>&nbsp;</th>
                                </thead>

                                <!-- Table Rows -->
                                <tbody class="content">
                                @foreach($comments as $comment)
                                    <tr>
                                        <!-- Author Name -->
                                        <td class="table-text">
                                            <div>{{ $comment->authorName}}</div>
                                        </td>

                                        <!-- Author Comment -->
                                        <td class="table-text">
                                            <div>{{ $comment->authorComment }}</div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>

                            </table>
                        </div>
                </div>


            <!-- Comment Entry Form -->
                <div id="app">
                    <div class="row">
                        <div class="col-lg-9 mx-auto">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Hit Me With Your Best Shot!</h2>
                                </div>
                                <div class="card-body">
{{--                                    @if(session('authorEmail'))
                                        <comment-form :authorEmail ={{session('authorEmail')}}></comment-form>
                                    @else--}}
                                        <comment-form></comment-form>
                                   {{-- @endif--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

@endsection
