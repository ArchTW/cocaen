<!-- eslint-disable max-len -->
<template>
  <div :class="['info-card', { 'odd': item.odd, 'even': !item.odd }]">
    <div class="content-wrapper">
      <template v-if="item.html">
        <div
          :class="['img', { 'odd-img-padding': item.odd, 'even-img-padding': !item.odd }, { 'invert-img': item.img === 'logo.png' }]"
          v-html="item.html">
        </div>
      </template>
      <template v-else>
        <div
          :class="['img', { 'odd-img-padding': item.odd, 'even-img-padding': !item.odd }, { 'invert-img': item.img === 'logo.png' }]">
          <template v-if="item.iframe">
            <iframe title="Map" :src="item.iframe" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </template>
          <template v-else-if="item.icon">
            <i><font-awesome-icon :icon="[item.icontype, item.icon]" /></i>
          </template>
          <template v-else-if="item.video">
            <iframe title="YouTube" :src="item.video" style="border:0;"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              allowfullscreen></iframe>
          </template>
          <template v-else>
            <template v-if="item.link">
              <a :href="item.link"><img :src="getImagePath(item.img)" :alt="item.alt" /></a>
            </template>
            <template v-else>
              <p><img :src="getImagePath(item.img)" :alt="item.alt" /></p>
            </template>
          </template>
        </div>
      </template>
      <div :class="['article', { 'odd-article-padding': item.odd, 'even-article-padding': !item.odd }]">
        <h1 class="card-title">{{ item.title }}</h1>
        <h3 class="card-subtitle">{{ item.subtitle }}</h3>
        <p class="card-content" v-html="item.content">
        </p>
      </div>
      <template v-if="item.html">
        <div
          :class="['img', { 'odd-img-padding': item.odd, 'even-img-padding': !item.odd }, { 'invert-img': item.img === 'logo.png' }]"
          v-html="item.html">
        </div>
      </template>
      <template v-else>
        <div
          :class="['img', { 'odd-img-padding': item.odd, 'even-img-padding': !item.odd }, { 'invert-img': item.img === 'logo.png' }]">
          <template v-if="item.iframe">
            <iframe title="Map" :src="item.iframe" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </template>
          <template v-else-if="item.icon">
            <i><font-awesome-icon :icon="[item.icontype, item.icon]" /></i>
          </template>
          <template v-else-if="item.video">
            <iframe title="YouTube" :src="item.video" style="border:0;"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              allowfullscreen></iframe>
          </template>
          <template v-else>
            <template v-if="item.link">
              <a :href="item.link"><img :src="getImagePath(item.img)" :alt="item.alt" /></a>
            </template>
            <template v-else>
              <p><img :src="getImagePath(item.img)" :alt="item.alt" /></p>
            </template>
          </template>
        </div>
      </template>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    item: {
      type: Object,
      required: true,
    },
  },
  methods: {
    getImagePath(imgPath) {
      // eslint-disable-next-line import/no-dynamic-require, global-require
      return require(`@/assets/${imgPath}`);
    },
  },
};
</script>

<style>
.info-card {
  display: block;
  width: auto;
  margin-top: 10px;
  padding: 10px;
  overflow: hidden;
}

.odd {
  color: var(--text-color);
  background-color: var(--primary-color);
}

.even {
  color: var(--primary-color);
  background-color: var(--text-color);
}

.info-card .content-wrapper {
  display: flex;
  flex-direction: row;
}

.info-card .article {
  flex: 1;
  text-align: left;
  justify-content: center;
}

.info-card .img {
  display: flex;
  flex: 1;
  justify-content: center;
  align-items: center;
  overflow: hidden;
}

.odd-img-padding:first-child {
  display: none;
}

.even-img-padding:last-child {
  display: none;
}

.info-card .img img,
.info-card .img iframe {
  width: 60%;
  height: 60%;
  object-fit: contain;
}

.info-card .card-timestamp {
  text-align: right;
  padding-right: 60px;
}

.info-card .card-subtitle {
  color: gray;
}

.info-card .card-timestamp {
  color: gray;
}

.info-card .card-title,
.info-card .card-subtitle,
.info-card .card-timestamp {
  line-height: 1.2;
  /* 調整行距，可以根據需求調整數值 */
}

.info-card .card-content {
  line-height: 1.4;
  /* 調整行距，可以根據需求調整數值 */
}

/* 垂直排列 */
@media screen and (max-width: 600px) {
  .info-card .content-wrapper {
    flex-direction: column;
  }

  .info-card .article {
    width: 90%;
  }

  .info-card .img:last-child {
    display: none;
  }

  .info-card .img:first-child {
    display: flex;
  }

}

@media (prefers-color-scheme: light) {
  .invert-img {
    filter: invert(100%);
  }
}
</style>
