<?php

Schedule::command('app:generate-sitemap-command')
    ->daily()
    ->sendOutputTo(storage_path('logs/sitemap.log'));
