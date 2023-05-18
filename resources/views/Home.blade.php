@extends('Template')
@section('content')

<section>

    <div class="columns  block is-flex is-mobile">
         
        @auth
        <div class="column is-one-quarter mr-1">

            <header> 
                <h2 class="subtitle has-text-left is-3 py-4 mt-3 has-text-info">USER INFO</h2>
            </header>
            <hr>

            <table class="table box is-bordered is-fullwidth">
                <th  class="has-text-centered has-text-white has-background-info" colspan="2">
                    USER
                </th>
                <tbody>
                    <tr>
                        <td>NAME:</td>
                        <td>USER</td>
                    </tr>
                    <tr>
                        <td>RED NUMBER</td>
                        <td>NUMBER HERE</td>
                    </tr>
                    <tr>
                        <td>VOTE STATUS</td>
                        <td>STATUS HERE</td>
                    </tr>
                </tbody>
            </table>
                
        </div>
        @endauth
        
        <div class='column my-5'>

        
            <div class="columns  is-multiline">

                @forelse($Candidates as $candidate)

               <div class="column my-2 block is-one-quarter">
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

    </div>


</section>
    
@endsection