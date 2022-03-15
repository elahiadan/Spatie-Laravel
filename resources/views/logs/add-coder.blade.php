@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6 m-auto">
            <h2>Add New Coder</h2>
            <form action="{{route('submit')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>
                <div class="form-group">
                    <label for="number">Phone</label>
                    <input type="text" class="form-control" name="number" id="number" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Select Language</label>
                    <select class="form-control" id="exampleFormControlSelect2" name="lang" required>
                        <option value="PHP">PHP</option>
                        <option value="JS">JS</option>
                        <option value=".NET">.NET</option>
                        <option value="PYTHON">PYTHON</option>
                        <option value="JAVA">JAVA</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection