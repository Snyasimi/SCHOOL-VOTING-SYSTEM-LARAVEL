@extends('Template')
@section('content')

<section>

    <div class="columns is-flex is-mobile">

        <div class="column is-one-quarter mr-1">

            <header> 
                <h2 class="subtitle is-2 py-4 mb-6 has-text-info">USER INFO</h2>
            </header>

            <table class="table is-bordered is-fullwidth">
                <th colspan="2">
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
        
        <div class='column  ml-1'>

            <header>
                <h2 class="subtitle is-2 py-4 mb-6 has-text-info">ALL CANDIDATES</h2>

            </header>
        
            <div class="columns is-multiline">

               @for($i=0;$i<8;$i++)

               <div class="column block is-one-quarter">
                <div class="box ">
                    <p>STEVE SOLOMON NYASIMI</p>
                    <div class="table-container">
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
                                <tr>
                                    <td class="is-size-7">
                                        <a href="#" class="button is-small is-info">VIEW DETAILS</a>
                                    </td>
                                </tr>
        
        
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