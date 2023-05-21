<!-- retrieve_data.blade.php -->
@extends('layout')

@section('title', 'Home')

@section('content')
<table>
    <thead>
        <tr>
            <th>Field 1</th>
            <th>Field 2</th>
            <!-- Add more table headers for other fields -->
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{{ $item->field1 }}</td>
                <td>{{ $item->field2 }}</td>
                <!-- Display other fields -->
            </tr>
        @endforeach
    </tbody>
</table>
