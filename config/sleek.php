<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Enable Sleek Component Compilation
    |--------------------------------------------------------------------------
    |
    | This option controls whether the Sleek component compiler is enabled.
    | When set to true, PascalCase component tags will be transformed into
    | Laravel's x-component format during Blade compilation.
    |
    */

    'enabled' => true,

    /*
    |--------------------------------------------------------------------------
    | Ignore HTML Tags
    |--------------------------------------------------------------------------
    |
    | Here you may specify an array of HTML tags that should not be
    | transformed by the Sleek component compiler. This is useful for
    | preserving the integrity of custom elements or web components.
    |
    */

    'ignore_tags' => [
        'a', 'abbr', 'acronym', 'address', 'applet', 'area', 'article', 'aside', 'audio',
        'b', 'base', 'basefont', 'bdi', 'bdo', 'big', 'blockquote', 'body', 'br', 'button',
        'canvas', 'caption', 'center', 'cite', 'code', 'col', 'colgroup', 'command',
        'datalist', 'dd', 'del', 'details', 'dfn', 'dialog', 'dir', 'div', 'dl', 'dt',
        'em', 'embed', 'fieldset', 'figcaption', 'figure', 'font', 'footer', 'form',
        'frame', 'frameset', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'head', 'header',
        'hr', 'html', 'i', 'iframe', 'img', 'input', 'ins', 'kbd', 'keygen',
        'label', 'legend', 'li', 'link', 'main', 'map', 'mark', 'menu', 'menuitem',
        'meta', 'meter', 'nav', 'noframes', 'noscript', 'object', 'ol', 'optgroup',
        'option', 'output', 'p', 'param', 'picture', 'pre', 'progress', 'q', 'rp',
        'rt', 'ruby', 's', 'samp', 'script', 'section', 'select', 'small', 'source',
        'span', 'strike', 'strong', 'style', 'sub', 'summary', 'sup', 'svg', 'table',
        'tbody', 'td', 'template', 'textarea', 'tfoot', 'th', 'thead', 'time', 'title',
        'tr', 'track', 'tt', 'u', 'ul', 'var', 'video', 'wbr'
    ],
];