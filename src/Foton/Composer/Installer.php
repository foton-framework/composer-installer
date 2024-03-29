<?php namespace Foton\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class Installer extends LibraryInstaller
{
    protected $supported_packages = array(
        'foton-core',
        'foton-extension',
        'foton-docs',
        // 'foton-component',
        // 'foton-application',
    );

    //--------------------------------------------------------------------------

    public function getInstallPath(PackageInterface $package)
    {
        list($vendor, $name) = explode('/', $package->getName());

        switch ($package->getType())
        {
            case 'foton-core':
                return 'framework/';

            case 'foton-docs':
                return 'docs/';

            case 'foton-extension':
                return 'extensions/' . $name . '/';
        }
    }

    //--------------------------------------------------------------------------

    public function supports($packageType)
    {
        return in_array($packageType, $this->supported_packages);
    }

    //--------------------------------------------------------------------------

}