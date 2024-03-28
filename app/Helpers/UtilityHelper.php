<?php
namespace App\Helpers;

function rating($count)
{
    $output = '';

    if ($count == 5) {
        $output .= '<i class="fas fa-star"></i>';
        $output .= '<i class="fas fa-star"></i>';
        $output .= '<i class="fas fa-star"></i>';
        $output .= '<i class="fas fa-star"></i>';
        $output .= '<i class="fas fa-star"></i>';
    } elseif ($count == 4) {
        $output .= '<i class="fas fa-star"></i>';
        $output .= '<i class="fas fa-star"></i>';
        $output .= '<i class="fas fa-star"></i>';
        $output .= '<i class="fas fa-star"></i>';
        $output .= '<i class="far fa-star"></i>';
    } elseif ($count == 3) {
        $output .= '<i class="fas fa-star"></i>';
        $output .= '<i class="fas fa-star"></i>';
        $output .= '<i class="fas fa-star"></i>';
        $output .= '<i class="far fa-star"></i>';
        $output .= '<i class="far fa-star"></i>';
    } elseif ($count == 2) {
        $output .= '<i class="fas fa-star"></i>';
        $output .= '<i class="fas fa-star"></i>';
        $output .= '<i class="far fa-star"></i>';
        $output .= '<i class="far fa-star"></i>';
        $output .= '<i class="far fa-star"></i>';
    } elseif ($count == 1) {
        $output .= '<i class="fas fa-star"></i>';
        $output .= '<i class="far fa-star"></i>';
        $output .= '<i class="far fa-star"></i>';
        $output .= '<i class="far fa-star"></i>';
        $output .= '<i class="far fa-star"></i>';
    }

    return $output;
}