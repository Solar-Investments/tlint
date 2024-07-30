<?php

namespace Tighten\TLint\Presets;

use Tighten\TLint\Formatters;
use Tighten\TLint\Linters;

class DefaultPreset implements PresetInterface
{
    public function getLinters(): array
    {
        return [
            Linters\ApplyMiddlewareInRoutes::class,
            Linters\ArrayParametersOverViewWith::class,
            Linters\FullyQualifiedFacades::class,
            Linters\MailableMethodsInBuild::class,
            Linters\NoDatesPropertyOnModels::class,
            Linters\NoDocBlocksForMigrationUpDown::class,
            Linters\NoSpaceAfterBladeDirectives::class,
            Linters\OneLineBetweenClassVisibilityChanges::class,
            Linters\RemoveLeadingSlashNamespaces::class,
            Linters\RequestHelperFunctionWherePossible::class,
            Linters\RequestValidation::class,
            Linters\SpaceAfterBladeDirectives::class,
            Linters\SpacesAroundBladeRenderContent::class,
            Linters\UseAnonymousMigrations::class,
        ];
    }

    public function getFormatters(): array
    {
        return [
            Formatters\ArrayParametersOverViewWith::class,
            Formatters\FullyQualifiedFacades::class,
            Formatters\MailableMethodsInBuild::class,
            Formatters\NoDatesPropertyOnModels::class,
            Formatters\NoDocBlocksForMigrationUpDown::class,
            Formatters\NoSpaceAfterBladeDirectives::class,
            Formatters\OneLineBetweenClassVisibilityChanges::class,
            Formatters\RemoveLeadingSlashNamespaces::class,
            Formatters\RequestHelperFunctionWherePossible::class,
            Formatters\RequestValidation::class,
            Formatters\SpaceAfterBladeDirectives::class,
            Formatters\SpacesAroundBladeRenderContent::class,
            Formatters\UseAnonymousMigrations::class,
        ];
    }
}
