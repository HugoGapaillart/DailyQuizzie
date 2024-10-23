<h1>Choisissez un thème</h1>
<div>
    @foreach($themes as $name)
    <a href="{{ route('dailyquiz.show', ['theme' => $name]) }}">{{ $name }}</a><br>
    @endforeach
</div>

@livewireScripts