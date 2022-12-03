<?php
function output($i)
{
  $out = "";
  if ($i % 3 == 0)
    $out .= "Fizz";
  if ($i % 5 == 0)
    $out .= "Buzz";
  if (strlen($out) > 0)
    return "$out.<br>";
  return "$i<br>";
}
?>
<div>
  <?php
  for ($i = 1; $i <= 100; $i++) {
    echo output($i);
  }
  ?>
  <div>