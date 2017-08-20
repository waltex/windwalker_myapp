<?php
/**
 * Global variables
 * --------------------------------------------------------------
 * @var $app      \Windwalker\Web\Application                 Global Application
 * @var $package  \Windwalker\Core\Package\AbstractPackage    Package object.
 * @var $view     \Windwalker\Data\Data                       Some information of this view.
 * @var $uri      \Windwalker\Uri\UriData                     Uri information, example: $uri->path
 * @var $datetime \Windwalker\Core\DateTime\Chronos           PHP DateTime object of current time.
 * @var $helper   \Windwalker\Core\View\Helper\Set\HelperSet  The Windwalker HelperSet object.
 * @var $router   \Windwalker\Core\Router\PackageRouter       Route builder object.
 * @var $asset    \Windwalker\Core\Asset\AssetManager         The Asset manager.
 */
?>

@extends('_global.flower.admin-wrapper')

@section('content')
    @section('banner')
        @include('_global.flower.widget.banner')
    @show

    @section('toolbar')
        @include('_global.flower.widget.toolbar')
    @show

    @section('admin-area')
    <section id="admin-area">
        @messages

        @yield('admin-body', 'Admin Body')
    </section>
    @show
@stop
