<?php

require "vendor/autoload.php";

use Spatie\ImageOptimizer\OptimizerChain;
use Spatie\ImageOptimizer\Optimizers\Jpegoptim;
use Spatie\ImageOptimizer\Optimizers\Pngquant;

//$optimizerChain = OptimizerChainFactory::create();


$files = ["1.jpg", "2.jpg", "test.jpeg", "test.png", "5.png", "6.png"];

foreach($files as $file) {
    $optimizerChain = (new OptimizerChain)
        ->addOptimizer(new Jpegoptim([
            '-m70',
            '--strip-all',
            '--all-progressive',
        ]))
        ->addOptimizer(new Pngquant([
            '--force',
    ]))->optimize("in/$file", "out/$file");

    print "file '$file' compressed successfully.\n";
}
