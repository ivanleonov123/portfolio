@extends('layouts.app')

@section('title', 'About')

@section('content')

{{-- Hero Introduction --}}
<section class="py-8">
    <p class="text-sm uppercase tracking-widest text-gray-400 mb-2">
        About Me
    </p>
    <h1 class="text-4xl md:text-5xl font-bold mb-4 text-white">
        Backend Engineer & Problem Solver
    </h1>
    <p class="text-gray-400 max-w-2xl mb-4">
        I'm a backend-focused software engineer specializing in PHP, Laravel, and Symfony. 
        I build robust APIs, optimize data pipelines, and create reliable systems that scale. 
        My core stack includes PHP, Laravel, Symfony, MySQL, and modern DevOps tools.
    </p>
    <a href="{{ route('resume.download') }}" 
       class="inline-block mt-4 px-6 py-3 border border-gray-700 rounded-lg text-white hover:bg-gray-800 hover:border-gray-600 transition-colors duration-200">
        Download Resume (PDF)
    </a>
</section>

{{-- Table of Contents --}}
<section class="py-6 border-t border-b border-gray-700">
    <h2 class="text-lg font-semibold mb-4 text-white">Contents</h2>
    <nav class="contents-nav">
        <ul class="list-disc list-inside flex flex-col gap-2">
            <li><a href="#what-i-do">What I Do</a></li>
            <li><a href="#engineering-story">My Engineering Story</a></li>
            <li><a href="#projects-impact">Projects & Impact</a></li>
            <li><a href="#accomplishments">Accomplishments</a></li>
            <li><a href="#philosophy">Philosophy</a></li>
            <li><a href="#personal">Personal Side</a></li>
            <li><a href="#tech-stack">Tech Stack</a></li>
            <li><a href="#current-work">Current Work</a></li>
        </ul>
    </nav>
</section>

{{-- What I Do (Core Expertise) --}}
<section id="what-i-do" class="mt-12 scroll-mt-8">
    <h2 class="text-3xl font-semibold mb-6 text-white">What I Do</h2>
    
    <div class="space-y-6">
        <div class="p-5 border border-gray-700 rounded-lg">
            <h3 class="text-xl font-semibold mb-3 text-white">Backend Engineering</h3>
            <p class="text-gray-400">
                I design and build scalable backend systems using PHP frameworks like Laravel and Symfony. 
                My work includes RESTful API development, database architecture, business logic implementation, 
                and integrating third-party services. I focus on clean code, maintainable architecture, and 
                following SOLID principles.
            </p>
        </div>

        <div class="p-5 border border-gray-700 rounded-lg">
            <h3 class="text-xl font-semibold mb-3 text-white">DevOps & Infrastructure</h3>
            <p class="text-gray-400">
                I set up and maintain deployment pipelines, configure servers, and implement monitoring solutions. 
                I work with containerization, CI/CD workflows, and infrastructure as code to ensure reliable 
                deployments and system observability.
            </p>
        </div>

        <div class="p-5 border border-gray-700 rounded-lg">
            <h3 class="text-xl font-semibold mb-3 text-white">Data & Performance</h3>
            <p class="text-gray-400">
                I optimize database queries, design efficient data pipelines, and improve system performance. 
                This includes query optimization, caching strategies, batch processing, and analyzing bottlenecks 
                to ensure systems handle scale effectively.
            </p>
        </div>
    </div>
</section>

{{-- My Engineering Story --}}
<section id="engineering-story" class="mt-12 scroll-mt-8">
    <h2 class="text-3xl font-semibold mb-6 text-white">My Engineering Story</h2>
    
    <div class="space-y-6">
        <div>
            <h3 class="text-xl font-semibold mb-3 text-white">How I Started</h3>
            <p class="text-gray-400 max-w-2xl">
                My journey into software engineering began with a curiosity about how systems work behind the scenes. 
                I started learning programming to solve real problems, and that drive led me to specialize in backend 
                development where I could build the foundation that powers applications.
            </p>
        </div>

        <div>
            <h3 class="text-xl font-semibold mb-3 text-white">Where I Grew Technically (Target Labs accomplishments)</h3>
            <p class="text-gray-400 max-w-2xl">
                At Target Labs, I had the opportunity to work on complex e-commerce systems, integrating multiple 
                supplier APIs, optimizing order processing pipelines, and building reliable data synchronization systems. 
                I learned to handle production-scale challenges, debug complex issues, and collaborate effectively with 
                cross-functional teams. These experiences sharpened my skills in API integration, performance optimization, 
                and system reliability.
            </p>
        </div>

        <div>
            <h3 class="text-xl font-semibold mb-3 text-white">Where I'm Heading (AI, backend systems, reliability)</h3>
            <p class="text-gray-400 max-w-2xl">
                I'm excited about the intersection of AI and backend systems. I'm exploring RAG (Retrieval-Augmented Generation) 
                systems, building AI-powered tools, and learning how to integrate LLMs into backend architectures. My focus 
                remains on building reliable, scalable systems—whether they're traditional APIs or AI-enhanced applications. 
                I'm particularly interested in agentic AI systems and how they can solve complex backend problems.
            </p>
        </div>
    </div>
