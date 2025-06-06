<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ __('titles.pageTitle')}}</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gradient-to-br from-slate-900 via-slate-700 to-slate-900 text-amber-50 min-h-screen">
<livewire:atoms.language-button/>
{{ $slot }}
</body>
</html>
