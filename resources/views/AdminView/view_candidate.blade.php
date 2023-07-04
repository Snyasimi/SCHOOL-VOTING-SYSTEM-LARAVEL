@extends('AdminView.Template')
@section('content')

<div class="tile is-parent">

    <div class="tile is-child">

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
                            
                            <tr>
                                <td colspan="2">  <div class="field is-grouped is-grouped-right">
                            
                                    <p class="control">
                                        @if($Candidate->Application_status)
                                        <a href="{{ route('decline_candidate',$Candidate->User_id)}}" class="button is-danger is-outlined " >DISQUALIFY</a>
                                        @else
                                        <p class=control>
                                        <a href="{{ route('accept_candidate',$Candidate->User_id)}}" class="card-footer-item button is-outlined is-success is-size-6 mr-2">ACCEPT</a>
                                        </p>
                                        <a href="{{ route('decline_candidate',$Candidate->User_id)}}" class="button is-danger is-outlined " disabled>DISQUALIFY</a>
                                        @endif
                                    </p>
                                  </div>
                                </td>
    
                            </tr>
        
        
                        </table>
        
                    </div>
        
                </div>
        
            </div>
        
        </section>

    </div>

</div>

@endsection