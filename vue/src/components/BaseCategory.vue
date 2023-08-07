<template>
  <div class="banner">
    <div class="category">
      <div v-for="(item, index) in items" :key="index">
        <div class="item">
          <a :href="item.link">
            <font-awesome-icon :icon="[item.icontype, item.icon]" />
            <p>{{ item.label }}</p>
          </a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    items: {
      type: Array,
      required: true,
    },
  },
};
</script>

<style>
.banner {
  margin-top: 40px;
  padding-top: 10px;
  display: flex;
  flex: 1;
  justify-content: center;
  /* background-color: rgba(0, 0, 0, 0.2); */
}

.category {
  display: flex;
  flex-direction: row;
  flex-wrap: nowrap;
  color: var(--text-color);
  width: 80%;
  justify-content: space-between;
  overflow-x: auto;
}

.item {
  transition: filter 0.3s;
  font-family: ISOCPEUR;
  font-size: 24px;
  line-height: 0.3;
  width: 100px;
  overflow: hidden;
}

.item a {
  text-decoration: none;
}

.item p {
  font-size: 10px;
}

.item:hover {
  filter: invert(40%); /* 將顏色取反 */
}
</style>
