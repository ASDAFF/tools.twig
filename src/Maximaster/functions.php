<?php

use Maximaster\Tools\Twig\TemplateEngine;

global $arCustomTemplateEngines;
$arCustomTemplateEngines['twig'] = [
    'templateExt' => ['twig'],
    'function'    => 'maximasterRnderTwigTemplate'
];
if (function_exists('maximasterRnderTwigTemplate'))
{
    throw new \Twig_Error_Loader('����������, ����� ������ � ������ maximasterRnderTwigTemplate �� ���� ����������');
}
function maximasterRnderTwigTemplate(
    $templateFile,
    $arResult,
    $arParams,
    $arLangMessages,
    $templateFolder,
    $parentTemplateFolder,
    \CBitrixComponentTemplate $template)
{
    TemplateEngine::render(
        $templateFile,
        $arResult,
        $arParams,
        $arLangMessages,
        $templateFolder,
        $parentTemplateFolder,
        $template
    );
}