<template>
  <header>
    <nav>
      <a href="#">
        <img alt="cocaen.com" src="../assets/logo.png">
      </a>
      <a href="#/about">{{ about }}</a>
      <a href="#/listWorks">{{ product }}</a>
      <a href="#/listArticles">{{ article }}</a>
      <a href="#/contact">{{ contact }}</a>
      <a href="#" aria-label="search" @click.prevent="showSearchBar = !showSearchBar">
        <font-awesome-icon :icon="['fas', 'magnifying-glass']" />
      </a>
      <a href="#" aria-label="menu" @click.prevent="showSidebar = !showSidebar">
        <font-awesome-icon :icon="['fas', 'bars']" />
      </a>
    </nav>
    <!-- 下方的浮動搜尋列 -->
    <div class="search-bar" :class="showSearchBar ? 'showSearchBar' : 'hideSearchBar'">
      <input type="text" class="search-input" placeholder="Search..." aria-label="search" />
    </div>
    <!-- 側邊欄的容器 -->
    <aside class="sidebar" :class="showSidebar ? 'show' : 'close'">
      <!-- 關閉的內容 -->
      <div class="sidebar-close" @click="showSidebar = !showSidebar"
      @keydown="showSidebar = !showSidebar">
      </div>
      <div class="siderbar-search-bar"
      :class="showSideBarSearchBar ? 'showSearchBar' : 'hideSearchBar'">
        <input type="text" class="search-input" placeholder="Search..." aria-label="search" />
      </div>
      <!-- 側邊欄的內容 -->
      <div class="sidebar-menu">
        <!-- 垂直 menu 內容 -->
        <a href="#" aria-label="search"
        @click.prevent="showSideBarSearchBar = !showSideBarSearchBar">
          <font-awesome-icon :icon="['fas', 'magnifying-glass']" />
        </a>
        <a href="#/about">{{ about }}</a>
        <a href="#/listWorks">{{ product }}</a>
        <a href="#/listArticles">{{ article }}</a>
        <a href="#/contact">{{ contact }}</a>
      </div>
    </aside>
  </header>
</template>

<script>
export default {
  data() {
    return {
      about: '關於',
      product: '案例',
      article: '技術',
      contact: '聯繫',
      showSearchBar: false, // 控制浮動搜尋列的顯示與隱藏
      showSidebar: false, // 初始化為隱藏狀態
      showSideBarSearchBar: false, // 控制浮動搜尋列的顯示與隱藏
    };
  },
};
</script>

<style>
header {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 40px;
  padding-top: 10px;
}

nav {
  font-size: small;
  display: flex;
  justify-content: space-between;
  align-items: center;
  height: 0px;
  width: 90%;
  z-index: 1;
  background-color: var(--primary-color);
}

nav a {
  text-decoration: none;
  flex: 1;
}

nav a:first-child img {
  padding-top: 5px;
  width: 50px;
  height: auto;
}

nav a:last-child {
  display: none;
}

/* 灰底樣式 */
.search-bar {
  position: absolute;
  top: -50px;
  width: 100%;
  height: 50px;
  transition: transform 0.3s;
}

/* 顯示浮動搜尋列 */
.showSearchBar {
  transform: translateY(200%);
}

/* 隱藏浮動搜尋列 */
.hideSearchBar {
  transform: translateY(0);
}

/* 文字輸入框樣式 */
.search-input {
  width: 80%;
  /* 輸入框寬度 */
  height: 30px;
  /* 外邊距 */
  padding: 5px 10px;
  /* 內邊距 */
  border: solid;
  /* 去除邊框 */
  border-radius: 0 0 10px 10px;
  border-color: var(--primary-color);
  border-width: 8px;
  /* 圓角 */
  background-color: #e0e0e0;
  /* 灰底顏色 */
}

.sidebar {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  width: 0;
  background-color: transparent;
  overflow: hidden;
  transition: width 0.3s ease;
  z-index: 5;
}

.sidebar.show {
  width: 100%;
  background-color: rgba(0, 0, 0, 0.5);
}

.sidebar.close {
  width: 0%;
  background-color: rgba(0, 0, 0, 0.5);
}

.sidebar-menu {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  width: 60px;
  background-color: var(--primary-color);
  transition: transform 0.3s ease;
  flex-direction: column;
  padding: 20px;
  padding-top: 10px;
}

.sidebar-menu a {
  text-decoration: none;
  color: var(--text-color);
  font-size: 16px;
  margin-bottom: 10px;
  border-radius: 4px;
  transition: background-color 0.3s;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 50px;
  padding: 10px 20px;
  box-sizing: border-box;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

.sidebar-menu a:hover {
  color: var(--primary-color);
  background-color: var(--text-color);
}

.sidebar-menu a[aria-label="search"] {
  font-size: 20px;
}

.sidebar-close {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  width: 100%;
}

.sidebar.show .sidebar-menu {
  transform: translateX(0);
}

.siderbar-search-bar {
  position: absolute;
  top: -55px;
  width: calc(100% - 100px);
  transition: transform 0.3s;
}

@media (prefers-color-scheme: dark) {
  nav a:first-child img {
    filter: invert(100%);
    /* 將顏色反轉，由黑色變白色 */
  }
}

@media screen and (min-width: 600px) {
  .sidebar {
    display: none;
  }
}

@media screen and (max-width: 600px) {
  nav {
    width: 100%;
  }

  nav a:not(:first-child) {
    display: none;
  }

  nav a:first-child {
    text-align: start;
  }

  nav a:last-child {
    display: block;
    text-align: end;
  }

  .search-bar {
    transform: translateY(0);
  }

  .search-input {
    border-radius:10px;
  }
}
</style>
