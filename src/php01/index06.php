<?php
function getTriangleArea($base, $height)
{
  return $base * $height / 2;
}
function getSquareArea($base, $height)
{
  return $base * $height;
}
function getTrapezoidArea($base, $height, $lowerBase)
{
  return ($base+$lowerBase) * $height / 2;
}

echo getTriangleArea(2,5)."<br />";
echo getSquareArea(5,5)."<br />";
echo getTrapezoidArea(4,5,4);
