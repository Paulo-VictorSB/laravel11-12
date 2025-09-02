<x-main-layout pageTitle="Countries & Capitals Quiz">

    <div class="container">

        <x-question :country="$country" :currentQuestion="$currentQuestion" :totalQuestions="$totalQuestions" />

        <div class="text-center fs-3 mb-3">
            Resposta correta: <span class="text-info">{{ $correct_answer }}</span>
        </div>

        <div class="text-center fs-3 mb-3">
            A sua resposta: <span class="{{ $correct_answer == $choice_answer ? 'text-success' : 'text-danger' }}">{{ $choice_answer }}</span>
        </div>

    </div>

    <!-- next question -->
    <div class="text-center mt-5">
        <a href="{{ route('nextQuestion') }}" class="btn btn-primary mt-3 px-5">AVANÇAR</a>
    </div>

</x-main-layout>
