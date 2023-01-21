{{-- @extends('layouts.welcome') --}}
@extends('layouts.app')
@section('content')

<div class="container justify-content-center">
    <div class="card">
        <div class="card-body">
            <form class="m-auto" style="width: 70%">
                <div class="row mb-2">
                    <div class="col">
                        <input type="number" class="form-control" id="id" placeholder="ID">
                    </div>
                   <div class="col">
                        <input type="text" class="form-control" id="description" placeholder="Description">
                   </div>
                </div>

              

                <div class="form-group mb-2">
                    <select id="status" class="form-control">
                        <option selected>--Status--</option>
                        <option value="0">Pending</option>
                        <option value="1">Completed</option>
                    </select>

                </div>

                <div class="form-group mb-2">
                    <input type="text" class="form-control" id="assignee" placeholder="Assignee">

                </div>

                <div class="row ">
                    <div class="col">
                        <label for="createdat">Created At</label>
                        <input type="date" class="form-control" id="createdat" placeholder="Created AT">
                    </div>
                    <div class="col">
                        <label for="updatedAt">Updated At</label>
                        <input type="date" class="form-control" id="updatedAt" placeholder="Created AT">
                    </div>
                </div>

                <div class="form-group text-center mt-4">
                    <button type="submit" class="btn btn-primary btn-block">CREATE</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection