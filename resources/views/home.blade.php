@extends('layouts.app')

@section('title', 'Home')

@section('content')
    {{-- Hero section --}}
    <section class="py-12">
        <p class="text-sm uppercase tracking-widest text-gray-400 mb-2">
            Hi, my name is
        </p>
        <h1 class="text-4xl md:text-5xl font-bold mb-3 text-white">
            Ivan Leonov
        </h1>
        <h2 class="text-xl md:text-2xl text-white mb-4">
            I am a Backend & PHP (Laravel / Symfony) Developer
        </h2>
        <p class="text-gray-400 max-w-xl mb-6">
            I build backend systems, APIs, and data pipelines for real-world
            applications, with a focus on clean architecture, performance, and reliability.
        </p>

        <div class="flex gap-3">
            <a href="{{ route('projects') }}"
               class="px-5 py-2 rounded bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium">
                View my projects
            </a>
            <a href="{{ route('contact') }}"
               class="px-5 py-2 rounded border border-gray-600 text-white text-sm font-medium hover:bg-gray-800">
                Contact me
            </a>
        </div>
    </section>

    {{-- About preview --}}
    <section class="mt-16">
        <h3 class="text-2xl font-semibold mb-3 text-white">About me</h3>
        <p class="text-gray-400 max-w-2xl mb-3">
            I am a backend-focused software engineer working with PHP, Laravel, Symfony, and SQL databases.
            I enjoy solving real business problems, integrating APIs, and improving performance in existing systems.
        </p>
        <a href="{{ route('about') }}" class="text-blue-400 text-sm hover:underline">
            Read more &rarr;
        </a>
    </section>

    {{-- Projects preview (static for now) --}}
    <section class="mt-16">
        <h3 class="text-2xl font-semibold mb-4 text-white">Featured projects</h3>

        <div class="grid gap-6 md:grid-cols-3">
            <article class="p-4 border border-gray-700 rounded-lg">
                <h4 class="font-semibold mb-2 text-white">E-commerce API Integrations</h4>
                <p class="text-sm text-gray-400 mb-3">
                    Connected multiple supplier APIs to keep product data, inventory, and pricing in sync.
                </p>
                <span class="text-xs text-gray-500">PHP · Laravel · MySQL · APIs</span>
            </article>

            <article class="p-4 border border-gray-700 rounded-lg">
                <h4 class="font-semibold mb-2 text-white">Order Processing Pipelines</h4>
                <p class="text-sm text-gray-400 mb-3">
                    Optimized database queries and cron jobs to handle large order volumes efficiently.
                </p>
                <span class="text-xs text-gray-500">Symfony · MySQL · Cron</span>
            </article>

            <article class="p-4 border border-gray-700 rounded-lg">
                <h4 class="font-semibold mb-2 text-white">Monitoring & Logging</h4>
                <p class="text-sm text-gray-400 mb-3">
                    Built centralized logging to speed up debugging and reduce production issues.
                </p>
                <span class="text-xs text-gray-500">Logging · Observability</span>
            </article>
        </div>

        <a href="{{ route('projects') }}" class="inline-block mt-4 text-blue-400 text-sm hover:underline">
            View all projects &rarr;
        </a>
    </section>

    {{-- Contact CTA --}}
    <section class="mt-16 mb-10">
        <div class="border border-gray-700 rounded-lg p-6 flex flex-col md:flex-row md:items-center md:justify-between">
            <div>
                <h3 class="text-xl font-semibold mb-1 text-white">Want to work together?</h3>
                <p class="text-gray-400 text-sm">
                    I’m open to backend, API, and Laravel/Symfony opportunities.
                </p>
            </div>
            <a href="{{ route('contact') }}"
               class="mt-4 md:mt-0 px-5 py-2 rounded bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium">
                Get in touch
            </a>
        </div>
    </section>
@endsection