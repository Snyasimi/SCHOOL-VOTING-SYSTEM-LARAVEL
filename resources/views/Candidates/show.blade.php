@extends('Template')

@section('content')

    <section class="section">

        <div class="columns ">

            <div class="column ">

                <div class="container">

                    <figure class="image is-1by1">

                        <img src="{{asset('storage/skull.jpg')}}" alt="">

                    </figure>

                </div>

            </div>

            <div class="column ">

                <div class="table-container">

                    <table class="table is-fullwidth is-bordered ">

                        <tr>
                            <th colspan="2" class="has-text-centered has-background-info has-text-white is-size-4">CANDIDATE INFORMATION</th>
                        </tr>

                        <tr>
                            <td>NAME</td>
                            <td>SOLOMON NYASIMI</td>
                        </tr>
                        <tr>
                            <td>REGISTRATION NUMBER</td>
                            <td>DIT/2021/78965</td>
                        </tr>
                        <tr>
                            <td>POSITION</td>
                            <td>CHAIRPERSON</td>
                        </tr>
                        <tr>
                            <td>VOTES</td>
                            <td>220</td>
                        </tr>


                    </table>

                </div>

            </div>

        </div>

    </section>

@endsection