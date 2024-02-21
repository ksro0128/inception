#!/bin/bash

MAX_TRY=30
TRY=0

while [ $TRY -lt $MAX_TRY ]; do
    if [ -f /var/www/html/initialization_done ]; then
        break
    fi
    TRY=$((TRY+1))
    sleep 1
done
exec "$@"