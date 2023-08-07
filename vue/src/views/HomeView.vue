<template>
  <div class="home">
    <FadeLogo></FadeLogo>
    <Header></Header>
    <Content>
      <div v-for="(item, index) in items" :key="index">
        <InfoCard :item="item" />
      </div>
      <div class="article-test-list">
        <div class="article-test-item">
          <div class="article-test-image">
            <img src="../assets/pcb.png" alt="article-test">
          </div>
          <div class="article-test-content">
            <h2 class="article-test-title">這是文章標題</h2>
            <div class="article-test-meta">
              <span class="article-test-views">觀看次數: 100</span>
              <span class="article-test-date">發布時間: 2023-08-04</span>
            </div>
            <p class="article-test-excerpt">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
              Sedeu quam justo. Vestibulum ante ipsum primis in faucibus
              orci luctus et ultrices posuere cubilia Curae;<br>
              Suspendisse malesuada eu mi nec varius. Aenean id cursus risus.
              Mauris congue neque augue,<br>
              in pulvinar elitefficitur sit amet. Duis a tortor non quam gravida blandit.
            </p>
          </div>
        </div>
        <div class="article-test-item">
          <div class="article-test-image">
            <img src="../assets/pcb.png" alt="article-test">
          </div>
          <div class="article-test-content">
            <h2 class="article-test-title">這是文章標題</h2>
            <div class="article-test-meta">
              <span class="article-test-views">觀看次數: 100</span>
              <span class="article-test-date">發布時間: 2023-08-04</span>
            </div>
            <p class="article-test-excerpt">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
              Sedeu quam justo. Vestibulum ante ipsum primis in faucibus
              orci luctus et ultrices posuere cubilia Curae;<br>
              Suspendisse malesuada eu mi nec varius. Aenean id cursus risus.
              Mauris congue neque augue,<br>
              in pulvinar elitefficitur sit amet. Duis a tortor non quam gravida blandit.
            </p>
          </div>
        </div>
        <div class="article-test-item">
          <div class="article-test-image">
            <img src="../assets/pcb.png" alt="article-test">
          </div>
          <div class="article-test-content">
            <h2 class="article-test-title">這是文章標題</h2>
            <div class="article-test-meta">
              <span class="article-test-views">觀看次數: 100</span>
              <span class="article-test-date">發布時間: 2023-08-04</span>
            </div>
            <p class="article-test-excerpt">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
              Sedeu quam justo. Vestibulum ante ipsum primis in faucibus
              orci luctus et ultrices posuere cubilia Curae;<br>
              Suspendisse malesuada eu mi nec varius. Aenean id cursus risus.
              Mauris congue neque augue,<br>
              in pulvinar elitefficitur sit amet. Duis a tortor non quam gravida blandit.
            </p>
          </div>
        </div>
        <div class="article-test-item">
          <div class="article-test-image">
            <img src="../assets/pcb.png" alt="article-test">
          </div>
          <div class="article-test-content">
            <h2 class="article-test-title">這是文章標題</h2>
            <div class="article-test-meta">
              <span class="article-test-views">觀看次數: 100</span>
              <span class="article-test-date">發布時間: 2023-08-04</span>
            </div>
            <p class="article-test-excerpt">
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
import FadeLogo from '../components/FadeLogo.vue';
import Header from '../components/BaseHeader.vue';
import Content from '../components/BaseContent.vue';
import Footer from '../components/BaseFooter.vue';
import InfoCard from '../components/BaseInfoCard.vue';

