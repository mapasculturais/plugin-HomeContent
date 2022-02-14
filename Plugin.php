<?php

namespace HomeContent;

use MapasCulturais\App;

class Plugin extends \MapasCulturais\Plugin
{

    function __construct(array $config = [])
    {
        $config += [
            // Título que aparece na homr
            "title_home" => env("HC_TEXT_HOME", ""),

            // Imagens que aparece na home. Preencher como um array Ex.: ["homeContent/img/img1.png", "homeContent/img/img2.png"]
            "images_home" => env("HC_IMAGES_HOME", ""),

            // Texto que aparece na home
            "text_home" => env("HC_TEXT_HOME", ""),

            // Botão de ação que aparece na home
            "action_home" => env("HC_ACTIONS_HOME", ""),
        ];

        parent::__construct($config);
    }

    function _init()
    {
        $app = App::i();
        $plugin = $this;

        /**
         * Insere conteúdo na HOME
         */
        $app->hook('template(site.index.home-search):end', function () use ($plugin) {
            /** @var Theme $this */
            $this->part('HomeContent/home-search', ["config" => $plugin->config]);
        });
    }

    function register()
    {
    }
}
