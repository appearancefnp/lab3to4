@if (count($countries)==0)
	<p color="red"> There is no record in the database!</p>
@else
<script>
        function searchCountry() {
            var name = document.getElementById("searchT1").value;
            window.location.href="/countries/search/"+name;
        }
        function searchCity() {
            var name = document.getElementById("searchT2").value;
            window.location.href="/cities/search/"+name;
        }</script>
	<table border="1"> 
		<tr> 
			<td> Country Id </td> 
			<td> Country Name </td> 
			<td> Country Code </td>
			<td> cities </td>
			<td>  </td>
                        <td> Update </td>
		</tr>
	@foreach ($countries as $country)
		<tr> 
			<td> {{ $country->country_id }} </td>
			<td> {{ $country->country_name }} </td>
			<td> {{ $country->country_code }} </td>
			<td> <input type="button" value="show" onclick="showCities({{ $country->country_id }})"> </td>
			<td> <input type="button" value="delete" onclick="deleteCountry({{ $country->country_id }})"> </td>
                        <td> <input type="button" value="update" onclick="updateCountry({{ $country->country_id }})" </td>
		</tr>
	@endforeach
	</table>
@endif
<p> <input type="button" value="New Country"> </p>
<p> Search country: <input id="searchT1" type="text" placeholder="search text"> <input type="button" value="search" onclick="searchCountry()"></p>
<p> Search city: <input id="searchT2" type="text" placeholder="search text"> <input type="button" value="search" onclick="searchCity()"> </p> 
    
<script>
	function showCities(countryID) {
		window.location.href="/cities/"+countryID;
	}
	function deleteCountry(countryID) {
		window.location.href="/countries/delete/"+countryID;
	}
        function updateCountry(countryID) {
            window.location.href="/countries/update/"+countryID;
        }
</script>
