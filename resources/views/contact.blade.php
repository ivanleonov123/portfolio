@extends('layouts.app')

@section('title', 'Contact')

@section('content')

{{-- Hero Introduction --}}
<section class="py-8">
    <p class="text-sm uppercase tracking-widest text-gray-400 mb-2">
        Get In Touch
    </p>
    <h1 class="text-4xl md:text-5xl font-bold mb-4 text-white">
        Let's Work Together
    </h1>
    <p class="text-gray-400 max-w-2xl mb-4">
        I'm open to backend engineering opportunities, API development projects, and Laravel/Symfony work. 
        Whether you have a project in mind, a question about my work, or just want to connect, feel free to reach out.
    </p>
</section>

{{-- Contact Information --}}
<section class="py-6 border-t border-b border-gray-700">
    <h2 class="text-2xl font-semibold mb-6 text-white">Contact Information</h2>
    
    <div class="grid gap-6 md:grid-cols-3">
        <div class="p-5 border border-gray-700 rounded-lg hover:border-gray-600 transition-colors duration-200">
            <h3 class="text-lg font-semibold mb-3 text-white flex items-center">
                <svg class="w-5 h-5 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                Email
            </h3>
            <a href="mailto:Ivanleonov1002@gmail.com" 
               class="text-blue-400 hover:text-blue-300 hover:underline transition-colors duration-200">
                Ivanleonov1002@gmail.com
            </a>
        </div>

        <div class="p-5 border border-gray-700 rounded-lg hover:border-gray-600 transition-colors duration-200">
            <h3 class="text-lg font-semibold mb-3 text-white flex items-center">
                <svg class="w-5 h-5 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                </svg>
                Phone
            </h3>
            <span class="text-blue-400">
                443-513-1174
            </span>
        </div>

        <div class="p-5 border border-gray-700 rounded-lg hover:border-gray-600 transition-colors duration-200">
            <h3 class="text-lg font-semibold mb-3 text-white flex items-center">
                <svg class="w-5 h-5 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
                Schedule a call
            </h3>
            <a href="https://calendar.app.google/PUa8DF5pfKTFVoVs6" 
               target="_blank"
               rel="noopener noreferrer"
               class="text-blue-400 hover:text-blue-300 hover:underline transition-colors duration-200">
                Google calendar
            </a>
        </div>
    </div>
</section>

{{-- Availability & Response Time --}}
<section class="mt-12">
    <h2 class="text-2xl font-semibold mb-6 text-white">Availability</h2>
    
    <div class="p-5 border border-gray-700 rounded-lg">
        <p class="text-gray-400 mb-3">
            I'm currently open to new opportunities and projects. I typically respond to emails and calls 
            within 24-48 hours. For urgent matters, feel free to call directly.
        </p>
        <p class="text-gray-400">
            I'm particularly interested in:
        </p>
        <ul class="list-disc list-inside mt-3 space-y-2 text-gray-400">
            <li>Backend engineering roles (PHP, Laravel, Symfony)</li>
            <li>API development and integration projects</li>
            <li>System architecture and optimization work</li>
            <li>Full-time, part-time, and contract opportunities</li>
        </ul>
    </div>
</section>

{{-- Additional Information --}}
<section class="mt-12 mb-10">
    <h2 class="text-2xl font-semibold mb-6 text-white">What to Include</h2>
    
    <div class="p-5 border border-gray-700 rounded-lg">
        <p class="text-gray-400 mb-3">
            When reaching out, please include:
        </p>
        <ul class="list-disc list-inside space-y-2 text-gray-400">
            <li>A brief description of the project or opportunity</li>
            <li>Your timeline and requirements</li>
            <li>Any relevant technical details or constraints</li>
            <li>Your preferred method of communication</li>
            <li>Looking forward to hearing from you! :)</li>
        </ul>
    </div>
</section>

@endsection