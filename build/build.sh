#!/bin/bash

echo "Suppression des logs"
rm -rf ../nginx/log/*

echo "Copie des sources dans le répertoire dist"
mkdir dist
cp -a ../www/* dist/