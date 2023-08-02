@extends('AdminView.Template')

@section('content')


	<div class="tile  ">

		<div class="tile is-parent is-11">
	
			<div class="tile is-child">

				<div class="level mt-5">
            
					<div class="level-right">
		
						<div class="level-item">
		
							<form method="POST" action="{{ route('view_results') }}" class="form"> 
								@csrf
								<div class="field is-horizontal">
		
									<div class="field-label">
		
										<label for="POSITION" class="label">Election year</label>
									</div>
									
									<div class="field-body">
									   
		
										<p class="control">
									
											<input type="text" name="Year" class="input" required>
										
											<button class="button is-outlined is-link mt-3" type="submit">
												Search
											</button>
					
										</p>
		
									</div>
		
								</div>
				
							   </form>
							  
		
						</div>
		
					</div>
		
				</div>
				
				<div class="table-container">
		
					<table class="table is-fullwidth is-striped">
						
						<tr>
							<th colspan="2" class="title has-text-centered is-3 has-text-link"> ELECTION RESULTS </th>
						</tr>

		
						<tr>
							<th colspan="2" class="subtitle is-4 has-background-info has-text-white">CHAIR PERSON</th>
						</tr>
						
						<tr>
							<td>NAME</td>
							<td>VOTES</td>
						</tr>
						
						@forelse ($Chairperson as $chair)
							
							<tr>
								<td>{{ $chair->Voter->Name}}</td>
								<td>{{ $chair->Votes}}</td>
							</tr>
						@empty 

							<tr>
								<td>NO CANDIDATES</td>
							</tr>
		
						@endforelse
		
						<tr> 
							<th colspan="2" class="subtitle is-4 has-background-info has-text-white">VICE CHAIRPERSON</th>
						</tr>
		
						<tr>
							<td>NAME</td>
							<td>VOTES</td>
						</tr>
						
						@forelse ($ViceChairperson as $vc)
							
							<tr>
								<td>{{ $vc->Voter->Name}}</td>
								<td>{{ $vc->Votes}}</td>
							</tr>
						@empty 

							<tr>
								<td>NO CANDIDATES</td>
							</tr>
		
						@endforelse
		
						<tr>
							<th colspan="2"  class="subtitle is-4 has-background-info has-text-white">TREASURER</th>
						</tr>
		
						<tr>
							<td>NAME</td>
							<td>VOTES</td>
						</tr>
						
						@forelse ($Treasurer as $tr)
							
							<tr>
								<td>{{ $tr->Voter->Name}}</td>
								<td>{{ $tr->Votes}}</td>
							</tr>
						@empty 

							<tr>
								<td>NO CANDIDATES</td>
							</tr>
		
						@endforelse
		
						<tr>
							<th colspan="2" class="subtitle is-4 has-background-info has-text-white">SECRETATRY GENERAL</th>
						</tr>
		
						<tr>
							<td>NAME</td>
							<td>VOTES</td>
						</tr>
						
						@forelse ($Secretarygeneral as $secg)
							
							<tr>
								<td>{{ $secg->Voter->Name}}</td>
								<td>{{ $secg->Votes}}</td>
							</tr>
						@empty 

							<tr>
								<td>NO CANDIDATES</td>
							</tr>
		
						@endforelse
		
						<tr>
							<th colspan="2" class="subtitle is-4 has-background-info has-text-white">SPORTS AND WELFARE</th>
						</tr>
		
						<tr>
							<td>NAME</td>
							<td>VOTES</td>
						</tr>
						
						@forelse ($Sportsandwelfare as $sports)
							
							<tr>
								<td>{{ $sports->Voter->Name}}</td>
								<td>{{ $sports->Votes}}</td>
							</tr>
						@empty 

							<tr>
								<td>NO CANDIDATES</td>
							</tr>
		
						@endforelse
		
		
						
							
		
					</table>
		
				</div>
			
			</div>
		
		</div>
	
	</div>

@endsection