export default {
  name: 'HomeView',
  components: {
    FadeLogo,
    Header,
    Content,
    Footer,
    InfoCard,
  },
  data() {
    return {
      items:
        [
          {
            odd: true,
            title: 'cocaen - 軟硬體開源創作者品牌',
            subtitle: 'AIOT、AI、IoT和軟體的共享創新社群',
            video: 'https://www.youtube.com/embed/BAYC-MqCSck',
            link: '#',
            content: `cocaen是一個充滿創意和開源精神的創作者們。<br>致力於開發各類電子設備、AIOT、AI、IoT和各種應用的解決方案。<br><br>
              他們相信藉由共享知識和資源，可以促進技術的發展與創新。<br>
              這個品牌聚集了來自各個領域的專業人才，他們熱愛電子科技和軟體開發，不斷探索各種創新應用。<br><br>
              在cocaen的平台上，你可以找到各種項目，從小型家庭自動化到智能家居系統，<br>以及更複雜的AIOT和機器學習應用。<br><br>
              這個開源創作者集團不僅提供完整的製作指南和程式碼，還鼓勵成員之間的交流與合作。<br>
              無論是初學者還是專業工程師，每個人都能在這個社群中找到適合自己的學習和創作機會。<br><br>
              cocaen致力於推動技術的普及和共享，為更多人帶來智能化和自動化的便利。<br>
              加入cocaen，你將成為這個開源創作者集團的一員，共同參與創新，建立更美好的未來。`,
          },
          {
            odd: false,
            title: 'cocaen - 軟硬體開源創作者品牌',
            subtitle: 'AIOT、AI、IoT和軟體的共享創新社群',
            video: 'https://www.youtube.com/embed/BAYC-MqCSck',
            link: '#',
            content: `cocaen是一個充滿創意和開源精神的創作者們。<br>致力於開發各類電子設備、AIOT、AI、IoT和各種應用的解決方案。<br><br>
              他們相信藉由共享知識和資源，可以促進技術的發展與創新。<br>
              這個品牌聚集了來自各個領域的專業人才，他們熱愛電子科技和軟體開發，不斷探索各種創新應用。<br><br>
              在cocaen的平台上，你可以找到各種項目，從小型家庭自動化到智能家居系統，<br>以及更複雜的AIOT和機器學習應用。<br><br>
              這個開源創作者集團不僅提供完整的製作指南和程式碼，還鼓勵成員之間的交流與合作。<br>
              無論是初學者還是專業工程師，每個人都能在這個社群中找到適合自己的學習和創作機會。<br><br>
              cocaen致力於推動技術的普及和共享，為更多人帶來智能化和自動化的便利。<br>
              加入cocaen，你將成為這個開源創作者集團的一員，共同參與創新，建立更美好的未來。`,
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
}

.info-card {
  display: flex;
  justify-content: center;
}

.info-card .content-wrapper {
  width: 80%;
}

.info-card .img iframe {
  width: 100%;
  height: 100%;
  border-radius: 20px;
}

/* ======================= */

.article-test-list {
  margin-top: 40px;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  width: 100%;
  justify-content: center;
}

.article-test-item {
  display: flex;
  min-width: 300px;
  /* 最少寬度 (每行至少顯示1個項目) */
  max-width: 400px;
  /* 最多寬度 (每行最多顯示4個項目) */
  box-sizing: border-box;
  /* 包含 padding 和 border 在內的寬度計算 */
  flex-direction: column;
  height: 400px;
  background-color: var(--text-color);
  color: white;
  border-radius: 5px;
  box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
  transition: filter 0.3s;
  overflow: hidden;
  align-items: center;
  margin: 20px;
  /* 添加過渡效果 */
}

@media screen and (max-width: 600px) {
  .article-test-item {
    max-width: 400px;
  }
}

.article-test-image {
  flex: 1;
  height: 200px;
  width: 100%;
  overflow: hidden;
  background-color: var(--border-color);
}

.article-test-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  /* 圖片按比例填滿並裁剪 */
  object-position: center;
  /* 確保圖片內容在容器中央顯示 */
  display: block;
}

.article-test-content {
  flex: 2;
  padding: 10px;
  padding-left: 30px;
  text-align: left;
}

.article-test-title {
  font-size: 24px;
  margin: 10px 0 10px;
  color: var(--primary-gray-color);
}

.article-test-meta {
  font-size: 14px;
  color: #777;
  margin-bottom: 10px;
}

.article-test-excerpt {
  font-size: 16px;
  color: var(--secondey-gray-color);
  line-height: 1.5;
  /* 添加過渡效果 */
  overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 4;
  -webkit-box-orient: vertical;
}

.article-test-views::before,
.article-test-date::before {
  content: "|";
  margin: 0 5px;
}

.article-test-item:hover {
  filter: brightness(60%);
  /* 變暗 20% */
}
</style>
