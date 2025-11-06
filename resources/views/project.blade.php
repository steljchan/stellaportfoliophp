@extends('layouts.app')

@section('content')
<!-- Header Section -->
<section class="projects-header py-5">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-3">
                    <span data-lang="en">My Projects</span>
                    <span data-lang="id" style="display: none;">Proyek Saya</span>
                </h1>
                <p class="lead">
                    <span data-lang="en">"Here are some of the projects I've worked on — from academic works to personal explorations."</span>
                    <span data-lang="id" style="display: none;">"Berikut adalah beberapa proyek yang telah saya kerjakan — dari karya akademik hingga eksplorasi pribadi."</span>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Projects Grid -->
<section class="projects-grid py-5">
    <div class="container">
        <div class="row g-4">

            @foreach ($projects as $project)
            <div class="col-lg-6">
                <div class="project-card card-custom">
                    <div class="project-image" style="background-image: url('{{ $project->image }}'); background-size: cover; background-position: center;">
                        <div class="project-badge">{{ $project->title }}</div>
                    </div>
                    <div class="project-content">
                        <h3 class="project-title">{{ $project->title }}</h3>
                        <p class="project-description">{{ $project->description }}</p>

                        @php
                            $techs = json_decode($project->tech, true);
                        @endphp

                        @if(!empty($techs))
                        <div class="project-tech">
                            @foreach ($techs as $tech)
                                <span class="tech-tag">{{ $tech }}</span>
                            @endforeach
                        </div>
                        @endif

                        @if ($project->skills->isNotEmpty())
                        <div class="project-skills mt-2">
                            @foreach ($project->skills as $skill)
                                <span class="tech-tag">{{ $skill->name }}</span>
                            @endforeach
                        </div>
                        @endif


                        <div class="project-role">
                            <strong>
                                <span data-lang="en">Role:</span>
                                <span data-lang="id" style="display: none;">Peran:</span>
                            </strong>
                            <span data-lang="en">Developer</span>
                            <span data-lang="id" style="display: none;">Pengembang</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            @if ($projects->isEmpty())
            <div class="col-12 text-center">
                <p class="text-muted fs-5">No projects available yet.</p>
            </div>
            @endif

        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="projects-cta py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h2 class="mb-4">
                    <span data-lang="en">More Projects Coming Soon...</span>
                    <span data-lang="id" style="display: none;">Proyek Lainnya Segera Hadir...</span>
                </h2>
                <p class="mb-4">
                    <span data-lang="en">Check out my GitHub for all repositories</span>
                    <span data-lang="id" style="display: none;">Kunjungi GitHub saya untuk semua repository</span>
                </p>
                <a href="https://github.com/stella" class="btn btn-custom btn-lg" target="_blank">
                    <i class="fab fa-github me-2"></i>
                    <span data-lang="en">View GitHub →</span>
                    <span data-lang="id" style="display: none;">Lihat GitHub →</span>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection

@section('styles')
<style>
    .projects-header {
        background: linear-gradient(135deg, var(--purple-main) 0%, var(--pink) 100%);
        color: white;
        margin-top: 20px;
        border-radius: 0 0 30px 30px;
    }

    .project-card {
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 100%;
    }

    .project-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(190, 151, 195, 0.3);
    }

    .project-image {
        height: 200px;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 4rem;
        background: linear-gradient(135deg, var(--purple-light), var(--pink));
    }

    .project-badge {
        position: absolute;
        top: 15px;
        right: 15px;
        background: rgba(255, 255, 255, 0.9);
        color: var(--purple-main);
        padding: 5px 15px;
        border-radius: 20px;
        font-weight: 600;
        font-size: 0.8rem;
    }

    .project-content {
        padding: 25px;
    }

    .project-title {
        color: var(--purple-dark);
        margin-bottom: 15px;
        font-weight: 700;
    }

    .project-description {
        color: #666;
        margin-bottom: 20px;
        line-height: 1.6;
    }

    [data-bs-theme="dark"] .project-description {
        color: #ccc;
    }

    .project-tech {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-bottom: 15px;
    }

    .tech-tag {
        background: var(--purple-light);
        color: var(--purple-dark);
        padding: 4px 12px;
        border-radius: 15px;
        font-size: 0.8rem;
        font-weight: 500;
    }

    .project-role {
        border-top: 1px solid #eee;
        padding-top: 15px;
        color: #666;
    }

    [data-bs-theme="dark"] .project-role {
        border-top: 1px solid #444;
        color: #ccc;
    }
</style>
@endsection
