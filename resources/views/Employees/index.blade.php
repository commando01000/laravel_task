@extends('Employees.layout')
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Laravel 10 CRUD</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/Employees/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br />
                        <br />
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>FirstName</th>
                                        <th>LastName</th>
                                        <th>Address</th>
                                        <th>Birthdate</th>
                                        <th>Governorate</th>
                                        <th>City</th>
                                        <th>Gender</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Zipcode</th>
                                        <th>Notes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($employees as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->FirstName }}</td>
                                            <td>{{ $item->LastName }}</td>
                                            <td>{{ $item->Address }}</td>
                                            <td>{{ $item->Birthdate }}</td>
                                            <td>{{ $item->Governorate }}</td>
                                            <td>{{ $item->City }}</td>
                                            <td>{{ $item->Gender }}</td>
                                            <td>{{ $item->Phone }}</td>
                                            <td>{{ $item->Email }}</td>
                                            <td>{{ $item->Zipcode }}</td>
                                            <td>{{ $item->Notes }}</td>

                                            <td>
                                                <a href="{{ url('/Employees/' . $item->id) }}"
                                                    title="View Employee"><button class="btn btn-info btn-sm"><i
                                                            class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                                <a href="{{ url('/Employees/' . $item->id . '/edit') }}"
                                                    title="Edit Employee"><button class="btn btn-primary btn-sm"><i
                                                            class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                        Edit</button></a>

                                                <form method="POST" action="{{ url('/Employees' . '/' . $item->id) }}"
                                                    accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        title="Delete Employee"
                                                        onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                            class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
