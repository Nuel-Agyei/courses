@extends('layouts.app')

@section('content')
<div class="container flex">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container mb-2">
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="card">
                              <div class="card-body">
                                <h5 class="card-title">Web Development</h5>
                                <p class="card-text">Learn the full stack for web development.</p>
                                <p class="card-text">GH₵1000/month</p>
                                <a href="{{route('course.create')}}" class="btn btn-outline-info">Register</a>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="card">
                              <div class="card-body">
                                <h5 class="card-title">Web Development</h5>
                                <p class="card-text">Learn the full stack for web development.</p>
                                <p class="card-text">GH₵1000/month</p>
                                <a href="{{route('course.create')}}" class="btn btn-outline-info">Register</a>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="card">
                              <div class="card-body">
                                <h5 class="card-title">Web Development</h5>
                                <p class="card-text">Learn the full stack for web development.</p>
                                <p class="card-text">GH₵1000/month</p>
                                <a href="{{route('course.create')}}" class="btn btn-outline-info">Register</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      

                    <a class="btn btn-outline-info" href="{{ route('course.create') }}">Register for Course</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
