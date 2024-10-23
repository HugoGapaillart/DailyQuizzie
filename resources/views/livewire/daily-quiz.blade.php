<div>
    <h3>{{ $currentQuestion->getQuestion() }}</h3>
    <form action="{{ route() }}" method="POST">
        @foreach ($currentQuestion->getAnswers() as $answer)
            <label for="option-{{ $answer->getId() }}">{{ $answer->getAnswer() }}</label>
            <input type="checkbox" id="option-{{ $answer->getId() }}" name="option[]" value="{{ $answer->getId() }}" />
        @endforeach
        <button type="submit">Valider</button>
    </form>
</div>