</section>

{{-- Highlight Projects & Impact --}}
<section id="projects-impact" class="mt-12 scroll-mt-8">
    <h2 class="text-3xl font-semibold mb-6 text-white">Highlight Projects & Impact</h2>
    
    <div class="grid gap-6 md:grid-cols-2">
        <article class="p-5 border border-gray-700 rounded-lg">
            <h4 class="font-semibold mb-2 text-white">API Integrations</h4>
            <p class="text-sm text-gray-400 mb-3">
                Connected multiple supplier APIs to keep product data, inventory, and pricing synchronized in real-time. 
                Built robust error handling and retry mechanisms to ensure data consistency across systems.
            </p>
        </article>

        <article class="p-5 border border-gray-700 rounded-lg">
            <h4 class="font-semibold mb-2 text-white">Performance Engineering</h4>
            <p class="text-sm text-gray-400 mb-3">
                Optimized database queries and cron jobs to handle large order volumes efficiently. Reduced processing 
                times and improved system throughput through query optimization and strategic caching.
            </p>
        </article>

        <article class="p-5 border border-gray-700 rounded-lg">
            <h4 class="font-semibold mb-2 text-white">Automation</h4>
            <p class="text-sm text-gray-400 mb-3">
                Built automated workflows for data synchronization, order processing, and system maintenance. Reduced 
                manual work and improved reliability through well-designed automation pipelines.
            </p>
        </article>

        <article class="p-5 border border-gray-700 rounded-lg">
            <h4 class="font-semibold mb-2 text-white">Testing & Reliability</h4>
            <p class="text-sm text-gray-400 mb-3">
                Implemented comprehensive testing strategies and monitoring solutions to catch issues early and maintain 
                system reliability. Built centralized logging to speed up debugging and reduce production incidents.
            </p>
        </article>
    </div>
</section>

{{-- Accomplishments & Recognition --}}
<section id="accomplishments" class="mt-12 scroll-mt-8">
    <h2 class="text-3xl font-semibold mb-6 text-white">Accomplishments & Recognition</h2>
    
    <div class="p-5 border border-gray-700 rounded-lg">
        <h3 class="text-xl font-semibold mb-3 text-white">Uhack 2019 – 1st Place</h3>
        <p class="text-gray-400 max-w-2xl">
            Won first place at Uhack 2019 with a project that demonstrated innovative problem-solving and technical execution. 
            This achievement highlighted my ability to work under pressure, collaborate effectively, and deliver impactful solutions.
        </p>
    </div>
</section>

{{-- Philosophy & Approach to Engineering --}}
<section id="philosophy" class="mt-12 scroll-mt-8">
    <h2 class="text-3xl font-semibold mb-6 text-white">Philosophy & Approach to Engineering</h2>
    
    <div class="space-y-4">
        <div>
            <h3 class="text-lg font-semibold mb-2 text-white">Problem-Solving</h3>
            <p class="text-gray-400 max-w-2xl">
                I believe in understanding the root cause of problems before jumping to solutions. I take a systematic 
                approach to debugging and optimization, using data and metrics to guide decisions rather than assumptions.
            </p>
        </div>

        <div>
            <h3 class="text-lg font-semibold mb-2 text-white">Collaboration</h3>
            <p class="text-gray-400 max-w-2xl">
                Great software is built by great teams. I value clear communication, code reviews, and knowledge sharing. 
                I believe in writing code that others can understand and maintain, and I'm always open to feedback and 
                different perspectives.
            </p>
        </div>

        <div>
            <h3 class="text-lg font-semibold mb-2 text-white">Testing & Architecture Principles</h3>
            <p class="text-gray-400 max-w-2xl">
                I prioritize testability and maintainability in my architecture. I follow SOLID principles, write tests 
                for critical paths, and design systems that are easy to extend and modify. I believe good architecture 
                reduces technical debt and makes future changes easier.
            </p>
        </div>
    </div>
