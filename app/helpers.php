<?php
function forHumans($date)
{
    return \Carbon\Carbon::parse($date)->diffForHumans();
}
function changeDateFormate($date, $date_format)
{
    return \Carbon\Carbon::parse($date)->diffForHumans();
    return \Carbon\Carbon::createFromFormat('Y-m-d', $date)->format($date_format);
}
function getDayName($date)
{
    return \Carbon\Carbon::createFromFormat('Y-m-d', $date)->isoFormat('dddd');
}
function priceFormate($number)
{
    return '$ ' . number_format($number, 2);
    // $formatter = new NumberFormatter('en_US', NumberFormatter::CURRENCY);
    // return $formatter->formatCurrency($number, 'USD');
}
