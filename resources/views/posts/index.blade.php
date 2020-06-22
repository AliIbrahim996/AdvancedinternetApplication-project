@extends('layouts.app')

@section('content')






<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Posts</div>

                <div class="card-body">


                                    @if ($posts->count()>0)


                        <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col"> No </th>
                                    <th scope="col"> Title </th>

                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>

                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                @if (Auth::user()==$post->user OR Auth::user()->admin)
                                <tr>
                                            <th scope="row">
                                      <img src="{{$post->featrued}}" alt="{{$post->title}}" class="img-thumbnail" width="100px" height="100px">

                                            </th>
                                            <th scope="row">{{$post->title}}</th>

                                            <td>
                                              <a class="btn-success btn" href="{{route('post.edit',['id' =>$post->id ])}}">
                                                Edit
                                                        {{-- <i class="fas fa-edit"></i> --}}
                                                </a>
                                            </td>
                                            <td>
                                            <a class="btn-danger btn" href="{{route('post.delete',['id' =>$post->id ])}}">
                                                 Delete   {{-- <i class="far fa-trash-alt"></i> --}}
                                            </a>
                                           </td>
                                          </tr>
                                @endif
                                    @endforeach

                                    @else
                                    <p scope="row" class="text-center">No  posts</p>
                                    @endif
                                </tbody>
                              </table>






                </div>
            </div>
        </div>
    </div>
</div>
@endsection
