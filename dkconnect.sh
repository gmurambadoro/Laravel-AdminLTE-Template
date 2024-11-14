#!/usr/bin/env bash

source docker.env

echo "Web:             http://localhost:$DC_APP_PORT"
echo "phpMyAdmin:      http://localhost:$DC_PMA_PORT"
echo "Mailhog:         http://localhost:$DC_MAILHOG_WEBUI_PORT"

docker exec -it "$DC_APP_NAME" bash
