<?php

class Route
{
    public function handleRoute($url)
    {
        global $routes;
        unset($routes['default_controller']);

        $url = trim($url, '/');

        $handleUrl = $url;
        if (!empty($routes)) {
            foreach ($routes as $key => $value) {
                if ($key==$url) {
                    $handleUrl = $value;
                }
            }
        }
        return $handleUrl;
    }
}
