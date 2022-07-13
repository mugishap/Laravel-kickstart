@extends('students.layout')

@section('content')
<div class="pull-left">
    <h2>Student Crud Step by Step</h2>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <a href="{{ route('students.create') }}" class="btn btn-success">
                Create New Student
            </a>
        </div>
    </div>

</div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Course</th>
            <th>Fee</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($students as $student)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $student->studname }}</td>
            <td>{{ $student->course }}</td>
            <td>{{ $student->fee }}</td>
            <td>
                <a class="btn btn-info" href="{{ route('students.show', $student->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('students.edit', $student->id) }}">Edit</a>
                <form action="{{ route('students.destroy', $student->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>