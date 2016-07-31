<?php

if($_POST['action']==1):
echo'
<option value="1">Belgrade</option>
<option value="2">Novi Sad</option>
<option value="3">Nis</option>
<option value="4">Kragujevac</option>
<option value="5">Krusevac</option>';
elseif($_POST['action']==2):
echo'
<option value="1">Atina</option>
<option value="2">Thesalloniki</option>
<option value="3">Patra</option>
<option value="4">Kavala</option>
<option value="5">Creta</option>';
elseif($_POST['action']==3):
echo'
<option value="1">London</option>
<option value="2">Manchester</option>
<option value="3">Birmingham</option>
<option value="4">Sheffield</option>
<option value="5">Bolton</option>';
elseif($_POST['action']==4):
echo'
<option value="1">Roma</option>
<option value="2">Torino</option>
<option value="3">Milano</option>
<option value="4">Verona</option>
<option value="5">Firenza</option>';
elseif($_POST['action']==5):
echo'
<option value="1">Paris</option>
<option value="2">Toulouse</option>
<option value="3">Nice</option>
<option value="4">Cannes</option>
<option value="5">Lyon</option>';
endif;
?>
