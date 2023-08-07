<template>
  <router-view />
</template>

<script>
</script>

<style lang="scss">
:root {
  --primary-color: #cfd9df;
  /* 定義主要顏色 */
  --secondry-color: #e1deda;
  /* 定義次要顏色 */
  --text-color: #121212;
  /* 定義打字特效顏色 */
  --typewriter-color: #00AF00;
  /* 定義子文字顏色 */
  --subtext-color: #4d4d4d;
  /* 定義框線顏色 */
  --border-color: #ccc;
  /* 定義次要顏色 */
  --subtext2-color: #5c5c5c;
  --primary-blue-color: #00b8ff;
  --secondey-blue-color: #00415a;
  --primary-red-color: #D65472;
  --primary-gray-color: #ccc;
  --secondey-gray-color: #bbb;
}

@media (prefers-color-scheme: dark) {

  /* 應用深色模式的樣式 */
  :root {
    --primary-color: #28313B;
    /* 修改主要顏色為黑色 */
    --secondry-color: #3b3b3b;
    /* 定義次要顏色 */
    --text-color: #e5e5e5;
    /* 定義打字特效顏色 */
    --typewriter-color: #00FF00;
    /* 定義子文字顏色 */
    --subtext-color: darkgray;
    /* 定義框線顏色 */
    --border-color: #ccc;
    --primary-gray-color: #333;
    --secondey-gray-color: #444;
  }
}

html,
body {
  height: 100%;
  margin: 0;
  background-color: var(--primary-color);
  // background-image: linear-gradient(to top, var(--primary-color), var(--secondry-color));
  background-attachment: fixed;
  /* 鎖定背景圖片 */
  background-repeat: no-repeat;
  /* 不重複背景圖片 */
  background-size: cover;

  /* 背景圖片自動縮放以填滿整個畫面 */
  ::-webkit-scrollbar {
    width: 3px;
    height: 3px;
  }

  ::-webkit-scrollbar-track {
    background: var(--primary-color);
  }

  ::-webkit-scrollbar-thumb {
    background: var(--text-color);
  }

  ::-webkit-scrollbar-thumb:hover {
    background: var(--text-color);
  }

  ::-webkit-scrollbar-thumb:active {
    background: var(--text-color);
  }
}

html,
body,
a {
  color: var(--text-color);
}

#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
}

nav {
  padding: 30px;

  a {
    font-weight: bold;

    &.router-link-exact-active {
      color: #42b983;
    }
  }
}

@font-face {
  font-family: 'ISOCPEUR';
  src: local("ISOCPEUR"),
    url('./fonts/isocpeui.ttf') format("opentype")
}

@font-face {
  font-family: 'NotoSansTC-Black';
  src: local("NotoSansTC-Black"),
    url('./fonts/NotoSansTC-Black.otf') format("opentype")
}

@font-face {
  font-family: 'NotoSansTC-Bold';
  src: local("NotoSansTC-Bold"),
    url('./fonts/NotoSansTC-Bold.otf') format("opentype")
}

@font-face {
  font-family: 'NotoSansTC-Light';
  src: local("NotoSansTC-Light"),
    url('./fonts/NotoSansTC-Light.otf') format("opentype")
}

@font-face {
  font-family: 'NotoSansTC-Medium';
  src: local("NotoSansTC-Medium"),
    url('./fonts/NotoSansTC-Medium.otf') format("opentype")
}

@font-face {
  font-family: 'NotoSansTC-Regular';
  src: local("NotoSansTC-Regular"),
    url('./fonts/NotoSansTC-Regular.otf') format("opentype")
}

@font-face {
  font-family: 'NotoSansTC-Thin';
  src: local("NotoSansTC-Thin"),
    url('./fonts/NotoSansTC-Thin.otf') format("opentype")
}</style>
