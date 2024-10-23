<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Quiz</title>
</head>
<body>
    <h1>Daily Quiz</h1>
    <div class="question">
        <p>What is the capital of France?</p>
        <form action="/submit-answer" method="POST">
            @csrf
            <div>
                <input type="radio" id="answer1" name="answer" value="Paris">
                <label for="answer1">Paris</label>
            </div>
            <div>
                <input type="radio" id="answer2" name="answer" value="London">
                <label for="answer2">London</label>
            </div>
            <div>
                <input type="radio" id="answer3" name="answer" value="Berlin">
                <label for="answer3">Berlin</label>
            </div>
            <div>
                <input type="radio" id="answer4" name="answer" value="Madrid">
                <label for="answer4">Madrid</label>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>