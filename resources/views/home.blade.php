<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    <title>Test - API</title>
</head>
<body>
    <div class="flex items-center justify-center h-screen">
        <div class="border shadow-md py-12 px-24 rounded-md w-1/2">
          <h1 class="text-4xl font-bold text-center mb-12">SIBATIK AI</h1>
            <form action="{{ route('generateText') }}" method="post">
                @csrf
                <textarea type="text-area" name="text" rows="4" class="w-full text-sm text-gray-900 bg-white border border-gray-300 rounded-md mb-2"></textarea>
                <div class="flex justify-end">
                    <button type="submit" class="inline-flex bg-slate-800 text-white rounded-lg py-2 px-4 items-center">Generate</button>
                </div>
            </form>
            @if(isset($response))
                <div class="mt-12 text-gray-600">
                    {{ $response }}
                </div>
            @endif
        </div>
    </div>
</body>
</html>