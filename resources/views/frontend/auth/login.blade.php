@extends('layouts.app')
@section('content')
<div>
    <form>

        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Passeord</label>
            <input type="password" class="form-control" id="name" placeholder="Enter your full name" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection