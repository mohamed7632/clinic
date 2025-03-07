
@extends('admin.layout.admin')
@section('title')
    home
@endsection('title')
@section('content')
    <div class="container">
            <table class="table mt-3" style="color:#3D56C0;">
                <thead class="">
                    <tr >
                        <th>Patient Name</th>
                        <th>mobile Number</th>
                        <th>status</th>
                    </tr>
                </thead>
                <tbody>
                  
                 @foreach ($Bookings as $booking)
                     
                    <tr style="background-color:#FFE4E1">
                        <td >{{$booking->patient->name}} </td>
                        <td>{{$booking->patient->mobile}}</td>
                      <td><button onclick="changeCommit('{{$booking->id}}')" class="btn <?php if($booking->commit == 1) {echo ("btn-danger");}else{echo ("btn-primary");}   ?>"> @if($booking->commit==1)cancel @else confirmed @endif</button></td>
                      
                    </tr>
                    @endforeach   
                    
                </tbody>
            
            </table>
           
    </div>
    @endsection('content')