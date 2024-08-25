<?php

namespace PetRofi;

use Yosymfony\Toml\Toml;

class Converter
{
    private Snippets $snippets;

    public function __construct(?string $config_file = null)
    {
        if ($config_file === null) {
            $config_file = getenv('HOME') . '/.config/pet/config.toml';
        }
        $configuration = Toml::ParseFile($config_file);

        $this->snippets = new Snippets(
            ...array_map(
                function (array $item) {
                    if (!isset($item['tag'])) {
                        $item['tag'] = [];
                    }
                    return new Snippet($item['description'], $item['command'], ...$item['tag']);
                },
                Toml::ParseFile(strtr($configuration['General']['snippetfile'], ['~' => getenv('HOME')]))['snippets']
            )
        );
    }

    public function getSnippets(): Snippets
    {
        return $this->snippets;
    }
}