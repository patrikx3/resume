<?php

namespace Controller\Admin;

use Controller\Controller;
use P3x\Template;
use P3x\Language as l;

class Test extends \Controller
{
    public function phpInfo()
    {
        $phpinfo = Template::GetContent(function () {
            \phpinfo();
        });
        $phpinfo = preg_replace('%^.*<body>(.*)</body>.*$%ms', '$1', $phpinfo);
        $content = Template::GetContent(function () use ($phpinfo) {
            ?>
            <style type="text/css">
                #phpinfo pre {
                    margin: 0;
                    font-family: monospace;
                }

                #phpinfo a:link {
                    color: #009;
                    text-decoration: none;
                    background-color: #fff;
                }

                #phpinfo a:hover {
                    text-decoration: underline;
                }

                #phpinfo table {
                    border-collapse: collapse;
                    border: 0;
                    width: 934px;
                    box-shadow: 1px 2px 3px #ccc;
                }

                #phpinfo .center {
                    text-align: center;
                }

                #phpinfo .center table {
                    margin: 1em auto;
                    text-align: left;
                }

                #phpinfo .center th {
                    text-align: center !important;
                }

                #phpinfo td, th {
                    border: 1px solid #666;
                    font-size: 75%;
                    vertical-align: baseline;
                    padding: 4px 5px;
                    color: black;
                }

                #phpinfo h1 {
                    font-size: 150%;
                }

                #phpinfo h2 {
                    font-size: 125%;
                }

                #phpinfo .p {
                    text-align: left;
                }

                #phpinfo .e {
                    background-color: #ccf;
                    width: 300px;
                    font-weight: bold;
                }

                #phpinfo .h {
                    background-color: #99c;
                    font-weight: bold;
                }

                #phpinfo .v {
                    background-color: #ddd;
                    max-width: 300px;
                    overflow-x: auto;
                    word-wrap: break-word;
                }

                #phpinfo .v i {
                    color: #999;
                }

                #phpinfo img {
                    float: right;
                    border: 0;
                }

                #phpinfo hr {
                    width: 934px;
                    background-color: #ccc;
                    border: 0;
                    height: 1px;
                }
            </style>
            <br/>
            <div class="layout-content-text">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            PHPINFO
                        </div>
                    </div>
                    <div id="phpinfo">
                        <?= $phpinfo ?>
                    </div>
                    <div class="panel-footer"></div>
                </div>
            </div>
            <?php
        });
        $this->content($content);
    }

    public function Template()
    {
        $this->contentTemplate($_REQUEST['template'], [
            'language-ensure-areas' => l::GetAreas(),
        ]);
    }
}
