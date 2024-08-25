<?php

require_once 'vendor/autoload.php';

// Show list of available snippets
$converter = new \PetRofi\Converter();

foreach ($converter->getSnippets() as $snippet) {
    printf(
        "%s %s\n<tt>%s</tt>\t",
        $snippet->getDescription(),
        implode(
            ' ',
            array_map(
                function (string $tag) {
                    return sprintf('<span foreground="yellow" size="small">#%s</span>', $tag);
                },
                $snippet->getTags()
            )
        ),
        htmlentities($snippet->getCommand())
    );
}
