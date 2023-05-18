@extends('AdminView.Template')
@section('content')


<section class="section">
    
   <div class="columns ">

    <div class="column is-3"><!--- First column -->

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

    <div class="column"><!---The second column --->


        <div class="tile is-ancestor">

            <div class="tile is-vertical">

                <div class="tile is-parent box">
    
                    <div class="tile is-child ">
                        
                        <div class="block">
    
                            <p class="title is-spaced"> CANDIDATES</p>
                            <p class="subtitle">296</p>
    
                        </div>
    
                    </div>
    
                    <div class="tile is-child ">
                        
                        <div class="block">
    
                            <p class="title is-spaced"> VOTERS</p>
                            <p class="subtitle">296</p>
    
                        </div>
    
                    </div>
    
                    <div class="tile is-child ">
    
                        <p class="title is-spaced">POSITIONS</p>
                            <p class="subtitle">296</p>
                    </div>
     
    
                </div>

                <div class="tile is-parent box">

                    <div class="tile is-child ">
                        
                        <div class="table-container">
    
                            <table class=" box is-fullwidth table is-bordered has-text-centered">

                                <tr>
                                <th class="has-text-centered" colspan="2">CHAIRPERSON</th>
                                </tr>
                                <tr>
                                    <th>CANDIDATE</th>
                                    <th>VOTES</th>
                                </tr>

                                <tbody>

                                    @for($i=0;$i<5;$i++)

                                        <tr>
                                            <td>DEOPHRAS MAGETOO</td>
                                            <td>200</td>
                                        </tr>

                                    @endfor

                                </tbody>

                            </table>
    
                        </div>
    
                    </div>
    
                    <div class="tile is-child ">
                        
                        <div class="table-container">
    
                            <table class=" box is-fullwidth table is-bordered has-text-centered">

                                <tr>
                                <th class="has-text-centered" colspan="2">VICE CHAIR</th>
                                </tr>
                                <tr>
                                    <th>CANDIDATE</th>
                                    <th>VOTES</th>
                                </tr>

                                <tbody>

                                    @for($i=0;$i<5;$i++)

                                        <tr>
                                            <td>ABRAHAM LINCON</td>
                                            <td>200</td>
                                        </tr>

                                    @endfor

                                </tbody>

                            </table>
    
                        </div>
    
                    </div>


                    <div class="tile is-child ">
                        
                        <div class="table-container">
    
                            <table class=" box is-fullwidth table is-bordered has-text-centered">

                                <tr>
                                <th class="has-text-centered" colspan="2">SECRETARY GENERAL</th>
                                </tr>
                                <tr>
                                    <th>CANDIDATE</th>
                                    <th>VOTES</th>
                                </tr>

                                <tbody>

                                    @for($i=0;$i<5;$i++)

                                        <tr>
                                            <td>STEVE SOLOMON</td>
                                            <td>200</td>
                                        </tr>

                                    @endfor

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