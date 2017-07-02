<?php

namespace inquid\collaborative;

/**
 * Shows the github fork ribbon
 * Usage:
 * <?php
 * echo \inquid\collaborative\GitHubRibbon::widget(['color' => 'green','side' => 'left']);
 */
class GitHubRibbon extends \yii\base\Widget
{
    public $url;
    public $label;
    public $side;
    public $color;
    private $src, $data_canonical_src;

    public function init()
    {
        parent::init();
        if ($this->url === null) {
            $this->url = 'https://github.com';
        }
        if ($this->label === null) {
            $this->label = 'github';
        }
        if ($this->side === null or $this->side != 'left') {
            $this->side = 'right';
        }

        if ($this->color === null)
            $this->color = 'red';

        if ($this->color === 'red') {
            $this->src = 'https://camo.githubusercontent.com/365986a132ccd6a44c23a9169022c0b5c890c387/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f7265645f6161303030302e706e67';
            $this->data_canonical_src = 'https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png';
        }
        if ($this->color === 'green') {
            $this->src = 'https://camo.githubusercontent.com/e7bbb0521b397edbd5fe43e7f760759336b5e05f/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f677265656e5f3030373230302e706e67';
            $this->data_canonical_src = 'https://s3.amazonaws.com/github/ribbons/forkme_right_green_007200.png';
        }
        if ($this->color === 'black') {
            $this->src = 'https://camo.githubusercontent.com/38ef81f8aca64bb9a64448d0d70f1308ef5341ab/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f6461726b626c75655f3132313632312e706e67';
            $this->data_canonical_src = 'https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png';
        }
        if ($this->color === 'orange') {
            $this->src = 'https://camo.githubusercontent.com/652c5b9acfaddf3a9c326fa6bde407b87f7be0f4/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f6f72616e67655f6666373630302e706e67';
            $this->data_canonical_src = 'https://s3.amazonaws.com/github/ribbons/forkme_right_orange_ff7600.png';
        }
        if ($this->color === 'gray') {
            $this->src = 'https://camo.githubusercontent.com/a6677b08c955af8400f44c6298f40e7d19cc5b2d/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f677261795f3664366436642e706e67';
            $this->data_canonical_src = 'https://s3.amazonaws.com/github/ribbons/forkme_right_gray_6d6d6d.png';
        }
        if ($this->color === 'white') {
            $this->src = 'https://camo.githubusercontent.com/52760788cde945287fbb584134c4cbc2bc36f904/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f77686974655f6666666666662e706e67';
            $this->data_canonical_src = 'https://s3.amazonaws.com/github/ribbons/forkme_right_white_ffffff.png';
        }
        /* LEFT */
        if ($this->color === 'red' and $this->side === 'left') {
            $this->src = 'https://camo.githubusercontent.com/82b228a3648bf44fc1163ef44c62fcc60081495e/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f6c6566745f7265645f6161303030302e706e67';
            $this->data_canonical_src = 'https://s3.amazonaws.com/github/ribbons/forkme_left_red_aa0000.png';
        }
        if ($this->color === 'green' and $this->side === 'left') {
            $this->src = 'https://camo.githubusercontent.com/121cd7cbdc3e4855075ea8b558508b91ac463ac2/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f6c6566745f677265656e5f3030373230302e706e67';
            $this->data_canonical_src = 'https://s3.amazonaws.com/github/ribbons/forkme_left_green_007200.png';
        }
        if ($this->color === 'black' and $this->side === 'left') {
            $this->src = 'https://camo.githubusercontent.com/567c3a48d796e2fc06ea80409cc9dd82bf714434/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f6c6566745f6461726b626c75655f3132313632312e706e67';
            $this->data_canonical_src = 'https://s3.amazonaws.com/github/ribbons/forkme_left_darkblue_121621.png';
        }
        if ($this->color === 'orange' and $this->side === 'left') {
            $this->src = 'https://camo.githubusercontent.com/8b6b8ccc6da3aa5722903da7b58eb5ab1081adee/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f6c6566745f6f72616e67655f6666373630302e706e67';
            $this->data_canonical_src = 'https://s3.amazonaws.com/github/ribbons/forkme_left_orange_ff7600.png';
        }
        if ($this->color === 'gray' and $this->side === 'left') {
            $this->src = 'https://camo.githubusercontent.com/c6625ac1f3ee0a12250227cf83ce904423abf351/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f6c6566745f677261795f3664366436642e706e67';
            $this->data_canonical_src = 'https://s3.amazonaws.com/github/ribbons/forkme_left_gray_6d6d6d.png';
        }
        if ($this->color === 'white' and $this->side === 'left') {
            $this->src = 'https://camo.githubusercontent.com/c6286ade715e9bea433b4705870de482a654f78a/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f6c6566745f77686974655f6666666666662e706e67';
            $this->data_canonical_src = 'https://s3.amazonaws.com/github/ribbons/forkme_left_white_ffffff.png';
        }
    }

    public function run()
    {
        $position = 'right: 0;';
        if ($this->side === 'left') {
            $position = 'left: 0;';
        }
        return '<a href="' . $this->url . '"><img style="position: absolute; top: 0; ' . $position . ' border: 0;"
                                      src="' . $this->src . '"
                                      alt="' . $this->label . '"
                                      data-canonical-src="' . $this->data_canonical_src . '"></a>';
    }
}