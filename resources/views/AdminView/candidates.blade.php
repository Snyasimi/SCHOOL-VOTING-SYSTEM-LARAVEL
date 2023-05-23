@extends('AdminView.Template')

@section('content')

<section class="section">

    <div class="tile">

        <div class="tile is-parent ">
    
            <div class="tile is-child">
    
                <div class="tile is-child">

                    <div class="table-container">
    
                        <div class="table is-fullwidth">
    
                            <table class="table is-bordered is-striped is-hoverable is-fullwidth">
                                    <!--- CONDITION HERE -->
                                @if(session('message'))

                                <tr >
                                    <td  class="has-text-centered has-text-danger " colspan="5">{{session('message')}}</td>
                                </tr>
                                @endif
    
                                <th class="has-text-centered has-background-info has-text-white is-size-4 " >
                                    CANDIDATE
                                </th>
                                <th class="has-text-centered has-background-info has-text-white is-size-4">
                                    POSITION
                                </th>
                                <th class="has-text-centered has-background-info has-text-white is-size-4 ">
                                    DISQUALIFY
                                </th>
                                <th class="has-text-centered has-background-info has-text-white is-size-4 ">
                                    VIEW
                                </th>
                                <th class="has-text-centered has-background-info has-text-white is-size-4 ">
                                    RE ACCEPT
                                </th>
    
                                <tbody>
    
                                    @forelse($Candidates as $candidate)
                                       
                                    @if($candidate->Application_status == true)
    
                                        <tr>
                                            <td class="has-text-centered is-size-5">{{ $candidate->Voter->Name}}</td>
                                            <td class="has-text-centered is-size-5">{{ $candidate->Position}}</td>
                                            <td class="has-text-centered is-size-5"><a href="{{ route('decline_candidate',$candidate->id)}}" class="button is-danger  is-outlined">DISQUALIFY</a></td>
                                            <td class="has-text-centered is-size-5"><a href="{{ route('Candidate.show',$candidate->id)}}" class="button is-info is-outlined">VIEW</a></td>
                                            <td class="has-text-centered is-size-6"><a href="{{ route('accept_candidate',$candidate->id)}}" class="button is-success is-outlined " disabled>RE ACCEPT</a></td>
                                        </tr>
                                    @else
                                    <tr>
                                        <td class="has-text-centered is-size-5">{{ $candidate->Voter->Name}}</td>
                                        <td class="has-text-centered is-size-5">{{ $candidate->Position}}</td>
                                        <td class="has-text-centered is-size-6"><a href="{{ route('decline_candidate',$candidate->id)}}" class="button is-danger is-outlined " disabled>DISQUALIFY</a></td>
                                        <td class="has-text-centered is-size-5"><a href="{{ route('Candidate.show',$candidate->id)}}" class="button is-info is-outlined">VIEW</a></td>
                                        <td class="has-text-centered is-size-5"><a href="{{ route('accept_candidate',$candidate->id)}}" class="button is-success is-outlined">RE ACCEPT</a></td>
                                    </tr>
                                        
                                    @endif
    
                                    @empty
                                    <tr>
                                        <td class="has-text-centered has-text-danger" colspan="5">
                                            THERE ARE NO CANDIDATES
                                        </td>
                                    </tr>
                                    @endforelse
    
                                </tbody>
    
    
    
                            </table>
    
                        </div>
    
                    </div>
    
                </div>
    
            </div>
    
        </div>
    
    </div>

</section>

@endsection