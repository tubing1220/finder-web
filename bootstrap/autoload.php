<?php
// 加载 composer
require __DIR__.'/../vendor/autoload.php';

// TODO
// 如果每次框架启动时都需要依赖的文件 在采用 autoload 会有不必要的性能开销
// 我们可以通过使用 classPreload 技术将所有文件编译到一个文件中用来提升性能
