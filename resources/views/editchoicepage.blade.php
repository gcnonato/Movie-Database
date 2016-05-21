@extends('layouts.mylayout')

@section('leftpanContent')
    <p>
      <font size = "3">
        <a href="/edit/add/movie"> Add a Movie </a><br /><br />
        <a href="insertActorForm.php"> Add an Actor/Actress</a><br /><br />
        <a href="insertDirProdForm.php"> Add a Director</a><br /><br />
        <a href="insertDirProdForm.php"> Add a Production House</a><br /><br />
      </font>
    </p>

    <p>
      <font size = "3">
        <a href="deleteForm.php?type=movie"> Delete a Movie </a><br /><br />
        <a href="deleteForm.php?type=actor"> Delete an Actor/Actress</a><br /><br />
        <a href="deleteForm.php?type=director"> Delete a Director</a><br /><br />
        <a href="deleteForm.php?type=production"> Delete a Production House</a><br /><br />
      </font>
    </p>

@endsection