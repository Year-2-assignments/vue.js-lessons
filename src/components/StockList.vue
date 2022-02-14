!<template>
  <div>
    <h1>Stock List</h1>
    <div class = "row">
      <!-- Individual stocks -->
      <StockItem v-for="stock in stocks" :key="stock.name" :stock="stock" @buy="buyStock"
      />
      <!-- End of individual stocks -->
      <h4>Portfolio</h4>
      <h6>total portfolio value: </h6>
      <PortfolioItem v-for="stock in portfolio" :key="stock.name" :stock="stock"
       />
    </div>
  </div>
  
  
</template>

<script>
import StockItem from './StockItem.vue';
import PortfolioItem from './PortfolioItem.vue';
export default {
  name: "StockList",
  components:{
    StockItem,
    PortfolioItem
  },
  data() {
    return {
      stocks: [
        { name: "BMW", price: 61.05, previousPrice: 0, currency: "€" },
        { name: "Caterpillar", price: 146.49, previousPrice: 0, currency: "$" },
        { name: "AMD", price: 76.5, previousPrice: 0, currency: "$" },
        { name: "Gazprom", price: 4.583, previousPrice: 0, currency: "$" },
      ],
      portfolio: [],
    };
  },
  methods: {
    boughtStock:" ",
    buyStock(name,amount,price){
      alert(name + " x"+ amount + " bought!" );
      this.portfolio.push(
        {
          name,
          amount,
          price
        }
      )
      amount=" "
  
    },
    updatePrices() {
      this.stocks.forEach((stock) => {
        stock.previousPrice = stock.price;
        stock.price += (Math.random() - 0.5) * 2;
        if (stock.price < 0) {
          stock.price = 0;
        }
      });
    },
  },  
  mounted() {
    setInterval(() => {
      this.updatePrices();
    }, 1000);
  },

};
</script>

<style scoped>
.up {
  color: green;
}
.down {
  color: red;
}
</style>