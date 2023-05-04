<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MazBaz.fr | {{ lang("message.title") }}</title>
  <link rel="stylesheet" href="{{ url('/assets/css/style.css') }}">
  
  @if(getApiUsage() < 49000)
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.13.0/mapbox-gl.css" rel="stylesheet">
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.13.0/mapbox-gl.js"></script>
  @endif
  
  <script src="{{ url('/assets/vendor/jquery/jquery.js') }}"></script>
  <link rel="stylesheet" href="{{ url("/assets/vendor/owl-carousel/owlCarouselTheme.css") }}">
  <link rel="stylesheet" href="{{ url("/assets/vendor/owl-carousel/owlCarousel.css") }}">
</head>
<script src="{{ url('/assets/js/theme.js') }}"></script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-V3SGGSWVXL"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-V3SGGSWVXL');
</script>
<body data-theme="dark">
  <div class="cards ">
    <div class="card col-2 profile">
      <img class="img-fluid content" src="/assets/img/pp.png" alt="">
      <div class="bio content">
        <p> {{ lang("message.desc") }}</p>
      </div>
    </div>
    
    @if(getApiUsage() < 49000)
      <div class="card" id="map">
        <div class="button-container content">
          <a id="scaleUp">
            <svg style="height: 30px; width: 30px;" xmlns="http://www.w3.org/2000/svg" class="ionicon"
              viewBox="0 0 512 512">
              <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                d="M256 112v288M400 256H112" />
            </svg>
          </a>
          <a id="scaleDown">
            <svg style="height: 30px; width: 30px;" xmlns="http://www.w3.org/2000/svg" class="ionicon"
              viewBox="0 0 512 512">
              <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                d="M400 256H112" />
            </svg>
          </a>
        </div>
      </div>
    @endif

    <div class="card cv">
      <div class="button-container content">
        <a class="button" href="{{ route("resume") }}">
          <span>{{ lang("message.resume.link") }}</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"
            style="height: 30px; width: 30px;">
            <path
              d="M416 221.25V416a48 48 0 01-48 48H144a48 48 0 01-48-48V96a48 48 0 0148-48h98.75a32 32 0 0122.62 9.37l141.26 141.26a32 32 0 019.37 22.62z"
              fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" />
            <path d="M256 56v120a32 32 0 0032 32h120" fill="none" stroke="currentColor" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="32" />
          </svg>
        </a>
      </div>
      
        <svg style="height: 250px;" id="folder-cv"  viewBox="0 0 110 139" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g id="Folder">
          <g id="Back" filter="url(#filter0_d_9_36)">
          <path d="M4 52V52C4 51.5358 4 51.3036 4.00593 51.1074C4.21357 44.2356 9.73563 38.7136 16.6074 38.5059C16.8036 38.5 17.0358 38.5 17.5 38.5H41.25C44.9779 38.5 48 41.5221 48 45.25V45.25C48 48.9779 51.0221 52 54.75 52H85.2C92.4807 52 96.121 52 98.9019 53.4169C101.348 54.6633 103.337 56.652 104.583 59.0981C106 61.879 106 65.5193 106 72.8V110.2C106 117.481 106 121.121 104.583 123.902C103.337 126.348 101.348 128.337 98.9019 129.583C96.121 131 92.4807 131 85.2 131H24.8C17.5193 131 13.879 131 11.0981 129.583C8.65202 128.337 6.66327 126.348 5.41692 123.902C4 121.121 4 117.481 4 110.2V52Z" fill="url(#paint0_linear_9_36)"/>
          </g>
          <g id="page">
          <path id="Rectangle 20" d="M13 24.6C13 24.0399 13 23.7599 13.109 23.546C13.2049 23.3578 13.3578 23.2049 13.546 23.109C13.7599 23 14.0399 23 14.6 23H78.3373C78.5818 23 78.7041 23 78.8192 23.0276C78.9213 23.0521 79.0188 23.0925 79.1083 23.1474C79.2092 23.2092 79.2957 23.2957 79.4686 23.4686L88.5 32.5L96.5314 40.5314C96.7043 40.7043 96.7908 40.7908 96.8526 40.8917C96.9075 40.9812 96.9479 41.0787 96.9724 41.1808C97 41.2959 97 41.4182 97 41.6627V107.4C97 107.96 97 108.24 96.891 108.454C96.7951 108.642 96.6422 108.795 96.454 108.891C96.2401 109 95.9601 109 95.4 109H14.6C14.0399 109 13.7599 109 13.546 108.891C13.3578 108.795 13.2049 108.642 13.109 108.454C13 108.24 13 107.96 13 107.4V24.6Z" fill="#D9D9D9"/>
          <g id="Rectangle 21" filter="url(#filter1_d_9_36)">
          <path d="M79 24L87.5 32.5L97 42H79V24Z" fill="#CBCBCB"/>
          </g>
          <g id="text">
          <rect id="Rectangle 32" x="45" y="85" width="47" height="5" fill="#B0B0B0"/>
          <rect id="Rectangle 31" x="32" y="85" width="10" height="5" fill="#B0B0B0"/>
          <rect id="Rectangle 30" x="19" y="85" width="10" height="5" fill="#B0B0B0"/>
          <rect id="Rectangle 29" x="19" y="71" width="73" height="10" fill="#B0B0B0"/>
          <rect id="Rectangle 28" x="69" y="63" width="23" height="5" fill="#B0B0B0"/>
          <rect id="Rectangle 27" x="45" y="63" width="21" height="5" fill="#B0B0B0"/>
          <rect id="Rectangle 26" x="19" y="63" width="23" height="5" fill="#B0B0B0"/>
          <rect id="Rectangle 25" x="19" y="52" width="73" height="5" fill="#B0B0B0"/>
          <rect id="Rectangle 24" x="53" y="41" width="10" height="5" fill="#B0B0B0"/>
          <rect id="Rectangle 23" x="19" y="41" width="31" height="5" fill="#B0B0B0"/>
          <rect id="Rectangle 22" x="19" y="33" width="23" height="5" fill="#B0B0B0"/>
          </g>
          </g>
          <g id="front">
          <path id="front_2" d="M4 73.2C4 69.2796 4 67.3194 4.76295 65.8221C5.43407 64.5049 6.50493 63.4341 7.82207 62.763C9.31945 62 11.2796 62 15.2 62H94.8C98.7204 62 100.681 62 102.178 62.763C103.495 63.4341 104.566 64.5049 105.237 65.8221C106 67.3194 106 69.2796 106 73.2V110.2C106 117.481 106 121.121 104.583 123.902C103.337 126.348 101.348 128.337 98.9019 129.583C96.121 131 92.4807 131 85.2 131H24.8C17.5193 131 13.879 131 11.0981 129.583C8.65202 128.337 6.66327 126.348 5.41692 123.902C4 121.121 4 117.481 4 110.2V73.2Z" fill="url(#paint1_linear_9_36)"/>
          <g id="CV">
          <path d="M44.936 107.297C42.648 107.297 40.69 106.813 39.062 105.845C37.434 104.877 36.18 103.502 35.3 101.72C34.442 99.938 34.013 97.815 34.013 95.351C34.013 93.503 34.255 91.853 34.739 90.401C35.245 88.927 35.96 87.684 36.884 86.672C37.83 85.638 38.985 84.846 40.349 84.296C41.713 83.724 43.242 83.438 44.936 83.438C46.3 83.438 47.598 83.636 48.83 84.032C50.062 84.406 51.129 84.967 52.031 85.715C52.317 85.935 52.504 86.188 52.592 86.474C52.702 86.738 52.713 87.002 52.625 87.266C52.559 87.508 52.427 87.717 52.229 87.893C52.053 88.047 51.833 88.124 51.569 88.124C51.305 88.124 51.008 88.014 50.678 87.794C49.886 87.156 49.017 86.683 48.071 86.375C47.125 86.067 46.102 85.913 45.002 85.913C43.264 85.913 41.79 86.287 40.58 87.035C39.37 87.761 38.457 88.828 37.841 90.236C37.225 91.644 36.917 93.349 36.917 95.351C36.917 97.353 37.225 99.069 37.841 100.499C38.457 101.907 39.37 102.985 40.58 103.733C41.79 104.459 43.264 104.822 45.002 104.822C46.08 104.822 47.103 104.668 48.071 104.36C49.039 104.03 49.93 103.546 50.744 102.908C51.074 102.688 51.371 102.589 51.635 102.611C51.899 102.611 52.119 102.688 52.295 102.842C52.471 102.996 52.592 103.194 52.658 103.436C52.746 103.678 52.746 103.931 52.658 104.195C52.592 104.459 52.427 104.69 52.163 104.888C51.239 105.68 50.15 106.285 48.896 106.703C47.664 107.099 46.344 107.297 44.936 107.297ZM65.0735 107.231C64.6555 107.231 64.3145 107.132 64.0505 106.934C63.7865 106.736 63.5775 106.439 63.4235 106.043L54.3485 85.286C54.1945 84.912 54.1505 84.604 54.2165 84.362C54.2825 84.098 54.4255 83.889 54.6455 83.735C54.8875 83.581 55.1625 83.504 55.4705 83.504C55.8885 83.504 56.1965 83.603 56.3945 83.801C56.6145 83.977 56.7905 84.241 56.9225 84.593L65.6345 104.822H64.5785L73.2575 84.56C73.4115 84.23 73.5985 83.977 73.8185 83.801C74.0385 83.603 74.3465 83.504 74.7425 83.504C75.0505 83.504 75.3035 83.581 75.5015 83.735C75.7215 83.889 75.8535 84.098 75.8975 84.362C75.9635 84.626 75.9195 84.934 75.7655 85.286L66.6905 106.043C66.5365 106.439 66.3275 106.736 66.0635 106.934C65.8215 107.132 65.4915 107.231 65.0735 107.231Z" fill="#F5F5F5"/>
          <path d="M44.936 107.297C42.648 107.297 40.69 106.813 39.062 105.845C37.434 104.877 36.18 103.502 35.3 101.72C34.442 99.938 34.013 97.815 34.013 95.351C34.013 93.503 34.255 91.853 34.739 90.401C35.245 88.927 35.96 87.684 36.884 86.672C37.83 85.638 38.985 84.846 40.349 84.296C41.713 83.724 43.242 83.438 44.936 83.438C46.3 83.438 47.598 83.636 48.83 84.032C50.062 84.406 51.129 84.967 52.031 85.715C52.317 85.935 52.504 86.188 52.592 86.474C52.702 86.738 52.713 87.002 52.625 87.266C52.559 87.508 52.427 87.717 52.229 87.893C52.053 88.047 51.833 88.124 51.569 88.124C51.305 88.124 51.008 88.014 50.678 87.794C49.886 87.156 49.017 86.683 48.071 86.375C47.125 86.067 46.102 85.913 45.002 85.913C43.264 85.913 41.79 86.287 40.58 87.035C39.37 87.761 38.457 88.828 37.841 90.236C37.225 91.644 36.917 93.349 36.917 95.351C36.917 97.353 37.225 99.069 37.841 100.499C38.457 101.907 39.37 102.985 40.58 103.733C41.79 104.459 43.264 104.822 45.002 104.822C46.08 104.822 47.103 104.668 48.071 104.36C49.039 104.03 49.93 103.546 50.744 102.908C51.074 102.688 51.371 102.589 51.635 102.611C51.899 102.611 52.119 102.688 52.295 102.842C52.471 102.996 52.592 103.194 52.658 103.436C52.746 103.678 52.746 103.931 52.658 104.195C52.592 104.459 52.427 104.69 52.163 104.888C51.239 105.68 50.15 106.285 48.896 106.703C47.664 107.099 46.344 107.297 44.936 107.297ZM65.0735 107.231C64.6555 107.231 64.3145 107.132 64.0505 106.934C63.7865 106.736 63.5775 106.439 63.4235 106.043L54.3485 85.286C54.1945 84.912 54.1505 84.604 54.2165 84.362C54.2825 84.098 54.4255 83.889 54.6455 83.735C54.8875 83.581 55.1625 83.504 55.4705 83.504C55.8885 83.504 56.1965 83.603 56.3945 83.801C56.6145 83.977 56.7905 84.241 56.9225 84.593L65.6345 104.822H64.5785L73.2575 84.56C73.4115 84.23 73.5985 83.977 73.8185 83.801C74.0385 83.603 74.3465 83.504 74.7425 83.504C75.0505 83.504 75.3035 83.581 75.5015 83.735C75.7215 83.889 75.8535 84.098 75.8975 84.362C75.9635 84.626 75.9195 84.934 75.7655 85.286L66.6905 106.043C66.5365 106.439 66.3275 106.736 66.0635 106.934C65.8215 107.132 65.4915 107.231 65.0735 107.231Z" fill="#A7A7A7" fill-opacity="0.2"/>
          </g>
          </g>
          </g>
          <defs>
          <filter id="filter0_d_9_36" x="0" y="38.5" width="110" height="100.5" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
          <feFlood flood-opacity="0" result="BackgroundImageFix"/>
          <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
          <feOffset dy="4"/>
          <feGaussianBlur stdDeviation="2"/>
          <feComposite in2="hardAlpha" operator="out"/>
          <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
          <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_9_36"/>
          <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_9_36" result="shape"/>
          </filter>
          <filter id="filter1_d_9_36" x="77" y="22.3" width="22" height="22" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
          <feFlood flood-opacity="0" result="BackgroundImageFix"/>
          <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
          <feOffset dy="0.3"/>
          <feGaussianBlur stdDeviation="1"/>
          <feComposite in2="hardAlpha" operator="out"/>
          <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
          <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_9_36"/>
          <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_9_36" result="shape"/>
          </filter>
          <linearGradient id="paint0_linear_9_36" x1="55" y1="52" x2="55" y2="131" gradientUnits="userSpaceOnUse">
          <stop stop-color="#2F70AC"/>
          <stop offset="0.541407" stop-color="#093863"/>
          </linearGradient>
          <linearGradient id="paint1_linear_9_36" x1="55" y1="62" x2="74.0872" y2="132.466" gradientUnits="userSpaceOnUse">
          <stop stop-color="#4F98DB"/>
          <stop offset="1" stop-color="#7BAFDE"/>
          </linearGradient>
          </defs>
          </svg>
    </div>

    <div class="card switchs">
      <div class="switch-container content">
        <span>🇫🇷</span>
        <form action="{{ route("change-local") }}" method="post" id="form-lang">
          <label class="switch">
            <input type="checkbox" id="check-lang" name="check-lang" onclick="document.getElementById('form-lang').submit();">
            <span class="slider round"></span>
          </label>
        </form>
        <span>🇺🇸</span>
      </div>
      <div class="switch-container content">
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

    <div class="card col-2 works-bg">
      <div class="button-container content">
        <a class="button" href="{{ route("works") }}">
          <span>{{ lang("message.works.link") }}</span>
          <svg style="height: 30px; width: 30px;" xmlns="http://www.w3.org/2000/svg" class="ionicon"
            viewBox="0 0 512 512">
            <path
              d="M64 192v-72a40 40 0 0140-40h75.89a40 40 0 0122.19 6.72l27.84 18.56a40 40 0 0022.19 6.72H408a40 40 0 0140 40v40"
              fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
            <path
              d="M479.9 226.55L463.68 392a40 40 0 01-39.93 40H88.25a40 40 0 01-39.93-40L32.1 226.55A32 32 0 0164 192h384.1a32 32 0 0131.8 34.55z"
              fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
          </svg>
        </a>
      </div>
      <div class="works-container">
        <div class="works-wrapper">
          @foreach ($repos as $repo)
            <a class="work content" href="{{ route("work", ['id' => $repo->id]) }}">
              <svg style="height: 200px; width: 200px;" viewBox="0 0 130 144" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <g id="Folder">
                  <g id="Rectangle 18" filter="url(#filter0_d_24_409)">
                    <path
                      d="M12.2142 57V57C12.2142 56.5357 12.2142 56.3036 12.2202 56.1073C12.4278 49.2356 17.9499 43.7135 24.8216 43.5059C25.0179 43.5 25.25 43.5 25.7142 43.5H49.4642C53.1922 43.5 56.2142 46.522 56.2142 50.25V50.25C56.2142 53.9779 59.2363 57 62.9642 57H93.4142C100.695 57 104.335 57 107.116 58.4169C109.562 59.6632 111.551 61.652 112.797 64.0981C114.214 66.8789 114.214 70.5193 114.214 77.8V115.2C114.214 122.481 114.214 126.121 112.797 128.902C111.551 131.348 109.562 133.337 107.116 134.583C104.335 136 100.695 136 93.4142 136H33.0142C25.7336 136 22.0932 136 19.3124 134.583C16.8662 133.337 14.8775 131.348 13.6311 128.902C12.2142 126.121 12.2142 122.481 12.2142 115.2V57Z"
                      fill="url(#paint0_linear_24_409)" />
                  </g>
                  <g id="page-back">
                    <path id="Rectangle 20"
                      d="M21 31.6C21 31.0399 21 30.7599 21.109 30.546C21.2049 30.3578 21.3578 30.2049 21.546 30.109C21.7599 30 22.0399 30 22.6 30H86.3595C86.5961 30 86.7144 30 86.8262 30.026C86.9253 30.049 87.0203 30.0871 87.1079 30.1388C87.2067 30.1971 87.2923 30.2787 87.4636 30.442L96.5 39.0581L104.504 46.69C104.687 46.8643 104.778 46.9515 104.844 47.0544C104.902 47.1456 104.945 47.2457 104.971 47.3506C105 47.469 105 47.5953 105 47.848V110.4C105 110.96 105 111.24 104.891 111.454C104.795 111.642 104.642 111.795 104.454 111.891C104.24 112 103.96 112 103.4 112H22.6C22.0399 112 21.7599 112 21.546 111.891C21.3578 111.795 21.2049 111.642 21.109 111.454C21 111.24 21 110.96 21 110.4V31.6Z"
                      fill="#D9D9D9" />
                    <g id="Rectangle 21" filter="url(#filter1_d_24_409)">
                      <path d="M87.2143 30L95.7143 38.1047L105.214 47.1628H87.2143V30Z" fill="#CBCBCB" />
                    </g>
                    <g id="text">
                      <rect id="Rectangle 32" x="53.2143" y="89.1163" width="47" height="4.76744" fill="#B0B0B0" />
                      <rect id="Rectangle 31" x="40.2143" y="89.1163" width="10" height="4.76744" fill="#B0B0B0" />
                      <rect id="Rectangle 30" x="27.2143" y="89.1163" width="10" height="4.76744" fill="#B0B0B0" />
                      <rect id="Rectangle 29" x="27.2143" y="75.7674" width="73" height="9.53488" fill="#B0B0B0" />
                      <rect id="Rectangle 28" x="77.2143" y="68.1395" width="23" height="4.76744" fill="#B0B0B0" />
                      <rect id="Rectangle 27" x="53.2143" y="68.1395" width="21" height="4.76744" fill="#B0B0B0" />
                      <rect id="Rectangle 26" x="27.2143" y="68.1395" width="23" height="4.76744" fill="#B0B0B0" />
                      <rect id="Rectangle 25" x="27.2143" y="57.6512" width="73" height="4.76744" fill="#B0B0B0" />
                      <rect id="Rectangle 24" x="61.2143" y="47.1628" width="10" height="4.76744" fill="#B0B0B0" />
                      <rect id="Rectangle 23" x="27.2143" y="47.1628" width="31" height="4.76744" fill="#B0B0B0" />
                      <rect id="Rectangle 22" x="27.2143" y="39.5349" width="23" height="4.76744" fill="#B0B0B0" />
                    </g>
                  </g>
                  <g id="page-mid" filter="url(#filter2_d_24_409)">
                    <path id="Rectangle 20_2"
                      d="M21 31.6C21 31.0399 21 30.7599 21.109 30.546C21.2049 30.3578 21.3578 30.2049 21.546 30.109C21.7599 30 22.0399 30 22.6 30H86.3595C86.5961 30 86.7144 30 86.8262 30.026C86.9253 30.049 87.0203 30.0871 87.1079 30.1388C87.2067 30.1971 87.2923 30.2787 87.4636 30.442L96.5 39.0581L104.504 46.69C104.687 46.8643 104.778 46.9515 104.844 47.0544C104.902 47.1456 104.945 47.2457 104.971 47.3506C105 47.469 105 47.5953 105 47.848V110.4C105 110.96 105 111.24 104.891 111.454C104.795 111.642 104.642 111.795 104.454 111.891C104.24 112 103.96 112 103.4 112H22.6C22.0399 112 21.7599 112 21.546 111.891C21.3578 111.795 21.2049 111.642 21.109 111.454C21 111.24 21 110.96 21 110.4V31.6Z"
                      fill="#D9D9D9" />
                    <g id="Rectangle 21_2" filter="url(#filter3_d_24_409)">
                      <path d="M87 30L95.5 38.1047L105 47.1628H87V30Z" fill="#CBCBCB" />
                    </g>
                    <g id="text_2">
                      <rect id="Rectangle 32_2" x="53" y="89.1163" width="47" height="4.76744" fill="#B0B0B0" />
                      <rect id="Rectangle 31_2" x="40" y="89.1163" width="10" height="4.76744" fill="#B0B0B0" />
                      <rect id="Rectangle 30_2" x="27" y="89.1163" width="10" height="4.76744" fill="#B0B0B0" />
                      <rect id="Rectangle 29_2" x="27" y="75.7674" width="73" height="9.53488" fill="#B0B0B0" />
                      <rect id="Rectangle 28_2" x="77" y="68.1395" width="23" height="4.76744" fill="#B0B0B0" />
                      <rect id="Rectangle 27_2" x="53" y="68.1395" width="21" height="4.76744" fill="#B0B0B0" />
                      <rect id="Rectangle 26_2" x="27" y="68.1395" width="23" height="4.76744" fill="#B0B0B0" />
                      <rect id="Rectangle 25_2" x="27" y="57.6512" width="73" height="4.76744" fill="#B0B0B0" />
                      <rect id="Rectangle 24_2" x="61" y="47.1628" width="10" height="4.76744" fill="#B0B0B0" />
                      <rect id="Rectangle 23_2" x="27" y="47.1628" width="31" height="4.76744" fill="#B0B0B0" />
                      <rect id="Rectangle 22_2" x="27" y="39.5349" width="23" height="4.76744" fill="#B0B0B0" />
                    </g>
                  </g>
                  <g id="page-front" filter="url(#filter4_d_24_409)">
                    <path id="Rectangle 20_3"
                      d="M21 31.6C21 31.0399 21 30.7599 21.109 30.546C21.2049 30.3578 21.3578 30.2049 21.546 30.109C21.7599 30 22.0399 30 22.6 30H86.3595C86.5961 30 86.7144 30 86.8262 30.026C86.9253 30.049 87.0203 30.0871 87.1079 30.1388C87.2067 30.1971 87.2923 30.2787 87.4636 30.442L96.5 39.0581L104.504 46.69C104.687 46.8643 104.778 46.9515 104.844 47.0544C104.902 47.1456 104.945 47.2457 104.971 47.3506C105 47.469 105 47.5953 105 47.848V110.4C105 110.96 105 111.24 104.891 111.454C104.795 111.642 104.642 111.795 104.454 111.891C104.24 112 103.96 112 103.4 112H22.6C22.0399 112 21.7599 112 21.546 111.891C21.3578 111.795 21.2049 111.642 21.109 111.454C21 111.24 21 110.96 21 110.4L21 31.6Z"
                      fill="#D9D9D9" />
                    <g id="Rectangle 21_3" filter="url(#filter5_d_24_409)">
                      <path d="M87 30L95.5 38.1047L105 47.1628H87V30Z" fill="#CBCBCB" />
                    </g>
                    <g id="text_3">
                      <rect id="Rectangle 32_3" x="53" y="89.1163" width="47" height="4.76744" fill="#B0B0B0" />
                      <rect id="Rectangle 31_3" x="40" y="89.1163" width="10" height="4.76744" fill="#B0B0B0" />
                      <rect id="Rectangle 30_3" x="27" y="89.1163" width="10" height="4.76744" fill="#B0B0B0" />
                      <rect id="Rectangle 29_3" x="27" y="75.7674" width="73" height="9.53488" fill="#B0B0B0" />
                      <rect id="Rectangle 28_3" x="77" y="68.1395" width="23" height="4.76744" fill="#B0B0B0" />
                      <rect id="Rectangle 27_3" x="53" y="68.1395" width="21" height="4.76744" fill="#B0B0B0" />
                      <rect id="Rectangle 26_3" x="27" y="68.1395" width="23" height="4.76744" fill="#B0B0B0" />
                      <rect id="Rectangle 25_3" x="27" y="57.6512" width="73" height="4.76744" fill="#B0B0B0" />
                      <rect id="Rectangle 24_3" x="61" y="47.1628" width="10" height="4.76744" fill="#B0B0B0" />
                      <rect id="Rectangle 23_3" x="27" y="47.1628" width="31" height="4.76744" fill="#B0B0B0" />
                      <rect id="Rectangle 22_3" x="27" y="39.5349" width="23" height="4.76744" fill="#B0B0B0" />
                    </g>
                  </g>
                  <path id="Rectangle 19"
                    d="M12.2142 78.2C12.2142 74.2796 12.2142 72.3194 12.9772 70.8221C13.6483 69.5049 14.7192 68.4341 16.0363 67.7629C17.5337 67 19.4939 67 23.4142 67H103.014C106.935 67 108.895 67 110.392 67.7629C111.709 68.4341 112.78 69.5049 113.451 70.8221C114.214 72.3194 114.214 74.2796 114.214 78.2V115.2C114.214 122.481 114.214 126.121 112.797 128.902C111.551 131.348 109.562 133.337 107.116 134.583C104.335 136 100.695 136 93.4142 136H33.0142C25.7336 136 22.0932 136 19.3124 134.583C16.8662 133.337 14.8775 131.348 13.6311 128.902C12.2142 126.121 12.2142 122.481 12.2142 115.2V78.2Z"
                    fill="url(#paint1_linear_24_409)" />
                </g>
                <defs>
                  <filter id="filter0_d_24_409" x="8.21423" y="43.5" width="110" height="100.5"
                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                      result="hardAlpha" />
                    <feOffset dy="4" />
                    <feGaussianBlur stdDeviation="2" />
                    <feComposite in2="hardAlpha" operator="out" />
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_24_409" />
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_24_409" result="shape" />
                  </filter>
                  <filter id="filter1_d_24_409" x="85.2143" y="29" width="22" height="21.1628"
                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                      result="hardAlpha" />
                    <feOffset dy="1" />
                    <feGaussianBlur stdDeviation="1" />
                    <feComposite in2="hardAlpha" operator="out" />
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_24_409" />
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_24_409" result="shape" />
                  </filter>
                  <filter id="filter2_d_24_409" x="17" y="30" width="92" height="90" filterUnits="userSpaceOnUse"
                    color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                      result="hardAlpha" />
                    <feOffset dy="4" />
                    <feGaussianBlur stdDeviation="2" />
                    <feComposite in2="hardAlpha" operator="out" />
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_24_409" />
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_24_409" result="shape" />
                  </filter>
                  <filter id="filter3_d_24_409" x="85" y="29" width="22" height="21.1628" filterUnits="userSpaceOnUse"
                    color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                      result="hardAlpha" />
                    <feOffset dy="1" />
                    <feGaussianBlur stdDeviation="1" />
                    <feComposite in2="hardAlpha" operator="out" />
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_24_409" />
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_24_409" result="shape" />
                  </filter>
                  <filter id="filter4_d_24_409" x="17" y="30" width="92" height="90" filterUnits="userSpaceOnUse"
                    color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                      result="hardAlpha" />
                    <feOffset dy="4" />
                    <feGaussianBlur stdDeviation="2" />
                    <feComposite in2="hardAlpha" operator="out" />
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_24_409" />
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_24_409" result="shape" />
                  </filter>
                  <filter id="filter5_d_24_409" x="85" y="29" width="22" height="21.1628" filterUnits="userSpaceOnUse"
                    color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                      result="hardAlpha" />
                    <feOffset dy="1" />
                    <feGaussianBlur stdDeviation="1" />
                    <feComposite in2="hardAlpha" operator="out" />
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_24_409" />
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_24_409" result="shape" />
                  </filter>
                  <linearGradient id="paint0_linear_24_409" x1="63.2142" y1="57" x2="63.2142" y2="136"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="#2F70AC" />
                    <stop offset="0.541407" stop-color="#093863" />
                  </linearGradient>
                  <linearGradient id="paint1_linear_24_409" x1="63.2142" y1="67" x2="82.3014" y2="137.466"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="#4F98DB" />
                    <stop offset="1" stop-color="#7BAFDE" />
                  </linearGradient>
                </defs>
              </svg>
              <h5>{{ $repo->name }}</h5>
            </a>
          @endforeach
        </div>
      </div>
    </div>

    <div class="card contacts-container">
      <div class="links">
        <a class="content" href="mailto:mazigh.yakouben@ynov.com" style="font-size: 86%">mazigh.yakouben@ynov.com</a>
        <div class="rs content">
          <a href="https://github.com/MazBazDev">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
              <path
                d="M256 32C132.3 32 32 134.9 32 261.7c0 101.5 64.2 187.5 153.2 217.9a17.56 17.56 0 003.8.4c8.3 0 11.5-6.1 11.5-11.4 0-5.5-.2-19.9-.3-39.1a102.4 102.4 0 01-22.6 2.7c-43.1 0-52.9-33.5-52.9-33.5-10.2-26.5-24.9-33.6-24.9-33.6-19.5-13.7-.1-14.1 1.4-14.1h.1c22.5 2 34.3 23.8 34.3 23.8 11.2 19.6 26.2 25.1 39.6 25.1a63 63 0 0025.6-6c2-14.8 7.8-24.9 14.2-30.7-49.7-5.8-102-25.5-102-113.5 0-25.1 8.7-45.6 23-61.6-2.3-5.8-10-29.2 2.2-60.8a18.64 18.64 0 015-.5c8.1 0 26.4 3.1 56.6 24.1a208.21 208.21 0 01112.2 0c30.2-21 48.5-24.1 56.6-24.1a18.64 18.64 0 015 .5c12.2 31.6 4.5 55 2.2 60.8 14.3 16.1 23 36.6 23 61.6 0 88.2-52.4 107.6-102.3 113.3 8 7.1 15.2 21.1 15.2 42.5 0 30.7-.3 55.5-.3 63 0 5.4 3.1 11.5 11.4 11.5a19.35 19.35 0 004-.4C415.9 449.2 480 363.1 480 261.7 480 134.9 379.7 32 256 32z" />
            </svg>
          </a>
          <a href="https://www.linkedin.com/in/mazigh-yakouben-45816a1a5/">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
              <path
                d="M444.17 32H70.28C49.85 32 32 46.7 32 66.89v374.72C32 461.91 49.85 480 70.28 480h373.78c20.54 0 35.94-18.21 35.94-38.39V66.89C480.12 46.7 464.6 32 444.17 32zm-273.3 373.43h-64.18V205.88h64.18zM141 175.54h-.46c-20.54 0-33.84-15.29-33.84-34.43 0-19.49 13.65-34.42 34.65-34.42s33.85 14.82 34.31 34.42c-.01 19.14-13.31 34.43-34.66 34.43zm264.43 229.89h-64.18V296.32c0-26.14-9.34-44-32.56-44-17.74 0-28.24 12-32.91 23.69-1.75 4.2-2.22 9.92-2.22 15.76v113.66h-64.18V205.88h64.18v27.77c9.34-13.3 23.93-32.44 57.88-32.44 42.13 0 74 27.77 74 87.64z" />
            </svg>
          </a>
          <a href="https://discord.com/invite/upPHs3WsUt">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
              <path
                d="M464 66.52A50 50 0 00414.12 17L97.64 16A49.65 49.65 0 0048 65.52V392c0 27.3 22.28 48 49.64 48H368l-13-44 109 100zM324.65 329.81s-8.72-10.39-16-19.32C340.39 301.55 352.5 282 352.5 282a139 139 0 01-27.85 14.25 173.31 173.31 0 01-35.11 10.39 170.05 170.05 0 01-62.72-.24 184.45 184.45 0 01-35.59-10.4 141.46 141.46 0 01-17.68-8.21c-.73-.48-1.45-.72-2.18-1.21-.49-.24-.73-.48-1-.48-4.36-2.42-6.78-4.11-6.78-4.11s11.62 19.09 42.38 28.26c-7.27 9.18-16.23 19.81-16.23 19.81-53.51-1.69-73.85-36.47-73.85-36.47 0-77.06 34.87-139.62 34.87-139.62 34.87-25.85 67.8-25.12 67.8-25.12l2.42 2.9c-43.59 12.32-63.44 31.4-63.44 31.4s5.32-2.9 14.28-6.77c25.91-11.35 46.5-14.25 55-15.21a24 24 0 014.12-.49 205.62 205.62 0 0148.91-.48 201.62 201.62 0 0172.89 22.95s-19.13-18.15-60.3-30.45l3.39-3.86s33.17-.73 67.81 25.16c0 0 34.87 62.56 34.87 139.62 0-.28-20.35 34.5-73.86 36.19z" />
              <path
                d="M212.05 218c-13.8 0-24.7 11.84-24.7 26.57s11.14 26.57 24.7 26.57c13.8 0 24.7-11.83 24.7-26.57.25-14.76-10.9-26.57-24.7-26.57zM300.43 218c-13.8 0-24.7 11.84-24.7 26.57s11.14 26.57 24.7 26.57c13.81 0 24.7-11.83 24.7-26.57S314 218 300.43 218z" />
            </svg>
          </a>
        </div>

      </div>
    </div>

    {{-- <div class="card col-4 fun-bg">
      <div class="owl-carousel owl-theme" id="container">
        <div class="content"><img src="{{ url('assets/img/fun/apple.png') }}" class="image" data-tilt ></div>
        <div class="content"><img src="{{ url('assets/img/fun/discord.png') }}" class="image" data-tilt ></div>
        <div class="content"><img src="{{ url('assets/img/fun/figma.png') }}" class="image" data-tilt ></div>
        <div class="content"><img src="{{ url('assets/img/fun/laravel.png') }}" class="image" data-tilt ></div>
        <div class="content"><img src="{{ url('assets/img/fun/notion.png') }}" class="image" data-tilt ></div>
        <div class="content"><img src="{{ url('assets/img/fun/server.png') }}" class="image" data-tilt ></div>
        <div class="content"><img src="{{ url('assets/img/fun/spotify.png') }}" class="image" data-tilt ></div>
        <div class="content"><img src="{{ url('assets/img/fun/tailwinds.png') }}" class="image" data-tilt ></div>
      </div>
    </div> --}}
  </div>

  <footer>
    <span>{{ date("Y") }} MazBaz.fr | made with <span class="hearth">❤️</span> keyboard </span>
  </footer>
