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

    <div class="columns block  container is-multiline">

        @for($i=0;$i<20;$i++)

        <div class="column is-4">

            <div class="">

                <div class="card">

                    <div class="card-header">

                        <p class="card-header-title">CANDIDATE</p>
                        
                    </div>

                    <div class="card-image">

                        <figure class="image is-4by3">
                            <img src="{{asset("storage/saitama.png")}}" alt="Placeholder image">
                          </figure>

                    </div>

                    <div class="card-content">

                        <p class="has-text-weight-bold is-size-5">ONESMUS MANOTI</p>
                        <p class="has-text-weight-semibold is-size-6 mb-1">CHAIR PERSON</p>
                        <p class="has-text-centered ">"TO VOTE IS TO BLA BLA BLA BLA BLA"</p>
                    </div>

                    <footer class="card-footer">
                        <a href="#" class="card-footer-item button is-outlined is-success is-size-6 mr-2">ACCEPT</a>
                        <a href="#" class="card-footer-item  button is-outlined is-info is-size-6 mr-2">VIEW </a>
                        <a href="#" class="card-footer-item  button is-outlined is-danger is-size-6">DECLINE</a>
                        
                    </footer>


                </div>

            </div>

        </div>

        @endfor

    </div>


</div>
</section>