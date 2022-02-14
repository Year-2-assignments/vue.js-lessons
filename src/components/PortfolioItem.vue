<template>
<div>
    
    <p>{{stock.name}} amount: {{stock.amount}}x price: {{stock.price}}</p>
    {{totalcalc(stock.amount,stock.price)}}

  <p></p>

</div>
  
</template>

<script>
export default {
name: "PortfolioItem",
     data(){
      return  {
          temp:0,
          total:0
          
        }
    },
    props:{
        stock:Object

    },
   methods: {
    
      totalcalc:function(amount, price){
          this.temp= amount * price
          this.total += this.temp

          return this.total
           
      }
      
  
    },
}
</script>

<style>

</style>