<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MazBaz.fr | My resume</title>
  <link rel="stylesheet" href="{{ url('/assets/css/style.css') }}">
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-V3SGGSWVXL"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-V3SGGSWVXL');
</script>
<body data-theme="dark" class="pages">
    <div class="top">
        <div class="">
            <a href="{{ route("home") }}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="40" d="M244 400L100 256l144-144M120 256h292"/></svg>
                {{ lang("message.app.home") }}
            </a>
        </div>
        <h1>{{ lang("message.resume.title") }}</h1>
        <div class="switch-container">
            <svg xmlns="http://www.w3.org/2000/svg" style="height: 30px; width: 30px;"
              viewBox="0 0 512 512">
              <path
                d="M160 136c0-30.62 4.51-61.61 16-88C99.57 81.27 48 159.32 48 248c0 119.29 96.71 216 216 216 88.68 0 166.73-51.57 200-128-26.39 11.49-57.38 16-88 16-119.29 0-216-96.71-216-216z"
                fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
            </svg>
            <label class="switch">
              <input type="checkbox" id="check-theme">
              <span class="slider round"></span>
            </label>
            <svg xmlns="http://www.w3.org/2000/svg" style="height: 30px; width: 30px;"
              viewBox="0 0 512 512">
              <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32"
                d="M256 48v48M256 416v48M403.08 108.92l-33.94 33.94M142.86 369.14l-33.94 33.94M464 256h-48M96 256H48M403.08 403.08l-33.94-33.94M142.86 142.86l-33.94-33.94" />
              <circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-linecap="round"
                stroke-miterlimit="10" stroke-width="32" />
            </svg>
        </div>
    </div>
      <div class="card">
        <div class="top center">
          <a href="{{ $resume  }}" download="mazbaz.pdf">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M320,336h76c55,0,100-21.21,100-75.6s-53-73.47-96-75.6C391.11,99.74,329,48,256,48c-69,0-113.44,45.79-128,91.2-60,5.7-112,35.88-112,98.4S70,336,136,336h56" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="40" /><polyline points="192 400.1 256 464 320 400.1" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="40"/><line x1="256" y1="224" x2="256" y2="448.03" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="40"/></svg>

            {{ lang("message.resume.download") }}
          </a>
        </div>
        <div style="position: relative; height: 0; padding-bottom: 56.25%;">
            <embed
              src="{{ $resume  }}"
              width="100%"
              height="100%"
              style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"
            />
          </div>
      </div>
      <footer>
        <span>{{ date("Y") }} MazBaz.fr | made with <span class="hearth">❤️</span> keyboard </span>
      </footer>
</body>
<script src="{{ url('/assets/vendor/scroll-reveal/scroll-reveal.js')}}"></script>
<script src="{{ url('/assets/js/theme.js') }}"></script>
</html>

