import { createApp, ref } from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js'

createApp({
  setup() {
    const products = ref([]);
    const salesPeople = ref([
      {
        id: 1,
        name: 'Layanan 24 Jam',
        slug: 'layanan_24_jam',
        phone: '6281232548368',
        photo: 'https://vicentra.co.id/storage/sales-people/vicentra-24-jam.webp',
        additional_sentence: 'Ada pertanyaan atau ingin memesan produk ini?'
      },
      // {
      //   id: 2,
      //   name: 'Yaya',
      //   slug: 'yaya',
      //   phone: '6285175005535',
      //   photo: 'https://vicentra.co.id/storage/sales-people/sales-yaya.webp',
      //   additional_sentence: 'Support 24 jam'
      // },
      // {
      //   id: 3,
      //   name: 'Alda',
      //   slug: 'alda',
      //   phone: '6285183171200',
      //   photo: 'https://vicentra.co.id/storage/sales-people/sales-alda.webp',
      //   additional_sentence: 'Ada pertanyaan atau ingin memesan produk ini?'
      // },
      // {
      //   id: 4,
      //   name: 'Ella',
      //   slug: 'ella',
      //   phone: '6285733399974',
      //   photo: 'https://vicentra.co.id/storage/sales-people/sales-ella.webp',
      //   additional_sentence: 'Ada pertanyaan atau ingin memesan produk ini?'
      // },
    ]);
    const isMenuShow = ref(false);

    const toggleMenu = () => {
      isMenuShow.value = !isMenuShow.value;
    }

    return {
      products,
      salesPeople,
      isMenuShow,
      toggleMenu
    }
  }
}).mount('#app')