</body>

<script>
  mapboxgl.accessToken = `{{ env("MAPBOX_TOKEN") }}`;
</script>
<script src="{{ url("/assets/vendor/sortable/sortable.js") }}"></script>
<script src="{{ url('/assets/vendor/scroll-reveal/scroll-reveal.js')}}"></script>
<script src="{{ url('/assets/js/app.js') }}"></script>
<script src="{{ url('/assets/js/theme.js') }}"></script>
<script src="{{ url('/assets/vendor/tilt/tilt.js') }}"></script>
<script src="{{ url('/assets/vendor/owl-carousel/owlCarousel.js') }}"></script>

@if(getApiUsage() < 49000)
<script>
  map.on("load", () => {
	map.loadImage(`{{ url('assets/img/map-ping.png') }}`, (error, image) => {
		if (error) throw error;

		map.addImage("ping", image);

		map.addSource("point", {
			type: "geojson",
			data: {
				type: "FeatureCollection",
				features: [
					{
						type: "Feature",
						geometry: {
							type: "Point",
							coordinates: [4.83345, 45.747899],
						},
					},
				],
			},
		});

		map.addLayer({
			id: "points",
			type: "symbol",
			source: "point",
			layout: {
				"icon-image": "ping",
				"icon-size": 0.5,
			},
		});
	});
});
</script>
@endif

<script>
$('[data-tilt]').tilt({
	scale: 1.1
})

$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
    loop: true,
    nav:false,
    dots:false,
    autoplay:true,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:3,
        },
        1000:{
            items:5
        }
    }
  });
});

if ('{{ getLocal() }}' == "en") {
  document.getElementById("check-lang").checked = true;
}
</script>
</html>