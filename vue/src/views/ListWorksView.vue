<template>
  <div class="home">
    <Header></Header>
    <Content>
      <Category :items="items" />
      <div class="article-list">
        <div class="article-item">
          <div class="article-image">
            <img src="../assets/pcb.png" alt="article">
          </div>
          <div class="article-content">
            <h2 class="article-title">這是文章標題</h2>
            <div class="article-meta">
              <span class="article-views">觀看次數: 100</span>
              <span class="article-date">發布時間: 2023-08-04</span>
            </div>
            <p class="article-excerpt">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
              Sedeu quam justo. Vestibulum ante ipsum primis in faucibus
              orci luctus et ultrices posuere cubilia Curae;<br>
              Suspendisse malesuada eu mi nec varius. Aenean id cursus risus.
              Mauris congue neque augue,<br>
              in pulvinar elitefficitur sit amet. Duis a tortor non quam gravida blandit.
            </p>
          </div>
        </div>
        <!-- 可以添加更多文章項目 -->
      </div>
    </Content>
    <Footer></Footer>
  </div>
</template>

<script>
import Header from '../components/BaseHeader.vue';
import Content from '../components/BaseContent.vue';
import Footer from '../components/BaseFooter.vue';
import Category from '../components/BaseCategory.vue';

export default {
  name: 'ListView',
  components: {
    Header,
    Content,
    Footer,
    Category,
  },
  data() {
    return {
      items: [
        {
          icontype: 'fab', icon: 'microsoft', label: '軟體', link: '#',
        },
        {
          icontype: 'fas', icon: 'microchip', label: '硬體', link: '#',
        },
        {
          icontype: 'fas', icon: 'clone', label: '自動化', link: '#',
        },
        {
          icontype: 'fas', icon: 'camera', label: 'AOI', link: '#',
        },
        {
          icontype: 'fas', icon: 'robot', label: '機器學習', link: '#',
        },
        {
          icontype: 'fas', icon: 'mobile-screen', label: 'IoT', link: '#',
        },
        {
          icontype: 'fas', icon: 'database', label: '系統', link: '#',
        },
      ],
    };
  },
};
</script>

<style>
.home {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
  font-family: Arial, sans-serif;
}

.article-list {
  margin-top: 40px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  /* 新增這行 */
  align-items: center;
  /* 新增這行 */
}

.article-item {
  display: flex;
  align-items: center;
  width: 80%;
  height: 200px;
  background-color: var(--text-color);
  color: white;
  border-radius: 5px;
  box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
  transition: filter 0.3s;
  overflow: hidden;
  margin-bottom: 10px;
  /* 添加過渡效果 */
}

.article-image {
  flex: 1;
  height: 200px;
  overflow: hidden;
  background-color: var(--border-color);
}

.article-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  /* 圖片按比例填滿並裁剪 */
  object-position: center;
  /* 確保圖片內容在容器中央顯示 */
  display: block;
}

.article-content {
  flex: 2;
  padding: 10px;
  padding-left: 30px;
  text-align: left;
}

.article-title {
  font-size: 24px;
  margin: 10px 0 10px;
  color: var(--primary-gray-color);
}

.article-meta {
  font-size: 14px;
  color: #777;
  margin-bottom: 10px;
}

.article-excerpt {
  font-size: 16px;
  color: var(--secondey-gray-color);
  line-height: 1.5;
  /* 添加過渡效果 */
  overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 4;
  -webkit-box-orient: vertical;
}

.article-views::before,
.article-date::before {
  content: "|";
  margin: 0 5px;
}

.article-item:hover {
  filter: brightness(60%);
  /* 變暗 20% */
}

@media screen and (max-width: 600px) {
  .article-item {
    flex-direction: column;
    width: 90%;
  }

  .article-image {
    width: 100%;
  }

  .article-content {
    flex: 1;
    padding-left: 10px;
  }

  .article-item {
    height: 400px;
  }
}
</style>
