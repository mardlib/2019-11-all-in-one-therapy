@extends('backend')

@section('title')Patienten &ndash;
@parent
@endsection

@section('main')
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <table class="table">
        <tr class="text-left">
            <th> @sortablelink('svnr', 'SVNR')</th>
            <th> @sortablelink('lastname', 'Name')</th>
            <th> @sortablelink('address', 'Adresse')</th>
            <th> @sortablelink('PLZ')</th>
            <th> @sortablelink('city', 'Stadt')</th>
            <th> @sortablelink('country','Land')</th>
        </tr>
        @if($patients->count())
        @foreach($patients as $patient)
            <tr class="text-left">
                <td>{{  $patient->svnr }}  </td>
                <td>{{  $patient->lastname }} {{  $patient->firstname }} </td>
                <td>{{  $patient->address }}</td>
                <td>{{  $patient->plz }}</td>
                <td>{{  $patient->city }}</td>
                <td>{{  $patient->country }}</td>
            </tr>
        @endforeach
            @endif
    </table>
    {!! $patients->appends(\Request::except('page'))->render() !!}
@endsection
