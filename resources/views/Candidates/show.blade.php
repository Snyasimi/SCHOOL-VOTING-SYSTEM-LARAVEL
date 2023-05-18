@extends('Candidates.Template')

@section('content')

    <section class="section">

        <div class="columns ">

            <div class="column ">

                <div class="container">

                    <figure class="image is-4by3">

                        <img src="{{asset(Storage::url($Candidate->path_to_image))}}" alt=" A Photo of {{ $Candidate->Voter->Name}}">

                        <figcaption>{{ $Candidate->Voter->Name}}</figcaption>
                    </figure>

                </div>

            </div>

            <div class="column ">

                <div class="table-container">

                    <table class="table is-fullwidth is-bordered ">

                        <tr>
                            <th colspan="2" class="has-text-centered has-background-info has-text-white is-size-4">CANDIDATE INFORMATION</th>
                        </tr>

                        <tr>
                            <td>NAME</td>
                            <td>{{$Candidate->Voter->Name}}</td>
                        </tr>
                        <tr>
                            <td>REGISTRATION NUMBER</td>
                            <td>{{$Candidate->Voter->RegNumber}}</td>
                        </tr>
                        <tr>
                            <td>POSITION</td>
                            <td>{{$Candidate->Position}}</td>
                        </tr>
                        <tr>
                            <td>VOTES</td>
                            <td>{{$Candidate->Votes}}</td>
                        </tr>


                    </table>

                </div>

            </div>

        </div>

    </section>

@endsection