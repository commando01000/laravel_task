@extends('Employees.layout')
@section('content')

    <div class="card">
        <div class="card-header">Employees Page</div>
        <div class="card-body">

            <form action="{{ url('Employees') }}" method="post">
                {!! csrf_field() !!}
                <label>FirstName</label></br>
                <input type="text" name="FirstName" id="FirstName" class="form-control"></br>
                <label>LastName</label></br>
                <input type="text" name="LastName" id="LastName" class="form-control"></br>
                <label>Address</label></br>
                <input type="text" name="Address" id="Address" class="form-control"></br>

                <label>Birthdate</label></br>
                <input type="date" name="Birthdate" id="Birthdate" class="form-control"></br>




                <select name="Governorate" class="select">
                    <option value="0">Governorate</option>
                    <option value="Cairo">Cairo</option>
                    <option value="Giza">Giza</option>
                    <option value="Alexandira">Alexandira</option>
                    <option value="Luxor">Luxor</option>
                    <option value="Aswan">Aswan</option>
                </select></br>



                <div class="form-outline">
                    <input type="text" id="form3Example1n" name="City" class="form-control form-control-sm" />
                    <label class="form-label" for="form3Example1n">City</label>
                </div>




                <input class="form-check-input" type="radio" name="Gender" id="maleGender" value="Male" />
                <label class="form-check-label" for="maleGender">Male</label>



                <input class="form-check-input" type="radio" name="Gender" id="femaleGender" value="Female" />
                <label class="form-check-label" for="femaleGender">Female</label>

                </br>
                <label>Phone</label></br>
                <input type="text" name="Phone" id="Phone" class="form-control"></br>

                <label>Email</label></br>
                <input type="text" name="Email" id="Email" class="form-control"></br>

                <label>Zipcode</label></br>
                <input type="text" name="Zipcode" id="Zipcode" class="form-control"></br>

                <label>Notes</label></br>
                <input type="textarea" name="Notes" id="Notes" class="form-control"></br>

                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
