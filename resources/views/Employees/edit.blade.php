@extends('Employees.layout')
@section('content')
    <div class="card">
        <div class="card-header">Editing Page</div>
        <div class="card-body">

            <form action="{{ url('Employees/' . $employee->id) }}" method="post">
                {!! csrf_field() !!}
                @method('PATCH')
                <input type="hidden" name="id" id="id" value="{{ $employee->id }}" id="id" />
                <label>FirstName</label></br>
                <input type="text" name="FirstName" id="FirstName" value="{{ $employee->FirstName }}"
                    class="form-control"></br>

                <input type="text" name="LastName" id="LastName" value="{{ $employee->LastName }}"
                    class="form-control"></br>

                <label>Address</label></br>
                <input type="text" name="Address" id="Address" value="{{ $employee->Address }}"
                    class="form-control"></br>

                <label>Birthdate</label></br>
                <input type="text" name="Birthdate" id="Birthdate" value="{{ $employee->Birthdate }}"
                    class="form-control"></br>


                <label>Governorate</label></br>
                <select name="Governorate" class="select">
                    <option value="0">{{ $employee->Governorate }}</option>
                    <option value="Cairo">Cairo</option>
                    <option value="Giza">Giza</option>
                    <option value="Alexandira">Alexandira</option>
                    <option value="Luxor">Luxor</option>
                    <option value="Aswan">Aswan</option>
                </select> </br>

                <label>City</label></br>
                <input type="text" name="City" id="City" value="{{ $employee->City }}" class="form-control"></br>

                <input class="form-check-input" type="radio" name="Gender" id="maleGender"
                    value="{{ $employee->Gender }}" />
                <label class="form-check-label" for="maleGender">Male</label>

                <input class="form-check-input" type="radio" name="Gender" id="femaleGender"
                    value="{{ $employee->Gender }}" />
                <label class="form-check-label" for="femaleGender">Female</label></br>

                <label>Phone</label></br>
                <input type="text" name="Phone" id="Phone" value="{{ $employee->Phone }}"
                    class="form-control"></br>

                <label>Email</label></br>
                <input type="text" name="Email" id="Email" value="{{ $employee->Email }}"
                    class="form-control"></br>

                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>
@endsection
