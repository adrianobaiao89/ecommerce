<?php

function formatPrice(fLoat $vlprice)
{
    return number_format($vlprice,2,",",".");
}

?>