@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Warning</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>Sorry. We don't do that here</p>
                <a href="/public" class="btn btn-dark">Go back</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection