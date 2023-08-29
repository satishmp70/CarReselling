@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <h2 class="card-header">Add Car for Reselling</h2>
                <div class="card-body">
                    <form method="POST" action="{{ route('cars.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="carname">Car Name</label>
                            <input type="text" name="carname" id="carname" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" name="price" id="price" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="top_speed">Top Speed (km/h)</label>
                            <input type="number" name="top_speed" id="top_speed" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="image">Upload Car Bannee Image</label>
                            <input type="file" id="image" name="image" multiple class="form-control"><br />
                        </div>

                        <div class="form-group">
                            <label for="files">Upload Car Image</label>
                            <input type="file" id="files" name="files[]" multiple class="form-control"><br />
                        </div>

                        <button type="submit" class="btn btn-primary">Add Car</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
