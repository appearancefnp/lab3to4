@if (count($countries)==0)
	<p color='red'> There is no record in the database!</p>
@else
	<table border="1"> 
		<tr> 
			<td> Country Id </td> 
			<td> Country Name </td> 
			<td> Country Code </td>
			<td> cities </td>
			<td>  </td>
		</tr>
	@foreach ($countries as $country)
		<tr> 
			<td> {{ $country->country_id }} </td>
			<td> {{ $country->country_name }} </td>
			<td> {{ $country->country_code }} </td>
			<td> <input type="button" value="show" onclick="showCities({{ $country->country_id }})"> </td>
			<td> <input type="button" value="delete" onclick="deleteCountry({{ $country->country_id }})"> </td>
		</td>
	@endforeach
	</table>
@endif
<p> <input type="button" value="New Country"> </p>
<script>
	function showCities(countryID) {
		window.location.href="/cities/"+countryID;
	}
	function deleteCountry(countryID) {
		window.location.href="/countries/delete/"+countryID;
	}
</script>
