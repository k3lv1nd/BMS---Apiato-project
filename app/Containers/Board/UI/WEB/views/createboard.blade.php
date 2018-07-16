@extends('member::layouts.master')

@section('title')
    Board Management System
@endsection

@section('content')
    <div class="grid-container">
        <div class="grid-x grid-padding-x align-center"> <!-- Aligned to the center -->
            <div class="row">

                <div class="row">
                    <div class="small-8">
                        <form method="post" action="{{route('create_board')}}">
                            {{csrf_field()}}
                            <div class="row">

                                <label for="right-label" class="right">Name</label>
                            </div>
                            <div class="small-9 columns">
                                <input type="text" name="name" >
                                <div class="row">



                                    <input type="submit" class="button">


                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>


        </main>
@endsection