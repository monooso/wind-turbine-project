# Wind Turbine Project

![screenshot](docs/screenshot.png "Wind Turbine Project screenshot")

A simple Laravel application developed for an interview. Attempts to tread the fine line between "enough to demonstrate my expertise" and "obviously overkill for such a small project".

Built using [Laravel 8][laravel], [Tailwind CSS][tailwind], and [Alpine.js][alpine]. Uses [GitHub Actions][gh-actions] to lint and test code upon commit.

[laravel]: https://laravel.com/
[tailwind]: https://tailwindcss.com/
[alpine]: https://github.com/alpinejs/alpine
[gh-actions]: https://github.com/features/actions

Displays a dummy "status" page for a wind turbine. Clicking the "refresh status" button fetches the results from the server via an Ajax call (as requested in the brief).
