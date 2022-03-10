@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div>
            <h1>Developer</h1>
        </div>
        <div class="col-md-10 d-flex">
            @role('developer|admin')
            <div class="card text-white bg-primary mb-3 mx-3" style="max-width: 18rem;">
                <div class="card-header">{{Auth::user()->name}} | Dashboard</div>
                <div class="card-body">
                    <h5 class="card-title">Developer</h5>
                    <p class="card-text">{{Auth::user()->email}}</p>
                </div>
            </div>
            @endrole
            @role('manager|admin')
            <div class="card text-dark bg-light mb-3 mx-3" style="max-width: 18rem;">
                <div class="card-header">{{Auth::user()->name}} | Dashboard</div>
                <div class="card-body">
                    <h5 class="card-title">Manager</h5>
                    <p class="card-text">{{Auth::user()->email}}</p>
                </div>
            </div>
            @endrole
            @role('tester|admin')
            <div class="card text-white bg-dark mb-3 mx-3" style="max-width: 18rem;">
                <div class="card-header">{{Auth::user()->name}} | Dashboard</div>
                <div class="card-body">
                    <h5 class="card-title">Tester</h5>
                    <p class="card-text">{{Auth::user()->email}}</p>
                </div>
            </div>
            @endrole
        </div>
    </div>
</div>
@endsection