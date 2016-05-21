@extends('layouts.mylayout')

  @section('leftpanContent')
    <h2>Movies<span>365</span></h2>
    <p>
      This is a website for Movies. General Informations like Casting,  Rating, Runtime, Budget, Language, Country, Release Date,
      Directors and Production House can be found here. One can also search for informations of actors/actresses. Only Admin Panel can make new entry in the database. Users can Only rate and comment on the movies. 
    </p>
    <div id="leftblockonePan">
      <h3><a href="topMovie.php">Top <span>Movies</span></a></h3>
      <h4><span>1.</span><a href="">The Shawshank Redemption </a></h4>
      <p>
      </br>
        &nbsp;&nbsp;&nbsp;<img src="/images/1.jpg" alt="Can not find" style="width:120px;height:120px;"> 
      </p>
      <p> 
        <table>
          <tr><td>&nbsp;&nbsp; <span>Language &nbsp; </td><td> &nbsp; </span> English </td> </tr>
          <tr><td>&nbsp;&nbsp; <span>Rating &nbsp; </td><td> &nbsp; </span> 9.3 </td></tr>
          <tr><td>&nbsp;&nbsp; <span>Release Date &nbsp; </td> <td>&nbsp; </span> 10-dec-1995 </td></tr>
        </table>
      </p>

      <p class="border"><img src="/images/blank.gif" alt="" /></p>
      <h4><span>2.<a href="#"></span>Batman</a></h4>
      <p>
      </br>
        &nbsp;&nbsp;&nbsp;<img src="/images/3.jpg" alt="Can not find" style="width:120px;height:120px;"> 
      </p>
      <p> 
        <table>
          <tr><td>&nbsp;&nbsp; <span>Language &nbsp; </td><td> &nbsp; </span> English </td> </tr>
          <tr><td>&nbsp;&nbsp; <span>Rating &nbsp; </td><td> &nbsp; </span> 9.3 </td></tr>
          <tr><td>&nbsp;&nbsp; <span>Release Date &nbsp; </td> <td>&nbsp; </span> 10-dec-1995 </td></tr>
        </table>
      </p>

    </div>
    <div id="leftblocktwoPan">
      <h3><a href="actorList.php">Top <span>Actors</span></a></h3>
      <ul>
        <li><a href=""> Jacky Chan</a></li></br>
        <li><a href=""> Tom Cruiz</a></li></br>
        <li><a href=""> Emma Watson</a></li></br>
      </ul>
      
      <h3><a href="directorList.php">Top <span>Directors</span></a></h3>
      </br>
      <ul>
        <li> Christopher nolan</li></br>
        <li> Donno Know</li></br>
      </ul>

    </div>
  @endsection