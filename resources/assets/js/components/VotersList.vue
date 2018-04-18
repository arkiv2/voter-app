<style>

</style>

<template>
    <div class="container overflow-auto w-1/3 mb-4 items-center bg-white rounded shadow-md">
        <div class="flex-col items-center justify-center">
            <h1 class="px-2 py-2 m-4 text-center font-hairline border rounded shadow-md">
                Voter's List
            </h1>
        </div>
        <div class="flex-col">
            <div class="flex mx-auto items-center justify-center w-full py-4">
                <div class="py-1 max-w w-full leading-normal">
                    <a v-for="voter in results" href="#" class="flex justify-between no-underline rounded shadow block group hover:bg-blue border">
                        <p class="font-hairline px-2 text-lg mb-1 text-black group-hover:text-white">{{ voter.first_name }}, {{ voter.last_name }} - 
                        </p>
                        <div class="flex">
                        <span class="rounded-full bg-blue-light text-xs font-hairline mr-2 py-1"><p class="py-1 px-1">Straight</p></span>    
                        <span class="rounded-full bg-indigo-light text-xs font-hairline mr-2 py-1"><p class="py-1 px-1">Source</p></span>                                        
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function() {
            return {
                voters: [],            
            }
        },
        mounted() {
            axios.get('http://voter.test/api/voters')
                .then(response => {
                    this.voters = response.data
                });
        }
    }
</script>