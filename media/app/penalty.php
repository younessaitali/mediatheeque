<?php


function addpenalty($price, $days, $p)
{

    return (($price / 100) * $p * $days);
}

function price($price, $qty)
{

    return ($price * $qty);
}
