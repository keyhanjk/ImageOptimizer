<?php

require "vendor/autoload.php";

use Spatie\ImageOptimizer\OptimizerChain;
use Spatie\ImageOptimizer\Optimizers\Jpegoptim;
use Spatie\ImageOptimizer\Optimizers\Pngquant;

//$optimizerChain = OptimizerChainFactory::create();

$file = "3.jpg";

$optimizerChain = (new OptimizerChain)
    ->addOptimizer(new Jpegoptim([
        '--strip-all',
        '--all-progressive',
    ]))
    ->addOptimizer(new Pngquant([
        '--force',
    ]))->optimize("in/$file","out/$file");