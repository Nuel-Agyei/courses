@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (Session::has('alert-success'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('alert-success') }}
                            </div>
                        @endif
                        @if (count($course) > 0)
                            <table class="table">
                                <thead>
                                    <tbody>
                                        <tr>
                                            <th scope="col">Course</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Duration</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </tbody>

                                </thead>
                                <tbody>
                                    @foreach ($course as $course)
                                        <tr>
                                            <td> {{ $course->course }} </td>
                                            <td> {{__('This supposed to be course desription')}} </td>
                                            <td> {{ $course->duration }} </td>
                                            <td> {{ $course->price }} </td>
                                            <td>
                                                <a class="btn m-1 btn-sm btn-outline-primary" href="">Edit</a>
                                                <form method="post" action="{{ route('course.delete') }}" class="inner">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="hidden" name="course_id" value="{{$course->id}}">
                                                    <input type="submit" name="" class="btn btn-dark btn-sm" value="delete">
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        @else
                            <h2>No children registered</h2>
                            <a class="btn btn-sm btn-outline-primary" href="{{route('course.create')}}">Register for Course</a><br>
                        @endif
                        <a class="btn btn-sm btn-outline-primary" href="{{route('course.create')}}">Register for Course</a><br>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
