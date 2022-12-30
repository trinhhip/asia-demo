<?php
namespace Neo\Demo\Plugin;

class IndexPlugin
{
    public function beforePlus(
        \Neo\Demo\Block\Post\Index $subject,
        $a,
        $b
    ) {
        $a = 10;
        $b = 10;
        return [$a, $b];
    }

    // public function afterPlus(
    //     \Neo\Demo\Block\Post\Index $subject,
    //     $a,
    //     $b,
    //     $result
    // ) {
    //     $a = 2;
    //     $b = 3;
    //     $result = $a * $b;
    //     return $result;
    // }

    // public function aroundPlus(
    //     \Neo\Demo\Block\Post\Index $subject,
    //     callable $proceed,
    //     $a,
    //     $b
    // ) {
    //     return $a/$b;
    // }
}