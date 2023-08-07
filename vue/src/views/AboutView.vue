<template>
  <div class="home">
    <Header></Header>
    <Content>
      <div v-for="(item, index) in items" :key="index">
        <InfoCard :item="item" />
      </div>
    </Content>
    <Footer></Footer>
  </div>
</template>

<script>
import Header from '../components/BaseHeader.vue';
import Content from '../components/BaseContent.vue';
import Footer from '../components/BaseFooter.vue';
import InfoCard from '../components/BaseInfoCard.vue';

export default {
  name: 'HomeView',
  components: {
    Header,
    Content,
    Footer,
    InfoCard,
  },
  data() {
    return {
      items: [
        {
          odd: false,
          title: 'cocaen - 軟硬體開源創作者品牌',
          subtitle: 'AIOT、AI、IoT和軟體的共享創新社群',
          alt: 'cocaen',
          img: 'logo.png',
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
          odd: true,
          title: '官方頻道 - 探索科技的奇妙世界',
          subtitle: '訂閱cocaen頻道，一同揭開創新科技的神秘面紗',
          alt: 'youtube',
          img: 'youtube.png',
          link: 'https://www.youtube.com/@cocaenTW',
          content: `無論你是對電子設備著迷，對AI和IoT充滿好奇，還是對自動化技術感到興趣，cocaen頻道都能滿足你的需求。<br>
              這裡有各種DIY製作項目的實作教程，智能家居系統的探索，以及機器學習和AI應用的深入探討。<br><br>

              通過訂閱cocaen頻道，你將有機會探索科技的最新發展和趨勢。不僅如此，這裡還有專業工程師和科技愛好者之間的熱情交流和互動。<br>
              無論你是初學者還是經驗豐富的專家，這個頻道都能帶給你豐富的科技知識和啟發。<br><br>

              加入cocaen YouTube頻道的行列，一同揭開科技的神秘面紗，探索無限可能的未來。立即訂閱，讓我們一起走進科技的奇妙世界！`,
        },
        {
          odd: false,
          title: '本站站長 - 妹妹',
          subtitle: '我是一隻貓',
          alt: 'meimei',
          img: 'mei.png',
          link: 'https://www.youtube.com/@ArchTWn1',
          content: `Meow~MeowMeow~~Meow~~~<br><br>
              Meow~Meow~~Meow~~?<br><br>
              MeowMeow~Meow~Meow~~~<br><br>
              Meow~~!<br><br>
              MeowMeowMeow~~~!!<br><br>`,
        },
      ],
    };
  },
  methods: {
    isEven(index) {
      return index % 2 === 0;
    },
  },
};
</script>

<style>
.home {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
}

</style>
