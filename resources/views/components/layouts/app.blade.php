<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
        <title>{{ $title ?? 'Page Title' }} company.com</title>
    </head>
    <body>
    <nav>
        <a wire:navigate href="/todo" @class(['current' => request()->is('todo')])> Todo </a>
        <a wire:navigate href="/counter" @class(['current' => request()->is('counter')])> Counter </a>
    </nav>
        {{ $slot }}

        <style>
        .current{
        background:red;
        }
        </style>
    </body>
</html>