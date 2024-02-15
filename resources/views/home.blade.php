<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test - API</title>
</head>
<body>
    <h1>Test Gemini</h1>
    <form action="{{ route('generateText') }}" method="post">
        @csrf
        <input type="text-area" name="text">
        <button type="submit">Generate</button>
    </form>

    @if(isset($response))
        <div>
            <pre>
                {{ $response }}
            </pre>
        </div>
    @endif
</body>
</html>