<template>
  <footer>
    <div class="footer-content">
      <div class="footer-left">
        <span>&copy; 2023 cocaen Inc. 保留一切權利。</span>
        <a href="#">隱私權政策</a>
        <a href="#">使用條款</a>
        <a href="#">法律聲明</a>
        <a href="#">網站地圖</a>
      </div>
      <div class="footer-right">
        <!-- <a href="#">{{ t("location") }}</a> -->
        <a href="#">{{ regionName }}</a>
      </div>
    </div>
  </footer>
</template>

<script>

import { useI18n } from 'vue-i18n';

export default {
  name: 'App',
  setup() {
    const { t, locale } = useI18n();
    return {
      t,
      locale,
    };
  },
  data() {
    return {
      regionName: '',
    };
  },
  created() {
    this.getRegionName();
  },
  methods: {
    getRegionName() {
      // 取得瀏覽器地區代碼，例如"tw"代表台灣，"us"代表美國，等等
      const regionCode = navigator.language.toLowerCase();
      // 使用你自己的資料來源，根據地區代碼取得對應的地區名稱
      // 這裡示範使用簡單的映射表
      const regionMap = {
        'zh-tw': '台灣',
        'en-us': 'United States',
        'en-gb': 'United Kingdom',
        'fr-fr': 'France',
        'de-de': 'Germany',
        'it-it': 'Italy',
        'es-es': 'Spain',
        'pt-pt': 'Portugal',
        'nl-nl': 'Netherlands',
        'sv-se': 'Sweden',
        'no-no': 'Norway',
        'da-dk': 'Denmark',
        'fi-fi': 'Finland',
        'ru-ru': 'Russia',
        'ja-jp': '日本',
        'ko-kr': '한국',
        'zh-cn': '中国',
      };

      // 如果地區代碼在映射表中有對應的名稱，就設定到data中
      if (Object.prototype.hasOwnProperty.call(regionMap, regionCode)) {
        this.regionName = regionMap[regionCode];
      } else {
        // 預設的地區名稱，或者處理未知地區代碼的情況
        this.regionName = 'unknown';
      }
    },
  },
};
</script>

<style>
/* footer的樣式 */
footer {
  color: var(--subtext-color);
  font-size: small;
  padding: 20px;
}

.footer-content {
  display: flex;
  justify-content: space-between;
  align-items: center;
  border-top: 1px solid var(--border-color);
  padding-top: 10px;
  /* 加入上底線 */
}

.footer-left {
  display: flex;
  align-items: flex-start;
  /* 讓連結垂直對齊 */
  flex-direction: row;
}

.footer-left span {
  margin-right: 20px;
}

.footer-left a {
  color: var(--subtext-color);
  text-decoration: none;
  margin-right: 15px;
}

.footer-right a {
  color: var(--subtext-color);
  text-decoration: none;
}

@media screen and (max-width: 600px) {
  .footer-content {
    flex-direction: column;
    /* 將連結垂直排列 */
  }

  .footer-left,
  .footer-right {
    width: 100%;
    /* 將兩側佈局的寬度設為100%，佔滿整個footer寬度 */
    text-align: right;
    /* 將兩側連結靠左對齊 */
    flex-direction: column;
    /* 將連結垂直排列 */
  }

  .footer-left span {
    margin-right: 0;
    /* 移除原來的右邊距 */
    margin-bottom: 10px;
    /* 增加下邊距，讓連結間有一定的間距 */
  }

  .footer-left a {
    display: block;
    /* 將連結變成塊級元素，佔滿整個寬度 */
    margin-right: 0;
    /* 移除原來的右邊距 */
    margin-bottom: 10px;
    /* 增加下邊距，讓連結間有一定的間距 */
  }
}
</style>
