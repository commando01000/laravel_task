@extends('Employees.layout')
@section('content')


    <div class="card">
        <div class="card-header">Employee's View Page</div>
        <div class="card-body">


            <div class="card-body">
                <h3 class="card-title">FirstName : {{ $employees->FirstName }}</h3>
                <p class="card-text">LastName : {{ $employees->LastName }}</p>
                <p class="card-text">Address : {{ $employees->Address }}</p>
                <p class="card-text">Birthdate : {{ $employees->Birthdate }}</p>
                <p class="card-text">Governorate : {{ $employees->Governorate }}</p>
                <p class="card-text">City : {{ $employees->City }}</p>
                <p class="card-text">Gender : {{ $employees->Gender }}</p>
                <p class="card-text">Phone : {{ $employees->Phone }}</p>
                <p class="card-text">Email : {{ $employees->Email }}</p>
            </div>

            </hr>

        </div>
    </div>
