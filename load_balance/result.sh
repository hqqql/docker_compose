#!/bin/bash
while [ true ]; do
    wget -O - -q http://localhost:8081;
    echo " ";
    sleep 3;
done