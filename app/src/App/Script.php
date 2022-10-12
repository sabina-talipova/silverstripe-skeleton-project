<?php

namespace App;

class Script
{
    public function init($command)
    {
        if ($command) {
            $text = <<<YAML
            version: "3.8"

            networks:
              silverstripe-node:
            YAML;
            $filename = __DIR__ . '/../../docker-compose.yml';
            
            file_put_contents($filename, $text);
            // echo($command);
            // exec($command, $output, $status);
            // // exec('ls -l', $output, $status);
    
            // foreach($output as $value)
            // {
            //     echo $value . "\n";
            // }
        }

    }
}