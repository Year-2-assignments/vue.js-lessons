<template>
    <div>
        <div class="col-md-4 mt-4">
            <div class="card">
                <div class="card-body">
                    <td>{{ stock.name }}</td>
                    <span
                        :class="{
                            
                        down: stock.price < stock.previousPrice,
                        up: stock.price > stock.previousPrice,
                        }"
                        >{{ stock.currency }} {{ stock.price.toFixed(4) }}
                        </span>
                        <input class="form control" type="number" v-model="amount">
                        <button class="btn btn-primary" @click="$emit('buy',stock.name,amount,stock.price)">Buy</button>
                </div>
            </div>

        </div>
        
    </div>
   
</template>

<script>

export default {
   name: "StockItem",
    props:{
        stock:Object

    },
    data(){
      return  {
          amount:0
        }
    }



}
</script>

<style>
.up {
  color: green;
}
.down {
  color: red;
}
</style>