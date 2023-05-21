<!-- add_data.blade.php -->
@extends('layout')

@section('title', 'Home')

@section('content')
<form method="POST" action="{{ route('add-data') }}">
    @csrf
    <label for="field1">Field 1:</label>
    <input type="text" name="field1" id="field1">

    <label for="field2">Field 2:</label>
    <input type="text" name="field2" id="field2">

    <!-- Add more input fields for other fields -->

    <button type="submit">Add Data</button>
</form>
