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
function countCart()
{
    $old_cart_data = session()->get('cart') ?? array();
    return isset($old_cart_data['product']) ? sizeof($old_cart_data['product']) : 0;
}
function total_price_of_cart()
{
    $old_cart_data = session()->get('cart') ?? array();
    $total_amount = 0;
    if (isset($old_cart_data['product'])) {
        foreach ($old_cart_data['product'] as $product) {
            $total_amount = $total_amount + (float)$product['total_price'];
        }
    }
    // return '$ ' . number_format($total_amount, 2);
    return $total_amount;
}
