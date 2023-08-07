<template>
  <transition name="fade">
    <div v-if="showLogo" class="fadelogo">
      <img alt="cocaen.com" src="../assets/logo.png" class="fade-in-out">
      <div class="typewriter" id="entry_btn">hello world!</div>
    </div>
  </transition>
</template>

<script>
export default {
  data() {
    return {
      showLogo: true, // 初始化為顯示，這樣在進入頁面時就會顯示
    };
  },
  mounted() {
    document.body.style.overflow = 'hidden';
    // 使用 setTimeout 讓 logo 在 10 秒後淡出
    setTimeout(() => {
      this.showLogo = false;
      document.body.style.overflow = 'auto';
    }, 4500);
  },
};
</script>

<style>
@import '../css/typewriter.css';

/* 設定外層容器的高度為100%，使其充滿整個畫面 */
html,
body {
  height: 100%;
  margin: 0;
  padding: 0;
}

.fadelogo {
  position: absolute;
  /* 使用絕對定位 */
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  display: flex;
  flex-direction: column;
  /* 垂直排列 */
  justify-content: center;
  align-items: center;
  transition: opacity 1s;
  z-index: 3;
  background-color: var(--primary-color);
  /* background-image: linear-gradient(to top, var(--primary-color), var(--secondry-color)); */
}

.fadelogo img {
  max-width: 40%;
  /* 設定圖片最大寬度為 fadelogo 寬度的 60% */
  height: auto;
  /* 高度自動適應比例 */
  opacity: 0;
  /* 初始設定為透明 */
  animation: fade-in 1s forwards;
  /* 使用淡入的動畫效果 */
}

@media screen and (max-width: 600px) {
  .fadelogo img {
    max-width: 60%;
  }
}

.typewriter {
  margin-top: 10px;
  /* 可以根據需求調整距離 */
}

@media (prefers-color-scheme: dark) {
  .fadelogo img {
    filter: invert(100%);
    /* 將顏色反轉，由黑色變白色 */
  }
}

/* 定義淡入動畫 */
@keyframes fade-in {
  from {
    opacity: 0;
  }

  to {
    opacity: 1;
  }
}

.fade-enter-active,
.fade-leave-active {
  transition: opacity 1s;
}

.fade-enter,
.fade-leave-to

/* .fade-leave-active in <2.1.8 */
  {
  opacity: 0;
}</style>
