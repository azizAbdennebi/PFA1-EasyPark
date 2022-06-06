<?php
//session_start();
$emp=$_SESSION["emplacement"];
//$i=0;

for ($i=0;$i<count($emp);$i++)
{
    $inser="<h4 style='color:white;'>place  $emp[$i]: </h4>
<div class='row'>
<div class='col-sm-5'>
<div class='form-group'>
<span class='form-label'>matricule</span>
<input class='form-control' type='text' name='$emp[$i]mat' required=''>
</div>
</div>
<div class='col-sm-7'>
<div class='row'>
<div class='col-sm-4'>
<div class='form-group'>
<span class='form-label'>couleur</span>
<select name='$emp[$i]col' class='form-control'>
<option value='noire'>noire</option>
<option value='blanche'>blanche</option>
<option value='grise'>grise</option>
<option value='rouge'>rouge</option>
<option value='verte'>verte</option>
<option value='bleue'>bleue</option>
<option value='jaune'>jaune</option>
<option value='creme'>creme</option>

</select>
<span class='select-arrow'></span>
</div>
</div>
<div class='col-sm-4'>
<div class='form-group'>
<span class='form-label' >puissance</span>
<select name='$emp[$i]puis' class='form-control'>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>05</option>
<option>10</option>
<option>15</option>
<option>20</option>
<option>25</option>
<option>30</option>
<option>35</option>
<option>40</option>
<option>45</option>
<option>50</option>
<option>55</option>
</select>
<span class='select-arrow'></span>
</div>
</div>

</div>
</div>
</div>";
echo($inser);

}

/*


$inser="<h4 style='color:white;'>place 1: </h4>
<div class='row'>
<div class='col-sm-5'>
<div class='form-group'>
<span class='form-label'>matricule</span>
<input class='form-control' type='text' required=''>
</div>
</div>
<div class='col-sm-7'>
<div class='row'>
<div class='col-sm-4'>
<div class='form-group'>
<span class='form-label'>couleur</span>
<select class='form-control'>
<option value='noire'>noire</option>
<option value='blanche'>blanche</option>
<option value='grise'>grise</option>
<option value='rouge'>rouge</option>
<option value='verte'>verte</option>
<option value='bleue'>bleue</option>
<option value='jaune'>jaune</option>
<option value='creme'>creme</option>

</select>
<span class='select-arrow'></span>
</div>
</div>
<div class='col-sm-4'>
<div class='form-group'>
<span class='form-label'>puissance</span>
<select class='form-control'>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>05</option>
<option>10</option>
<option>15</option>
<option>20</option>
<option>25</option>
<option>30</option>
<option>35</option>
<option>40</option>
<option>45</option>
<option>50</option>
<option>55</option>
</select>
<span class='select-arrow'></span>
</div>
</div>

</div>
</div>
</div>";
echo($inser);

*/


?>