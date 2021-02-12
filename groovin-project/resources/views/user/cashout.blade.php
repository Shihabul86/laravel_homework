@extends('layouts.master')

@section('content')
    <div class="container" style="margin-top: 100px">
        <div class="row">
            <h2>BALANCE: {{$balance}} || EARNING: {{$earning}}</h2>
            <form action="{{route('user.cashOut.process')}}" method="POST">
                @csrf
                <input type="submit" value="Cashout" class="btn btn-warning">
            </form>
        </div>
        <div class="row">
            <table width="100%" border="1px">
                <tr>
                    <th>Date/Time</th>
                    <th>Amount</th>
                    <th>Status</th>
                </tr>
                @foreach($cashouts as $cashout)
                <tr>
                    <td>{{$cashout->created_at}} | {{$cashout->created_at->diffForHumans()}}</td>
                    <td>{{$cashout->amount}}</td>
                    <td>{{$cashout->status}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection