{{-- Part of Flower project. --}}
<?php
/**
 * Global variables
 * --------------------------------------------------------------
 * @var $app      \Windwalker\Web\Application                 Global Application
 * @var $package  \Flower\FlowerPackage                 Package object.
 * @var $view     \Flower\View\Sakura\SakuraHtmlView    View object.
 * @var $uri      \Windwalker\Uri\UriData                     Uri information, example: $uri->path
 * @var $datetime \Windwalker\Core\DateTime\DateTime          PHP DateTime object of current time.
 * @var $helper   \Windwalker\Core\View\Helper\Set\HelperSet  The Windwalker HelperSet object.
 * @var $router   \Windwalker\Core\Router\MainRouter          Route builder object.
 * @var $asset    \Windwalker\Core\Asset\AssetManager         The Asset manager.
 */
?>

<button type="button" class="btn btn-success btn-sm" onclick="Phoenix.post();">
    <span class="fa fa-save"></span>
    @translate('phoenix.toolbar.save')
</button>

<button type="button" class="btn btn-default btn-sm" onclick="Phoenix.post(null, {task: 'save2close'});">
    <span class="fa fa-check text-success"></span>
    @translate('phoenix.toolbar.save2close')
</button>

<button type="button" class="btn btn-default btn-sm" onclick="Phoenix.post(null, {task: 'save2copy'});">
    <span class="fa fa-copy text-info"></span>
    @translate('phoenix.toolbar.save2copy')
</button>

<button type="button" class="btn btn-default btn-sm" onclick="Phoenix.post(null, {task: 'save2new'});">
    <span class="fa fa-plus text-primary"></span>
    @translate('phoenix.toolbar.save2new')
</button>

<a type="button" class="btn btn-default btn-sm" href="{{ $router->route('sakuras') }}">
    <span class="fa fa-remove text-danger"></span>
    @translate('phoenix.toolbar.cancel')
</a>
