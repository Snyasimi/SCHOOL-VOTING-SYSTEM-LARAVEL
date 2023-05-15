@extends('Template')
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

    <div class="column">

        <div class="level">

            <div class="level-right">

                <div class="level-item">

                    <form method="POST"> 
                        @csrf
                        <div class="field is-horizontal">
                            
                            <div class="field-body">

                                <p class="control">
                            
                                    <input type="text" name="Position" class="input">
                                
                                    <button class="button is-outlined is-danger mt-3" type="submit">
                                        Add Position
                                    </button>
            
                                </p>

                            </div>

                        </div>
        
                       </form>

                </div>

            </div>

        </div>

        <div class="div table-container box">

            <table class="table is-fullwidth  is-striped is-hoverable is-bordered">

                <tr>
                    <th class="has-text-centered is-size-4">POSITIONS</th>
                    <th class="has-text-centered is-size-4">NUMBER OF CANDIDATES</th>
                </tr>

                
                <tbody>

                    @for($i=0;$i<3;$i++)

                        <tr>
                            <td class="has-text-centered">Chair person</td>
                            <td class="has-text-centered">55</td>
                        </tr>

                    @endfor

                </tbody>

            </table>

        </div>

    </div>

</div>

</section>