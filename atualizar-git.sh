#!/bin/bash
xterm -e git pull
xterm -e git add --all
xterm -e git commit -m "update"
xterm -e git push
