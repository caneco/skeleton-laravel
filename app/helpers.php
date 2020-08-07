<?php

/**
 * Generate an parcel path for the application.
 *
 * @param  string $file
 * @param  string $manifestDirectory
 * @return string|null
 */
function parcel(string $file, string $manifestDirectory = 'dist'): ?string
{
    $file = ltrim($file, '/');
    $path = public_path("{$manifestDirectory}/parcel-manifest.json");
    if (! file_exists($path)) {
        return null;
    }
    $json = json_decode(file_get_contents($path), JSON_OBJECT_AS_ARRAY);
    if (! isset($json[$file])) {
        return null;
    }

    return "/{$manifestDirectory}{$json[$file]}";
}
