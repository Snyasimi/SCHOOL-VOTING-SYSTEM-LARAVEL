@extends('Template')
@section('content')

<section>

    <div class="columns  block is-flex is-mobile">
         
        @auth
        <div class="column is-one-quarter mr-1">

            <header> 
                <h2 class="subtitle has-text-left is-3 py-4 mt-3 has-text-link">USER INFO</h2>
            </header>
            <hr>

            <table class="table box is-bordered is-fullwidth">
                <th  class="has-text-centered has-text-info" colspan="2">
                    USER
                </th>
                <tbody>
                    <tr>
                        <td>NAME:</td>
                        <td>NAME HERE</td>
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
        
        <div class='column ml-1'>

            <header>
                <h2 class="has-text-left is-family-monospace subtitle is-3 py-4 mt-3 has-text-info">ALL CANDIDATES</h2>
                
            </header>

            <hr>
        
            <div class="columns  is-multiline">

               @for($i=0;$i<100;$i++)

               <div class="column block is-one-quarter">
                <div class="box ">
                    <p>STEVE SOLOMON NYASIMI</p>
                    <div class="table-container mt-3">
                        <table class="table is-narrow">
                            <tbody>
                                <tr>
                                    <td class="is-size-7">
                                        POSITION 
                                    </td>
                                    <td class="is-size-7">
                                        CHAIRPERSON INFORMATON TECHNOLOGY 
                                    </td>
                                </tr>
                                <tr>
                                    <td class="is-size-7">
                                        REG NUMBER 
                                    </td>
                                    <td class="is-size-7">
                                        DIT/2021/78965
                                    </td>
                                </tr>
                                <tr>
                                    <td class="is-size-7">
                                        VOTES
                                    </td>
                                    <td class="is-size-7">
                                        177
                                    </td>
                                </tr>

                                @auth
                                <tr>
                                    <td class="is-size-7">
                                        <a href="{{ route('Candidate.show',[1])}}" class="button is-small is-info">VIEW DETAILS</a>
                                    </td>
                                </tr>
                                @endauth
        
        
                           </table>
                    </div>
                   
                </div>
               </div>

               @endfor
               </div> 
    
            </div>
            
        </div>

    </div>


</section>
    
@endsection