<x-layout>
    <div class="container-fluid p-5 bg-secondary-subtle text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1">The Aulab Post</h1>
            </div>
        </div>
    </div>
    @if (session('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
    @endif
    @if (session('alert'))
    <div class="alert alert-danger">
        {{ session('alert') }}
    </div>
    @endif
    <!-- <div class="container my-5">
        <h1>Articoli Recenti</h1>
        <div class="row">
            @forelse($articles as $article)
            <div class="col-md-6 col-lg-4 mb-4">
    <div class="card">
        <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="Immagine dell'articolo: {{$article->title}}" onerror="console.log('Immagine non trovata:', this.src);">
        <div class="card-body">
            <h5 class="card-title">{{ $article->title }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $article->subtitle }}</h6>
            <p class="card-text">{{ Str::limit($article->body, 100) }}</p>
            <a href="{{route('article.show', $article)}}" class="btn btn-secondary">Leggi di più</a>
        </div>
    </div>
</div>
            @empty
                <p>Non ci sono articoli recenti approvati.</p>
            @endforelse
        </div>
    </div> -->
    <div class="cotainer my-5">
        <div class="row justify-content-evenly">
            @foreach($articles as $article)
            <div class="col-12 col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{Storage::url($article->image)}}" alt="Immagine dell'articolo: {{$article->title}}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{$article->title}}</h5>
                        <p class="card-subtitle">{{$article->subtitle}}</p>
                        @if($article->category)
                        <p class="small text-muted">Categoria:
                            <a href="{{route('article.byCategory', $article->category)}}" class="text-capitalize text-muted">{{$article->category->name}}</a>
                        </p>
                        @else
                        <p class="small text-muted">Nessuna categoria</p>
                        @endif
                        <p class="small text-muted my-0">
                            @foreach($article->tags as $tag)
                            #{{$tag->name}}
                            @endforeach
                        </p>   
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center">
                        <p>Redatto il {{$article->created_at->format('d/m/Y')}}<br>
                            Da: <a href="{{route('article.byUser', $article->user)}}" class="text-capitalize text-muted">{{$article->user->name}}</a>
                        </p>
                        <a href="{{route('article.show', $article)}}" class="btn btn-outline-secondary">Leggi</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>

