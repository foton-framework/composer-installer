<?php namespace Foton\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class Installer extends LibraryInstaller
{
    public function getInstallPath(PackageInterface $package)
    {
        // $prefix = substr($package->getPrettyName(), 0, 23);
        // if ('phpdocumentor/template-' !== $prefix) {
        //     throw new \InvalidArgumentException(
        //         'Unable to install template, phpdocumentor templates '
        //         .'should always start their package name with '
        //         .'"phpdocumentor/template-"'
        //     );
        // }

        return 'framework/' . $package->getPrettyName();
    }

    public function supports($packageType)
    {
        return 'foton-core' === $packageType;
    }
}