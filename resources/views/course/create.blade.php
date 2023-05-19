@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Student Registration System') }}</div>

                    <div class="card-body">

                        @if ($errors->any())
                            <div class='alert alert-danger'>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('course.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Course</label>
                                <input type="text" name='course' class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="date">Start</label>
                                <input type="date" name='duration' class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="date">End</label>
                                <input type="date" name='duration' class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Price</label>
                                <input type="text" name='email' class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
