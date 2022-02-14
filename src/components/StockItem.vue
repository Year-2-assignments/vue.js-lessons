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