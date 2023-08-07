<template>
    <div class="content">
      <slot></slot>
    </div>
</template>

<style>
.content {
  flex: 1; /* 這會讓Content區塊自動填滿剩餘的高度 */
}
</style>
