@extends('layouts.mylayout')

@section('leftpanContent')
    <h3>Please fill in at least one field from below </h3>
    <center>
    <form action="{{url('/').'/searchMovie'}}" method="POST">
    {!! csrf_field() !!}
      <p>
      <table cellspacing = "15px" width = "100%">
        <tr>
            <td>Movie Name &nbsp;</td>
            <td><input type="text" name="movieName" size="40" maxlength="40" value="" /></td>
        </tr>
        <tr>
            <td>Director Name &nbsp;</td>
            <td><input type="text" name="directorName" size="40" maxlength="40" value="" /></td>
        </tr>
        <tr>
            <td>Production House  &nbsp;</td>
            <td><input type="text" name="productionHouse" size="40" maxlength="40" value="" /></td>
        </tr>
        <tr>
            <td>Actor Name &nbsp;</td>
            <td><input type="text" name="actorName" size="40" maxlength="40" value="" /></td>
        </tr>

        <tr>
          <td valign="middle">Movie Genre </td>
          <td>
            <table>
              <tr>
                <td><input type="checkbox" name="genreName[]" value="Action" />&nbsp;Action &nbsp;</td>
                <td><input type="checkbox" name="genreName[]" value="Adventure" />&nbsp;Adventure&nbsp;</td>
                <td><input type="checkbox" name="genreName[]" value="Comedy" />&nbsp;Comedy&nbsp;</td>
                <td><input type="checkbox" name="genreName[]" value="Crime" />&nbsp;Crime&nbsp;</td>
              </tr>
              <tr>
                <td><input type="checkbox" name="genreName[]" value="Drama" />&nbsp;Drama&nbsp;</td>
                <td><input type="checkbox" name="genreName[]" value="Family" />&nbsp;Family&nbsp;</td>
                <td><input type="checkbox" name="genreName[]" value="Fantasy" />&nbsp;Fantasy&nbsp;</td>
                <td><input type="checkbox" name="genreName[]" value="Mystery" />&nbsp;Mystery&nbsp;</td>
              </tr>
              <tr>
                <td><input type="checkbox" name="genreName[]" value="Romance" />&nbsp;Romance&nbsp;</td>
                <td><input type="checkbox" name="genreName[]" value="Sci-fi" />&nbsp;Sci-Fi</td>
              </tr>
            </table>
          </td>
        </tr>
 
      </table>
    </p>
    </center>
    
    <center><input type="submit" name="goButton" value="Search" /> </center>
    </form>
 @endsection