@extends('layouts.mylayout')

@section('leftpanContent')

	<h3>Please Insert necessay informations of the <span>Movie</span>. </h3>
	<p>
	<center>
	<form action="insertData.php" method="post" >
	{!! csrf_field() !!}
	    <table cellspacing="10px">
	        <tr>
	            <td>Movie Name</td>
	            <td><input type="text" name="movieNameTextField" size="40" maxlength="40" value="" /></td>
	        </tr>
	        <tr>
	            <td>Runtime(In Minute)</td>
	            <td><input type="text" name="runTimeTextField" size="5" maxlength="5" value="" /> </td>
	        </tr>
	        <tr>
	            <td>Language</td>
	            <td>
	            	<select name = "languageIdDropDOwn">
	            		@for($i=0;$i<count($data['language_name_ara']);$i++)
							<option value="{{$data['language_id_ara'][$i]}}">{{$data['language_name_ara'][$i]}}</option>
						@endfor
	            	</select>
	            </td>
	        </tr>
	        <tr>
	            <td>Release Date</td>
	            <td>
	                <select name="relDateDayDropDown">
	                	@for($i=1;$i<32;$i++)
	                    	<option value="{{$i}}">{{str_pad($i, 2, '0', STR_PAD_LEFT)}}</option>
	                    @endfor
	                </select>
	                -
	                <select name="relDateMonthDropdown">
	                    <option value="JAN">JAN</option>
	                    <option value="FEB">FEB</option>
	                    <option value="MAR">MAR</option>
	                    <option value="APR">APR</option>
	                    <option value="MAY">MAY</option>
	                    <option value="JUN">JUN</option>
	                    <option value="JUL">JUL</option>
	                    <option value="AUG">AUG</option>
	                    <option value="SEP">SEP</option>
	                    <option value="OCT">OCT</option>
	                    <option value="NOV">NOV</option>
	                    <option value="DEC">DEC</option>
	                </select>
	                -
	                <select name="relDateYearTextField">
	                    @for($i=1930;$i<2017;$i++)
	                       <option value="{{$i}}">{{$i}}</option> <br />
	                    @endfor
	                </select>
	        </tr>
	        <tr>
	            <td>Budget(In Million Dollar) &nbsp;</td>
	            <td><input type="text" name="budgetTextField" size="10" maxlength="10" value="" /> </td>
	        </tr>
	        <tr>
	            <td>Country</td>
	            <td>
	            	<select name = "countryIdDropDOwn">
	            		@for($i=0;$i<count($data['country_id_ara']);$i++)
							<option value="{{$data['country_id_ara'][$i]}}">{{$data['country_name_ara'][$i]}}</option>
						@endfor
	            	</select>
	            </td>
	        </tr>
	        <tr>
	            <td>Rating</td>
	            <td><input type="text" name="ratingTextField" size="5" maxlength="5" value="" /> </td>
	        </tr>
	        <tr>
	            <td>Production House</td>
	            <td>
	            	<select name = "prodIdDropDOwn">
	            		@for($i=0;$i<count($data['production_house_name_ara']);$i++)
							<option value="{{$data['production_house_id_ara'][$i]}}">{{$data['production_house_name_ara'][$i]}}</option>
						@endfor
	            	</select>
	            </td>
	        </tr>
	        <tr>
	            <td>Director Name</td>
	            <td>
	            	<select name = "dirIdDropDOwn">
	            		@for($i=0;$i<count($data['director_name_ara']);$i++)
							<option value="{{$data['director_id_ara'][$i]}}">{{$data['director_name_ara'][$i]}}</option>
						@endfor
	            	</select>
	            </td>
	        </tr>
	        <tr>
	            <td valign="middle">Movie Genre </td>
	            <td>
	                <table>
	                	@for($count = 0;$count<count($data['genre_name_ara']);)
	                		<tr>
		                		@for($col = 0;$col<4 && $count<count($data['genre_name_ara']);$col++)
		                			<td>
			                			<input type="checkbox" name="check_list[]" value="{{$data['genre_id_ara'][$count]}}">&nbsp;{{$data['genre_name_ara'][$count++]}}&nbsp;
		                			</td>
		                		@endfor
	                		</tr>
	                	@endfor	                   
	                </table>
	            </td>
	        </tr>
	        <tr>
	        	<td valign="middle">Plot </td>
	        	<td>
	        		<textarea name="plot" id="plot" cols="35"> </textarea>
	        	</td>
	        </tr>
	        <tr>
	        	<td>Poster</td>
	        	<td valign="middle">
	        		<input type="file" name="fileToUpload" id="fileToUpload">
	        	</td>
	        </tr>
	    </table>
	    <p> 
	        <input type="submit" name="NextButton" value="Add Movie" /> 
	    </p>
	</form>
	
@endsection