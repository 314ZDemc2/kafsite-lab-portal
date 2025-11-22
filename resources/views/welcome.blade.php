@extends('layouts.app')

@section('title', 'Головна Сторінка')

@section('content')
    @include('includes.slider')

    <div class="row mt-5">
        <div class="col-12">
            <h2 class="mb-4">📰 Останні 10 Головних Новин Порталу</h2>
            
            <div class="row">
                @forelse ($latestNews as $news)
                    <div class="col-md-6 mb-4">
                        <div class="card shadow-sm h-100">
                            <div class="card-body">
                                <h5 class="card-title">{{ $news->title }}</h5>
                                <p class="card-text text-muted small">{{ $news->created_at->format('d.m.Y') }}</p>
                                <p class="card-text">{{ Str::limit($news->body, 100) }}</p> 
                                <a href="{{ url('news/' . $news->slug) }}" class="btn btn-sm btn-primary">Читати далі</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <p class="alert alert-warning">Наразі немає новин для відображення.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection