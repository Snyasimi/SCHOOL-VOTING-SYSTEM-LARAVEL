@extends('Users.Template')
@section('content')

    <section class="section">

        <div class="tile is-vertical is-ancestor">

            <div class="tile box">

                <div class="level container ">

                    
                    <div class="level-left">

                        <div class="level-item">

                            <div>
    
                                <p class="title has-text-centered has-text-info is-spaced mt-2 mb-4">NAME</p>
                                <p class="subtitle has-text-centered is-uppercase">
                                    {{ auth()->user()->Name}}
                                </p>
    
                            </div>
                            
                        </div>
                        

                    </div>


                    <div class="level-item">
    
                        <div>

                            <p class="title has-text-centered is-spaced has-text-info mt-2 mb-4">REGISTRATION NUMBER</p>
                            <p class="subtitle has-text-centered is-uppercase">
                                {{ auth()->user()->RegNumber}}
                            </p>

                        </div>
                        
                    </div>


                    <div class="level-right">

                        <div class="level-item">

                            <div class="column">
    
                                <p class="title is-spaced has-text-centered has-text-info mt-2 mb-4">VOTE STATUS</p>
                                <p class="subtitle is-spaced has-text-centered is-uppercase">
                                    @if(auth()->user()->Has_voted)
                                        <p class="has-text-success has-text-centered">VOTED</p>
                                    @else 
                                        <p class="has-text-danger has-text-centered">NOT VOTED</p>
                                    @endif
                                </p>
    
                            </div>
                            
                        </div>

                    </div>

                </div>

            </div>

            <section class="section">

                {{-- <div class="tile  ml-2 is-9 ">

                    <div class="columns is-multiline">
    
                        @forelse($Candidates as $candidate)
         
                        <div class="column block is-6">
                         <div class="box ">
                             <p>{{$candidate->Voter->Name}}</p>
                             <div class="table-container mt-3">
                                 <table class="table is-narrow">
                                     <tbody>
                                         <tr>
                                             <td class="is-size-7">
                                                 POSITION 
                                             </td>
                                             <td class="is-size-7">
                                                 {{$candidate->Position}} 
                                             </td>
                                         </tr>
                                         <tr>
                                             <td class="is-size-7">
                                                 REG NUMBER 
                                             </td>
                                             <td class="is-size-7">
                                                 {{ $candidate->Voter->RegNumber}}
                                             </td>
                                         </tr>
                                         <tr>
                                             <td class="is-size-7">
                                                 VOTES
                                             </td>
                                             <td class="is-size-7">
                                                 {{ $candidate->Votes}}
                                             </td>
                                         </tr>
         
                                         @auth
                                         <tr>
                                             <td class="is-size-7">
                                                 <a href="{{ route('Candidate.show',$candidate->id)}}" class="button is-small is-info">VIEW DETAILS</a>
                                             </td>
                                         </tr>
                                         @endauth
                 
                 
                                    </table>
                             </div>
                            
                         </div>
                        </div>
         
                        @empty
                        <p class="title"> NO CANDIDATES</p>
                        @endforelse
                    </div>  
    
                </div> --}}
                

            </section>

        </div>

    </section>

@endsection