<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MazBaz.fr | French web dev</title>
  <link rel="stylesheet" href="{{ url('/assets/css/style.css') }}">

  <link href="https://api.mapbox.com/mapbox-gl-js/v2.13.0/mapbox-gl.css" rel="stylesheet">
  <script src="https://api.mapbox.com/mapbox-gl-js/v2.13.0/mapbox-gl.js"></script>

  <script src="{{ url('/assets/js/jquery-3.6.4.min.js') }}"></script>
  <script src="https://unpkg.com/scrollreveal"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
</head>

<body data-theme="dark">
  <div class="cards">
    <div class="card col-2 profile">
      <img class="img-fluid" src="/assets/img/pp.png" alt="">
      <div class="bio">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi obcaecati omnis sunt, vel,
          aut,
          iste amet tenetur eum dolore</p>
      </div>
    </div>
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
    <div class="card cv">
      <div class="button-container content">
        <a class="button" href="">
          <span>Check my cv :)</span>
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

      <svg style="height: 250px;" id="folder-cv" xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 110 117" shape-rendering="geometricPrecision"
        text-rendering="geometricPrecision">
        <defs>
          <linearGradient id="epkodURaGjZ3-fill" x1="55" y1="30" x2="55" y2="109" spreadMethod="pad"
            gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
            <stop id="epkodURaGjZ3-fill-0" offset="0%" stop-color="#2f70ac" />
            <stop id="epkodURaGjZ3-fill-1" offset="54.1407%" stop-color="#093863" />
          </linearGradient>
          <linearGradient id="epkodURaGjZ19-fill" x1="55" y1="40" x2="74.0872" y2="110.466" spreadMethod="pad"
            gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
            <stop id="epkodURaGjZ19-fill-0" offset="0%" stop-color="#4f98db" />
            <stop id="epkodURaGjZ19-fill-1" offset="100%" stop-color="#7bafde" />
          </linearGradient>
        </defs>
        <g transform="translate(0 8)">
          <path
            d="M4,30c0-.4642,0-.6964.00593-.8926.20764-6.8718,5.7297-12.3938,12.60147-12.6015.1962-.0059.4284-.0059.8926-.0059h23.75c3.7279,0,6.75,3.0221,6.75,6.75s3.0221,6.75,6.75,6.75h30.45c7.2807,0,10.921,0,13.7019,1.4169c2.4461,1.2464,4.4351,3.2351,5.6811,5.6812C106,39.879,106,43.5193,106,50.8v37.4c0,7.2807,0,10.921-1.417,13.702-1.246,2.446-3.235,4.435-5.6811,5.681C96.121,109,92.4807,109,85.2,109h-60.4c-7.2807,0-10.921,0-13.7019-1.417-2.44608-1.246-4.43483-3.235-5.68118-5.681C4,99.121,4,95.4807,4,88.2L4,30Z"
            fill="url(#epkodURaGjZ3-fill)" />
        </g>
        <g id="page" transform="translate(55.5,39.5)">
          <g transform="translate(-55.5,-39.5)">
            <path
              d="M13,2.6c0-.56005,0-.84008.109-1.05399.0959-.18816.2488-.34114.437-.43702C13.7599,1,14.0399,1,14.6,1h63.7373c.2445,0,.3668,0,.4819.02763.1021.0245.1996.0649.2891.11973.1009.06184.1874.14832.3603.32127L88.5,10.5l8.0314,8.0314c.1729.1729.2594.2594.3212.3603.0549.0895.0953.187.1198.2891.0276.1151.0276.2374.0276.4819L97,85.4c0,.5601,0,.8401-.109,1.054-.0959.1882-.2488.3411-.437.437C96.2401,87,95.9601,87,95.4,87h-80.8c-.5601,0-.8401,0-1.054-.109-.1882-.0959-.3411-.2488-.437-.437C13,86.2401,13,85.9601,13,85.4v-82.8Z"
              transform="translate(0 8)" fill="#d9d9d9" />
            <rect width="47" height="5" rx="0" ry="0" transform="translate(45 71)" fill="#b0b0b0" />
            <rect width="10" height="5" rx="0" ry="0" transform="translate(32 71)" fill="#b0b0b0" />
            <rect width="10" height="5" rx="0" ry="0" transform="translate(19 71)" fill="#b0b0b0" />
            <rect width="73" height="10" rx="0" ry="0" transform="translate(19 57)" fill="#b0b0b0" />
            <rect width="23" height="5" rx="0" ry="0" transform="translate(69 49)" fill="#b0b0b0" />
            <rect width="21" height="5" rx="0" ry="0" transform="translate(45 49)" fill="#b0b0b0" />
            <rect width="23" height="5" rx="0" ry="0" transform="translate(19 49)" fill="#b0b0b0" />
            <rect width="73" height="5" rx="0" ry="0" transform="translate(19 38)" fill="#b0b0b0" />
            <rect width="10" height="5" rx="0" ry="0" transform="translate(53 27)" fill="#b0b0b0" />
            <rect width="31" height="5" rx="0" ry="0" transform="translate(19 27)" fill="#b0b0b0" />
            <rect width="23" height="5" rx="0" ry="0" transform="translate(19 19)" fill="#b0b0b0" />
            <g transform="translate(0 7)">
              <path d="M79,2l8.5,8.5L97,20h-18v-18Z" fill="#cbcbcb" />
            </g>
          </g>
        </g>
        <g id="epkodURaGjZ19_ts" transform="translate(55,117) scale(1,1)">
          <path
            d="M4,51.2c0-3.9204,0-5.8806.76295-7.3779.67112-1.3172,1.74198-2.388,3.05912-3.0591C9.31945,40,11.2796,40,15.2,40h79.6c3.9204,0,5.881,0,7.378.763c1.317.6711,2.388,1.7419,3.059,3.0591C106,45.3194,106,47.2796,106,51.2v37c0,7.2807,0,10.921-1.417,13.702-1.246,2.446-3.235,4.435-5.6811,5.681C96.121,109,92.4807,109,85.2,109h-60.4c-7.2807,0-10.921,0-13.7019-1.417-2.44608-1.246-4.43483-3.235-5.68118-5.681C4,99.121,4,95.4807,4,88.2v-37Z"
            transform="translate(-55,-109)" fill="url(#epkodURaGjZ19-fill)" />
        </g>
      </svg>
    </div>

    <div class="card switchs">
      <div class="switch-container content">
        <span>🇫🇷</span>
        <label class="switch">
          <input type="checkbox" id="check-lang">
          <span class="slider round"></span>
        </label>
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
        <a class="button" href="">
          <span>Check my works</span>
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
          <a class="work content" href="">
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
            <h5>Card title</h5>
          </a>
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

    <div class="card col-4 fun-bg">
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
    </div>
  </div>

  <footer>
    <span>{{ date("Y") }} MazBaz.fr | made with <span class="hearth">❤️</span> keyboard </span>
  </footer>
</body>
<script src="https://raw.githack.com/SortableJS/Sortable/master/Sortable.js"></script>

<script>
  mapboxgl.accessToken = `{{ env("MAPBOX_TOKEN") }}`;
</script>

<script src="{{ url('/assets/js/app.js') }}"></script>
<script src="{{ url('/assets/js/tilt.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

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
            items:2,
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
</script>
</html>