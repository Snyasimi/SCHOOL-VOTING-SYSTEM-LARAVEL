@extends('AdminView.Template')
@section('content')

<section class="section">

    <div class="tile is-ancestor">

        <div class="tile">

            <div class="tile is-parent ">

                <div class="tile is-child   column is-3">

                    <div class="container"><!--- First column -->
                
                        <aside class="menu">
                
                            <p class="menu-label is-active is-size-4 has-text-info ">NAVIGATION</p>
                
                            <ul class="menu-list">
                                <li><a>CANDIDATES</a></li>
                                <li><a>POSITIONS</a></li>
                                <li><a>APPLICATIONS</a></li>
                                <li><a>ADMINS</a></li>
                            </ul>
                
                        </aside>
                
                    </div>
                </div>


                <div class="tile is-child">

                    <div class="table-container">
    
                        <div class="table">
    
                            <table class="table is-bordered is-striped is-hoverable is-fullwidth">
                                    <!--- CONDITION HERE -->
                                @if(session('message'))

                                <tr >
                                    <td  class="has-text-centered has-text-danger " colspan="5">{{session('message')}}</td>
                                </tr>
                                @endif
    
                                <th class="has-text-centered has-background-info has-text-white  " >
                                    CANDIDATE
                                </th>
                                <th class="has-text-centered has-background-info has-text-white  ">
                                    POSITION
                                </th>
                                <th class="has-text-centered has-background-info has-text-white  ">
                                    DISQUALIFY
                                </th>
                                <th class="has-text-centered has-background-info has-text-white  ">
                                    VIEW
                                </th>
                                <th class="has-text-centered has-background-info has-text-white  ">
                                    RE ACCEPT
                                </th>
    
                                <tbody>
    
                                    @forelse($Candidates as $candidate)
                                       
                                    @if($candidate->Application_status == true)
    
                                        <tr>
                                            <td class="has-text-centered">{{ $candidate->Voter->Name}}</td>
                                            <td class="has-text-centered">{{ $candidate->Position}}</td>
                                            <td class="has-text-centered"><a href="{{ route('ChangeStatus',$candidate->id)}}" class="button is-danger  is-outlined">DISQUALIFY</a></td>
                                            <td class="has-text-centered"><a href="{{ route('Candidate.show',$candidate->id)}}" class="button is-info is-outlined">VIEW</a></td>
                                            <td class="has-text-centered"><a href="{{ route('ChangeStatus',$candidate->id)}}" class="button is-success is-outlined " disabled>RE ACCEPT</a></td>
                                        </tr>
                                    @else
                                    <tr>
                                        <td class="has-text-centered">{{ $candidate->Voter->Name}}</td>
                                        <td class="has-text-centered">{{ $candidate->Position}}</td>
                                        <td class="has-text-centered"><a href="{{ route('ChangeStatus',$candidate->id)}}" class="button is-danger is-outlined " disabled>DISQUALIFY</a></td>
                                        <td class="has-text-centered"><a href="{{ route('Candidate.show',$candidate->id)}}" class="button is-info is-outlined">VIEW</a></td>
                                        <td class="has-text-centered"><a href="{{ route('ChangeStatus',$candidate->id)}}" class="button is-success is-outlined">RE ACCEPT</a></td>
                                    </tr>
                                        
                                    @endif
    
                                    @empty
                                    <tr>
                                        <td class="has-text-centered has-text-danger" colspan="5">
                                            THERE ARE NO CANDIDATES
                                        </td>
                                    @endforelse
    
                                </tbody>
    
    
    
                            </table>
    
                        </div>
    
                    </div>
    
                </div>

            </div>

        </div>

        <div class="">

            

        </div>

    </div>

</section>

@endsection