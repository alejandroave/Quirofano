#!/bin/bash


echo "Rebuild your model"

php symfony propel:build-model
php symfony propel:build-sql
php symfony propel:build-forms
php symfony propel:build-filters

echo "cuidado borrar tabla"


php symfony propel:insert-sql

php symfony guard:create-user ave ave9201