@extends('AdminView.Template')
@section('content')


<section class="section">

    <div class="column"><!---The second column --->


        <div class="tile is-ancestor">

            <div class="tile is-vertical">

                <div class="tile is-parent box">
    
                    <div class="tile is-child ">
                        
                        <div class="block ">
    
                            <p class="title is-spaced has-text-info is-size-3 has-text-centered"> CANDIDATES</p>
                            <p class="subtitle is-family-code has-text-centered">{{$Total_candidates}}</p>
    
                        </div>
    
                    </div>
    
                    <div class="tile is-child ">
                        
                        <div class="block">
    
                            <p class="title is-spaced has-text-info is-size-3 has-text-centered "> VOTERS</p>
                            <p class="subtitle is-family-code has-text-centered">{{$Total_voters}}</p>
    
                        </div>
    
                    </div>
    
                    <div class="tile is-child ">
    
                        <p class="title is-spaced has-text-info is-size-3 has-text-centered">POSITIONS</p>
                            <p class="subtitle is-family-code has-text-centered">{{$Total_positions}}</p>
                    </div>

                    {{-- <div class="tile is-child">
                        
                    <div class="level">

                        <div class="level-item has-text-centered">

                            <p class="title is-3 has-text-info">CANDIDATES</p>
                            <p class="subtitle is-family-code">{{$Total_candidates}}</p>

                        </div>

                        <div class="level-item has-text-centered">

                            <p class="title is-3 has-text-info ">VOTERS</p>
                            <p class="subtitle is-family-code">{{$Total_voters}}</p>

                        </div>

                        <div class="level-item has-text-centered">

                            <div>

                                <p class="title is-3 has-text-info">POSITIONS</p>
                                <p class="subtitle is-family-code">{{$Total_positions}}</p>

                            </div>

                        </div>


                    </div>

                    </div>  --}}
     
    
                </div>

                <div class="tile is-parent box">

                    <div class="tile is-child ">
                        
                        <div class="table-container">
    
                            <table class="table box is-fullwidth is-bordered has-text-centered">

                                <tr>
                                <th class="has-text-centered has-background-info has-text-white is-size-4" colspan="2">
                                    CHAIRPERSON</th>
                                </tr>
                                <tr>
                                    <th class="is-family-code">CANDIDATE</th>
                                    <th class="is-family-code">VOTES</th>
                                </tr>

                                <tbody>

                                    @forelse($Chairperson as $chairperson)

                                        <tr>
                                            <td>{{ $chairperson->Voter->Name}}</td>
                                            <td>{{$chairperson->Votes}}</td>
                                        </tr>

                                    @empty

                                        <tr>
                                            <td colspan="2">NO CANDIDATES</td>
                                        </tr>
                                    @endforelse

                                </tbody>

                            </table>
    
                        </div>
    
                    </div>
    
                    <div class="tile is-child ">
                        
                        <div class="table-container">
    
                            <table class=" box is-fullwidth table is-bordered has-text-centered">

                                <tr>
                                <th class="has-text-centered has-background-info has-text-white is-size-4" colspan="2">
                                    VICE CHAIR</th>
                                </tr>
                                <tr>
                                    <th class="is-family-code">CANDIDATE</th>
                                    <th class="is-family-code">VOTES</th>
                                </tr>

                                <tbody>

                                    @forelse($Vicechair as $vicechair)

                                        <tr>
                                            <td>{{ $vicechair->Voter->Name}}</td>
                                            <td>{{$vicechair->Votes}}</td>
                                        </tr>

                                    @empty

                                        <tr>
                                            <td colspan="2">NO CANDIDATES</td>
                                        </tr>
                                    @endforelse

                                </tbody>

                            </table>
    
                        </div>
    
                    </div>


                    <div class="tile is-child ">
                        
                        <div class="table-container">
    
                            <table class=" box is-fullwidth table is-bordered has-text-centered">

                                <tr>
                                <th class="has-text-centered has-background-info has-text-white is-size-4" colspan="2">
                                    SECRETARY GENERAL</th>
                                </tr>
                                <tr>
                                    <th class="is-family-code">CANDIDATE</th>
                                    <th class="is-family-code">VOTES</th>
                                </tr>

                                <tbody>

                                    @forelse($Secretary_general as $secretary_general)

                                        <tr>
                                            <td>{{ $secretary_general->Voter->Name}}</td>
                                            <td>{{$secretary_general->Votes}}</td>
                                        </tr>


                                    @empty

                                    <tr>
                                        <td colspan="2">NO CANDIDATES</td>
                                    @endforelse

                                </tbody>

                            </table>
    
                        </div>
    
                    </div>
    
                   

                </div>

            </div>
    
        </div>

    </div>

   </div>
    
</section>





@endsection