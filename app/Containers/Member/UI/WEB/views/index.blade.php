@extends('member::layouts.master')

@section('title')
    Board Management System
@endsection

@section('content')
    <div class="grid-container">
        <div class="grid-x grid-padding-x align-center"> <!-- Aligned to the center -->
            <div class="row">
                <a href="{{url('/addmembers')}}"> Add Board Member</a>
            </div>

        </div>
        <div class="grid-x grid-padding-x align-center"> <!-- Aligned to the center -->
            <div class="row">
                <a href="{{route('get_board_form')}}"> Create Board</a>
            </div>

        </div>
        <div class="grid-x grid-padding-x align-center"> <!-- Aligned to the center -->
            <div class="row">
               <h3>Members Directory</h3>
                <table>

                   <tr>
                       <td>Member Id</td><td>Member`s Name</td><td>Email</td><td>Date of Registration</td><td> <button type="button" class="button">Add TO Board</button></td>
                   </tr>
                        @foreach($members as $member)
                            <tr>
                                <td>{{$member->id}}</td><td>{{$member->name}}</td><td>{{$member->email}}</td><td>{{$member->created_at}}</td><td> <button type="button" class="button">Add To Board</button></td>
                            </tr>
                        @endforeach
                </table>

            </div>

        </div>
    </div>

    </main>
@endsection