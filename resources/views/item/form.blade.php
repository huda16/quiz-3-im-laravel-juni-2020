@extends('adminlte.master')

@section('content')
<div class="ml-3">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">New Items</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="/items" method="post">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter item's name">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Description">
                </div>
                <div class="form-group">
                    <label for="price">price</label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="Description">
                </div>
                <div class="form-group">
                    <label for="stock">stock</label>
                    <input type="number" class="form-control" id="stock" name="stock" placeholder="Description">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection