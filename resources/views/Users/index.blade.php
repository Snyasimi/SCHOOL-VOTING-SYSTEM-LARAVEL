@extends('Users.Template')
@section('content')

    <section class="section">

        <div class="tile is-ancestor">

            <div class="tile box">

                <div class="tile is-parent is-vertical">

                    <div class="is-child mb-5">

                        <aside class="menu">

                            <p class="menu-label is-active is-size-4 has-text-info ">NAVIGATION</p>
                
                            <ul class="menu-list">
                                <li><a href="{{ route('Home') }}" >HOME</a></li>

                                @if(!auth()->user()->Has_voted)
                                    <li><a href="{{ route('Candidate.index')}}" >VOTE</a></li>
                                @endif

                                <li><a href="{{ route('Candidate.create')}}">APPLY</a></li>
                                
                            </ul>
                
                        </aside>
                        
                    </div>

                    <div class="tile is-child ">
                        @auth
                        <div class="">
                
                            {{-- <header> 
                                <h2 class="subtitle has-text-left is-3 py-4 mt-3 has-text-info">USER INFO</h2>
                            </header>
                            <hr> --}}
                
                            <table class="table  is-bordered is-fullwidth">
                                <th  class="has-text-centered has-text-white has-background-info" colspan="2">
                                    USER
                                </th>
                                <tbody>
                                    <tr>
                                        <td>NAME:</td>
                                        <td>{{ auth()->user()->Name }}</td>
                                    </tr>
                                    <tr>
                                        <td>RED NUMBER</td>
                                        <td>{{ auth()->user()->RegNumber }}</td>
                                    </tr>
                                    <tr>
                                        <td>VOTE STATUS</td>
                                        @if(auth()->user()->Has_voted)
                                        <td class="has-text-success">VOTED</td>
                                        @else 
                                        <td class="has-text-danger">NOT VOTED</td>
                                        @endif
                                    </tr>
                                </tbody>
                            </table>
                                
                        </div>
                        @endauth
                    </div>

                </div>

            </div>

            <div class="tile box ml-2 is-9 ">

                <div class="columns is-multiline">

                    @forelse($Candidates as $candidate)
     
                    <div class="column block is-5">
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

            </div>

        </div>

    </section>

@endsection