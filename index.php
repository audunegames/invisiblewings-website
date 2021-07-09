<?php
require("vendor/autoload.php");

use Danae\Feather\Feather;

// Create the context
$feather = new Feather();

// Add pages
$feather->pages->add('home', ['default' => true]);

// Create context
$feather->context = [
  'assets' => $feather->base_path . '/assets',
  'embeds' => [
    'trailer' => 'https://www.youtube.com/embed/Zn5NWS1Zm7Q',
  ],
  'links' => [
    'audune' => 'https://audune.com/',
    'contact' => 'mailto:support@audune.com',
    'people' => [
      'danae_dekker' => 'https://danaedekker.com/',
      'maricu_mana' => 'https://twitter.com/Maricu_Mana',
      'jessica_spencer' => 'https://jessicaspencer.work/',
      'katherine_tole' => 'https://katherinetole.com/',
    ],
    'social' => [
      'steam' => 'https://store.steampowered.com/app/1419380/Invisible_Wings/',
      'itch_io' => 'https://audune.itch.io/invisiblewings',
      'twitter' => 'https://twitter.com/AuduneGames',
      'facebook' => 'https://facebook.com/AuduneGames',
      'patreon' => 'https://patreon.com/audune',
      'ko_fi' => 'https://ko-fi.com/audune',
      'discord' => 'https://discord.gg/2bbEpTkPDG',
    ],
  ],
];

// Run!
$feather->run();
