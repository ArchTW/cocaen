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
          title: 'Taiwan!',
          subtitle: '我們在台灣',
          iframe: 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2495992.6109108645!2d120.63057979752712!3d23.743357027824015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1szh-TW!2stw!4v1691088339687!5m2!1szh-TW!2stw',
          content: `cocaen於2023年8月誕生在台灣。<br><br>
              這裡的科技愛好者和創業家擁有無限的創意和勇氣，帶著熱情不斷挑戰自我，打破界限。<br>
              cocaen專注於科技與創意的交匯點，這裡匯聚了來自世界各地的科技愛好者和專業人才。<br>
              無論是DIY製作各類電子設備，還是深入探討AIOT、AI和IoT應用，cocaen是世界各地的科技交匯點。<br><br>
              Youtube頻道： <a href="https://www.youtube.com/@cocaenTW" target="_blank"
                class="lnkstyle">@cocaenTW</a><br><br>
              合作洽詢： 8:30 - 17:30<br>
              黃先生 &lt;arch@cocaen.com&gt;<br>
              陳先生 &lt;likezoo@cocaen.com&gt;`,
        },
        {
          odd: true,
          title: '線上聯繫',
          subtitle: '請確實填寫聯絡資訊後送出,客服將盡快回覆您。',
          icontype: 'fas',
          icon: 'envelope',
          link: '#',
          content: `<form action="/submit" method="post">
              <div class="form">
                <div class="form-row">
                  <label for="name">名稱:
                    <input type="text" id="name" class="input" />
                  </label>
                </div>
                <div class="form-row">
                  <label for="email">電子信箱:
                    <input type="email" id="email" class="input" />
                  </label>
                </div>
                <div class="form-row">
                  <label for="content">內容:
                    <textarea id="content" class="textarea"></textarea>
                  </label>
                </div>
                <div class="form-row">
                  <a href="#" class="btn">送出</a>
                </div>
              </div>
            </form>`,
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

.info-card .img iframe {
  width: 100%;
  height: 100%;
  border-radius: 20px;
}

.info-card .img {
  padding-right: 20px;
}

.info-card .img i {
  font-size: 200px;
}
.info-card .article {
  padding-left: 20px;
}

.form-row {
  display: flex;
  align-items: center;
  margin-bottom: 10px;
  flex: 1;
}

.form-row label {
  font-weight: bold;
  text-align: left;
  flex: 1;
}

.form-row .input {
  flex: 1;
  height: 30px;
  width: 100%;
  border: 1px solid #cccccc;
  border-radius: 5px;
  padding: 5px;
  box-sizing: border-box;
}

.form-row .input {
  flex: 1;
  height: 30px;
  width: 100%;
  border: 1px solid #cccccc;
  border-radius: 5px;
  padding: 5px;
  box-sizing: border-box;
  margin-top: 10px;
}

.form-row .textarea {
  flex: 1;
  height: 100px;
  width: 100%;
  border: 1px solid #cccccc;
  border-radius: 5px;
  padding: 5px;
  box-sizing: border-box;
  margin-top: 10px;
}

.form-row a {
  font-weight: bold;
  text-decoration: none;
  color: white;
  background-color: var(--secondey-blue-color);
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
  margin-top: 20px;
}

.form-row a:hover {
  background-color: var(--primary-blue-color);
}

/* 垂直排列 */
@media screen and (max-width: 600px) {

  .info-card .img,
  .info-card .article {
    padding: 20px;
    padding-bottom: 0px;
  }

}

.lnkstyle {
  text-decoration: none;
  position: relative;
  color: darkgray;
  transition: color .3s ease-in-out;

  &::before {
    content: '';
    position: absolute;
    top: 100%;
    width: 100%;
    height: 3px;
    background-color: var(--primary-red-color);
    transform: scaleX(0);
    transition: transform .3s ease-in-out;
  }

  &:hover {
    color: var(--primary-red-color);
  }

  &:hover::before {
    transform: scaleX(1);
  }
}
</style>