</section>

{{-- Personal Side --}}
<section id="personal" class="mt-12 scroll-mt-8">
    <h2 class="text-3xl font-semibold mb-6 text-white">Personal Side</h2>
    
    <p class="text-gray-400 max-w-2xl mb-4">
        When I'm not coding, I enjoy following football and soccer, which helps me stay balanced and energized. 
        I'm passionate about AI projects and spend time experimenting with new technologies, building personal projects, 
        and exploring how AI can solve interesting problems.
    </p>
    <p class="text-gray-400 max-w-2xl">
        My hobbies include working on side projects, learning about new technologies, and staying up-to-date with 
        the latest developments in backend engineering and AI. I'm motivated by the challenge of building systems 
        that are both powerful and reliable, and I enjoy the continuous learning that comes with software engineering.
    </p>
</section>

{{-- Tech Stack Overview --}}
<section id="tech-stack" class="mt-12 scroll-mt-8">
    <h2 class="text-3xl font-semibold mb-6 text-white">Tech Stack Overview</h2>
    
    <div class="grid gap-6 md:grid-cols-2">
        <div class="p-5 border border-gray-700 rounded-lg">
            <h3 class="text-lg font-semibold mb-3 text-white">Languages</h3>
            <p class="text-gray-400 text-sm">PHP, SQL, JavaScript, Python</p>
        </div>

        <div class="p-5 border border-gray-700 rounded-lg">
            <h3 class="text-lg font-semibold mb-3 text-white">Frameworks</h3>
            <p class="text-gray-400 text-sm">Laravel, Symfony</p>
        </div>

        <div class="p-5 border border-gray-700 rounded-lg">
            <h3 class="text-lg font-semibold mb-3 text-white">Databases</h3>
            <p class="text-gray-400 text-sm">MySQL, SQLite, PostgreSQL</p>
        </div>

        <div class="p-5 border border-gray-700 rounded-lg">
            <h3 class="text-lg font-semibold mb-3 text-white">Tools</h3>
            <p class="text-gray-400 text-sm">Git, Docker, CI/CD, Composer, npm</p>
        </div>

        <div class="p-5 border border-gray-700 rounded-lg">
            <h3 class="text-lg font-semibold mb-3 text-white">Testing/Monitoring</h3>
            <p class="text-gray-400 text-sm">PHPUnit, Logging, Observability tools</p>
        </div>
    </div>
</section>

{{-- What I'm Working On Now --}}
<section id="current-work" class="mt-12 mb-10 scroll-mt-8">
    <h2 class="text-3xl font-semibold mb-6 text-white">What I'm Working On Now</h2>
    
    <div class="space-y-4">
        <div class="p-5 border border-gray-700 rounded-lg">
            <h3 class="text-lg font-semibold mb-2 text-white">AI Chatbot w/ Ollama + SQLite</h3>
            <p class="text-gray-400 text-sm">
                Building a local AI chatbot using Ollama for LLM inference and SQLite for data persistence. 
                This project explores running AI models locally and creating conversational interfaces.
            </p>
        </div>

        <div class="p-5 border border-gray-700 rounded-lg">
            <h3 class="text-lg font-semibold mb-2 text-white">Laravel Portfolio</h3>
            <p class="text-gray-400 text-sm">
                Developing this portfolio site using Laravel, focusing on clean architecture and modern web practices. 
                This serves as both a showcase of my work and a learning project.
            </p>
        </div>

        <div class="p-5 border border-gray-700 rounded-lg">
            <h3 class="text-lg font-semibold mb-2 text-white">RAG/Agentic Experiments</h3>
            <p class="text-gray-400 text-sm">
                Experimenting with Retrieval-Augmented Generation (RAG) systems and agentic AI architectures. 
                Exploring how these technologies can be integrated into backend systems to solve complex problems.
            </p>
        </div>
    </div>
</section>

@endsection