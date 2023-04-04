<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MazBaz.fr | {{ lang("message.works.title") }}</title>
  <link rel="stylesheet" href="{{ url('/assets/css/style.css') }}">

  <script src="{{ url('/assets/js/jquery-3.6.4.min.js') }}"></script>
<script src="{{ url('/assets/vendor/scroll-reveal/scroll-reveal.js')}}"></script>
</head>

<body data-theme="dark" class="pages">
    <div class="top">
        <div>
            <a href="{{ route("home") }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M244 400L100 256l144-144M120 256h292"/></svg>
                {{ lang("message.app.home") }}
            </a>
        </div>

        <h1>{{ lang("message.works.title") }}</h1>
        
        <div class="switch-container">
            <svg xmlns="http://www.w3.org/2000/svg" style="height: 30px; width: 30px;" class="ionicon"
              viewBox="0 0 512 512">
              <path
                d="M160 136c0-30.62 4.51-61.61 16-88C99.57 81.27 48 159.32 48 248c0 119.29 96.71 216 216 216 88.68 0 166.73-51.57 200-128-26.39 11.49-57.38 16-88 16-119.29 0-216-96.71-216-216z"
                fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
            </svg>
            <label class="switch">
              <input type="checkbox" id="check-theme">
              <span class="slider round"></span>
            </label>
            <svg xmlns="http://www.w3.org/2000/svg" style="height: 30px; width: 30px;" class="ionicon"
              viewBox="0 0 512 512">
              <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32"
                d="M256 48v48M256 416v48M403.08 108.92l-33.94 33.94M142.86 369.14l-33.94 33.94M464 256h-48M96 256H48M403.08 403.08l-33.94-33.94M142.86 142.86l-33.94-33.94" />
              <circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-linecap="round"
                stroke-miterlimit="10" stroke-width="32" />
            </svg>
        </div>
    </div>
    <div class="flex-wrap">
        @forelse ($repos as $item)
            <a href="{{ route("work", ["id" => $item->id]) }}" class="link">
                <div class="card">
                    {!! $item->name !!}
                </div>
            </a>
        @empty
            <div class="card">
                <span>Any works 🥲</span>
            </div>
        @endforelse
    </div>
     
    <footer>
        <span>{{ date("Y") }} MazBaz.fr | made with <span class="hearth">❤️</span> keyboard </span>
    </footer>
</body>
<script src="{{ url('/assets/js/theme.js') }}"></script>
</html>