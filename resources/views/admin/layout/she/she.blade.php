@extends('admin.tools.main')

@section('content')
<div class="container mt-4">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="border-width: 2px;">NearMiss</th>
                <th style="border-width: 2px;">FirstAIDCases</th>
                <th style="border-width: 2px;">MedicalTreatmentCases</th>
                <th style="border-width: 2px;">LostWorkdays</th>
                <th style="border-width: 2px;">Fatality Cases</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="border-width: 2px;">{{ $sheData['NearMiss'] }}</td>
                <td style="border-width: 2px;">{{ $sheData['FirstAIDCases'] }}</td>
                <td style="border-width: 2px;"> {{$sheData['MedicalTreatmentCases']}}</td>
                <td style="border-width: 2px;">{{$sheData['LostWorkdays']}}</td>
                <td style="border-width: 2px;">{{$sheData['FatalityCases']}}</td>
            </tr>
        </tbody>
    </table>

    <div class="text-center">
        <a href="{{ route('nearmiss') }}" class="btn btn-primary">NearMiss</a>
        <a href="{{ route('firstaid') }}" class="btn btn-primary">FirstAIDCases</a>
        <a href="{{ route('medical') }}" class="btn btn-primary">MedicalTreatmentCases</a>
        <a href="{{ route('lostworkdays') }}" class="btn btn-primary">LostWorkdays</a>
        <a href="{{ route('fatalitycases') }}" class="btn btn-primary">Fatality Cases</a>
    </div>
</div>
@endsection
