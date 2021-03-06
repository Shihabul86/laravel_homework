@extends('layouts.master')

@section('content')
    <div class="container" style="margin-top: 100px">

        <div class="row">
            <table width="100%" border="1px">
                <tr>
                    <th>User</th>
                    <th>Date/Time</th>
                    <th>Amount</th>
                    <th>Action</th>
                </tr>
                @foreach($cashouts as $cashout)
                    <tr>
                        <td>{{$cashout->user->username}}</td>
                        <td>{{$cashout->created_at}} | {{$cashout->created_at->diffForHumans()}}</td>
                        <td>{{$cashout->amount}}</td>
                        <td>
                            @if($cashout->status == 'pending')
                                <a href="{{route('admin.updateCashouts', [$cashout->id, 'approved'])}}" class="btn btn-primary">Approve</a>
                            @else
                                <p>{{$cashout->status}}</p>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection