@extends('layouts.welcome')

@section('main')

<form class="mt-4">
    <div class="form-group">
        <input type="number" class="form-control" id="id" placeholder="ID">

    </div>
    <div class="form-group">
        <input type="text" class="form-control" id="description" placeholder="Description">

    </div>
    <div class="form-group">
        <select id="status" class="form-control">
            <option selected>--Status--</option>
            <option value="0">Pending</option>
            <option value="1">Completed</option>
        </select>

    </div>

    <div class="form-group">
        <input type="text" class="form-control" id="assignee" placeholder="Assignee">

    </div>

    <div class="form-group">

    </div>
    <div class="form-row">
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
        <button type="submit" class="btn btn-primary btn-block">Save</button>

    </div>
</form>
@endsection