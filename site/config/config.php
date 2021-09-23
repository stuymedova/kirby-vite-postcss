<?php

return [
  'smartypants' => true,
  'bnomei.robots-txt.sitemap' => '/sitemap.xml',
  'bnomei.robots-txt.groups' => [
    '*' => [
      'disallow' => [
        '/panel/',
      ],
    ],
  ],
  'omz13.xmlsitemap.disableImages' => true,
  'debug' => true
];
