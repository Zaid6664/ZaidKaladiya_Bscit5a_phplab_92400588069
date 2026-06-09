<?php
$month = date("n");

if($month >= 1)
{
    if($month <= 12)
    {
        echo "Valid Month";
    }
    else
    {
        echo "Invalid Month";
    }
}
else
{
    echo "Invalid Month";
}
?>