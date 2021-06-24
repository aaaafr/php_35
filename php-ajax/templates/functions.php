<?php

function apply_discount($price, $discount)
{
  return $price -= $price * $discount / 100;
}
